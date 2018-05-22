<?php

namespace App\Http\Controllers;

use App\receipts;
use Illuminate\Http\Request;

class ReceiptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receipts = receipts::all();
        return view('receipt.index', compact('receipts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $receipts = receipts::all();
        return view('receipt.create', compact('receipts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(),[
            //put fields to be validated here
        ]);

        $receipts = new receipts();
        $receipts->receipt= $request['receipt'];
        $receipts->ingredients= $request['ingredients'];
        // add other fields
        $receipts->save();

        return redirect('/receipt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\receipts  $receipts
     * @return \Illuminate\Http\Response
     */
    public function show(receipts $receipts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\receipts  $receipts
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        $post = receipts::find($id);

        return view('receipt.edit', ['receipt' =>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\receipts  $receipts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, receipts $id)
    {
        //Validate
        $request->validate([
            'ingredients' => 'required|min:3'
        ]);

        $id->ingredients = $request->ingredients;
        $id->save();
        return redirect('receipt');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\receipts  $receipts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, receipts $id)
    {

        receipts::find($id);
        $id->delete();

        return redirect('/receipt');

    }
}
