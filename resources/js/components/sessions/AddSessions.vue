<template>
                <div id="addSession" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> <i class="fas fa-user-md"></i> ADD Session  </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form>
               <div class="form-group">
                                    <label for="Adressehub"> Language   : </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="Adressehub"> <i class="fas fa-language"></i> </span>
                                        </div>
  <select class="custom-select" name="" @change="getesters" required v-model="idlang">
    <option       v-for="lang in languages " :key="lang.id_lang"  :value=" lang.id_lang "  > {{ lang.lang_field}}   </option>
    
</select>

                                      
                                        <div class="invalid-feedback">
                                            Please choose a region.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Adressehub"> Teacher   : </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="Adressehub"> <i class="fas fa-user-graduate"></i> </span>
                                        </div>
  <select class="custom-select" name="" required v-model="idtester">
    <option       v-for="tester in testers " :key="tester.id"  :value=" tester.id "  > {{ tester.name}}   </option>
    
</select>

                                      
                                        <div class="invalid-feedback">
                                            Please choose a ra tester 
                                        </div>
                                    </div>
                                </div>

                           <div class="form-group">
                                    <label for="namewilaya"> Date :  </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="namewilaya"> <i class="fas fa-calendar-alt"></i> </span>
                                        </div>
                                        <input type="date" class="form-control" v-model="startdate"  name="" required  id="date-format" placeholder="  " aria-describedby="inputGroupPrepend" >
                                        <div class="invalid-feedback">
                                            Please choose a wilaya.
                                        </div>
                                    </div>
                                </div>



   <div class="form-group">
                                    <label for="Adressehub"> Day Week    : </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="Adressehub"> <i class="fas fa-calendar-check"></i> </span>
                                        </div>
  <select class="custom-select"   required v-model="dayweek">

                <option>      Mondays </option>  

  <option>   Tuesdays </option>  

  <option>   Wednesdays</option>  

  <option>  Thursdays</option>  

  <option>  Fridays</option>  

  <option>  Saturdays</option>  

  <option>  Sundays</option>  
</select>

                                      
                                        <div class="invalid-feedback">
                                            Please choose a region.
                                        </div>
                                    </div>
                                </div>


<div class="form-gourp">

<label>  LEVEL :    </label>
     <select class="form-control" v-model="idlevel" >

 <option  v-for="lev in levelslist " :key="lev.id_level"  :value="lev.id_level"    > {{  lev.field_level   }}   </option>

                  </select>

</div>


      <div class="form-group">
                                    <label for="namewilaya">Time : </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="namewilaya"> <i class="fas fa-clock"></i> </span>
                                        </div>
                                        <input type="text" class="form-control" v-model="startime"  name="startime" required   placeholder="  " aria-describedby="inputGroupPrepend" >
                                        <div class="invalid-feedback">
                                            Please choose a time.
                                        </div>
                                    </div>
                                </div>


                                    <div class="form-group">
                                    <label for="namewilaya">Duration : </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="namewilaya"> <i class="fas fa-user-clock"></i> </span>
                                        </div>
                                        <input type="number" class="form-control" v-model="timeoftest"  name="" required  id="date-format" placeholder="  " aria-describedby="inputGroupPrepend" >
                                        <div class="invalid-feedback">
                                            Please choose a wilaya.
                                        </div>
                                    </div>
                                </div>



                                    <div class="form-group">
                                    <label for="namewilaya">Number of Student Min  : </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="namewilaya"> <i class="fas fa-users"></i> </span>
                                        </div>
                                        <input type="number" class="form-control" v-model="studentmin"  name="" required  id="date-format" placeholder="  " aria-describedby="inputGroupPrepend" >
                                        <div class="invalid-feedback">
                                            Please choose a wilaya.
                                        </div>
                                    </div>
                                </div>


   <div class="form-group">
                                    <label for="namewilaya">Number of Student  Max : </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="namewilaya"> <i class="fas fa-users"></i> </span>
                                        </div>
                                        <input type="number" class="form-control" v-model="studentmax"  name="" required  id="date-format" placeholder="  " aria-describedby="inputGroupPrepend" >
                                        <div class="invalid-feedback">
                                            Please choose a wilaya.
                                        </div>
                                    </div>
                                </div>


                                   <div class="form-group">
                                    <label for="namewilaya">Zoom Account  : </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="namewilaya"> <i class="fas fa-link"></i> </span>
                                        </div>
                                        <input type="test" class="form-control" v-model="zoom"  name="" required  id="date-format" placeholder="  " aria-describedby="inputGroupPrepend" >
                                        <div class="invalid-feedback">
                                            Please choose a wilaya.
                                        </div>
                                    </div>
                                </div>

 






                                </form>
                  
                          
                
                       

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel <i class=" fas fa-window-close"></i> </button>
                                <button type="button" class="btn btn-success" @click="addUnit()" data-dismiss="modal" >ADD <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
              </template>
<script>

     
    export default {
        components: {

  },
     
data(){
    return {

idlang :'',
idtester:'',
languages : {},
testers : {},
startime :  '' ,
startdate:new Date().toLocaleString(),
dayweek :'',
timeoftest:'',
studentmin :'',
studentmax:'',
zoom : '' ,
levelslist: {},
idlevel : ''
    }
},
 created ()
 {
this.getLang(); 
this.getlevels();




 },
methods: {

getLang(){

axios.get('/api/getlang/')
     .then(response =>
     { 
       
   this.languages = response.data

     
 }
     ).catch(err => console.log(err));



},

getlevels(){


     axios.get('/api/getlevelslist/')
     .then(response =>
     { 
       
   this.levelslist= response.data

     
 }
     ).catch(err => console.log(err));





},

addUnit(){

 
axios.post('/api/addsession', {

idtester: this.idtester, 
idlang : this.idlang ,
dateoftest : this.startdate ,
timeofstart : this.startime,
duration : this.timeoftest,
studentmax : this.studentmax,
studentmin : this.studentmin,
zoom : this.zoom,
dayweek : this.dayweek,
idlevel : this.idlevel




}).then(
   
    resposne=>this.$emit('session-added',resposne)).catch(error => console.log(error))

}



,
getesters(){

axios.get('/api/getester/'+this.idlang)
     .then(response =>
     { 
       
   this.testers = response.data

     
 }
     ).catch(err => console.log(err));



}


},
           mounted() {
            console.log('Component Add sessio n.')
        }
    }


</script>