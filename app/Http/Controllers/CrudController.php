<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Offer;

class CrudController extends Controller
{
    //


    public function getOffers()
    {

return Offer::select('name','price')->get();
    }

  //  public function storeOffer()
  //  {
//Offer::create([
//'name'=>'offerx',
//'price'=>'500',
//'details'=>'detailssss'
//]);
  //  }


    public function createOffer()
    {

        return view('offers.create');
    }


    public function storeOffer(Request $request)
{
//validation
    $rules=[

        'name'=>'required|max:100|unique:offers,name',
        'price'=>'required|numeric',
        'details'=>'required',
    ];

    $messages=[
        'name.required'=>'الإسم غير موجود ',
        'price.numeric'=>'الثمن ليس رقم '

    ];

$validator=Validator::make($request->all(),$rules,$messages);

if($validator->fails())
{
    return redirect()->back()->withErrors($validator)->withInputs($request->all());
}

    Offer::create([
'name'=>$request->name,
'price'=>$request->price,
'details'=>$request->details


    ]);




}


}
