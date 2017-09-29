<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

define('NUM_OF_MONDAI_SET', 300);
define('NUM_OF_MONDAI_PER_PAGE', 5);

class EigoMondaiController extends Controller
{
    public $eigoMondaiSet;

    function __construct(){
        $path = storage_path('json/eigo-mondai-set.json');
        $this->eigoMondaiSet = json_decode(file_get_contents($path), true);
    }
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pageNo
     * @return \Illuminate\Http\Response
     */
    public function show(int $pageNo)
    {
        $mondaiSet = array_filter($this->eigoMondaiSet, function($eigoMondai) use ($pageNo){
            return $eigoMondai["no"] > NUM_OF_MONDAI_PER_PAGE * ($pageNo - 1) && $eigoMondai["no"] <= NUM_OF_MONDAI_PER_PAGE * $pageNo;
        });
        $out = array_values($mondaiSet);
        $json = json_encode($out);
        return $json;
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
