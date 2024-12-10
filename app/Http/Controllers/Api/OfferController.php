<?php

namespace App\Http\Controllers\Api;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::all();
        return response()->json($offers, 200);
    }

    public function store(Request $request)
    {
        $offer = Offer::create([
            'title' => $request->title,
            'company' => $request->company,
            'offerStatus' => $request->offerStatus,
        ]);
        $offer->save();
        return response()->json($offer, 200);
    }

    public function show(string $id)
    {
        $offer = Offer::with('progresses')->findOrFail($id);
        return response()->json($offer, 200);
    }

    public function update(Request $request, string $id)
    {
        $offer = Offer::find($id);
        $offer->update([
            'title' => $request->title,
            'company' => $request->company,
            'offerStatus' => $request->offerStatus
        ]);

        $offer->save();
        return response()->json($offer, 200);
    }

    public function destroy(string $id)
    {
        $offers = Offer::find($id);
        $offers->delete();
    }
}
