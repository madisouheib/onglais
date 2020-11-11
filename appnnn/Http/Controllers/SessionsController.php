<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sessions;
use App\Reservation;
use App\User;
use App\Languages;
use App\Learners;
use App\LevelList;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{




	public function index(){
        $id = Auth::id();
$Count = Reservation::where('id_learner','=',$id)->count();

    return view('dash.sessions')->with('count_session',$Count);


    }
    public function teacher_session(){

        $id = Auth::id();
        $DataTeacher  = Sessions::leftJoin('languages','languages.id_lang','sessions.id_lang')->leftJoin('levels','levels.id_level','sessions.id_level')->where('id_teacher','=',$id)->get();
        return view('dash.teaching')->with('data_session',$DataTeacher);


    }


    public function session_data($id){
$FetchUser = User::find($id);

$Group = $FetchUser['learner'];

if($Group == 3 ){

    $DataSession = Sessions::select('levels.*', 'languages.*','sessions.*')->leftJoin('languages','languages.id_lang','sessions.id_lang')->leftJoin('levels','levels.id_level','sessions.id_level')->withCount('reservation')->paginate(10);




}else {

$Getlang = LevelList::leftJoin('level_test','level_test.id_test','list_level_test.id_test')->where('list_level_test.id_learner','=',$id)->whereNotNull('list_level_test.id_level')->pluck('id_lang')->toArray();

$GetLevels = LevelList::leftJoin('level_test','level_test.id_test','list_level_test.id_test')->where('list_level_test.id_learner','=',$id)->whereNotNull('list_level_test.id_level')->pluck('id_level')->toArray();
$DataSession = Sessions::select('levels.*', 'languages.*','sessions.*')->leftJoin('languages','languages.id_lang','sessions.id_lang')->leftJoin('levels','levels.id_level','sessions.id_level')->withCount('reservation')->whereIn('sessions.id_level',$GetLevels)->whereIn('sessions.id_lang',$Getlang)->paginate(10);




}


return response()->json($DataSession);
    

        }



public function add_session(Request $request){



    $idlang = request('idlang');
    $tester = request('idtester');
    $dateoftest = request('dateoftest');
    $timeofstart= request('timeofstart');
    $duration= request('duration');
    $nbstudentmax = request('studentmax');
    $nbstudentmin = request('studentmin');
    $idlevel = request('idlevel');
    $zoom = request('zoom');
   //dd($timeofstart);
   $dayOfWeek = date("l", strtotime($dateoftest));


        Sessions::create([
                'id_lang' => $idlang,
                'id_teacher' => $tester,
                'date_session' => $dateoftest,
                'start_at'=> $timeofstart,
                'time_session'=> $duration,
                'nb_session'=> $nbstudentmin,
                'nb_extrat'=> $nbstudentmax,
                'day_week'=>$dayOfWeek,
                'zoom_link'=>$zoom,
                'id_level'=>$idlevel
   
            ]);
    



}

public function delete_session($id){


    $DeleteSession  = Sessions::find($id);
    $DeleteSession->delete();



}



public function list_paticipants($id){



    return view('dash.list_users_session');

}



//participants list 

public function list_participants_session($id){

$DataParticipants=  Reservation::leftJoin('users','users.id','reservation.id_learner')->where('id_session','=',$id)->paginate(10);




return response()->json($DataParticipants);


}

public function add_session_reservation(Request $request){


    $idtest = request('idtest');
    $idlearner= request('idlearner');

    Reservation::create([
        'id_session' => $idtest,
        'id_learner' => $idlearner

      

    ]);

    
}

public function show_card_session(){



  //return view('dash.reservation');
    
    $id = Auth::id();

 
    $FetchUser = User::find($id); 

    $type = $FetchUser['learner'];


$Count = Reservation::where('id_learner','=',$id)->count();

$FetchSessionUser = Reservation::leftJoin('users','users.id','reservation.id_learner')->leftJoin('sessions','sessions.id_session','reservation.id_session')->leftJoin('levels','levels.id_level','sessions.id_level')->leftJoin('languages','languages.id_lang','sessions.id_lang')->where('users.id','=',$id)->get();

    //dd($FetchSessionUser);

    return view('dash.reservation')->with('count_test',$Count)->with('data_session',$FetchSessionUser);

}
public function add_session_user(Request $request){




    $idsession = request('idsession');
    $email= request('email');

    $count  = User::where('email','=',$email)->count();

    if($count > 0 ){



 
$GetId  = User::where('email','=',$email)->first();

$ide = $GetId['id'];

    Reservation::create([
        'id_session' => $idsession,
        'id_learner' => $ide

      

    ]);
}
}

public function delete_session_user($id){


    $DeleteReervation  = Reservation::find($id);
    $DeleteReervation->delete();   

}


    //
}
