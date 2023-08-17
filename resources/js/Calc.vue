<script>
export default{
    mounted(){
        axios.get('/api/carpets').then((response)=>{
            this.carpetsTypes = response.data
            console.debug(response.data)
        }).catch((err)=>{console.debug(err)})
    },
    data:()=>({
        carpetsTypes: null,
        step: 1,
        title: {
            1: {title:'Выберите какой у вас тип ковра',subtitle:'Выберите подходящий тип ковра(коврового покрытия)'},
            2: {title:'Выбыерите высоту ворса:',subtitle:'Различают три подвида: высоковорсный (от 5 мм), средневорсовый (3-5 мм), и коротковорсный (2-3 мм).'},
            3: {title:'Укажите дополнительные загрязнения, если такие имеются:',subtitle:'Это поможет сделать расчет стоимости чистки точнее'},
            4: {title:'Данные отправлены, остался последний этап',subtitle:'Укажите имя и номер телефона, чтобы наш менеджер смог с вами связаться'}
        },
        progress: 0,
        currentType: null
    }),
    methods:{
        itemClick(carpet){
            this.currentType = carpet
            this.step++
        }
    },
    watch:{
        step(val,oldval){
            if (val == 1){
                this.progress = 0
            } else if (val == 2) {
                this.progress = 33.333
            } else if (val == 3){
                this.progress = 66.6666
            } else if (val == 4){
                this.progress = 100
            }
        }
    }
}
</script>

<template>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="calc-wrapper">
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" :style="'width: '+ progress +'%;background:#D93E40;'" :aria-valuenow="progress" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="title-wrapper">
                    <h2>{{ title[step].title }}</h2>
                    <p>{{ title[step].subtitle }}</p>
                </div>
                <transition 
                    enter-active-class="animate__animated animate__fadeIn" 
                    leave-active-class="animate__animated animate__fadeOut"
                    mode="out-in" 
                >
                    <!-- first step -->
                    <div class="step" v-if="step == 1">
                        <ul class="carpets-types">
                            <li v-for="carpet in carpetsTypes" :key="carpet.id" @click="itemClick(carpet)">
                                <div class="carpet-item">
                                    <img :src="carpet.image" :alt="carpet.name">
                                    <h2>{{ carpet.name }}</h2>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- second step -->
                    <div class="step" v-else-if="step == 2">
                            <ul class="vors-height">
                                <li>{{ currentType }}</li>
                                <li>some height 2</li>
                            </ul>
                            <button class="prev-button w-auto axil-button button-rounded hover-flip-item-wrapper" @click="step--" v-if="step > 1 && step < 4">Back</button>
                    </div> 
                </transition>
                
            </div>
        </div>
    </div>
</div>
</template>

<style scoped>
.calc-wrapper{
    min-height: 300px;
    width: 100%;
    border: 1px solid #D93E40;
    width: 100%;
    border-radius: 10px;
    padding: 35px 45px;
    min-height: 750px;
}
.carpets-types{
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
    list-style: none;
}
.carpets-types li{
    width: 20%;
    padding: 0 24px 0 0;
}
.carpet-item{
    border-radius: 10px;
    overflow: hidden;
    border: 1px solid #CED0D4;
}
.carpet-item img{
    width: 100%;
}
.carpet-item h2{
    text-align: center;
    padding: 10px 0;
}

</style>