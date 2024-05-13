<?php

namespace App\Http\Controllers\Customer;

use App\Models\CreditCard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreditCardController extends Controller
{
    public function index(){
        $items = CreditCard::all();
        return view('customer.card.index', compact('items'));
    }

    public function create(){
        return view('customer.card.create');
    }
    
    public function edit($id){
        $item = CreditCard::find($id);
        return view('customer.card.edit', compact('item'));
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['user_id'] = auth()->user()->id;
        $creditCard = CreditCard::create($inputs);
        return redirect()->route('credit-cards.index')->with('success','Data updaed successful');
    }

    public function show($id)
    {
        $creditCard = CreditCard::find($id);
        return redirect()->route('credit-cards.index')->with('success','Data updaed successful');
    }

    public function update(Request $request, $id)
    {
        $creditCard = CreditCard::findOrFail($id);
        $creditCard->update($request->all());

        return redirect()->route('credit-cards.index')->with('success','Data updaed successful');
    }

    public function destroy($id)
    {
        $creditCard = CreditCard::find($id);
        $creditCard->delete();

        return redirect()->route('credit-cards.index')->with('success','Data updaed successful');
    }
}
