<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Subcategory;
use App\Item;
use App\Volume;
use App\Region;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $items = Item::all();

        return view('backend.item.list',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $subcategories = Subcategory::all();
        $brands = Brand::all();
         $volumes = Volume::all();
        $regions = Region::all();

        return view('backend.item.new',compact('subcategories','brands','regions','volumes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name'  => ['required', 'string', 'max:255', 'unique:items'],
        ]);

        if ($validator) {
            $name = $request->name;
            $unitprice = $request->unitprice;
            $discount = $request->discount;
            $description = $request->description;
            $brandid = $request->brandid;
            $subcategoryid = $request->subcategoryid;
            $regionid=$request->regionid;
            $volumeid=$request->volumeid;
            $photo=$request->photo;


            // FILE UPLOAD

            $imageName=time().'.'.$photo->extension();

            $photo->move(public_path('images/category'),$imageName);
            $filepath='images/category/'.$imageName;
            // $photoString = implode(',', $data);

            $codeno = "JPM-".rand(11111,99999);

            $item= new Item();
            $item->codeno = $codeno;
            $item->name = $name;
            $item->photo =$filepath;
            $item->price = $unitprice;
            $item->discount = $discount;
            $item->description = $description;
            $item->subcategory_id = $subcategoryid;
            $item->brand_id = $brandid;
            $item->region_id = $regionid;
            $item->volume_id = $volumeid;
            $item->save();

            return redirect()->route('backside.item.index')->with("successMsg", "New Item is ADDED in your data");


        }else{
            return Redirect::back()->withErrors($validator);
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
        $item=Item::find($id);

        return view('backend.item.detail',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategories = Subcategory::all();
        $brands= Brand::all();
        $regions=Region::all();
        $volumes=Volume::all();

        $item = Item::find($id);
        

        return view('backend.item.edit',compact('subcategories','brands','item','regions','volumes'));
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
         $validator = $request->validate([
            'name'  => ['required', 'string', 'max:255'],
        ]);

        if ($validator) {
            $name = $request->name;
            $unitprice = $request->unitprice;
            $discount = $request->discount;
            $description = $request->description;
            $brandid = $request->brandid;
            $subcategoryid = $request->subcategoryid;
            $codeno = $request->codeno;
            $oldphoto=$request->oldphoto;
            $newphoto=$request->photo;


            // FILE UPLOAD

            if($request->hasFile('photo')){

                $imageName=time().'.'.$newphoto->extension();

                $newphoto->move(public_path('images/item'),$imageName);
                $filepath='images/item/'.$imageName;

                if(\File::exists(public_path($oldphoto))){
                    \File::delete(public_path($oldphoto));
                }
        }else{
                $filepath=$oldphoto;
        }
            // $photoString = implode(',', $data);
         $codeno = "JPM-".rand(11111,99999);

            $item= Item::find($id);
            $item->codeno = $codeno;
            $item->name = $name;
            $item->photo = $filepath;
            $item->price = $unitprice;
            $item->discount = $discount;
            $item->description = $description;
            $item->subcategory_id = $subcategoryid;
            $item->brand_id = $brandid;
            $item->save();

            return redirect()->route('backside.item.index')->with("successMsg", "New Item is UPDATED in your data");


        }else{
            return Redirect::back()->withErrors($validator);
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
        $item = Item::find($id);

      
        $item->delete();

        return redirect()->route('backside.item.index')->with("successMsg", "New Item is DELETED in your data");
    
    }
}
