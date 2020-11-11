 <template>
     

                <div id="ModalLevelSelect" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">LEVEL  Participant</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                        <label> THE LEVEL : </label>
                  <select class="form-control" v-model="idlevel" >

 <option  v-for="lev in levelslist " :key="lev.id_level"  :value="lev.id_level"    > {{  lev.field_level   }}   </option>

                  </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close <i class=" fas fa-window-close"></i> </button>
                                <button type="button" @click="updateleveluser()"    data-dismiss="modal"   class="btn btn-success">Validate  <i class="fas fa-crosshairs"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
</template>



<script>
export default {
    props:['ShoWLevelUser']  ,


     data(){
 return {

levelslist: {},
idlevel:''


 }
  },
 created ()
 {
this.getlevels(); 




 },
 
    methods : {

  updateleveluser(){
    
axios.patch('/api/putlevel',{
idlevel: this.idlevel,
id: this.ShoWLevelUser.id_test_level,




}).then(resposne =>this.$emit('list-level',resposne)


).catch(error => console.log(error))
    $('.toast-danger').toast('show');

},
getlevels(){


     axios.get('/api/getlevelslist/')
     .then(response =>
     { 
       
   this.levelslist= response.data

     
 }
     ).catch(err => console.log(err));





}

    }  ,


}
</script>