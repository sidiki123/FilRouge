<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Notifications\Notifiable;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Role;
use Illuminate\Support\Facades\Redirect;

class PermissionController extends Controller
{
	use RegistersUsers;
    use Notifiable;
   
	protected $redirectTo = RouteServiceProvider::HOME; 
	
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
	

	public function page_login(){
        return view('Admin/vali-admin-master/docs/page-login');
    }

    public function page_register(){
        return view('Admin/vali-admin-master/docs/page-register');
	}
	
	public function register_agence(){
        return view('auth/register-agence');
	}
	

	protected function register_agence_store(Request $request)
    {
        $user = new User([
            'name' => $request->get('name'),
            'prenom' => $request->get('prenom'),
            'telephone' => $request->get('telephone'),
            'nom_agence' => $request->get('nom_agence'),
            'email' => $request->get('email'),
            'password' =>Hash::make($request->get('password')),
            // 'confirmation_token' => str_replace(['/','', bcrypt(Str::random(16))]),
        ]);
        $user->save();
        
        $role = new Role(['name' => 'agence']);
        $user->roles()->save($role);
        
        return Redirect()->route('login')->with('user');
        
        
       
	}
}

