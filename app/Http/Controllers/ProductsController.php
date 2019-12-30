<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show(Product $product){
        return view('product-page',['product'=>$product]);

    }

    public function index(){
        $products = Product::latest()-> take(8)->paginate(8);
        // if  (request()->sort=='min_max'){
        //     $products = $products->sortBy('price')->paginate(8);
        // } 
        // elseif (request()->sort=='max_min'){
        //     $products = $products->orderBy('price','desc')->paginate(8);
        // } 

        return view('all-products',['products'=>$products]);
    }

    public function create(){
        return view('product-new');
    }

    public function search(Request $request){
        $request->validate([
            'query'=>'required|min:3'
        ]);

        $query = $request->input('query');
        $products = Product::where('title', 'like', "%$query%")->get();
        return view('search-results')->with('products', $products);

    }

    public function store(){ 
        request()->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'label'=>'required',
            'image' => 'required|image|max:2048'            
        ]);
        
        $product = new Product();
        $product -> title = request('title');
        $product -> description = request('description');
        $product -> price = request('price');
        $product -> label = request('label');

        $product -> image_name = request('image')->getClientOriginalName();
        
        $image_path = $product -> image = request('image');
        $product -> image = request('image')->move('..\public\img\products',$image_path->getClientOriginalName());;
        
        $product -> save();
        return redirect ('product-new-success');
    }

    public function edit(Product $product){
        return view('product-edit',['product'=>$product]);
    }

    public function update(Product $product){

        request()->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'label'=>'required'
        ]);

        $product -> title = request('title');
        $product -> description = request('description');
        $product -> price = request('price');
        $product -> label = request('label');

        
        $image_name = request('image');
        $image = request('image');

        if($image_name != '' && $image!='')
        {
            request()->validate([
                'image|max:2048'
            ]);
            $product -> image_name = request('image')->getClientOriginalName();
        
            $image_path = $product -> image = request('image');
            $product -> image = request('image')->move('..\public\img\products',$image_path->getClientOriginalName());
        
        }

        $product -> save();        

        $product -> save();


        return redirect ('product-new-success');
    }

    public function destroy(Product $product)
    {
        $product->delete();       
        return redirect('product-new-success');
    }

}
