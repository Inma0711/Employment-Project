<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::all();
        return view('home', compact('offers'));
    }

    public function show(string $id)
    {
        $offer = Offer::with('progresses')->find($id);
        return view('show', compact('offer'));
    }
}
