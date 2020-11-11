 <template>
     

                <div id="ModalEditPass" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Change password of user </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                        <label> <i class="fas fa-unlock-alt"></i> Pin Code  : </label>
                <input class="form-control" v-model="pincode" type="text"  placeholder="Please type your Code Pin  ...."    >

                    <label> <i class="fas fa-unlock-alt"></i> New password   : </label>
                <input class="form-control" v-model="newpass" type="password"  placeholder="Please type your New password ...."  >
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer <i class=" fas fa-window-close"></i> </button>
                                <button type="button" @click="updatepassuser()"    data-dismiss="modal"   class="btn btn-success">Validate  <i class="fas fa-crosshairs"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
</template>



<script>
export default {
    props:['ShowUser']  ,


     data(){
 return {

pincode: '',
newpass:''


 }
  },
 created ()
 {





 },
 
    methods : {

  updatepassuser(){
    
axios.patch('/api/updatepass',{
pincode: this.pincode,
id: this.ShowUser.id,
newpass : this.newpass 




}).then(resposne =>this.$emit('list-user',resposne)


).catch(error => console.log(error))
    $('.toast-danger').toast('show');

}

    }  ,


}
</script>