 <template>
     
       
                <div id="ModalDeleteSession" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">DELETE  Session  </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p> are you sure to delete this   </p>  <h5 v-text="this.idsession"> </h5> 

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel <i class=" fas fa-window-close"></i> </button>
                                <button type="button" @click="deleteSession()"    data-dismiss="modal"    class="btn btn-danger">Delete  <i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
</template>



<script>
export default {
    props:['idsession']  ,

    methods : {

  deleteSession(){
      console.log('working ')
axios.delete('/api/delsession/'+this.idsession).then(resposne =>this.$emit('session-deleted',resposne)


).catch(error => console.log(error))
    $('.toast-danger').toast('show');

}

    }  ,


}
</script>