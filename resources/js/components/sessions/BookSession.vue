<template>
    
        
  
                <div id="BookNow" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> <i class="fas fa-user-clock"></i>  Book a session </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                             
<h3 class="text-center" style="color:#52565e;" > Book Now <i class="fas fa-chalkboard-teacher"></i> </h3>

<h3> Day : {{ Books.day }}</h3>
<h4> Time  : {{ Books.time }}</h4>

<p style="color:#ed1b2e;">  <b> Note :  </b> confirm by clicking on validate if you agree to take this Session  </p>





                            </div>
                            <div class="modal-footer"> <button class="btn btn-dark btn-glow-dark " data-dismiss="modal" > Cancel   <i class="fas fa-window-close "></i>  </button> <button class="btn btn-success btn-glow-success " data-dismiss="modal"  @click="ValidSession()">  Valdiate <i class="fas fa-check-circle"></i> </button> </div>
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

ValidSession(){
console.log(this.Books.idsession);

console.log(this.Books.idlearner);
axios.post('/api/reservesession', {


idtest : this.Books.idsession ,
idlearner :this.Books.idlearner 







}).then(
     //resposne=>location.reload() 

     window.location.href = '/admin/myses'
 ).catch(error => console.log(error))





}

    }  






}
</script>