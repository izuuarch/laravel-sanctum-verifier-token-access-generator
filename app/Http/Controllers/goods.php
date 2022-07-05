<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\good;
use Illuminate\Support\Carbon;

class goods extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = good::all();
        return $goods;
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
        // $this->validate($request, [
        //     'goodsname' => 'required',
        // ]);
        $item = new good;
        $item->goodsname = $request->item['goodsname'];
        $item->save();

        return $item;
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
        $exitem = good::find($id);
        if($exitem){
            // $exitem->complated = $request->item['completed'] ? true : false;
            // $exitem->complated_at = $request->item['completed'] ? Carbon::now() : null;
            // $exitem->save();
            // return $exitem;
            $exitem->goodsname = $request->item['goodsname'];
            $exitem->update();
            return $exitem;
        }
        return "item not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exitem = good::find($id);
        if($exitem){
            $exitem->delete();
            return "successfull deledted";
        }
        return "not fiun";
    }
}
