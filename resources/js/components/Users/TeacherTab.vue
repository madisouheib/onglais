<template>
<div> 


    learner 
    <div class="row">
    <div class="form-group col-sm-6 col-md-3 col-lg-3 col-xs-6">
        <label > <b> <i class="fas fa-language"></i> Language :  </b> </label>
    <select class="form-control "  v-model="idlang" @change="GetFiltreUsers()">
        <option selected value="0"> ALL</option>
   
    <option    v-for="language in lang " :key="language.id_lang"  :value="language.id_lang"  > {{ language.lang_field}}   </option>
    
</select> 
</div>

             <div class="form-group col-sm-6 col-md-3 col-lg-3 col-xs-6" >
        <label> <b> <i class="fas fa-map-marker-alt"></i> Country : </b></label>
    <select class="form-control"  v-model="countrys" @change="GetCountryUsers()" >
       <option selected value="0"> ALL</option>
  <option   v-for="cntr in country " :key="cntr"  :value="cntr"  > {{ cntr }}   </option>
    
     
</select> 
</div>
      <div class="form-group col-sm-6 col-md-3 col-lg-3 col-xs-6" >
        <label> <b> <i class="fas fa-search"></i> Search : </b></label>
<input class="form-control" type="text"  v-model="search" @change="GetUserByEmail"  placeholder="please type your email .. "> 
</div>
          </div>  
  <div class="table-responsive-sm d-block   d-lg-none d-md-none ">
                                            <button style="float: right;" class="btn btn-sm btn-glow-success btn-success"> ADD USER <i class="fas fa-plus"></i> </button>
                                                


<table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" > <i class=" fas fa-th-list"></i> id </th>
                                                        <th class="text-center" ><i class="fas fa-address-card"></i>   Username </th>
                                                    
                                            
                                    

                                                            
                                                      <th class="text-center"> <i class="fas fa-edit"></i> Action </th>
                                                  </tr>
                                                    </thead>
                                                    <tbody>



                                                        <tr  v-for=" user  in users.data" :key="user.id"   >
                                                           
                                                            <td>
                                                                <h6 class="mb-1 text-center"> #{{  user.id }}  </h6>
                                                            </td>
                                                           
                                                            <td>
                                                                <h6 class="mb-1 text-center "> {{  user.name }}  </h6>
                                                            </td>
                                                        
                                                          
                                                              
                                                            
                                                            <td class="text-center" >
                                                                
                                                                
                                                              <div class="row d-inline" >
<div class="col-sm-4    "> <button data-toggle="modal" data-target="#Modalinfo"   @click="getUser(user.id)"   class=" btn btn-sm btn-glow-dark btn-dark">  <i style="margin-right: -2px;" class="fas  fa-eye"></i> </button>
    </div>
<div class="col-sm-4     "> <button  style=""  class=" btn btn-sm btn-glow-danger btn-danger   "> <i style="margin-right: -2px;" class="text-center fas fa-trash"></i> </button>
   </div>

<div class="col-sm-4  ">                                                 
<button class=" btn btn-sm btn-glow-info btn-info" data-toggle="modal" data-target="#ModalEditPass"  @click="getUser(user.id)"  >  <i style="margin-right: -2px;" class="fas fa-edit"></i> </button>
                                                 
   </div>
     



                                                              </div>
                                                          
                                                          


                                                            </td>

                                                           
                                                        </tr>

                                                    </tbody>
                                                </table>


<pagination :data="users" :limit="2" @pagination-change-page="PaginateUsers">
                                        </pagination>
                                            </div>


 <div class="    d-none  d-md-block d-lg-block    ">
      
                                                <button style="float: right;" class="btn btn-sm btn-glow-success btn-success"> ADD USER <i class="fas fa-plus"></i> </button>
                                                


<table class="table table-hover">
                                                    <thead>
                                                  <tr>
                                                        
                                                         <th class="text-center" >  <i class=" fas fa-th-list"></i> id </th>
                                                         <th class="text-center" >  <i class="fas fa-address-card"></i>   Username </th>
                                                         <th class="text-center" >  <i class="fas fa-list"></i>   type </th>
                                                         <th class="text-center" >  <i class="fas fa-envelope"></i> Email</th>
                                                         <th class="text-center" >  <i class="fas fa-hourglass-start"></i>  Status  </th>
                                                         <th class="text-center" >  <i class="fas fa-map-marker-alt"></i> Country</th>

                                                            
                                                      <th class="text-center"> <i class="fas fa-edit"></i> Action </th>
                                                  </tr>
                                                    </thead>
                                                    <tbody>



                                                        <tr  v-for=" user  in users.data" :key="user.id"   >
                                                           
                                                            <td>
                                                                <h6 class="mb-1 text-center"> {{  user.id }}  </h6>
                                                            </td>
                                                           
                                                            <td>
                                                                <h6 class="mb-1 text-center "> {{  user.name }}  </h6>
                                                            </td>
                                                            <td class=""> 
                                                                <h6 v-if="user.learner == 1"  class="mb-1 text-center ">  Learner   </h6>
                                                                         <h6 v-else  class="mb-1 text-center ">  Teacher   </h6>
                                                            </td>
                                                            <td  class="">
                                                                <h6 class="m-b-0 text-center "> {{  user.email }}   </h6>
                                                            </td>
                                                               <td class="">
                                                                <h6 class="mb-1 text-center "> {{  user.name }}   </h6>
                                                            </td>
                                                            <td class="">

                                                                <h6 class="m-b-0 text-center "> {{  user.country }}  </h6>
                                                            </td>
                                                            
                                                            <td class="text-center" >
                                                                
                                                                
                                                              <div class="row text-center" >

<div class="col-sm-6  col-xs-6 col-md-3 col-lg-3 "> <button  style=""   class=" btn btn-sm btn-glow-danger btn-danger   "> <i style="margin-right: -2px;" class="text-center fas fa-trash"></i> </button>
   </div>
<div class="col-sm-6 col-xs-6  col-md-3 col-lg-3 "> <button  data-toggle="modal" data-target="#Modalinfo"   @click="getUser(user.id)"  class=" btn btn-sm btn-glow-dark btn-dark">  <i style="margin-right: -2px;" class="fas  fa-eye"></i> </button>
    </div>
<div class="col-sm-6 col-xs-6 col-md-3 col-lg-3">                                                 
<button class=" btn btn-sm btn-glow-info btn-info"  data-toggle="modal" data-target="#ModalEditPass"  @click="getUser(user.id)"  >  <i style="margin-right: -2px;" class="fas fa-edit"></i> </button>
                                                 
   </div>
     



                                                              </div>
                                                          
                                                          


                                                            </td>

                                                           
                                                        </tr>

                                                    </tbody>
                                                </table>


<pagination :data="users" :limit="2" @pagination-change-page="PaginateUsers">
                                        </pagination>
                                            </div>

                                            <user-show v-bind:ShowUser="ShowUser" ></user-show>
<user-edit v-bind:ShowUser="ShowUser">   </user-edit>
</div>




</template>



<script>
    import ViewUser from './InfosUser.vue';
  export default {

     
 components: {

'user-show': ViewUser

  },

     data(){
 return {

users:{},
lang:{},
idlang:'',
country : {},
contr:'',
ShowUser: '',
search: '',
countrys :''


 }
  },
 created ()
 {
this.GetUsers(); 
this.GetLang(); 
this.GetCountry(); 



 },
 
 methods:{

GetUsers(page = 1,idlang)
 {
   


     axios.get('/api/geteachers/?page='+page)
     .then(response =>
     { 
       
   this.users= response.data

     
 }
     ).catch(err => console.log(err));



 },
  GetCountry()
 {


     axios.get('/api/getcountry/')
     .then(response =>
     { 
       
   this.country = response.data

     
 }
     ).catch(err => console.log(err));

 },
 PaginateUsers(page = 1 ){


if( this.countrys  !== ''){

this.GetCountryUsers(page); 




}else if(this.idlang  !== ''){

this.GetFiltreUsers(page); 

}else{

this.GetUsers(page);
}


 },
 GetCountryUsers(page = 1 )
 {


     axios.get('/api/getcountryteachers/'+this.countrys+'/?page='+page)
     .then(response =>
     { 
       
  this.users = response.data

     
 }
 ).catch(err => console.log(err));

 },
 GetUserByEmail()
 {


     axios.get('/api/getmail/'+this.search)
     .then(response =>
     { 
       
   this.users = response.data

     
 }
     ).catch(err => console.log(err));

 },


 
 GetFiltreUsers(page=1,idlang)
 {


     axios.get('/api/getfiltreteachers/'+this.idlang+'/?page='+page)
     .then(response =>
     { 
           this.users= response.data 
     
     }
     ).catch(err => console.log(err));

 },
 getUser(id){


     axios.get('/api/getuser/'+ id )
     .then(response =>
     { 
        
     this.ShowUser = response.data
     
 }
     )
     .catch(err => console.log(err));

 },
 GetLang(page = 1 )
 {


     axios.get('/api/getlang/?page='+page)
     .then(response =>
     { 
       
   this.lang= response.data

     
 }
     ).catch(err => console.log(err));

 }

 
 },
 


     }

      


</script>