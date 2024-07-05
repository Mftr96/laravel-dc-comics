<?php
//creato tramite terminale:  php artisan make:controller PageController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //milestone 3 04/07/24 vado a creare operazioni CRUD relative ai file presenti in view
    //funzione che si ricollega alla home del sito  
    public function index(){
        $dati=config("data");
     return view('home',$dati);
    }
 
}
