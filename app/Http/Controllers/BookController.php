<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BookModel; 

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getTitle=request('bktitle');
        $getAuthor=request('bkauthor');
        $getDesc=request('bkdesc');
        $getDist=request('bkdist');
        $getPrice=request('bkprice');

        echo $getTitle;
        echo "<br>";
        echo $getAuthor;
        echo "<br>";
        echo $getDesc;
        echo "<br>";
        echo $getDist;
        echo "<br>";
        echo $getPrice;
        echo "<br>";
        $book=new BookModel();

        $book->bkTitle=$getTitle;
        $book->bkAuthor=$getAuthor;
        $book->bkDesc=$getDesc;
        $book->bkDist=$getDist;
        $book->bkPrice=$getPrice;

        $book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
