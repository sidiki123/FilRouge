<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use App\User;
use Illuminate\Support\Str;
use App\Role;

class AdminController extends Controller
{
    protected $guard = 'Admin';
    use Notifiable;
   
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }


    public function blank_page(){
        return view('Admin/vali-admin-master/docs/blank-page');
    }

    public function bootstrap_components(){
        return view('Admin/vali-admin-master/docs/bootstrap-components');
    }

    public function charts(){
        return view('Admin/vali-admin-master/docs/charts');
    }

    public function dashboard(){
        return view('Admin/vali-admin-master/docs/dashboard');
    }

    public function docs(){
        return view('Admin/vali-admin-master/docs/docs');
    }

    public function form_components(){
        return view('Admin/vali-admin-master/docs/form-components');
    }

    public function form_custom(){
        return view('Admin/vali-admin-master/docs/form-custom');
    }

    public function form_notifications(){
        return view('Admin/vali-admin-master/docs/form-notifications');
    }

    public function form_sample(){
        return view('Admin/vali-admin-master/docs/form-sample');
    }

    

    public function page_calendar(){
        return view('Admin/vali-admin-master/docs/page-calendar');
    }

    public function page_error(){
        return view('Admin/vali-admin-master/docs/page-error');
    }

    public function page_invoice(){
        return view('Admin/vali-admin-master/docs/page-invoice');
    }

    public function page_lockscreen(){
        return view('Admin/vali-admin-master/docs/page-lockscreen');
    }

    public function page_login(){
        return view('Admin/vali-admin-master/docs/page-login');
    }

    public function page_register(){
        return view('Admin/vali-admin-master/docs/page-register');
    }

    public function page_mailbox(){
        return view('Admin/vali-admin-master/docs/page-mailbox');
    }

    public function page_user(){
        return view('Admin/vali-admin-master/docs/page-user');
    }

    public function table_basic(){
        return view('Admin/vali-admin-master/docs/table-basic');
    }

    public function table_data_table(){
        return view('Admin/vali-admin-master/docs/table-data-table');
    }

    public function ui_cards(){
        return view('Admin/vali-admin-master/docs/ui-cards');
    }

    public function widgets(){
        return view('Admin/vali-admin-master/docs/widgets');
    }

    public function register_agence(){
        return view('auth/register-agence');
    }

    public function accueil()
    {
        return view('djoz/index');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register_agence_store(Request $request)
    {
        $user = new User([
            'name' => $request->get('name'),
            'prenom' => $request->get('prenom'),
            'telephone' => $request->get('telephone'),
            'nom_agence' => $request->get('nom_agence'),
            'city' => $request->get('city'),
            'email' => $request->get('email'),
            'password' =>Hash::make($request->get('password')),
            // 'confirmation_token' => str_replace(['/','', bcrypt(Str::random(16))]),
        ]);
        $user->save();
        $role = new Role(['name' => 'agence']);
        $user->roles()->save($role);
        return $user;

       
    }
}
