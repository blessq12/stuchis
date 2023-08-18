<script>
export default{
    mounted(){
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
            {id:1, value:'Затоптанность(следы от мебели)'},
            {id:2, value:'Неприятные запахи'},
            {id:3, value:'Моча животных'},
            {id:4, value:'После ЧС(потоп, пожар и пр.)'}
        ],
        progress: 0,
        currentType: null,
        userData: {
            type: '',
            height: '',
            additional: [],
            clientData: []
        }
    }),
    methods:{
        itemClick(carpet){
            this.currentType = carpet
            this.step++
        },sendData(){
            this.step++
            console.log(this.userData)
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
        },userData:{
            handler(val,oldval){console.log(this.userData)},
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
                <button class="prev-button w-auto axil-button button-rounded hover-flip-item-wrapper" @click="step--" v-if="step > 1 && step < 4">Back</button>
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
                <button class="prev-button w-auto axil-button button-rounded hover-flip-item-wrapper" @click="step++" v-if="step > 1 && step < 4">Next Screen</button>
            </div>
            <div class="step" v-else-if="step == 4">
                <div class="client-data" style="max-width: 50%;">
                    <div class="form-group">
                        <label for="name">Введите имя</label>
                        <input type="text" name="name" placeholder="Например, Иван" v-model="userData.clientData.name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Номер телефона</label>
                        <input type="text" name="phone" placeholder="+7(XXX)XXX-XX-XX" v-model="userData.clientData.phone" class="form-control" >
                    </div>
                    <button @click="sendData">Send data</button>
                </div>
            </div>
            <div class="step" v-else-if="step == 5">
                <h5>data succesufully sended</h5>
                <button @click="step=1">reset</button>
            </div>
        </transition>      
</div>

</template>

<style scoped>
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
</style>