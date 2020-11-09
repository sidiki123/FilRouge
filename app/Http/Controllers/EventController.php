<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Flashy;
use App\Categorie;

class EventController extends Controller
{
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
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $event=Event::findOrFail($id);
       $categories=Categorie::all();
       return view('Admin/vali-admin-master/docs/form-event_edit',compact('event','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $event= Event::findorFail($id);
        //  $event->update([
        //     'titre'=> $request->get('titre'),
        //     'sous_titre'=>$request->get('sous_titre'),
        //     'description'=>$request->get('description'),
        //     'id_categorie'=>$request->get('id_categorie'),
        //     'date_debut'=>$request->get('date_debut'),
        //     'date_fin'=>$request->get('date_fin'),
        //     'heure'=>$request->get('heure'),
        //     'lieu'=>$request->get('lieu'),
        //     'ville'=>$request->get('ville'),
        //     'prix'=>$request->get('prix'),
        //     'user_id'=>auth()->user()->id,
        //     'photo'=>$request->store('photo'),
        //     // $image='photo' => $request->photo->store('public/images'),
        //     $image->photo = $request->photo->store('public/images')
        //     ]);
            $event = Event::find($id);

            $event->titre =  $request->get('titre');
            $event->sous_titre = $request->get('sous_titre');
            $event->description = $request->get('description');
            $event->id_categorie = $request->get('id_categorie');
            // $event->photo = $image->$event['photo'];
            $event->photo = $request->photo->store('public/images');
            $event->date_debut = $request->get('date_debut');
            $event->date_fin = $request->get('date_fin');
            $event->heure = $request->get('heure');
            $event->lieu = $request->get('lieu');
            $event->ville = $request->get('ville');
            $event->prix = $request->get('prix');
            
           
           
            $event->save();
           
            Flashy::success('Votre evenement a été modifier avec succes');
           return redirect()->route('table_data_table_agence',$id);
   
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Event::destroy($id);
       Flashy::warning('Votre evenement a été supprime avec succes');
       return back();
    }
}
