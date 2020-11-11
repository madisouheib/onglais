<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Languages;
use App\Learners;
use App\Teachers;
use App\LevelList;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{


public function learners(){

$Count_Techers = Teachers::all()->count();
$Count_Students= Learners::all()->count();

   return view('dash.learners')->with('count_teachers',$Count_Techers)->with('count_students',$Count_Students);


}


public function profile(){

 
   
      return view('dash.profile');
   
   
   }



public function teachers(){

   $Count_Techers = Teachers::all()->count();
   $Count_Students= Learners::all()->count();
   
      return view('dash.teachers')->with('count_teachers',$Count_Techers)->with('count_students',$Count_Students);
   
   
   }


public function data_teachers(){

    
   $users = User::where('learner','=',0)->orderBy('id', 'desc')->paginate(10);
 
 
  
         return response()->json($users);
 
 
 }
 public function data_learners(){

    
   $users = User::where('learner','=',1)->orderBy('id', 'desc')->paginate(10);
 
 
  
         return response()->json($users);
 
 
 }

 public function data_country(){

   $country = User::groupBy('country')->pluck('country');

   return response()->json($country);
 }


 public function data_lang(){

    
   $lang = Languages::orderBy('id_lang', 'desc')->get();
   

 
  
         return response()->json($lang);
 
 
 }

 public function data_filtre_users_lang($id){

   if($id == 0 ){

      $users = User::where('learner','=','1')->orderBy('id', 'desc')->paginate(10);
      

   } else {

      $users = User::leftJoin('learners', 'users.id', '=', 'learners.id_learner')->leftJoin('tachers', 'users.id', '=', 'tachers.id_teacher')->where('learners.id_lang','=',$id)->where('learner','=','1')->orderBy('id', 'desc')->paginate(10);
   


   }

  

 
  
         return response()->json($users);
 
 
 }



 public function data_filtre_teachers_lang($id){

   if($id == 0 ){

      $users = User::where('learner','=','0')->orderBy('id', 'desc')->paginate(10);
      

   } else {

      $users = User::leftJoin('tachers', 'users.id', '=', 'tachers.id_teacher')->where('tachers.id_lang','=',$id)->where('users.learner','=','0')->orderBy('id', 'desc')->paginate(10);
   


   }

  

 
  
         return response()->json($users);
 
 
 }





 public function data_filtre_learner_country($country){

  
   $pays = trim($country);

   if($pays == '0' ){


      $users = User::orderBy('id', 'desc')->paginate(10);
      

   } else {

      $users = User::rightJoin('learners', 'users.id', '=', 'learners.id_learner')->where('users.country','=',$pays)->orderBy('id', 'desc')->paginate(10);
   


   }




 
  
         return response()->json($users);
 
 
 }

public function update_pass_user(Request $request){

   $id = request('id');
   $pincode = request('pincode');
   $newpass = request('newpass');

   
$ShowUSer = User::find($id);
if($pincode == '20200815'){

   $ShowUSer->password =    Hash::make($newpass);
   $ShowUSer->save();


}







}

public function show_profile(){



   $id = Auth::id();
   $FetchLang = Languages::all();
       $profile = User::find($id);

   
       $Countlangs  = Learners::where('id_learner','=',$id)->count();
       if($Countlangs > 1) {
       $langs  = Learners::join('languages','languages.id_lang' , '=', 'learners.id_lang')->where('id_learner','=',$id)->get();
       }else {
   
           $langs  = Learners::rightJoin('languages','languages.id_lang' , '=', 'learners.id_lang')->where('id_learner','=',$id)->first();
   
       }
 
   
   $Count = User::leftJoin('learners','learners.id_learner','users.id')->where('id','=',$id)->whereNull('learners.id_level')->count();
   
       return view('dash.profile')->with('profile',$profile)->with('count',$Countlangs)->with('langs',$langs)->with('languages',$FetchLang)->with('count_test',$Count);
   
   



}



 public function data_filtre_teacher_country($country){

  
   $pays = trim($country);

   if($pays == '0' ){


      $users = User::orderBy('id', 'desc')->paginate(10);
      

   } else {

      $users = User::rightJoin('tachers', 'users.id', '=', 'tachers.id_teacher')->where('users.country','=',$pays)->orderBy('id', 'desc')->paginate(10);
   


   }


//dd($users);

 
  
         return response()->json($users);
 
 
 }










 public  function show_user_email($email){


   $user = User::where('email','=',$email)->paginate(10);
//dd($user);

 return response()->json($user);


}

 public function show_user($id){ 

   $FindUser = User::find($id);

   $Countested = LevelList::leftJoin('levels', 'list_level_test.id_level', '=', 'levels.id_level')->where('id_learner','=',$id)->count();

   if($Countested > 0 ){
   
      $level = LevelList::rightJoin('levels', 'list_level_test.id_level', '=', 'levels.id_level')->where('id_learner','=',$id)->pluck('field_level')->last();
   
   
   }else {
   
   $level = 0; 
   
   }
   

if($FindUser['learner'] == 0 ){

   $users = User::rightJoin('tachers', 'users.id', '=', 'tachers.id_teacher')->join('languages', 'tachers.id_lang', '=', 'languages.id_lang')->where('users.id','=',$id)->first();


}else {

   $users = User::rightJoin('learners', 'users.id', '=', 'learners.id_learner')->join('languages', 'learners.id_lang', '=', 'languages.id_lang')->where('users.id','=',$id)->first();


}
$users['level'] = $level;

return response()->json($users);

 }


}
