<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Offer;
use Illuminate\Http\Request;
use App\User;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return view('Offers.index',['offers'=>$offers]);
    }
    public function create()
    {
        return view ('Offers.create');
    }
    public function store(Request $request)
    {
        Offer::create($request->all());

        if ($request->group_offer==TRUE){
            return redirect('index');
        }
        
        return redirect('offer');
    }
    public function show(Offer $offer)
    {
        return view('offers.offer',['offer'=>$offer]);
    }
    public function edit(Offer $offer)
    {
        if ($this->authorize('edit', $offer)) {
            return view('offers/edit', ['offer'=>$offer]);
        }
    }
    public function update(Request $request, Offer $offer)
    {
        $offer->update($request->all());
        return redirect("offer/$offer->id");
    }
    public function destroy(Offer $offer)
    {
        if($this->authorize('delete',$offer)){
            $offer->delete();
        return redirect('offer');  
        }
    }
    
}
