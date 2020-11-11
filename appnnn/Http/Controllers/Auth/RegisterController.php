<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Learners;
use App\Teachers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers,HasRoles;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function role()
    {

$id = '646' ;

$user = User::find($id);

$role1 = 'super-admin';

$user->syncRoles('super-admin');
//$user->syncRoles('super-admin');
    
    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'gendre' => ['required'],
       
            'country' => ['required'],
    
            'lang' => ['required'],
            'reason' => ['required'],
             'learner' => ['required'],
        ]);





    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


         $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
 
            'gendre' => $data['gendre'],
             'reason' => $data['reason'],
                   'learner' => $data['learner'],
         
            'password' => Hash::make($data['password']),
                'country' => $data['country']


        
        ]);

         if($data['learner'] == 1){
  Learners::create([
            'id_lang' => $data['lang'],
            'id_learner' => $user->id 
            

        
        ]);


         }else {

  Teachers::create([
            'id_lang' => $data['lang'],
            'id_teacher' => $user->id 
            

        
        ]);
         }

      

return $user ;

    }
}
