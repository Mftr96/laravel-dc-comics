<?php
//creo ComicController per gestire le parti di pagina che richiamano i dati dei fumetti
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Comic;

class ComicController extends Controller
{
    //funzione per indirizzare al catalogo dei fumetti
    public function index()
    {
        //vado a prendere tutti i fumetti
        $comic_list=Comic::all();
        $data=[
            "catalog"=>$comic_list
        ];
        return view("comics.index",$data);
    }
    //funzione che rimanda a pagina con form per creare nuovo Comic
    public function create()
    {
        return view('comics.create');
    }
    //funzione per andare a mostrare il singolo fumetto
    public function show(Comic $comic)
    {
        $data = [
            "comic" => $comic
        ];
        return view("comics.show", $data);
    }
}
