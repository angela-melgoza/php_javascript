<template>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Tienda imagenes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Venta</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Secciones
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Imagenes</a></li>
                    <li><a class="dropdown-item" href="#">Ropa</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Tazas</a></li>
                </ul>
                </li>
            </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        </div>
    </div>
    </nav>

    <slot></slot>



    <div class="container-fluid" style="background:#333;color:#fff">
        <div class="row">
            <div class="p-5 col-12 col-lg-4  text-center">
                <p>Todo lo necesario para tu hogar</p>
            </div>
            <div class="p-5 col-12 col-lg-4  text-center">
               <p>Diseño web 2022</p>    
            </div>
            <div class="p-5 col-12 col-lg-4  text-center">
                <p>Contacto</p>
            </div>
        </div>
    </div>

</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    export default defineComponent({
        props: {
            title: String,
        },
        components: {
            Head,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Link,
        },
        data() {
            return {
                showingNavigationDropdown: false,
            }
        },
        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>