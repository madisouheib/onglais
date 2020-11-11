<template>
    
        
  
                <div id="ModalMeeting" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> <i class="fas fa-user-clock"></i>   Take our Quick , free online test </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                             
<h3 class="text-center" style="color:#52565e;" > Meeting <i class="fas fa-calendar-plus"></i> </h3>

<h4 class="text-center" style="color:#52565e;"> <b> {{ Meeting.lang }} </b> placement test </h4>

<h4 class="text-center" style="color:#0abf53;"> {{ Meeting.day_test }} {{ Meeting.date_test }}  </h4>
<h4 class="text-center" style="color:#0abf53;"> {{ Meeting.time_test_user }}  <i class=" fas fa-clock"></i> <span class="badge badge"> </span> </h4>

<h3 class="text-center" > Skype :<br> {{ Meeting.skype_test }} <br>  <a class="btn btn-info btn-glow-info  " :href="'skype:'+Meeting.skype_test+'?chat'">Connect  <i class="fab fa-skype"></i>  </a>   </h3>





                            </div>
                            <div class="modal-footer"> </div>
                        </div>
                    </div>
                </div>
</template>

<script>
export default {
    props:['Meeting']  ,

    

     data(){
 return {

 }
  },
  
  created ()
 {





 }
  ,
    methods : {


    }  






}
</script>