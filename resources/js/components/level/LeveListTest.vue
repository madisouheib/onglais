<template>
<div> 


    

                                            <button style="float: right;" data-toggle="modal" @click="GetUseraddTest()"   data-target="#AddTestUser"   class="btn btn-sm btn-glow-success btn-success"> ADD USER <i class="fas fa-plus"></i> </button>
                                                                                        <button style="float: right;" data-toggle="modal"    data-target="#CloseSession"   class="btn btn-sm btn-glow-danger btn-danger"> CLOSE <i class="fas fa-door-closed"></i> </button>
                                                
<div>


<table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" > <i class=" fas fa-th-list"></i> id </th>
                                                        <th class="text-center" ><i class="fas fa-address-card"></i>   Username </th>
                                                             <th class="text-center" ><i class="fas fa-address-card"></i>   Email </th>
                                                                  <th class="text-center" ><i class="fas fa-address-card"></i>   Level </th>
                                                    
                                      
                                    

                                                            
                                                      <th class="text-center"> <i class="fas fa-edit"></i> Action </th>
                                                  </tr>
                                                    </thead>
                                                    <tbody>



                                                        <tr  v-for=" user  in users.data" :key="user.id_test_level"   >
                                                           
                                                            <td>
                                                                <h6 class="mb-1 text-center"> #{{  user.id }}  </h6>
                                                            </td>
                                                           
                                                            <td>
                                                                <h6 class="mb-1 text-center "> {{  user.name }}  </h6>
                                                          </td>
                                                             <td>
                                                                <h6 class="mb-1 text-center "> {{  user.email }}  </h6>
                                                            </td>
                                                         <div v-if="user.id_level == null">
                                                         <td v-if="user.absent == null">
                                                                <h6 style="font-weight:bold;color:#2dde98;" class="mb-1 text-center "> {{  user.field_level }}  </h6>
                                                            </td>
                                                        
                                                                                                             <td v-else> <h6 style="font-weight:bold;color:#ffc20e;" class="text-center" > Abesent</h6> </td>
                                                              
                                                         </div>

                                                         <div v-else>
 <td  class="text-center">
                                                                <h6 style="font-weight:bold;color:#2dde98;" class="mb-1 text-center "> {{  user.field_level }}  </h6>
                                                            </td>
                                                         </div>
                                                            <td class="text-center" >
                                                                
                                                                
                                                              <div class="row " >
<div class="col-3   "> <button    class=" btn btn-sm btn-glow-success btn-success" data-toggle="modal"   data-target="#ModalLevelSelect" @click="GetUserTest(user.id_test_level)" >  <i style="margin-right: -2px;" class="fas fa-list-ol"></i> </button>
    </div>
<div class="col-3     "> <button  style="" data-target="#ModalDelete"  data-toggle="modal"   class=" btn btn-sm btn-glow-danger btn-danger   " @click="GetUserTest(user.id_test_level)" > <i style="margin-right: -2px;" class="text-center fas fa-trash"></i> </button>
   </div>

<div class="col-3  ">                                                 
<button class=" btn btn-sm btn-glow-warning btn-warning"   data-target="#ModalAbsent"   data-toggle="modal"  @click="GetUserTest(user.id_test_level)"      >  <i style="margin-right: -2px;" class="fas fa-bell-slash"></i> </button>
                                           
   </div>
  


     



                                                              </div>
                                                          
                                                          


                                                            </td>

                                                           
                                                        </tr>

                                                    </tbody>
                                                </table>
</div>

<level-select @list-level="PaginateUsers"  v-bind:ShoWLevelUser="ShoWLevelUser" @user-level="PaginateUsers" >   </level-select>
<leveltest-delete @user-deleted="PaginateUsers"  v-bind:ShoWLevelUser="ShoWLevelUser" >    </leveltest-delete>

<close-level @list-level="PaginateUsers" v-bind:idsession="idsession"  ></close-level>

<level-add @user-added="PaginateUsers"   v-bind:ShoWLevelUser="ShoWLevelUser"  ></level-add>
<level-absent   @user-absent="PaginateUsers"   v-bind:ShoWLevelUser="ShoWLevelUser"  >  </level-absent>

<pagination :data="users" :limit="2" @pagination-change-page="PaginateUsers">




                                        </pagination>
                                       
</div>




</template>



<script>
     import DeleteModal from './DeleteTestLevel.vue';  
          import MyLevel from './PutLevel.vue';  
                    import AbsentLevel from './AbsentUser.vue';  
                       import AddUser from './AddUserTest.vue';  
                                import CloseLevel from './CloseTest.vue';  
  export default {

     props: ['url_id'],
 components: {

'leveltest-delete': DeleteModal ,
'level-select': MyLevel  ,
'level-absent': AbsentLevel  ,
'level-add': AddUser ,
'close-level' : CloseLevel
  },

     data(){
 return {

users:{},

idlang:'',

contr:'',
ShowUser: '',
search: '',
countrys :'',
ShoWLevelUser :'',
idsession :this.url_id

 }
  },
 created ()
 {
this.GetUsers(); 



 },
 
 methods:{

GetUsers(page = 1)
 {
   


     axios.get('/api/getuserslevellist/'+this.url_id+'/?page='+page)
     .then(response =>
     { 
       
   this.users= response.data

     
 }
     ).catch(err => console.log(err));



 },

 GetUserTest(id_user_test){

   axios.get('/api/showtestuser/'+id_user_test)
     .then(response => this.ShoWLevelUser = response.data)
     .catch(err => console.log(err));





 },
  GetUseraddTest(){

   axios.get('/api/showtestusertest/'+this.url_id)
     .then(response => this.ShoWLevelUser = response.data)
     .catch(err => console.log(err));





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
 


 

 getUser(id){


     axios.get('/api/getuser/'+ id )
     .then(response =>
     { 
        
     this.ShowUser = response.data
     
 }
     )
     .catch(err => console.log(err));

 }

 
 },
 


     }

      


</script>