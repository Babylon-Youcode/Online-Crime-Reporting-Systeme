<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function news()
    {
        $an = Annonce::all();
        // return $an;
        return view('news',[
            'ans' => $an
        ]);
    }


    public function index()
    {
        $an = Annonce::all();
        // return $an;
        return view('annonces.index',[
            'ans' => $an
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonces.create');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $input)
    {
        if($input->image){
            $imageName = date('mdYHis').uniqid().'.'.$input->image->extension();
            $input->image->move(public_path('img'), $imageName);
            
        };
        Annonce::create([
            'title' => $input->title,
            'discription' => $input->discription,
            'date' => $input->date,
            'image' => $imageName ,
        ]);

        return redirect(route('admin'));
    }


    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit($annonce_id)
    {
        $annonce =  Annonce::findOrFail($annonce_id); // find() : return first element exest , findOrFail() : if not exest return 404 page
        // $annonce =  Annonce::where('id',$annonce_id)->get(); return all element exest
        // $annonce =  Annonce::where('id',$annonce_id)->first(); return first element exest

        // if (!$annonce) { replace by =>  findOrFail() : if not exest return 404 page
        //     return abort('404');
        // }

        return view('annonces.edit',[
            'annonce' => $annonce
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $input)
    {
        $annonce =  Annonce::findOrFail($input->annonce_id);

        $annonce->update([
            'title' => $input->title,
            'discription' => $input->discription,
            'image' => $input->image,
            'date' => $input->date,


        ]);

        return redirect()->route('dash.annonces');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy($annonce_id)
    {
        $annonce =  Annonce::findOrFail($annonce_id);

        $annonce->delete();

        return redirect()->route('dash.annonces'); 
        
    }
}
