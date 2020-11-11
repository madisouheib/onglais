 <template>
     

                <div id="ModalLinkZoom" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Link ZOOM </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                  
       <div class="form-group">
      <label> THE Link  : </label>

      <input class="form-control" type="text" v-model="linkzoom"  placeholder="please type your link here ... ">


       </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel  <i class=" fas fa-window-close"></i> </button>
                                <button type="button" @click="updatelinkzoom()"    data-dismiss="modal"   class="btn btn-glow-info btn-info">Update   <i class="fas fa-crosshairs"></i></button>
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

linkzoom:''


 }
  },
 created ()
 {





 },
 
    methods : {

  updatelinkzoom(){
    
axios.patch('/api/updatelink',{
linkzoom: this.linkzoom,
id: this.idsession,




}).then(resposne =>this.$emit('updated-session',resposne)


).catch(error => console.log(error))
    $('.toast-danger').toast('show');

}

    }  ,


}
</script>