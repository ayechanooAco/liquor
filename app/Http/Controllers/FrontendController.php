<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Item;

use App\Brand;

use App\Volume;

use App\Region;
use App\Order;
use Carbon\Carbon;



class FrontendController extends Controller
{
    public function index()
    {

        $categories=Category::all()->random(4);
        $randomitems=Item::all()->random(12);
        return view('frontend.index',compact('categories','randomitems'));


    }

    public function detail($id)
    {
        $item=Item::find($id);
        return view('frontend.detail',compact('item'));
    }
    //  public function itemdetail($id)
    // {
    //     $item=Item::find($id);
    //     return view('frontend.itemdetail',compact('item'));
    // }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function shoppingcart()
    {

        $shoppingcartitems=Item::all();
        
        return view('frontend.shoppingcart',compact('shoppingcartitems'));
    
    }


    public function products()
    {
        $randomitems=Item::all()->random(12);
        $brands=Brand::all();
        $volumes=Volume::all();
        $regions=Region::all();
        return view('frontend.products',compact('randomitems','brands','volumes','regions'));
    }

    public function brand($id)
    {
       $branditems=Item::where('brand_id',$id)->paginate(3);
        $brands=Brand::find($id);
        $volumes=Volume::all();
        $regions=Region::all();

       return view('frontend.brand',compact('branditems','brands','volumes','regions'));

    }
    public function volume($id)
    {
        $volumeitems=Item::where('volume_id',$id)->paginate(3);
        $brands=Brand::all();
        $volumes=Volume::find($id);
        
        return view('frontend.volume',compact('volumeitems','brands','volumes'));
    }
    public function region($id)
    {
        $regionitems=Item::where('region_id',$id)->paginate(3);
        $brands=Brand::all();
        $regions=Region::find($id);
        return view('frontend.region',compact('regionitems','brands','regions'));

    }
    public function order(Request $request){
    //dd($request);

   $carts=json_decode($request->data,true);
   $note="Plase pack nice and prevent from crushing";
   $orderdate=Carbon::now();
   $voucherno=uniqid();
   // dd($carts);
   $total=0;
   foreach ($carts as $row) {
      $unitprice=$row['unitprice'];
     // dd($unitprice);
      $discount=$row['discount'];

      if($discount){
        $price=$discount;
      }else{
         $price=$unitprice;
      }
      $total+=$price*$row['qty'];
   }
    $status="Order";

    // $auth=Auth::user();
    // $userid=$auth->id;

    $order=new Order;
    $order->orderdate=$orderdate;
    $order->vouncherno=$voucherno;
    $order->total=$total;
    $order->note=$note;
    $order->status=$status;
    $order->user_id=1;
    $order->save();

    foreach ($carts as $value) {

      $itemid=$value['id'];
      $qty=$value['qty'];

      $order->items()->attach($itemid,['qty'=>$qty]);

     
     }
     return response()->json([
          'status'=>'Order Successfully created!'

      ]);
    }


   public function ordersuccess(){
     return view('frontend.ordersuccess');
  }

  public function confirm($id)
  {
    $order=Order::find($id);
    $order->status="Order confirm";
    $order->save();
    return view('backend.order.list');

  }

   public function cancel($id)
  {
    $order=Order::find($id);
    $order->status="Order cancel";
    $order->save();
    return view('backend.order.list');

  }

  public function myorder($id){
    $orders=Order::where('user_id',$id)->get();
    return view('frontend.myorder',compact('orders'));
  }

  public function orderDetail($id){
    $orderdetail=Order::find($id);
    return view('frontend.orderDetail',compact('orderdetail'));
  }


}
