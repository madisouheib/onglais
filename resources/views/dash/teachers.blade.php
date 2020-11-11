@extends('dash.lay.app')

@section('content')

      <!-- [ visitor section ] start -->


  
      <div class="card">
       

<div class="row">
                 

             <div class="col-xl-12 col-md-12">

                                             <div class="card code-table">
                                                 <div class="row" style="margin-top:1%; ">
                                                <div class="col-md-12 col-xl-6 col-sm-12 ">
                                                    <div class="card theme-bg visitor">
                                                        <div class="card-block text-center">
                                                            <img class="img-female" src="/dash/assets/images/user/user-1.png" alt="visitor-user">
                                                            <h5 class="text-white m-0">TOTAL STUDENTS</h5>
                                                        <h3 class="text-white m-t-20 f-w-300">{{ $count_students}}</h3>
                                                          
                                                            <img class="img-men" src="/dash/assets/images/user/user-2.png" alt="visitor-user">
                                                        </div>
                                                    </div>
                                            
                                                </div>
                                            
                                            <div class="col-md-12 col-xl-6 col-sm-12">
                                                    <div class="card theme-bg visitor" style="background-color: #000000;
                                            background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);">
                                                        <div class="card-block text-center">
                                                            <img class="img-female" src="/dash/assets/images/user/user-1.png" alt="visitor-user">
                                                            <h5 class="text-white m-0">TOTAL  TEACHERS</h5>
                                                            <h3 class="text-white m-t-20 f-w-300">{{ $count_teachers}}</h3>
                                                            
                                                            <img class="img-men" src="/dash/assets/images/user/user-2.png" alt="visitor-user">
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                    
                                        <div class="card-header">
                                            <h5> <i class="fas fa-users"> </i> Teachers' Space</h5>
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
                                            <div class="table-responsive">
                   
                                 

                                                    <teachers-table></teachers-table>
                                            
                                            



                                            </div>
                                        </div>
                                    </div>
                                </div>

</div>



                       
      </div>
         

@endsection