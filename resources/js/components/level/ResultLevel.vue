<template>
    
        
  
                <div id="ModalResult" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> <i class="fas fa-arrow-circle-up"></i>  Your Test Result  </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div v-if="UserShow.length == 0 " class="modal-body">
                             
<h3 class="text-center" style="color:#52565e;" > Your speaking  test Result : <i class="fas fa-assistive-listening-systems"></i> </h3>

<h4 class="text-center" style="color:#52565e;"> <b> {{ UserShow.lang_field }} </b>  </h4>


<h4 class="text-center" style="color:#0abf53;"> Your Level :  {{ UserShow.field_level }}  <i class=" fas fa-trophy"></i> <span class="badge badge"> </span> </h4>






                            </div>
                            <div v-else>

<h3 class="text-center" style="color:red;"> This Sessions is Closed </h3>

                            </div>
                            <div class="modal-footer"> 
                            
                             
                              </div>
                        </div>
                    </div>
                </div>
</template>

<script>
export default {
    props:['UserShow']  ,

    

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