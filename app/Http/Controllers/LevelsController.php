<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LevelList;
use App\User;
use App\levels;
use App\Languages; 
use App\LavelLang;
use App\Learners;
use Illuminate\Support\Facades\Auth;
class LevelsController extends Controller
{


public function index(){
    



    $Count_users = User::where('learner','=','1')->count();
    $Count_reserve = LevelList::where('id_level','=',null)->count();
    $Count_test = LevelList::where('id_level','!==',null)->count();

    $Count_not_tested = $Count_users - $Count_test ; 
    
       return view('dash.levels')->with('count_not_tested',$Count_not_tested)->with('count_tested',$Count_test)->with('count_reserve',$Count_reserve);



}

public function close_level(Request $request){

    $id = request('idsession');
    $GetLevel = levels::find($id);
    
    
    $GetLevel->closed = true;
    $GetLevel->save();




}

public function resutl_show($userid,$idtest){


$showUserResult = LevelList::leftJoin('level_test', 'level_test.id_test', '=', 'list_level_test.id_test')->leftJoin('levels', 'levels.id_level', '=', 'list_level_test.id_level')->leftJoin('languages', 'languages.id_lang', '=', 'level_test.id_lang')->where('list_level_test.id_learner','=',$userid)->where('list_level_test.id_test','=',$idtest)->first();
//dd($showUserResult);
return response()->json($showUserResult);


}



public function list_levels($id){
$idlevel = User::find($id);

$level = $idlevel['learner'];
if($level == 3 ){


    $levels = levels::select('level_test.*', 'languages.lang_field')->leftJoin('languages', 'languages.id_lang', '=', 'level_test.id_lang')->withCount('test')->orderBy('id_test', 'desc')->paginate(30);

}elseif($level ==  1  ){

$ListLang = User::leftJoin('learners', 'learners.id_learner', '=', 'users.id')->where('users.id','=',$id)->pluck('id_lang')->toArray();


    $levels = levels::select('level_test.*', 'languages.lang_field')->leftJoin('languages', 'languages.id_lang', '=', 'level_test.id_lang')->withCount('test')->whereIn('level_test.id_lang',$ListLang)->orderBy('id_test', 'desc')->paginate(20);

  


}else {


   



}

return response()->json($levels);

}



public function list_users_level($id){

$Listusers = LevelList::leftJoin('users', 'users.id', '=', 'list_level_test.id_learner')->leftJoin('levels', 'levels.id_level', '=', 'list_level_test.id_level')->where('id_test','=',$id)->orderBy('users.id', 'desc')->paginate(10); 

return response()->json($Listusers);
}


public function update_level_absent(){

$id = request('id');
    $GetLevel = LevelList::find($id);
    
    
    $GetLevel->absent = 1;
    $GetLevel->save();


}

public function add_user_level(Request $request){

  $email =   request('email');
  $idtest =   request('idtest');

$idlevel =  request('idlevel');

  $getUser = User::where('email','=',$email)->first();
  $timetest =  request('timetest');
  $CountUser = LevelList::where('id_learner','=',$getUser['id'])->where('id_test','=',$idtest)->count();
  
  if($CountUser == 0) {
      
      

      
       LevelList::create([
    'id_test' => $idtest,
    'id_learner' => $getUser['id'],
    'time_test_user'=> $timetest,
    'id_level'=>$idlevel
   

]); 
      
  } 




}

public function delete_batch($id){

    $deletBatch  = levels::find($id);
    $deletBatch->delete();


}


public function user_show_add($id){

    $ShowUSer  = levels::find($id);
   
    return response()->json($ShowUSer);


}



public function update_level(){
$id = request('id') ; 
$GetLevel = LevelList::find($id);

$idlearner = $GetLevel['id_learner'];
$idtest = $GetLevel['id_test'];

$FetchLang = LevelList::leftjoin('level_test','level_test.id_test','list_level_test.id_test')->where('list_level_test.id_test','=',$idtest)->first();

$idlang = $FetchLang['id_lang'];
$UpdateLearner = Learners::where('id_learner','=',$idlearner)->where('id_lang','=',$idlang)->first();

$UpdateLearner->id_level =request('idlevel');
$UpdateLearner->save();


$GetLevel->id_level =request('idlevel');
$GetLevel->save();


}



public function delete_users_level($id){


    $delUser  = LevelList::find($id);
    $delUser->delete();

return true ;
}


public function show_user_level($id){

    $ShowUSer  = LevelList::leftJoin('users', 'users.id', '=', 'list_level_test.id_learner')->where('id_test_level','=',$id)->first();
   
    return response()->json($ShowUSer);


}



public function data_lang_tester($id){
    
  
    $testers = Languages::leftJoin('tachers', 'tachers.id_lang', '=', 'languages.id_lang')->leftJoin('users', 'users.id', '=', 'tachers.id_teacher')->where('languages.id_lang','=',$id)->get();
  
    return response()->json($testers);


}
public function list_lev_users(){

$SelectLevels = LavelLang::all();

return response()->json($SelectLevels);

    
}
public function show_meeting($id,$idses){
    

$SelectMeeting = LevelList::select('level_test.*', 'languages.lang_field','list_level_test.time_test_user')->leftJoin('level_test', 'level_test.id_test', '=', 'list_level_test.id_test')->leftJoin('languages', 'languages.id_lang', '=', 'level_test.id_lang')->where('list_level_test.id_learner','=',$id)->where('level_test.id_test','=',$idses)->first();
$dayOfWeek = date("l", strtotime($SelectMeeting['date_test']));
$SelectMeeting['day_test'] = $dayOfWeek; 
return response()->json($SelectMeeting);

}
public function get_status($id){

    //$idtest= request('idtest'); 
//dd($idtest);
$Get = LevelList::where('id_learner','=',$id)->pluck('id_test')->toArray();



return response()->json($Get);


}


public function list_levels_reserve($id){



    
    $Count_tested = LevelList::where('id_test','=',$id)->where('id_level','!==',null)->count();
    $Count_reserve = LevelList::where('id_test','=',$id)->count();


    
       return view('dash.level_test')->with('count_tested',$Count_tested)->with('count_reserve',$Count_reserve);


    



}
public function add_reservation (Request $request){


 
    

    $idtest = request('idtest');
    $idlearner= request('idlearner');
    $duration= request('duration');



    $CountTest = LevelList::where('list_level_test.id_test','=',$idtest)->count();

    if($CountTest > 0 ){

        
$test  = LevelList::where('list_level_test.id_test','=',$idtest)->latest()->first();
$selectedTime = $test['time_test_user'];
$endTime = strtotime("+".$duration." minutes", strtotime($selectedTime));
$NewTime = date('h:i:s', $endTime);
    
   

    
    }else {
    
        $test  = levels::where('level_test.id_test','=',$idtest)->first();
        $selectedTime = $test['time_test'];
    
    
        $endTime = strtotime("+".$test['duration']." minutes", strtotime($selectedTime));
    $NewTime = date('h:i:s', $endTime);
    
    }







    LevelList::create([
        'id_test' => $idtest,
        'id_learner' => $idlearner,
        'time_test_user'=> $NewTime
       

    ]);



}
public function add_unit(Request $request){


    $idlang = request('idlang');
    $tester = request('idtester');
    $dateoftest = request('dateoftest');
    $timeofstart= request('timeofstart');
    $duration= request('duration');
    $nbofstudent = request('nbofstudent');
    $skype = request('skype');
   //dd($timeofstart);
   $dayOfWeek = date("l", strtotime($dateoftest));


        levels::create([
                'id_lang' => $idlang,
                'id_tester' => $tester,
                'date_test' => $dateoftest,
                'time_test'=> $timeofstart,
                'duration'=> $duration,
                'nb_test'=> $nbofstudent,
                'day_test'=>$dayOfWeek,
                'skype_test'=>$skype
   
            ]);
    



    }

    public function infos_book($idtest){

$CountTest = LevelList::where('list_level_test.id_test','=',$idtest)->count();

if($CountTest > 0 ){
    $test  = LevelList::rightJoin('level_test', 'level_test.id_test', '=', 'list_level_test.id_test')->leftJoin('languages', 'languages.id_lang', '=', 'level_test.id_lang')->where('list_level_test.id_test','=',$idtest)->latest()->first();
    $selectedTime = $test['time_test_user'];
    $endTime = strtotime("+".$test['duration']." minutes", strtotime($selectedTime));
$NewTime = date('h:i:s', $endTime);




}else {

    $test  = levels::where('level_test.id_test','=',$idtest)->first();
    $selectedTime = $test['time_test'];


    $endTime = strtotime("+".$test['duration']." minutes", strtotime($selectedTime));
$NewTime = date('h:i:s', $endTime);

}

$dayOfWeek = date("l", strtotime($test['date_test']));



       $DataDisplay = [
'time_book'=> $NewTime,
'day_test'=>$dayOfWeek


] ; 


return response()->json($DataDisplay);


    }


}
