<template>
    
        
  
                <div id="BookNow" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> <i class="fas fa-user-clock"></i>   Take our Quick , free online test </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                             
<h3 class="text-center" style="color:#52565e;" > Book Now <i class="fas fa-calendar-plus"></i> </h3>

<h4 class="text-center" style="color:#52565e;"> <b> {{ Books.lang }} </b> placement test </h4>

<h4 class="text-center" style="color:#0abf53;"> {{ Books.day_week }} {{ Books.date_test }}  </h4>
<h4 class="text-center" style="color:#0abf53;"> {{ Books.time_start }}  <i class=" fas fa-clock"></i> <span class="badge badge"> </span> </h4>

<p style="color:#ed1b2e;">  <b> Note :  </b> confirm by clicking on validate if you agree to take this test </p>





                            </div>
                            <div class="modal-footer"> <button class="btn btn-dark btn-glow-dark " data-dismiss="modal" > Cancel   <i class="fas fa-window-close "></i>  </button> <button class="btn btn-success btn-glow-success " data-dismiss="modal"  @click="ValidTest()">  Valdiate <i class="fas fa-check-circle"></i> </button> </div>
                        </div>
                    </div>
                </div>
</template>

<script>
export default {
    props:['Books']  ,

    

     data(){
 return {

 }
  },
  
  created ()
 {





 }
  ,
    methods : {

ValidTest(){
console.log(this.Books.idtest);
console.log(this.Books.idlearner);
axios.post('/api/reservtest', {


idtest : this.Books.idtest ,
idlearner : this.Books.idlearner ,
duration:this.Books.duration






}).then(
     resposne=>location.reload() 
 ).catch(error => console.log(error))





}

    }  






}
</script>