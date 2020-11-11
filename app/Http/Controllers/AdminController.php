<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Learners;
use App\Teachers;
use App\Languages;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{





	  public function index()
    {



        if (Auth::check()) {
        

            $groups =    Auth::user()->learner;
if($groups === 3 ){


    return view('dash.home');

}else   {


    $id = Auth::id();
$FetchLang = Languages::all();
    $profile = User::find($id);
if($groups == 1 ){

    $Countlangs  = Learners::where('id_learner','=',$id)->count();
    if($Countlangs > 1) {
    $langs  = Learners::join('languages','languages.id_lang' , '=', 'learners.id_lang')->where('id_learner','=',$id)->get();
    }else {

        $langs  = Learners::rightJoin('languages','languages.id_lang' , '=', 'learners.id_lang')->where('id_learner','=',$id)->first();

    }

}elseif($groups == 0 ){

    $Countlangs  = Learners::where('id_learner','=',$id)->count();


        $langs  = Learners::rightJoin('languages','languages.id_lang' , '=', 'learners.id_lang')->where('id_learner','=',$id)->first();




   
  $Teacherlang = Teachers::rightJoin('languages','languages.id_lang' , '=', 'tachers.id_lang')->where('id_teacher','=',$id)->first();
    

    

            $Count = User::leftJoin('learners','learners.id_learner','users.id')->where('id','=',$id)->whereNull('learners.id_level')->count();

            return view('dash.profile')->with('profile',$profile)->with('count',$Countlangs)->with('langs',$langs)->with('languages',$FetchLang)->with('count_test',$Count)->with('langteacher',$Teacherlang);

    
}

$Count = User::leftJoin('learners','learners.id_learner','users.id')->where('id','=',$id)->whereNull('learners.id_level')->count();

    return view('dash.profile')->with('profile',$profile)->with('count',$Countlangs)->with('langs',$langs)->with('languages',$FetchLang)->with('count_test',$Count);


}

           


        }else {


       return redirect('/login');

        }
       
    }



    public function update_profile(Request $request){
        $id = Auth::id();
        $profile =  User::find($id);
        $groups =    Auth::user()->learner;
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $avatar_new_name = time().$avatar->getClientOriginalName();
            $avatar->move('uploads/avatar/',$avatar_new_name);
            $profile->avatar = '/uploads/avatar/'.$avatar_new_name;
            $profile->save();
    
        }



        $profile->name = $request->name;
       
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->gendre = $request->gendre;
        
        $profile->country = $request->country;
        $profile->url_fb = $request->fb;
        $profile->skype = $request->skype;

        $OldPassword = $request->oldpassword;

        $NewPassword = $request->newpassword;
if(isset($NewPassword)){

  

    if($NewPassword == $OldPassword) {


        $profile->password = Hash::make($NewPassword) ; 

    }


}







if($groups == 1) {

$lang_first =    $request->learn_first;
$lang_second =    $request->learn_second;

    $Count = Learners::where('id_learner','=',$id)->count();

if( $Count == 1 ){

    if(isset($lang_second)){

     
     

         Learners::create([
            'id_lang' => $lang_second,
            'id_learner' => $id
           

        ]);
        }

        if(isset($lang_first)){
            $lang =  Learners::where('id_learn','=',$id)->fisrt();
            $lang->id_lang = $lang_first;
             $lang->save();
            }
 

}elseif($Count > 1) {
    if(isset($lang_second)){
        $lang =  Learners::where('id_learn','=',$id)->latest()->fisrt();
        $lang->id_lang = $lang_second;
         $lang->save();
        }



}

 



}else {

    $lang_second =    $request->learn_second;
    $lang_teacher =    $request->learn_teacher;

    $Count = Learners::where('id_learner','=',$id)->where('id_lang','',$lang_second)->count();
    if(isset($lang_teacher)){ 

$teacher = Teachers::find($id);

$teacher->id_lang = $lang_teacher ;
$teacher->save();

    }
if($Count > 0){

    if(isset($lang_second)){ 
        $learner = Learners::find($id);
$learner->id_lang = $lang_second ; 

    }


}else {

    if(isset($lang_second)){ 
   
        Learners::create([
            'id_lang' => $lang_second,
            'id_learner' => $id
           

        ]);



    }



}
    




}
       




        



       
        $profile->save();
  

        return back();

    }
public function soon(){

    return view('dash.soon');



}



}
