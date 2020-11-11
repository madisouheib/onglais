@extends('dash.lay.app')

@section('content')

      <!-- [ visitor section ] start -->


  
      <div class="card">

        @if( $count_test == 0  )
        <div class="alert alert-warning" role="alert">
        <h6 style=" font-style: italic;">  You didn't pass the test of level  yet please click on this button ...  <a  style="float: right;" class=" btn btn-glow-warning btn-warning"   href="{{ url('/admin/levels')}}"> Speaking test <i class="fas fa-filter"></i>  </a> </h5>   
          </div>

        
@else
<div class="alert alert-primary" role="alert">
    <h6 style=" font-style: italic;">   Congratulations! You have passed your test. Now, time to book for your session
        Click on this button ...  <a  style="float: right;" class=" btn btn-glow-primary btn-primary"   href="{{ url('/admin/sessions')}}"> Reservation  <i class="fas fa-chalkboard-teacher"></i>  </a> </h5>   
      </div>

@endif
 
           

         

        <form action="{{ route('profile.update_profile')}} " method="POST" enctype="multipart/form-data"  >
                                         
            {{ csrf_field()}}
               
                             <div class=" text-center">
                                  <img class="img-responsive rounded-circle  " style="height:100px;width:100px;margin-top:1%;" src="@if($profile->avatar == '')
                                  @if($profile->gendre == 'male')
  /dash/assets/images/user/avatar-2.jpg

                                  @else 
                                  /dash/assets/images/user/avatar-1.jpg

                                  @endif
                                
                                  @else 
                                  {{$profile->avatar}}
                                  
                                  @endif"> <br>
                                  <span class="badge badge-info">Learner </span> 
                                  <h3 class="text-center"> Hi' {{  $profile->name    }} </h3>     
                             
                            <input type="file" style="margin:auto;" class="form-control col-4" name="avatar">
                           


                            </div>

                   
                                            
                            <table class="table   col-9 " style="margin:auto;" >
                                <tr>  
                                <td class="" style="width:10%; font-weight:bold; "> <i class="fas fa-user-circle"></i> Full Name :  </td>
                                <td class=""> <input class="form-control" name="name" type="text" value="{{  $profile->name    }} "> </td>
                                
                                </tr>
                                <tr>  
                                <td class="" style="font-weight: bold;" > <i class="fas fa-envelope"></i>  Email   :   </td>
                                
                                <td class=""><input class="form-control" name="email" type="email" value="{{  $profile->email    }} "> </td>
                                
                                </tr>
                                
                                <tr>  
                                    <td class="" style="font-weight: bold;" > <i class="fas fa-unlock-alt"></i> Old Password    :   </td>
                                    
                                    <td class=""><input class="form-control" name="oldpassword" type="password" placeholder="please entre your old password .."> </td>
                                    
                                    </tr>
                                <tr> 
                                    <tr>  
                                        <td class="" style="font-weight: bold;" > <i class="fas fa-user-lock"></i>  New Password    :   </td>
                                        
                                        <td class=""><input class="form-control" name="newpassword" placeholder="please entre your new password .. " type="password"> </td>
                                        
                                        </tr>
                                    <tr>  
                                    <td class="" style="font-weight: bold;" > <i class="fas fa-transgender"></i> Gendre  </td>
                                    
                                    
                                    <td class="">  
                                
                                <select class="form-control" name="gendre">
                                 <option selected> {{  $profile->gendre    }} </option>
                                <option> Male</option>
                                <option> Female</option>
                                
                                </select>
                                
                                    </td>
                                    
                                    </tr>
                                    <tr>  
                                        <td class="" style="font-weight: bold;" ><i class="fas fa-map-signs"></i>  Country :   </td>
                                        
                                        
                                        <td class=""> <select class="form-control"  name="country">
                                            <option selected>{{  $profile->country    }} </option>
                                        <option selected>  </option>
                                        <option selected>  </option>
                                        </select></td>
                                        
                                        </tr>
                                
                                        <tr>  
                                            <td class="" style="font-weight: bold;" ><i class="fas fa-language"></i> Learn :  </td>
                                            
                                            
                                            @if($profile->learner == 1) 
                                            <td class=""> 
                                              @if($count == 1)
                                              <label class="badge badge-warning" > {{  $langs->lang_field    }}  </label><br>
                                              <label> Second  Language : </label>
                                              <select class="form-control" name="learn_second">
                                                  @foreach($languages as $ln)
                                                  
                                                  <option value=" {{  $ln->id_lang    }}"> {{  $ln->lang_field    }}  </option>  
                                                  @endforeach
                                                 
                                                  </select>
                                              @elseif($count == 2)
                                              @foreach($langs as $lang)
                                              <label class="badge badge-warning"> {{  $lang->lang_field    }}   </label><br>
                                            

                                                  @endforeach
                                              @else 

                                              <label> Fisrt Language : </label>
                                              <select class="form-control" name="learn_first">
                                                @foreach($languages as $ln)
                                              <option value=" {{  $ln->id_lang    }}">  {{ $lang->lang_field  }}</option>
                                          @endforeach

                                          </select> <br>
                              
                                          <label> Second  Language : </label>
                                          <select class="form-control" name="second_lang">
                                              <option> </option>    
                                              </select>
                                      


                                              @endif
                                             
                                        
                                        
                                        </td>
                                        @elseif($profile->learner == 0) 
                                        <td class=""> 
                                                
                                            <label> Teach : </label> 

                                            <label class="badge badge-warning"> {{  $langteacher->lang_field    }}   </label> <br>
                            
                                        <label> Learn : </label> 
                                        @if($count == 1)
                           
                                        <label class="badge badge-warning"> {{  $langs->lang_field    }}   </label><br>
                                      

                                   
                                    
                                    @else 

                                    <select class="form-control" name="learn_second">
                                        @foreach($languages as $ln)
                                              
                                        <option value=" {{  $ln->id_lang    }}"> {{  $ln->lang_field    }}  </option>  
                                        @endforeach
                                        </select>
                                    @endif
                                    
                                    </td>

                                        @endif
                                            
                                            </tr>
                                            <tr>  
                                                <td class="" style="font-weight: bold;" ><i class="fab fa-facebook-square"></i>  Facebook :   </td>
                                                
                                                
                                                
                                                <td class=""> <input class="form-control" type="text" name="fb" value="{{  $profile->url_fb    }} " > </td>
                                                
                                                </tr>
                                                <tr>  
                                                    <td class="" style="font-weight: bold;"><i class="fab fa-whatsapp"></i> Phone :   </td>
                                                    
                                                    <td class=""> <input class="form-control" type="number" name="phone" value="{{  $profile->phone    }} "></td>
                                                    
                                                    </tr>
                                                    <tr>  
                                                        <td class="" style="font-weight: bold;" ><i class="fab fa-skype"></i> Skype :   </td>
                                                        
                                                        
                                                        <td class=""> <input class="form-control" name="skype" type="text" value="{{  $profile->skype    }} " ></td>
                                                        
                                                        </tr>
                                
                                
                                
                                
                                                             </table>                     


                                                             <div class="card-footer">  <button style="float: right" class=" btn btn-success btn-glow-success  " type="submit" > Update <i class="fas fa-sync"></i></button> </div>


        </form>




                       
      </div>
         

@endsection