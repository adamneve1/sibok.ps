<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
   
    public function index() {

          $products = Product::with('category', 'brand', 'product_images')->get();
        $brands = Brand::get();
        $categories = Category::get();

        return Inertia::render(
            'Admin/Product/Index',
            [
                'products' => $products,
                'brands' => $brands,
                'categories' => $categories
            ]
        );
    }
    public function store(Request $request) {
        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();

        //fungsi verifikasi upload gambar

        if($request->hasFile('product_images'))
        {
            $productImages = $request->file('product_images');
            foreach ($productImages as $image)
            {
                $uniqueName = time() . '-' . Str::random(10) . '-' . $image->getClientOriginalExtension();
                
                $image->move('product_images', $uniqueName);
                
                ProductImage::create([
                    'product_id' => $product->id,
                    'image'=>'product_images/'. $uniqueName,
                ]);

    }
    
}
return redirect()->route('admin.products.index')->with('Success', 'Product Created Successfully');
    }
}