<?php

namespace App\Http\Controllers;

use App\Competition;
use App\Conference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompetitionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('admin.competitions.index',['competitions'=>Competition::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.competitions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $competition = new Competition();
        $competition->title = $request->title;
        $competition->text = $request->text;
        $competition->title_en = $request->title_en;
        $competition->text_en = $request->text_en;

        if($request->file('img')){
            $file = $request->file('img')->store('public');
            $competition->img = str_replace('public','',$file);
        }
        $competition->save();

        return redirect('/admin/competitions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show(Competition $competition)
    {
        return view('admin.competitions.edit',compact('competition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $competition)
    {
        return view('admin.competitions.edit',['competition'=>$competition]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competition $competition)
    {
        $competition->title = $request->title;
        $competition->text = $request->text;
        $competition->title_en = $request->title_en;
        $competition->text_en = $request->text_en;
        if($request->file('img')){
            $file = $request->file('img')->store('public');
            $competition->img = str_replace('public','',$file);
        }
        $competition->save();

        return redirect('/admin/competitions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
        Storage::delete($competition->img);
        $competition->delete();
        return redirect('/admin/competitions');
    }
}
