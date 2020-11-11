<template>

  <div class="table-responsive">
                                                <button v-if="this.user_level == 3 " style="float: right;" data-toggle="modal" data-target="#addSession"    class="btn btn-sm btn-glow-success btn-success"> ADD SESSION <i class="fas fa-plus"></i> </button>
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" > id </th>
                                                            <th class="text-center" ><i class="fas fa-file"></i> language</th>
                                                            <th class="text-center" ><i class="fas fa-list"></i> level</th>
                                                            <th class="text-center" ><i class="fas fa-calendar"></i>  Day  </th>
                                                               <th class="text-center" ><i class="fas fa-calendar"></i>  Seats number   </th>
                                                            <th class="text-center" ><i class="fas fa-clock"></i> Time</th>
 <th class="text-center" ><i class="fas fa-clock"></i> Duration</th>
                                                            <th  v-if="user_level == 3 "  class="text-center"  > <i class="fas fa-users"></i> Members</th>
                                                      <th class="text-center"> <i class="fas fa-edit"></i> Action </th>
                                                  </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr    v-for=" session  in sessions.data" :key="session.id_sesssion"   >
                                                            <td>
                                                                <h6 class="mb-1 text-center "> {{  session.id_session  }} </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-1 text-center "> {{  session.lang_field  }}  </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="m-b-0 text-center "> {{  session.field_level  }}  </h6>
                                                            </td>
                                                               <td>
                                                                <h6 class="mb-1 text-center ">{{  session.day_week  }}   </h6>
                                                            </td>
                                                                                                <td class="text-center">

                                                                <h6 class="m-b-0 text-center badge badge-dark  badge-lg">{{  session.reservation_count  }} / {{  session.nb_extrat  }}   </h6>
                                                            </td>
                                                            <td>

                                                                <h6 class="m-b-0 text-center "> {{  session.start_at  }}  </h6>
                                                            </td>
                                                              <td>

                                                                <h6 class="m-b-0 text-center" > {{  session.time_session  }}  </h6>
                                                            </td>
                                                             <td   v-if="user_level == 3 " class="text-center" >
                                                              <h6 class="mb-1">  <a class="btn btn-sm btn-glow-dark btn-dark"   :href="'/admin/listparticipants/'+session.id_session"> <i style="margin-right: -2px;"  class="fas fa-list"></i>   </a>  </h6>
                                                            </td>
                                 <td>                           

<button  v-if="user_level == 3 "   style=""   data-toggle="modal" data-target="#ModalDeleteSession"  @click="GetIdSession(session.id_session)"   class=" btn btn-sm btn-glow-danger btn-danger   "> <i style="margin-right: -2px;" class="text-center fas fa-trash"></i> </button>

<div >   
 <button      data-toggle="modal" data-target="#BookNow" @click="BookNow(session.id_session,session.day_week,session.start_at)"   class=" btn btn-sm btn-glow-success btn-success">Book Now   <i style="margin-right: -2px;" class="fas fa-user-clock"></i> </button> </div>


                                                 
<button  v-if="user_level == 3 "  class=" btn btn-sm btn-glow-info btn-info"  data-toggle="modal" data-target="#ModalLinkZoom"     @click="GetIdSession(session.id_session)" >  <i style="margin-right: -2px;" class="fas fa-link"></i> </button>
                                                 


                                                            </td>

                                                           
                                                        </tr>

                                                    </tbody>
                                                </table>

                                                <book-session v-bind:Books="Books">   </book-session>
<link-session @updated-session="GetSession()" v-bind:idsession="idsession" >     </link-session>
                                                <add-session @session-added="GetSession()" >  </add-session>

                                                <delete-session @session-deleted="GetSession()"   v-bind:idsession="idsession"></delete-session>
                                                <pagination :data="sessions" :limit="2" @pagination-change-page="sessions">
                                        </pagination>
                                            </div>




</template>



<script>
  import AddSession from './AddSessions.vue';
    import BookSession from './BookSession.vue';
    import DeleteSession from './DeleteSessions.vue';
        import LinkSession from './LinkSessions.vue';
  export default {

      props: ['user_id','user_level'],
 components: {
'add-session' : AddSession ,
'delete-session': DeleteSession ,
'link-session':  LinkSession,
'book-session': BookSession 


  },

     data(){
 return {

sessions: {},
idsession : '',
Books : {}
 }
  },
 created ()
 {

this.GetSession();


 },
 
 methods:{

GetSession(page = 1)
 {


     axios.get('/api/getsessions/'+this.user_id+'/?page='+page)
     .then(response =>
     { 
       
   this.sessions= response.data

     
 }
     ).catch(err => console.log(err));

 },
 GetIdSession(id){

this.idsession = id ; 


 },
 BookNow(idses,day,time){
console.log(this.user_id);
this.Books =   {  idsession: idses , idlearner: this.user_id , day : day , time : time  }



 }

 
 }


     }

      


</script>