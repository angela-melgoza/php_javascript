<template>
    <app-public>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Nombre del producto:</p>
                    <input type="text" v-model="product.name">
                </div>
                <div class="col-12">
                    <p>Precio:</p>
                    <input type="number" v-model="product.price">
                </div>
                <div class="col-12">
                    <p>Imagen principal:</p>
                    <input type="text" v-model="product.picture_url">
                </div>
                <div class="col-12">
                    <p>Imagen (1):</p>
                    <input type="text" v-model="product.picture_one_url">
                </div>
                <div class="col-12">
                    <p>Imagen (2):</p>
                    <input type="text" v-model="product.picture_two_url">
                </div>
                <div class="col-12">
                    <p>Imagen (3):</p>
                    <input type="text" v-model="product.picture_three_url">
                </div>
                <div class="col-12">
                    <p>Descripcion:</p>
                    <input type="text" v-model="product.description">
                </div>
                <div class="col-12 mt-2 mb-2">
                    <button>

                    </button>
                </div>
            </div>
        </div>
        
    </app-public>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppPublic from '@/Layouts/AppPublic.vue'
import Button from '../../../Jetstream/Button.vue';
    export default defineComponent({
        components: {
            AppPublic,
                Button,
        },
        props:{
          
        },
        data(){
            return{
                loading:true,
                product:{
                    name:'',
                    slug:'',
                    price:'',
                    picture_url:'',
                    picture_one_url:'',
                    picture_two_url:'',
                    picture_three_url:'',
                    description:'',
                    status:1,
                }
            }
        },
        mounted(){
            
        },
        methods:{
            addProduct(){
                let me = this;
                axios.post('/admin/product/create', {
                    product:me.product
                })
            }
        }
    })
</script>