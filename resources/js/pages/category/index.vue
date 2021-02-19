<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Product Category</h5>
                        <router-link :to="{name:'category-create'}" class="btn btn-primary">Create Category</router-link>
                        
                        </div>
                    <div class="card-body">
                      <table class="table">
                        <thead>
                            <tr>
                                <th style="100px;">Id</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th style="170px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="category in categories" :key="category.id">
                                <td style="100px;">{{category.id}}</td>
                                <td>{{category.name}}</td>
                                <td>{{category.slug}}</td>
                                <td style="170px;">
                                    <router-link :to="{name:'edit-category', params:{slug: category.slug}}" class="btn btn-primary btn-sm">Edit</router-link>
                                
                                     <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return{

                categories:[],
            }
        },

        methods:{
            loadCategories(){
                axios.get('http://127.0.0.1:8000/api/category').then(response=>{
                    this.categories=response.data;
                });

            }

        },
        mounted() {
            this.loadCategories();
        }
    }
</script>
