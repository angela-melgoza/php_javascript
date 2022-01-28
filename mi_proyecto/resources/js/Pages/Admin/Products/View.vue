<template>
    <app-public>

        <p v-if="loading">Cargando...</p>
        <p v-if="!loading">{{data}}</p>
        
        
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
          
        },
        data(){
            return{
                data:[],
                loading:true,
            }
        },
        mounted(){
            this.getAllData();
        },
        methods:{
            getAllData(){
                this.loading = true;
                let me = this;
                axios.get('/admin/product/get-data')
                .then((resp)=>{
                    console.log(resp);
                    me.data = resp.data;
                    me.loading = false;
                })
                .catch((error)=>{
                    console.log(error);
                })
            }
        }
    })
</script>