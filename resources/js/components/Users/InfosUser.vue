<template>
    
        
  
                <div id="Modalinfo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle"> <i class="fas fa-id-card-alt"></i>  User Profil </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center" v-if="ShowUser.learner==1" >

<img src="/dash/img/student.png" style=""  class="img-responsive rounded-circle " height="60" width="60">
<h4> Learner </h4>

                                </div>
                                <div class="text-center" v-else >

<img src="/dash/img/teacher.png" class="img-responsive rounded-circle " height="60" width="60" >
<h4> Teacher </h4>
                                </div>
               <table class="table table-striped">
<tr>

<td> <i class="fas fa-user-tie"> </i> Username : </td> <td> {{ ShowUser.name }}</td> </tr>
<tr>
<td> <i class="fas fa-transgender"> </i> Gendre   : </td><td> {{ ShowUser.gendre}}  </td> </tr>
<tr>
<td> <i class="fas fa-envelope"> </i> Email : </td><td>{{ ShowUser.email}}</td> </tr>



<tr v-if="ShowUser.learner==1" >
    <td> <i class="fas fa-id-card-alt "> </i>  learner   : </td> <td>  {{  ShowUser.lang_field }}  </td> </tr>

    <tr v-if="ShowUser.learner==1" >   
        
         <td> <i class="fas fa-id-card-alt "> </i>  Level   : </td> <td v-if="ShowUser.level == 0">  Not yet  </td> 
         <td v-else>  {{ ShowUser.level }}  </td> 
            </tr>




<tr v-else >
    <td> <i class="fas fa-id-card-alt "> </i> Teacher / Speaker : </td><td> {{  ShowUser.lang_field }} </td> </tr>

    



<tr>
<td> <i class="fas fa-phone"> </i> Phone : </td><td>{{ ShowUser.phone}}</td> </tr>


<tr>
<td> <i class="fas fa-sitemap"> </i> Country : </td><td>{{ ShowUser.country}}</td> </tr>
<tr>
<td> <i class="fas fa-map-marker-alt"> </i> Adresse : </td><td>{{ ShowUser.adresse}}</td> </tr>




               </table>

                            </div>
                            
                        </div>
                    </div>
                </div>
</template>

<script>
export default {
    props:['ShowUser']  ,
    methods : {


    }  


}
</script>