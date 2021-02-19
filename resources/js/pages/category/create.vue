<template>
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                      <h3>Create Category</h3>
                       <router-link :to="{name:'category-list'}" class="btn btn-primary">Category List</router-link>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-6 offset-3">
                              <form @submit.prevent="createCategory">
                                  <div class="form-group">
                                      <label for="">Category Name</label>
                                      <input type="text" v-model="categoryForm.name" name="name" placeholder="Category name" class="form-control" :class="{ 'is-invalid': categoryForm.errors.has('name') }">
                                      
                                      <has-error :form="categoryForm" field="name"></has-error>
                                  </div>
                                   <div class="form-group">
                                      <button type="submit" class="btn btn-success">Create Category</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
import {  Form } from 'vform';
export default {
    data(){
        return{
            categoryForm: new Form({
            name: '',
      }),

        }
    },

    methods:{
        createCategory(){
            
            this.categoryForm.post('http://127.0.0.1:8000/api/category')
        .then(({ data }) => { this.categoryForm.name='';

        this.$toast.success({
        title:'success',
        message:'category created Successfully!!'
         })

         })
        }
    }

}
</script>

<style>

</style>