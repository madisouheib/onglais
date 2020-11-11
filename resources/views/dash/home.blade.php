@extends('dash.lay.app')

@section('content')

      <!-- [ visitor section ] start -->

      <div class="card">
      	
<div class="card-block">
	       
                    <div class="card-header">
                        <h5>Dashboard </h5>
                     




</div>
<div class="row">

    <div class="col-md-12 col-xl-4">
                                    <div class="card theme-bg visitor">
                                        <div class="card-block text-center">
                                            <img class="img-female" src="/dash/assets/images/user/user-1.png" alt="visitor-user">
                                            <h5 class="text-white m-0">TOTAL VISITORS</h5>
                                            <h3 class="text-white m-t-20 f-w-300">235</h3>
                                            <span class="text-white">10% More than last Month</span>
                                            <img class="img-men" src="/dash/assets/images/user/user-2.png" alt="visitor-user">
                                        </div>
                                    </div>
                          
                                </div>

    <div class="col-md-12 col-xl-4">
                                    <div class="card theme-bg visitor" style="background-color: #000000;
background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);">
                                        <div class="card-block text-center">
                                            <img class="img-female" src="/dash/assets/images/user/user-1.png" alt="visitor-user">
                                            <h5 class="text-white m-0">TOTAL  REGISTRANTS</h5>
                                            <h3 class="text-white m-t-20 f-w-300">235</h3>
                                            <span class="text-white">20% More than last Month</span>
                                            <img class="img-men" src="/dash/assets/images/user/user-2.png" alt="visitor-user">
                                        </div>
                                    </div>
                          
                                </div>


                                    <div class="col-md-12 col-xl-4">
                                    <div class="card theme-bg visitor" style="background-color: #000000;
background-image: linear-gradient(315deg, #000000 0%, #b82e1f 74%);">
                                        <div class="card-block text-center">
                                            <img class="img-female" src="/dash/assets/images/user/user-1.png" alt="visitor-user">
                                            <h5 class="text-white m-0">TOTAL PARTICIPANTS</h5>
                                            <h3 class="text-white m-t-20 f-w-300">235</h3>
                                            <span class="text-white">10% More than last Month</span>
                                            <img class="img-men" src="/dash/assets/images/user/user-2.png" alt="visitor-user">
                                        </div>
                                    </div>
                          
                                </div>


                                </div>

             <div class="col-xl-12 col-md-12">
                                             <div class="card code-table">
                                        <div class="card-header">
                                            <h5>Recent Subscribers</h5>
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
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Id Number</th>
                                                            <th>Code</th>
                                                            <th>Date</th>
                                                            <th>learners</th>
                                                            <th>Budget</th>
                                                            <th>Status</th>
                                                            <th class="text-right">Rating</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h6 class="mb-1">#467</h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-1">8765482</h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="m-b-0">Nov 14, 2017</h6>
                                                            </td>
                                                               <td>
                                                                <h6 class="mb-1">Mohammed </h6>
                                                            </td>
                                                            <td>

                                                                <h6 class="m-b-0">$ 874.23</h6>
                                                            </td>
                                                            <td><a href="#!" class="label theme-bg f-12 text-white">Active</a></td>
                                                            <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <h6 class="mb-1">#466</h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-1">2366482</h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="m-b-0">Nov 13, 2017</h6>
                                                            </td>
                                                              <td>
                                                                <h6 class="mb-1">Ammar </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="m-b-0">$ 235.34</h6>
                                                            </td>
                                                            <td><a href="#!" class="label theme-bg2 f-12 text-white">Not Active</a></td>
                                                            <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <h6 class="mb-1">#465</h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-1">8832638</h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="m-b-0">Oct 14, 2017</h6>
                                                            </td>

                                                              <td>
                                                                <h6 class="mb-1">Khoukha  </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="m-b-0">$ 233.46</h6>
                                                            </td>
                                                            <td><a href="#!" class="label theme-bg f-12 text-white">Active</a></td>
                                                            <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="mb-1">#464</h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-1">9632638</h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="m-b-0">Dec 17, 2017</h6>
                                                            </td>
                                                              <td>
                                                                <h6 class="mb-1">Wassima </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="m-b-0">$ 133.46</h6>
                                                            </td>
                                                            <td><a href="#!" class="label theme-bg2 f-12 text-white">Not Active</a></td>
                                                            <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="mb-1">#463</h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-1">3332538</h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="m-b-0">July 14, 2017</h6>
                                                            </td>
                                                              <td>
                                                                <h6 class="mb-1">Ikram </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="m-b-0">$ 244.46</h6>
                                                            </td>
                                                            <td><a href="#!" class="label theme-bg f-12 text-white">Active</a></td>
                                                            <td class="text-right"><a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-c-yellow"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                                <a href="#!"><i class="fa fa-star f-18 text-black-50"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

</div>


      </div>
                            

@endsection