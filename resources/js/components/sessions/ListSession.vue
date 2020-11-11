<template>

  <div class="table-responsive">
                                                <button style="float: right;" data-toggle="modal" data-target="#AddUserParticipant"    class="btn btn-sm btn-glow-success btn-success"> ADD User <i class="fas fa-plus"></i> </button>
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" > id </th>
                                                            <th class="text-center" ><i class="fas fa-file"></i> name </th>
                                                            <th class="text-center" ><i class="fas fa-envelope"></i> email </th>


                                                      <th class="text-center"> <i class="fas fa-edit"></i> Action </th>
                                                  </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr    v-for=" participants  in listsessions.data" :key="participants.id_sesssion"   >
                                                            <td>
                                                                <h6 class="mb-1 text-center "> {{  participants.id  }} </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-1 text-center "> {{  participants.name  }}  </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="m-b-0 text-center "> {{  participants.email  }}  </h6>
                                                            </td>
                                      
                                                          
                                 <td>                           

<button  style=""   data-toggle="modal" data-target="#ModalDeleteUserReserv"  @click="GetIdReserv(participants.id_reserv)"   class=" btn btn-sm btn-glow-danger btn-danger   "> <i style="margin-right: -2px;" class="text-center fas fa-trash"></i> </button>


                                                 

                                                 


                                                            </td>

                                                           
                                                        </tr>

                                                    </tbody>
                                                </table>
<delete-user  @user-deleted="GetPariticpants()"  v-bind:idreserv="idreserv" >  </delete-user>
           <add-user  @user-added="GetPariticpants()"  v-bind:idsession="idsession">   </add-user>

       <pagination :data="listsessions" :limit="2" @pagination-change-page="listsessions">
                                        </pagination>

    
                                            </div>




</template>



<script>
  import AddParticipant from './AddParticipant.vue';
   import DeleteUser from './DeleteUserSession.vue';
  export default {
    props:['idsession']  ,
     
 components: {

'add-user': AddParticipant ,
'delete-user':DeleteUser


  },

     data(){
 return {

listsessions: {},
idreserv : ''


 }
  },
 created ()
 {

this.GetPariticpants();


 },
 
 methods:{

GetPariticpants(page = 1)
 {


     axios.get('/api/getparticipants/'+this.idsession+'/?page='+page)
     .then(response =>
     { 
       
   this.listsessions= response.data

     
 }
     ).catch(err => console.log(err));

 },
 GetIdSession(id){

this.idsession = id ; 


 },
 GetIdReserv(id){

this.idreserv = id ;


 }

 
 }


     }

      


</script>