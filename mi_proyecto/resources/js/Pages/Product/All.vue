<style>
    h1{font-family: 'Comforter', cursive;}
 
</style>

<template>
    <app-public>
        <div class="container mt-5">
            <div class="">
                <div class="col-12 text-center">
                    <h1 class="m-3 display-1">Funko Store</h1>
                </div>
                <div class="col-12 col-lg-6 offset-lg-3">
                    <img src="https://static.vecteezy.com/system/resources/previews/001/542/636/non_2x/fashion-clothes-store-background-free-vector.jpg" alt="">
                </div>
            </div>
        </div>
        <div style="background-color: #B1D4E0">
            <div class="container mt-5">
                <div class="row ">
                    <div style="margin-top:8rem" class="col-12 col-lg-6" v-for="d in data"  :key="d.id" >
                        <div class="card shadow-lg p-3 mb-5 rounded" style="width: 18rem;">
                            <img :src="d.picture_url" class=" card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{d.name}}</h5>
                                <p class="card-text">{{d.description}}</p>
                                <p class="card-text fw-bold">${{d.price}}</p>
                                <a href="#" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">Ver más</a>
                                <p></p>
                                <button type="button" class="btn btn-primary" style="width: 3.2rem;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </button>
                            </div>
                            
                            <!--codigo modal-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{d.name}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        {{d.description}}</p>
                                        <!--codigo carousel-->
                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                <img :src="d.picture_one_url" class="d-block w-100" alt=" ">
                                                </div>
                                                <div class="carousel-item">
                                                <img :src="d.picture_two_url" class="d-block w-100" alt=" ">
                                                </div>
                                                <div class="carousel-item">
                                                <img :src="d.picture_three_url" class="d-block w-100" alt=" ">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <!--codigo carousel-->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Agregar al carrito</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!--codigo modal-->
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