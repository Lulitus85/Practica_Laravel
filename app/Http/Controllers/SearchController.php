<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;
use App\Genres;

class SearchController extends Controller
{
    public function searchActor(Request $request)
    {
        //
        $busqueda = $request->search;

        if(strpos($busqueda,' ') == true){

            $nombre = explode(' ', $busqueda);
            $first_name= ucwords(strtolower($nombre[0]));
            $last_name= ucwords(strtolower($nombre[1]));

            $search = Actor::where('first_name', 'LIKE', "%$first_name%")
            ->where('last_name', 'LIKE', "%$last_name%")
            ->get();
        
        if(count($search) == 0){
            return redirect()
            ->back()
            ->with('error','no encontré un carrizo');

        }
        
        return view('results')->with('results',$search); 

        }

        $search=Actor::where('first_name','LIKE',"%$busqueda%")
                    ->orwhere('last_name','LIKE',"%$busqueda%")
                    ->get();

        if(count($search) == 0){
                        return redirect()
                        ->back()
                        ->with('error','no encontré un carrizo');
            
        }
                    
        return view('results')->with('results',$search);             
    }
}

