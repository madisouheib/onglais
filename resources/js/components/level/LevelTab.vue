<template>
<div> 

  <div class="alert alert-success" v-if="seen == true " role="alert"> Your placement test date has been successfully booked ...</div>
    <div class="alert alert-danger" v-if="deleted == true " role="alert"> Your placement test date has been successfully Deleted ...</div>
   <button v-if="learner_id == 3 " style="float: right;"  data-toggle="modal" data-target="#addGroup"   class="btn btn-dark btn-square"> ADD BATCH  <i class="fas fa-user-md "></i> </button>
  
  <div class="table-responsive-sm d-block   d-lg-none d-md-none ">
     
                                                


<table  class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" > <i class=" fas fa-th-list"></i> id </th>
                                                        <th class="text-center" ><i class="fas fa-language"></i>   Language </th>
                                                    
                                            
                                    

                                                            
                                                      <th class="text-center"> <i class="fas fa-bars"></i> Seats number </th>
                                                       <th class="text-center"> <i class="fas fa-clock"></i> Duration </th>
                                                           <th class="text-center"> <i class="fas fa-calendar"></i> Day </th>

                                                            <th class="text-center"> <i class="fas fa-user-clock"></i> Time </th>

                                                            <th class="text-center"> <i class="fas fa-edit"></i> Action </th>

                                                       
                                                  </tr>
                                                    </thead>
                                                    <tbody>



                                                        <tr  v-for=" level  in levelgroups.data" :key="level.id_test"   >
                                                           
                                                            <td>
                                                                <h6 class="mb-1 text-center"> #{{  level.id_test }}  </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-1 text-center "> {{  level.lang_field }}  </h6>
                                                            </td>

                                                            <td>
                                                                <h6 class="mb-1 text-center badge badge-info " style="font-weight:bold;" >  {{  level.test_count }}  /  {{  level.nb_test }}   </h6>
                                                            </td>
                                                        
                                                         <td>
                                                                <h6 class="mb-1 text-center "> {{  level.duration }} min  </h6>
                                                            </td>
                                                         <td>
                                                                <h6 class="mb-1 text-center "> {{  level.date_test }}  </h6>
                                                            </td>
                                                        
                                                            <td>
                                                                <h6 class="mb-1 text-center "> {{  level.time_test }}  </h6>
                                                            </td>
                                                              
                                                            
                                                            <td class="text-center" >
                                                                
                                                                
                                                              <div class="row d-inline" >
                                                                  
                                                                  <div v-if="level.test_count == level.nb_test  || level.closed == 1  "> 
                                                                      <div class="col-sm-6 col-xs-6  col-md-4 col-lg-4 ">

                                                                      <button data-toggle="modal" data-target="#ModalResult" @click="GetResult(level.id_test)" class="btn btn-glow-primary btn-primary"> Result <i class="fas fa-clone"></i></button>                                                                      
                                                                       </div>
                                                                        </div>
                                                                        <div v-else>
<div v-if="learner_id == 3 "  class="col-sm-6  col-xs-6 col-md-2 col-lg-2 "> <button  style=""  data-toggle="modal" data-target="#ModalDeleteBtach" @click="Delbatch(level.id_test)"  class=" btn btn-sm btn-glow-danger btn-danger   "> <i style="margin-right: -2px;" class="text-center fas fa-trash"></i> </button> 
   </div>
<div class="col-sm-6 col-xs-6  col-md-4 col-lg-4 ">


    <div v-if=" itemsContains(level.id_test) == false ">
 <button  data-toggle="modal" data-target="#BookNow" @click="BookNow(level.id_tester,level.id_test,level.lang_field,level.day_test,level.date_test,level.time_test,level.test_count,level.duration)"   class=" btn btn-sm btn-glow-success btn-success">Book Now   <i style="margin-right: -2px;" class="fas fa-user-clock"></i> </button></div>
    
    
    <div v-else>     <button  data-toggle="modal" data-target="#ModalMeeting" @click="GetMeeting(level.id_test)"   class=" btn btn-sm btn-glow-success btn-success">   My Meeting <i style="margin-right: -2px;" class="fas fa-mouse-pointer"></i> </button></div>
    
    

    </div>
<div v-if="learner_id == 3 " class="col-sm-6 col-xs-6 col-md-3 col-lg-3">                                                 
<a :href="'/admin/listlevels/'+level.id_test" class=" btn btn-sm btn-glow-dark btn-dark">  <i style="margin-right: -2px;" class="fas fa-list"></i> </a>
                                                 
   </div>
     

 </div>

                                                              </div>
                                                          
                                                          


                                                            </td>

                                                           
                                                        </tr>

                                                    </tbody>
                                                </table>


<pagination :data="levelgroups" :limit="2" @pagination-change-page="levelgroups">
                                        </pagination>
                                            </div>


 <div class="    d-none  d-md-block d-lg-block    ">
      

                                                


<table class="table table-hover">
                                                    <thead>
                                                  <tr style="font-weight:bold;">
                                                                           <th class="text-center" > <i class=" fas fa-th-list"></i> id </th>
                                                        <th class="text-center" ><i class="fas fa-language"></i>   Language </th>
                                                    
                                            
                                    

                                                            
                                                      <th class="text-center"> <i class="fas fa-bars"></i> Number of places </th>
                                                       <th class="text-center"> <i class="fas fa-clock"></i> Duration </th>
                                                           <th class="text-center"> <i class="fas fa-calendar"></i> Day </th>

                                                            <th class="text-center"> <i class="fas fa-user-clock"></i> Time </th>
                                                                                                                <th class="text-center"> <i class="fas fa-edit"></i> Action </th>
                                                  </tr>
                                                    </thead>
                                                    <tbody>


                                                        <tr  v-for=" level  in levelgroups.data" :key="level.id_test"   >
                                                           
                                                            <td>
                                                                <h6 class="mb-1 text-center"> #{{  level.id_test }}  </h6>
                                                            </td>
                                                           
                                                            <td>
                                                                <h6 class="mb-1 text-center "> {{  level.lang_field }}  </h6>
                                                            </td>
                                                                <td class="text-center">
                                                                <h2 class="mb-1 text-center badge badge-dark  badge-lg " style="font-weight:bold; padding:5px;" >  {{  level.test_count }}  /  {{  level.nb_test }}   </h2>
                                                            </td>
                                                        
                                                         <td>
                                                                <h6 class="mb-1 text-center "> {{  level.duration }} min  </h6>
                                                            </td>
                                                         <td>
                                                                <h6 class="mb-1 text-center "> {{  level.day_test }}  {{  level.date_test }}  </h6>
                                                            </td>
                                                        
                                                            <td>
                                                                <h6 class="mb-1 text-center "> {{  level.time_test }}  </h6>
                                                            </td>
                                                              
                                                            <td class="text-center" >
                                                                
                                                                
                                                              <div class="row text-center" >
                                                       
 <div v-if="level.test_count == level.nb_test  || level.closed == 1 "> 
                                                                      
                                                                      <button data-toggle="modal" data-target="#ModalResult" @click="GetResult(level.id_test)" class="btn btn-glow-primary btn-primary"> Result <i class="fas fa-clone"></i></button>
                                                                        </div>
                                                                        <div v-else>
<div v-if="learner_id == 3 "  class="col-sm-6  col-xs-6 col-md-2 col-lg-2 "> <button  style=""  data-toggle="modal" data-target="#ModalDeleteBtach" @click="Delbatch(level.id_test)"  class=" btn btn-sm btn-glow-danger btn-danger   "> <i style="margin-right: -2px;" class="text-center fas fa-trash"></i> </button> 
   </div>
<div class="col-sm-6 col-xs-6  col-md-4 col-lg-4 ">


    <div v-if=" itemsContains(level.id_test) == false ">
 <button  data-toggle="modal" data-target="#BookNow" @click="BookNow(level.id_tester,level.id_test,level.lang_field,level.day_test,level.date_test,level.time_test,level.test_count,level.duration)"   class=" btn btn-sm btn-glow-success btn-success">Book Now   <i style="margin-right: -2px;" class="fas fa-user-clock"></i> </button></div>
    
    
    <div v-else>     <button  data-toggle="modal" data-target="#ModalMeeting" @click="GetMeeting(level.id_test)"   class=" btn btn-sm btn-glow-success btn-success">   My Meeting <i style="margin-right: -2px;" class="fas fa-mouse-pointer"></i> </button></div>
    
    

    </div>
<div v-if="learner_id == 3 " class="col-sm-6 col-xs-6 col-md-3 col-lg-3">                                                 
<a :href="'/admin/listlevels/'+level.id_test" class=" btn btn-sm btn-glow-dark btn-dark">  <i style="margin-right: -2px;" class="fas fa-list"></i> </a>
                                                 
   </div>
     

                                                                        </div>

                                                              </div>
                                                          
                                                          


                                                            </td>

                                                           
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <batch-delete  @batch-deleted="AfterDeleted()"  v-bind:idtest="idtest"  ></batch-delete>

<pagination :data="levelgroups" :limit="2" @pagination-change-page="levelgroups">
                                        </pagination>
                                            </div>
                                            <result-level       v-bind:UserShow="UserShow" ></result-level>
<add-level-group @unit-added="AfterAdded()"   ></add-level-group>
<book-now @unit-updated="AfterAdded()"      v-bind:Books="Books" ></book-now>

<meeting-level  @unit-added="AfterAdded()"      v-bind:Meeting="Meeting" > </meeting-level>
</div>




</template>



<script>
    import AddGroup from './AddLevelGroup.vue';
        import BookNow from './BookNow.vue';
         import DelteBatch from './DeleteBatch.vue';
          import MyMeeting from './MyMeeting.vue';
           import ResultLevel from './ResultLevel.vue';
  export default {

          props: ['user_id','learner_id'],
 components: {

'add-level-group': AddGroup,
'book-now': BookNow ,
'batch-delete': DelteBatch,
'meeting-level': MyMeeting,
'result-level': ResultLevel

  },

     data(){
 return {

levelgroups:{},
Books:{},
seen : false,
deleted : false,
idtest : '' ,
idlevel : '',
Meeting: {},
check : [] ,
UserShow: {},
Tested:''


 }
  },
 created ()
 {
this.GetLevelGroups(); 
this.GetStatus(); 






 },
 
 methods:{

GetLevelGroups(page = 1 ){

axios.get('/api/getlevelgroups/'+this.user_id+'/?page='+page)
     .then(response =>
     { 
       
   this.levelgroups= response.data

     
 }
     ).catch(err => console.log(err));



},
GetResult(id){

axios.get('/api/resultest/'+this.user_id+'/remind/'+id)
     .then(response =>
     { 
       
   this.UserShow= response.data

     
 }
     ).catch(err => console.log(err));





},
  itemsContains(n) {
if( this.check.includes(n) ) {


    return true 
}else {

    return false
}
     
    },

GetStatus(id){


   
axios.get('/api/tester/'+this.user_id).then(

     response => this.check.push.apply(this.check,response.data)
 ).catch(error => console.log(error))
    $('.toast-danger').toast('show');


},
GetMeeting(session){
console.log(session)
axios.get('/api/getmeeting/'+this.user_id+'/session/'+session)
     .then(response =>
     { 
this.Meeting=response.data
 }
     ).catch(err => console.log(err));




}
,AfterAdded(){
    this.seen = true ;

this.GetLevelGroups();



    
},
AfterDeleted(){
    this.deleted = true ;

this.GetLevelGroups();



    
},
Delbatch(id){

this.idtest = id ;



},

BookNow(idtester,idtest,lang,day_test,date_test,time_test,test_count,duration){

const parts = time_test.split(":");

const  time_start =  parts[0] + ":" + +parts[1] ;




this.Books =   {  idtest: idtest , idlearner: this.user_id , lang : lang , day_week : day_test ,date_test:date_test,time_start:time_test ,duration:duration  };
      





},  mounted() {

        }
 

 
 
 },
 


     }

      


</script>