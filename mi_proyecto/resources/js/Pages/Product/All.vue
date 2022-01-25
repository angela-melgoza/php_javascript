<template>
    <app-public>
        <div class="container mt-5">
            <div class="">
                <div class="col-12 text-center">
                    <h1 class="m-3 display-1">Tienda de cosas</h1>
                </div>
                <div class="col-12 col-lg-6 offset-lg-3">
                    <img src="https://static.vecteezy.com/system/resources/previews/001/542/636/non_2x/fashion-clothes-store-background-free-vector.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="bg-light">
            <div class="container mt-5">
                <div class="row ">
                    <div class="col-12 col-lg-6" v-for="d in data"  :key="d.id" >
                        <div class="card" style="width: 18rem;">
                            <img :src="d.picture_url" class=" card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{d.name}}</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        {{d}}
                    </div>
                </div>
            </div>  
        </div>
        
    </app-public>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppPublic from '@/Layouts/AppPublic.vue'
    export default defineComponent({
        components: {
            AppPublic,
        },
        props:{
            data:Object,
            mi_nombre:String,
            //Boolean, Number 
        },
        data(){
            return{
                nombre:'',
            }
        }
    })
</script>