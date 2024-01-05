<?php

namespace App\Http\Controllers;

use App\Models\Catergory;
use Illuminate\Http\Request;

class CatergoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catergories = Catergory::with('books')->get();
        return response()->json($catergories);
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
    public function show($id)
    {
        $catergories = Catergory::with('books')->findOrFail($id);
        return response()->json($catergories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catergory $catergory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catergory $catergory)
    {
        //
    }
}
