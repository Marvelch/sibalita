<?php

namespace App\Http\Controllers;

use App\Models\baby;
use Illuminate\Http\Request;

class BabyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.baby.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(baby $baby)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(baby $baby)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, baby $baby)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(baby $baby)
    {
        //
    }
}
