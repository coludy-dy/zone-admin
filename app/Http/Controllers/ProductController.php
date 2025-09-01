<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Photo;
use App\Traits\Custom;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    use Custom;

    public function index(Request $request)
    {
        $status = self::productStatus();
        $storages = self::storage();
        $rams = self::ram();
        $brands = Brand::get();


        $products = Product::with('brand','photos')
                    ->whereHas('brand',function($q) use($request) {
                        $request->brand == null? $q : $q->where('id',$request->brand);
                    })
                    ->when($request->name,function($q) use($request){
                        $request->name == null? $q : $q->where('name',$request->name);
                    })
                    ->when($request->price, function($q) use($request) {
                        $request->price == null? $q : $q->where('price',$request->price);
                    })
                     ->when($request->battery, function($q) use($request) {
                        $request->battery == null? $q : $q->where('battery',$request->battery);
                    })
                     ->when($request->storage, function($q) use($request) {
                        $request->storage == null? $q : $q->where('storage',$request->storage);
                    })
                    ->orderBy('id','asc')
                    ->paginate(10)->withQueryString();

        return view('products.index',compact('products','status','storages','rams','brands'));
    }

    public function create(){
        $product = [];
        $brands = Brand::get();
        $rams = self::ram();
        $storages = self::storage();
        $status = self::productStatus();

        return view('products._form',compact('brands','product','rams','storages','status'));
    }

    public function edit(Product $product)
    {
        $rams = self::ram();
        $brands = Brand::get();
        $storages = self::storage();
        $status = self::productStatus();

        $product = Product::with('brand','photos')->where('id',$product->id)->first();

        return view('products._form',compact('brands','product','rams','storages','status'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $imageName = uniqid() . '-' .$image->getClientOriginalName();
        $imgPath = 'img/' . $imageName;
        Storage::disk('public')->put($imgPath, file_get_contents($image));

        $otherProjectPath = 'C:\laragon\www\zone-user\storage\app\public\\' . $imgPath;
        file_put_contents($otherProjectPath, file_get_contents($image));

        $product = Product::create([
            'name'=> $request->name,
            'img_name'=> $imageName,
            'img_path'=> $imgPath,
            'description'=> $request->description,
            'brand_id'=> $request->brand,
            'color'=> $request->color,
            'price'=> $request->price,
            'ram'=> $request->ram,
            'storage'=> $request->storage,
            'camera'=> $request->camera,
            'battery'=> $request->battery,
            'screen_size'=> $request->screen_size,
            'stock' => $request->stock,
            'status' =>$request->status
        ]);

        foreach($request->file('additionals') as $add){
            $filename = uniqid() . '-' . $add->getClientOriginalExtension();
            $imgPath = 'img/' . $filename;
            Storage::disk('public')->put($imgPath, file_get_contents($add));

            $otherProjectPath = 'C:\laragon\www\zone-user\storage\app\public\\' . $imgPath;
            file_put_contents($otherProjectPath, file_get_contents($image));

            Photo::create([
                'path' => $imgPath,
                'product_id' => $product->id
            ]);
        }
        return redirect()->back()->with('success','Success!');

    }

    public function update(Product $product,Request $request)
    {
        if($request->file('image'))
        {
            $fileName = uniqid() . '-' .$request->file('image')->getClientOriginalName();
            $filePath = 'img/'.$fileName;

            Storage::disk('public')->put($fileName, file_get_contents($request->file('image')));

            $product->update([
                'img_path' =>$filePath
            ]);
        }

        if($request->file('additionals'))
        {
            $additionals = $request->file('additionals');
            foreach($additionals as $add)
            {
                $addName = uniqid() . '-' .$add->getClientOriginalName();

                $filePath = 'img/'.$addName;

                Storage::disk('public')->put($filePath, file_get_contents($add));

                $path = Storage::disk('public')->path($filePath);

                Photo::create([
                    'path' => $path,
                    'product_id' => $product->id
                ]);
            }
        }
        
        $product->update([
            'name'=> $request->name?? $product->name,
            'description'=> $request->description?? $product->description,
            'brand_id'=> $request->brand?? $product->brand_id,
            'color'=> $request->color?? $product->color,
            'price'=> $request->price?? $product->price,
            'ram'=> $request->ram?? $product->ram,
            'storage'=> $request->storage?? $product->storage,
            'camera'=> $request->camera?? $product->camera,
            'battery'=> $request->battery?? $product->battery,
            'screen_size'=> $request->screen_size?? $product->screen_size,
            'stock' => $request->stock?? $product->stock,
            'status' => $request->status?? $product->status
        ]);
        

        return redirect()->route('product.index')->with('success','Successfully Updated');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }

    public function viewDetail(Product $product)
    {
        $product = Product::with('brand','photos')->where('id',$product->id)->first();
        return view('products.detail',compact('product'));
    }

    public function trashMainImage(Product $product)
    {
        if (Storage::disk('public')->exists($product->img_path)) {
            Storage::disk('public')->delete($product->img_path);
            $product->img_path = null;
            $product->save();
        }

        return back();
    }
}
