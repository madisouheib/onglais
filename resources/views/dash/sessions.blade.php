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
                                   
@if($count_session > 1)

<div class="alert alert-success" role="alert" style="height: 80px;">
your session' reservation has been done successfully. to see more details click on this button  <a href="{{ url('/admin/myses') }}" style="float: right;" class="btn btn-glow-success btn-success"> My Sessions <i class="fas fa-chalkboard-teacher"></i> </a>
  </div>



@else 



    <sessions-table   :user_id='@json( Auth::user()->id )' :user_level='@json( Auth::user()->learner )' ></sessions-table>




@endif

                                        </div>
                                    </div>
                                </div>

</div>


      </div>
                            

@endsection