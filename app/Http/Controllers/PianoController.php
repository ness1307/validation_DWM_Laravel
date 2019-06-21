<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Piano;
use App\Category;

class PianoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function getAllPianos()
    {
        $books = Piano::All();

        $books->load('category');

        return view('pianos.get_all_pianos', compact('pianos'));

       
        return view('pianos.get_all_pianos', compact('pianos')); 
        }

    public function createPiano() 
    {
        $categories = Genre::All();
        
        return view('pianos.create_piano', compact('categories')); 

    }
    public function storeBook(Request $request)
    {
       // dd($request);
        $piano = new Piano([
            'name'=> $request->get('name'),
            'color'=> $request->get('color'),
            'price'=> $request->get ('price'),
            'date' => $request->get ('date'),
            
        ]);
        $book->save(); 
        return redirect('/pianos')->with('success', 'Piano créé !');
    }

}