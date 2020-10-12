<?php

namespace App\Http\Controllers\Tableau_de_bord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use App\User;
use Illuminate\Support\Str;
use App\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Redirect;
use App\Providers\RouteServiceProvider;
use App\Event;
use App\Categorie;
use Flashy;

class AdminController extends Controller
{
    use RegistersUsers;
    use Notifiable;
   
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

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

    public function dashboard(User $user){
        if( Gate::denies('access')){
            return redirect()->route('accueil');
            
        }
        
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
        $categories = Categorie::all();
        return view('Admin/vali-admin-master/docs/form-samples',compact('categories'));
    }

    public function form_agence(){
        $categories = Categorie::all();
        return view('Admin/vali-admin-master/docs/form-agence',compact('categories'));
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
        $events = Event::all();
        return view('Admin/vali-admin-master/docs/table-data-table', compact('events'));
    }

    public function ui_cards(){
        return view('Admin/vali-admin-master/docs/ui-cards');
    }

    public function widgets(){
        return view('Admin/vali-admin-master/docs/widgets');
    }

    public function store_event(Request $request)
    {
       $event= Event::create([
            'titre'=> $request->get('titre'),
            'sous_titre'=>$request->get('sous_titre'),
            'description'=>$request->get('description'),
            'id_categorie'=>$request->get('id_categorie'),
            'date_debut'=>$request->get('date_debut'),
            'date_fin'=>$request->get('date_fin'),
            'heure'=>$request->get('heure'),
            'lieu'=>$request->get('lieu'),
            'ville'=>$request->get('ville'),
            'prix'=>$request->get('prix'),
            'user_id'=>auth()->user()->id,
            $image='photo' => $request->photo->store('public/images'),
            ]);
            $event->save();
            
            return Redirect()->route('dashboard');
            Flashy::success('Votre evenement a été crée avec succes');
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
   
}
