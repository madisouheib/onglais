@extends('dash.lay.app')

@section('content')

      <!-- [ visitor section ] start -->

      <div class="card">
      	

<div class="row">



                             

             <div class="col-xl-12 col-md-12">
                 
                                             <div class="card code-table">
                                        <div class="card-header">
                                            <h5> <i class="fas fa-chalkboard-teacher"></i> My Sessions  </h5>
                                            <div class="card-header-right">
                                                <div class="btn-group card-option">
                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-more-horizontal"></i>
                                                    </button>
                                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block pb-0">
                                            @if (count($data_session) == 0)
                                            <div class="alert alert-primary"  style="height: 89px;" role="alert">
                                                <h6 style=" font-style: italic;">   Congratulations! You have passed your test. Now, time to book for your session
                                                    Click on this button ...  <a  style="float: right;" class=" btn btn-glow-primary btn-primary"   href="{{ url('/admin/sessions')}}"> Reservation  <i class="fas fa-chalkboard-teacher"></i>  </a> </h5>   
                                                  </div>
                                        @endif
                                            
                                          <div class="row">
                                        
                                            @foreach($data_session as $data)                          
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

    <div class="card text-center">
   
        <div class="card-header">
            <h3 style="color:#52565e;">  <i class="fas fa-language"> </i>  {{   $data->lang_field }}  </h3>   
        </div>
    <img class="card-img-top"  style="height: 350px;"  src="{{ url('/dash/img/meeting.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">  <i class="fas fa-th-list"> </i> Level : {{   $data->field_level }}   </h5>
@if($data->zoom_link == '')
<button href=""  class="btn btn-warning" disabled> Pending  <i class="fas fa-clock"> </i></button>

@else

<a href="{{$data->zoom_link }}" target="_blank"  class="btn btn-primary"> Zoom Meeting Link  <i class="fas fa-chalkboard-teacher"> </i></a>

@endif
        </div>
        <div class="card-footer text-muted">
            <h5>           <i class="fas fa-calendar-alt"></i> Day : {{   $data->day_week }}    <br>

                <i class="fas fa-clock"></i>    Time :  {{   $data->start_at }}     </h5>

        </div>
      </div>

</div>
@endforeach 




                                          </div>
                                        

                                        </div>
                                    </div>
                                </div>

</div>


      </div>
                            

@endsection