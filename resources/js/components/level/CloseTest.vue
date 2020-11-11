 <template>
     

                <div id="CloseSession" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> Close the Session </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close <i class=" fas fa-window-close"></i> </button>
                                <button type="button" @click="updateClose()"    data-dismiss="modal"   class="btn btn-danger"> Valdiate   <i class="fas fa-times-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
</template>



<script>
export default {
    props:['idsession']  ,


     data(){
 return {



 }
  },
 created ()
 {





 },
 
    methods : {

  updateClose(){
    
axios.patch('/api/closetest',{
idsession: this.idsession,





}).then(resposne =>this.$emit('list-level',resposne)


).catch(error => console.log(error))
    $('.toast-danger').toast('show');

}


    }  ,


}
</script>