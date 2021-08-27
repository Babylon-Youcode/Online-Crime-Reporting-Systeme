<?php

namespace App\Http\Controllers;

use App\Models\reports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rep = Reports::select('id')->all();
        // return $rep;
        return view('reports.index',[
            'reps' => $rep
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.createreports');
    }

    public function veiw()
    {
        $rep = Reports::all();
        // return $rep;
        return view('reports.myreports',[
            'reps' => $rep
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rep)
    {
        // return Auth::user()->id;

        if($rep->image){
            $imageName = date('mdYHis').uniqid().'.'.$rep->image->extension();
            $rep->image->move(public_path('img/crimeimages'), $imageName);
        }
        
        Reports::create([
            "crime_type" => $rep->crime_type,
            "victim_name"=> $rep->victim_name,
            "victim_adresse"=> $rep->victim_adresse,
            "discription"=> $rep->discription ??"",
            "victim_image" => $imageName ?? "" ,
            "crime_date"=> $rep->date,
            "reports_status"=>"your Reporting under treatment" ,

            'user_id' => Auth::id()
        ]);

        

        return redirect(route('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reports  $reports
     * @return \Illuminate\Http\Response
     */
    
    public function update_status(Request $req)
    {
        $reports = Reports::find($req->id);
        $reports->update([
            "reports_status"=> $req->reports_status,
        ]);

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function edit(reports $reports)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reports $reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reports  $reports
     * @return \Illuminate\Http\Response
     */
 
    public function destroy($reports_id)
    {
        $reports = Reports::findOrFail($reports_id);
        $reports->delete();

        return redirect()->back();
    }
}


    

