<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizesController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $size = Size::orderby('created_at', 'DESC')->get();
        return view('size.index', ['sizes'=>$size]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $this->validate($request, [
            'size' => 'required|min:1|max:10|unique:sizes'
        ]);



        $size = new Size();
        $size->size = $request->size;
        $size->save();

        flash('Size Added Successfully')->success();

        return redirect()->route('sizes.index');

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
        $size = Size::find($id);
        return view('size.edit',compact('size'));
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
        //Validate
        $this->validate($request, [
            'size' => 'required|min:1|max:10|unique:sizes,size,' .$id
        ]);

        $size = Size::find($id);
        $size->size = $request->size;
        $size->save();

        flash('Size Updated Successfully')->success();

        return redirect()->route('sizes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $size = Size::findOrFail($id);
        $size->delete();

        flash('Size Deleted Successfully')->success();
        return redirect()->route('sizes.index');
    }
}
