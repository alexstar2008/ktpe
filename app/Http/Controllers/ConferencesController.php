<?php

namespace App\Http\Controllers;

use App\Conference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConferencesController extends Controller
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
        return view('admin.conferences.index',['conferences'=>Conference::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.conferences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:255',
            'text'=>'required',
        ]);

        if($request->file('img')){
            $file = $request->file('img')->store('public');
        }

        $conference = new Conference();
        $conference->title = $request->title;
        $conference->text = $request->text;
        $conference->title_en = $request->title_en;
        $conference->text_en = $request->text_en;

        if(isset($file)){
            $conference->img = str_replace('public','',$file) ;
        }
        $conference->save();

        return redirect('/admin/conferences');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Conference::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conference = Conference::find($id);
        return view('admin.conferences.edit',['conference'=>$conference]);
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
        $conference = Conference::find($id);

        if($request->file('img')){
            $file = $request->file('img')->store('public');
        }

        $conference->title = $request->title;
        $conference->text = $request->text;
        $conference->title_en = $request->title_en;
        $conference->text_en = $request->text_en;

        if(isset($file)){
            $conference->img = str_replace('public','',$file) ;
        }
        $conference->save();

        return redirect('/admin/conferences');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conference = Conference::find($id);
        Storage::delete($conference->img);
        $conference->delete();
        return redirect('/admin/conferences');
    }
}
