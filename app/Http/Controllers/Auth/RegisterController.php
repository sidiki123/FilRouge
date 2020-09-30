<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Notifications\RegisteredUser;
use App\Role;
use Illuminate\Notifications\Notifiable;

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

    use RegistersUsers;
use Notifiable;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    function register(Request $request){
        $this->validator($request->all())->validate();
        event(new Registered( $user=$this->create($request->all())));
        $user->notify(new RegisteredUser);
        return redirect('/login')->with('success','Votre compte a été crée, veuillez verifier votre boite mail');
    }
    
    public function confirm($id, $token){
        $user= User::where('id', $id)->where('confirmation_token',$token)->first();
        if($user){
            $user->update(['confirmation_token'=>null]);
            $this->guard()->login($user);
            return redirect($this->redirectPath())->with('success','Votre compte a été confirmé');
        }
        else{
            return redirect('/login')->with('error','ce lien semble invalide');
        }
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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create( array $data)
    {
       
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'confirmation_token'=> str_replace('/','', bcrypt(Str::random(16))),
            
        ]);
        $role = new Role(['name' => 'visiteur']);
        $user->roles()->save($role);
        return $user;
    }

   
}
