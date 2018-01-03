<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OffersController extends Controller
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
        return  view('admin.offers.index',['offers'=>Offer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer = new Offer();
        $offer->company_name = $request->company_name;
        $offer->company_name_en = $request->company_name_en;

        $offer->job = $request->job;
        $offer->job_en = $request->job_en;

        $offer->contact_name = $request->contact_name;
        $offer->contact_name_en = $request->contact_name_en;

        $offer->position = $request->position;
        $offer->position_en = $request->position_en;

        $offer->phone = $request->phone;
        $offer->email = $request->email;

        $offer->save();

        return redirect('/admin/offers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return response($offer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        return view('admin.offers.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $offer->company_name = $request->company_name;
        $offer->company_name_en = $request->company_name_en;

        $offer->job = $request->job;
        $offer->job_en = $request->job_en;

        $offer->contact_name = $request->contact_name;
        $offer->contact_name_en = $request->contact_name_en;

        $offer->position = $request->position;
        $offer->position_en = $request->position_en;

        $offer->phone = $request->phone;
        $offer->email = $request->email;

        $offer->save();

        return redirect('/admin/offers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect('/admin/offers');
    }
}
