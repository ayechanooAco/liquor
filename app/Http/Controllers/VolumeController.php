<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Volume;

class VolumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $volumes=Volume::all();
        return view('backend.volume.list',compact('volumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.volume.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $vaildator=$request->validate(['range'=>['required','string','max:255']]
             );
      if($vaildator)
      {
        $range=$request->range;
       
        //file upload
       
        //Data insert
        $abv=new Volume;
        $abv->range=$range;
      
        $abv->save();
        return redirect()->route('backside.volume.index')->with("successMsg",'New ABV is ADDED in your data');
    }
    else{
        return redirect::back()->withErrors($vaildator);
    }
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
        $volume=Volume::find($id);
        return view('backend.volume.edit',compact('volume'));
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
         $validator=$request->validate(['range'=>['required','string','max:255','unique:volumes']]);

        if($validator)
        {
        $range=$request->range;
       
        // dd($name);
        // dd($newphoto);
        //dd($oldphoto);

       

        $volume=Volume::find($id);
        $volume->range=$range;
        
        $volume->save();

        return redirect()->route('backside.volume.index')->with('successMsg','Existing category is updated in your data');
        }else{
            return redirect::withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $volume=Volume::find($id);
        $volume->delete();

        return redirect()->route('backside.volume.index')->with('successMsg',"Existing abv is deleted in your data");
    }
}
