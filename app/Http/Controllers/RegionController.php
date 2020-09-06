<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;


class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions=Region::all();

        


        return view('backend.region.list',compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.region.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validator=$request->validate(['name'=>['required','string','max:255','unique:categories']]);

        if($validator)
        {
        $name=$request->name;
        

        // dd($photo);
        // file is_uploade
        
      
        $region=new Region;

        $region->name=$name;

        

        $region->save();

         return redirect()->route('backside.region.index')->with("successMsg","New Region is added in your data");
        }
        else{
          return redirect::back()->withErrors($validator);
            
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
        $region=Region::find($id);
         // dd($category);
        return view('backend.region.edit',compact('region'));
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
         $validator=$request->validate(['name'=>['required','string','max:255','unique:categories']]);

        if($validator)
        {
        $name=$request->name;
        
        // dd($name);
        // dd($newphoto);
        //dd($oldphoto);

       

        $region=Region::find($id);
        $region->name=$name;
        
        $region->save();

        return redirect()->route('backside.region.index')->with('successMsg','Existing Region is updated in your data');
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
          $region = Region::find($id);

      

        $region->delete();

        return redirect()->route('backside.region.index')->with("successMsg", "New Region is DELETED in your data");
        // return response()->json(['success'=>'Category <b> DELETED </b> successfully.']);
    }
    
}
