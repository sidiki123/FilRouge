<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class PageController extends Controller
{
    public function accueil(){
        $events1 = Event::where('id_categorie', '1')->orderBy('created_at', 'desc')->take(5)->get();
        $events2 = Event::where('id_categorie', '2')->orderBy('created_at', 'desc')->take(5)->get();
        $events3 = Event::where('id_categorie', '3')->orderBy('created_at', 'desc')->take(5)->get();
        $events4 = Event::where('id_categorie', '4')->orderBy('created_at', 'desc')->take(5)->get();
        $events5 = Event::where('id_categorie', '5')->orderBy('created_at', 'desc')->take(5)->get();
        return view('djoz/index',compact('events1','events2','events3','events4','events5'));
    }

    public function about(){
        return view('djoz/about');
    }

    public function discography(){
        return view('djoz/discography');
    }

    public function tours(){
        $events = Event::orderBy('created_at', 'desc')->take(4)->get();
        // $events = Event::where()->orderBy('date', 'desc')->take(10)->get();
        return view('djoz/tours', compact('events'));
    }

    public function videos(){
        return view('djoz/videos');
    }


}
