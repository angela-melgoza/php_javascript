<template>
    <app-public>
        <div class="container mt-5">
            <img class="col-6 offset-lg-2 img-fluid rounded" :src="product.picture_url" alt="" srcset="">
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12 offset-lg-2 col-lg-2">
                    <img class="img-fluid rounded" :src="product.picture_one_url" alt="" srcset="">
                </div>
                <div class="col-12 col-lg-2">
                    <img class="img-fluid rounded" :src="product.picture_two_url" alt="" srcset="">
                </div>
                 <div class="col-12 col-lg-2">
                    <img class="img-fluid rounded" :src="product.picture_three_url" alt="" srcset="">
                </div>
            </div>
        </div>

        

       
        
    </app-public>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppPublic from '@/Layouts/AppPublic.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    export default defineComponent({
        components: {
            AppPublic,
            Welcome,
        },
        props:{
            product:Object,
        },
        data(){
            return{
                nombre:'',
            }
        }
    })
</script>