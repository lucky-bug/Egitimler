<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('card.index', ['cards' => Card::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('card.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $card = Card::create([
            'front_title' => $request->get('front_title'),
            'front_subtitle' => $request->get('front_subtitle'),
            'back_title' => $request->get('back_title'),
            'back_subtitle' => $request->get('back_subtitle'),
        ]);

        return redirect(route('card.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Card $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        return view('card.show', ['card' => $card]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        return view('card.edit', ['card' => $card]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Card $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $card->front_title = $request->get('front_title');
        $card->front_subtitle = $request->get('front_subtitle');
        $card->back_title = $request->get('back_title');
        $card->back_subtitle = $request->get('back_subtitle');
        $card->save();

        return redirect(route('card.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card $card
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Card $card)
    {
        $card->delete();

        return redirect(route('card.index'));
    }
}
