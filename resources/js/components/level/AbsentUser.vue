 <template>
     
       
                <div id="ModalAbsent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">  Participant Absent </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p> Are you sure to make      Absent ?   </p><h5 v-text="ShoWLevelUser.name"> </h5>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close  <i class=" fas fa-window-close"></i> </button>
                                <button type="button" @click="absentuser"  data-dismiss="modal"     class="btn btn-warning" >YES  <i class="fas fa-sign-in-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
</template>



<script>
export default {
    props:['ShoWLevelUser']  ,

    methods : {

absentuser(){
    
axios.patch('/api/updateabsent',{

id: this.ShoWLevelUser.id_test_level,




}).then(resposne =>this.$emit('user-absent',resposne)


).catch(error => console.log(error))
    $('.toast-danger').toast('show');

}


    }  ,


}
</script>