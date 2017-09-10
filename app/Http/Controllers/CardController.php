<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Http\Requests;

class CardController extends Controller
{
    public function card_index()
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    public function card_show($id)
    {
        $card = Card::find($id);
        return view('cards.show', compact('card'));
    }
}

