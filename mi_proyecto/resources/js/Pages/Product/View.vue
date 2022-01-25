<template>
    <app-public>
        {{product.picture_url}}
        <br>
        <input type="text" v-model="product.picture_url" style="width:80%">
        <img :src="product.picture_url" alt="" srcset="">
        {{nombre}}
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
