<template>
                <div id="AddUserParticipant" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> <i class="fas fa-user-md"></i> ADD ANOTHER PARTICIPANT TO THIS SESSION  </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form>
               

                           <div class="form-group">
                                    <label for="namewilaya"> Email :  </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="namewilaya"> <i class="fas fa-envelope"></i> </span>
                                        </div>
                                        <input type="email" class="form-control" v-model="email"  name="" required  id="date-format" placeholder="please enter the email address ..  " aria-describedby="inputGroupPrepend" >
                                        <div class="invalid-feedback">
                                            Please put the email .
                                        </div>
                                    </div>
                                </div>
                  

    




 






                                </form>
            
                       

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel <i class=" fas fa-window-close"></i> </button>
                                <button type="button" class="btn btn-success" @click="AddUser" data-dismiss="modal" >ADD <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
              </template>
<script>

     
    export default {
          props:['idsession']  ,
        components: {

  },
     
data(){
    return {


email :'',
levelslist : {}
    }
},
 created ()
 {


console.log(this.idsession);





 },
methods: {


AddUser(){

 
axios.post('/api/adduserses', {

idsession : this.idsession ,
email : this.email 






}).then(
   
    resposne=>this.$emit('user-added',resposne)).catch(error => console.log(error))

},







},
           mounted() {
            console.log('Component mounted.')
        }
    }


</script>