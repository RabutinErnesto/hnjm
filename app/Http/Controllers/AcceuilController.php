<?php

namespace App\Http\Controllers;

use App\Article;
use App\Auteur;
use App\Revue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AcceuilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::where('id','2')->get();
        return view('welcome',[
            'article'=>$article
        ]);
    }
    public function instr(){
        return view('instruction');
    }
    public function comite(){
        return view('comite');
    }
    public function archive(){
        //$year = Revue::select('created_at')->first();
       // $dt = Carbon::parse($year->created_at)->year;


       $auteur = Auteur::select('id','nom','prenom')
       ->select('nom','prenom')
       ->get();
       
       $data = Revue::
       orderBy('issue','DESC')
       ->get()
       ->groupBy('issue');

        return view('archive',[
            'auteur'=>$auteur,
            'data' => $data,
            //'dt' =>$dt,

        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
