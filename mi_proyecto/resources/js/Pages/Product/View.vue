<template>
    <app-public>
        {{product.picture_url}}
        <br>
        <input type="text" v-model="product.picture_url" style="width:80%">
        <img :src="product.picture_url" alt="" srcset="">
        <img :src="product.picture_one_url" alt="" srcset="">
        <img :src="product.picture_two_url" alt="" srcset="">

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
                nombre:''
            }
        }
    })
</script>
