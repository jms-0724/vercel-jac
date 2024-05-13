<?php

namespace App\Http\Controllers;

use App\Models\PortfolioModel;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = PortfolioModel::all();
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(PortfolioModel $portfolioModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PortfolioModel $portfolioModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PortfolioModel $portfolioModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PortfolioModel $portfolioModel)
    {
        //
    }

    public function Home(){
        return view("welcome");
    }
}
