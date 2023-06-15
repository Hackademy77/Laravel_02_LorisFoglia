<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MioController extends Controller
{   

    public $arrayProdotti = [
        ["id"=>1, "name"=> "computer", "brand" => "HP", "price" => "600€", "img" => "hp.webp", "description"=>"funziona bene"],

        ["id"=>2,"name"=> "ipad", "brand" =>"Apple", "price"=>"300€", "img" => "ipad.jpg", "description"=>"non una non due ben tre scarpiere slim"],

        ["id"=>3, "name"=> "cellulare", "brand" =>"Nokia", "price"=>"200€", "img" => "nokia.jpg", "description"=>"non prende da nessuna parte"],

        ["id"=>4, "name"=> "stampante", "brand" =>"Canon", "price"=>"70€", "img" => "stampante.jpg", "description"=>"ottima la fragranza dell'inchiostro"],

    ];

    public function mostraProdotti() {
        
        return view('prodotti', ['prodotti'=> $this->arrayProdotti]);
    }



    public function mostraProdotto($id){
    
        foreach($this->arrayProdotti as $prodotto){
            if($prodotto['id'] == $id){
                return view('dettagli', ['prodotto'=>$prodotto]);
            }
        }
    
        abort(404);
    
    }

}
