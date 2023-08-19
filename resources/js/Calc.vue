<script>
import { mask } from 'vue-the-mask';
export default{
    directives:{mask},
    mounted(){
        this.csrfToken = document.querySelector("meta[name='csrf_token']").content
        axios.get('/api/carpets').then((response)=>{
            this.carpetsTypes = response.data
        }).catch((err)=>{console.debug(err)})
    },
    data:()=>({
        carpetsTypes: null,
        step: 1,
        title: {
            1: {title:'Выберите какой у вас тип ковра',subtitle:'Выберите подходящий тип ковра(коврового покрытия)'},
            2: {title:'Выбыерите высоту ворса:',subtitle:'Различают три подвида: высоковорсный (от 5 мм), средневорсовый (3-5 мм), и коротковорсный (2-3 мм).'},
            3: {title:'Укажите дополнительные загрязнения, если такие имеются:',subtitle:'Это поможет сделать расчет стоимости чистки точнее'},
            4: {title:'Остался последний шаг',subtitle:'Укажите имя и номер телефона, чтобы наш менеджер смог с вами связаться'}
        },
        heightImages: {
            1:{ image: '/assets/images/carpets/short.jpg'},
            2:{ image: '/assets/images/carpets/medium.jpg'},
            3:{ image: '/assets/images/carpets/long.jpg'}
        },
        additional:[
            {id:1, value:'Затоптанность'},
            {id:2, value:'Неприятные запахи'},
            {id:3, value:'Моча животных'},
            {id:4, value:'После ЧС(потоп, пожар и пр.)'},
            {id:5, value:'Пластилин'}
        ],
        progress: 0,
        currentType: null,
        userData: {
            type: '',
            height: '',
            additional: [],
            delivery: false,
            deliveryAddress: ''
        },
        clientName: null,
        clientPhone: null,
        errors: { phone: false, name: false },
        buttonActive: false,
        csrfToken: null,
        answer: null
    }),
    methods:{
        itemClick(carpet){
            this.currentType = carpet
            this.step++
        },sendData(){
            let data = {}
            data.clientName = this.clientName
            data.clientPhone = this.clientPhone
            data.carpetType = this.userData.type
            data.carpetHeight = this.userData.height
            data.additional = this.userData.additional
            data.delivery = this.userData.delivery
            data.deliveryAddress = this.userData.deliveryAddress
            console.log(data)
            axios.post('/api/send',data,{headers:{'X-CSRF-TOKEN':this.csrfToken}}).then((response)=>{
                if (response.status === 200){
                    this.step++
                    this.answer = 'success'
                } 
            }).catch((error)=>{
                this.step++
                this.answer = 'error'
            })
        }
    },
    watch:{
        step(val,oldval){
            if (val == 1){
                this.progress = 0
            } else if (val == 2) {
                this.progress = 25
            } else if (val == 3){
                this.progress = 50
            } else if (val == 4){
                this.progress = 75
            } else if (val == 5){
                this.progress = 100
            }
        },clientPhone(val){
            if (val.length < 18){
                this.errors.phone = true
                this.buttonActive = false
            } else {
                this.errors.phone = false;
            }
        },clientName(val){
            if (val.length < 3){
                this.errors.name = true
                this.buttonActive = false
            } else {
                this.errors.name = false
            }
        },errors:{
            handler(val){
                if (this.clientName !== null && this.clientPhone !== null){
                    this.buttonActive = !this.buttonActive
                }
            },
            deep:true
        }
    }
}
</script>

<template>
<div class="calc-wrapper">
    <div class="progress mb-3">
        <div class="progress-bar" role="progressbar" :style="'width: '+ progress +'%;background:#D93E40;'" :aria-valuenow="progress" aria-valuemin="0" aria-valuemax="100">{{ progress }}%</div>
    </div>
    <div class="section-title" v-if="step < 4">
        <h2>{{ title[step].title }}</h2>
        <p>{{ title[step].subtitle }}</p>
    </div>
        <transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut" mode="out-in">
            <div class="step" v-if="step == 1">
                <ul class="carpets-types">
                    <li v-for="carpet in carpetsTypes" :key="carpet.id" @click="itemClick(carpet),userData.type = carpet.name">
                        <div class="carpet-item">
                            <div class="image" :style="'background:url('+ carpet.image +')'"></div>
                            <h5>{{ carpet.name }}</h5>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="step" v-else-if="step == 2">
                <ul class="carpet-height-list">
                    <li v-for="height in currentType.get_heights" :key="height.id" @click="step++, userData.height = height.value" >
                        <div class="carpet-height">
                            <div class="image" :style="'background:url('+ heightImages[height.image].image +')'"></div>
                            <h5>{{ height.value }}</h5>
                        </div>
                    </li>
                </ul>
                <button class="button previous" @click="step--" v-if="step > 1 && step < 4">Назад</button>
            </div> 
            <div class="step" v-else-if="step == 3">
                <ul class="additional">
                    <li v-for="add in additional" :key="add.id">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" :id="'add_'+add.id" :value="add.value" v-model="userData.additional">
                            <label class="form-check-label" :for="'add_'+add.id">{{ add.value }}</label>
                        </div>
                    </li>
                </ul>
                <button class="button next" @click="step++" v-if="step > 1 && step < 4">Продолжить</button>
            </div>
            <div class="step" v-else-if="step == 4">
                <div class="client-data">
                    <h6>Контактные данные</h6>
                    <p>Укажите актуальную контактную информацию, чтобы мы могли с вами связаться. Если нужна доставка, выберите ее ниже.</p>
                    <div class="form-group position-relative">
                        <transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut">
                            <div class="alert" role="alert" v-if="errors.name">
                                Не менее 3-х символов
                            </div>
                        </transition>
                        <label for="name">Введите имя</label>
                        <input type="text" name="name" placeholder="Например, Иван" v-model="clientName" class="form-control">
                    </div>
                    <div class="form-group position-relative">
                        <transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut">
                            <div class="alert" role="alert" v-if="errors.phone">
                                Не менее 11-ти символов
                            </div>
                        </transition>
                        <label for="phone">Номер телефона</label>
                        <input type="text" name="phone" v-mask="'+7 (###) ###-##-##'" placeholder="+7 (XXX) XXX-XX-XX" v-model="clientPhone" class="form-control" >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="delivery" v-model="userData.delivery">
                        <label class="form-check-label" for="delivery">
                            Доставка
                        </label>
                    </div>
                    <transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut">
                        <div class="form-group" v-if="userData.delivery">
                            <label for="address">Укажите адрес</label>
                            <input type="text" id="address" class="form-control" name="address" v-model="userData.deliveryAddress">
                        </div>
                    </transition>
                    <button @click="sendData" class="button send-data" :disabled="!buttonActive">Отправить заявку</button>
                </div>
            </div>
            <div class="step" v-else-if="step == 5">
                <div v-if="answer == 'success'" class="answer">
                    <div class="answer-body">
                        <h3>Спасибо, что выбрали нас</h3>
                        <p>Наш менеджер свяжется с вами в ближайшее время</p>
                        <img src="/assets/images/answer-success.png" alt="">
                    </div>
                </div>
                <div v-else class="answer">
                    <div class="answer-body">
                        <h3>Что-то пошло не так</h3>
                        <p>Во время отправки произошла ошибка, попробуйте снова, либо позвоните нам по телефону
                            <a href="tel:+7(988)344-08-55">+7(988)344-08-55</a>
                        </p>
                        <img src="/assets/images/answer-error.png" alt="">
                        <button class="button to-start" @click="step = 1">В начало</button>
                    </div>
                </div>
            </div>
        </transition>      
</div>

</template>

<style scoped>
.alert{
    position: absolute;
    display: block;
    font-size: 10px;
    top: 5px;
    color: red;
    right: 0;
    padding: 0;
    margin: 0;
}
.calc-wrapper{
    width: 100%;
    border: 1px solid var(--color-secondary);
    width: 100%;
    border-radius: 10px;
    padding: 15px;
    transition: all .3s ease-in-out;
    min-height: 500px;
}
.progress{
    height: 15px;
    border-radius: var(--radius);
    font-size: 16px;
    font-weight: 500;
}
.carpets-types{
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    padding: 0;
    margin: 0;
    overflow-y: scroll;
    max-height: 450px;
}
.carpets-types li{
    padding: 5px;
    margin-bottom: 12px;
    width: 50%;
}
.carpet-item{
    border-radius: 10px;
    overflow: hidden;
    border: 1px solid var(--color-lighter);
    box-shadow: var(--shadow-light);
    height: fit-content; 
}
.carpet-item .image{
    min-width: 100%;
    height: 120px;
    background-size: cover;
    background-repeat: no-repeat !important;
    background-position: center !important;
}
.carpet-item h5{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;
    width: 100%;
    height: 35px;
    font-size: var(--font-size-b3);
}
.carpet-height-list{
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
}
.carpet-height-list li{
    width: 50%;
    padding: 5px;
}
.carpet-height{
    border-radius: var(--radius);
    overflow: hidden;
    border: 1px solid var(--color-lighter);
}
.carpet-height .image{
    width: 100%;
    height: 120px;
    background-position: center !important;
    background-size: cover !important;
    background-repeat: no-repeat !important;
}
.carpet-height h5{
    font-size: var(--font-size-b3);
    height: 35px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 0;
}
.additional{
    list-style: none;
    padding: 0;
    margin: 0;
}
.button{
    background: var(--color-primary);
    color: var(--color-white);
    border-radius: 100px;
    padding: 10px 15px;
    margin: 24px 0;
    border: 1px solid var(--color-primary);
    display: block;
    min-width: 50%;
}
.button:disabled,button[disabled]{
    background: var(--color-lighter);
    color: #dedede;
    border-color: var(--color-lighter);
}
.button.previous{
    display: block;
    width: 50%;
}
.client-data{}
.client-data h6{
    font-size: var(--font-size-b2);
}
.client-data p{
    font-size: var(--font-size-b4);
    margin-bottom: 12px;
}
.client-data .form-group{
    margin-bottom: 12px;
}
.client-data .form-check{
    margin-bottom: 12px;
}
.answer{
    display: flex;
    align-items: center;
    justify-content: center;
}
.answer .answer-body{
    padding: 15px;
    text-align: center;
}
.answer .answer-body h3{
    font-size: var(--font-size-b1);
    font-weight: var(--p-semi-bold);
}
.answer .answer-body p{
    font-size: var(--font-size-b4);
    margin-bottom: 0;
}
.answer .answer-body a{
    font-size: var(--font-size-b4);
    color: var(--color-secondary);
}
.answer .answer-body img{
    max-width: 120px;
    margin: 24px;
}
.answer .answer-body .button.to-start{
    margin: 0 auto;
    background: var(--color-secondary);
    border-color: var(--color-secondary);
    padding: 5px 5px;
    min-width: 35%;
}
@media (min-width: 768px){
    /* carpets types list */
    .carpets-types{}
    .carpets-types li{
        width: 33.333%;
    }
    .carpets-types li .carpet-item{}
    /* end carpets types list */

    /* carpet-height-list */
    .carpet-height-list{}
    .carpet-height-list li{
        width: 33.333%;
    }
    .carpet-height-list li .carpet-height{}
    /* end carpet-height-list */

    /* additional */
    .additional{}
    .additional li{}
    .additional li .form-check{}
    .additional li .form-check .form-check-input{}
    .additional li .form-check label{}
    /* end additional */
}
@media (min-width: 920px){
    /* carpets types list */
    .carpets-types{}
    .carpets-types li{
        width: 20%;
    }
    .carpets-types li .carpet-item{}
    /* end carpets types list */

    /* carpet heights list */
    .carpet-height-list{}
    .carpet-height-list li{
        width: 20%;
    }
    /* end carpet heights list */
}
@media (min-width: 1200px){}
</style>