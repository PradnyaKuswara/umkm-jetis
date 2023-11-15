<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        $data = Product::orderBy('id','desc')->paginate(10);
        return view('view_product/index')->with([
            'data' => $data,
        ]);
    }

    public function edit($id){
        $data = Product::where('id',decrypt($id))->first();
        
        return view('view_product/edit')->with([
            'data' => $data,
        ]);
    }

    public function create(){
        return view('view_product/create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_umkm' => 'required',
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'nomor_telepon' => 'required|numeric',
            'link_gmaps' => 'required',
            'status' => 'required',
            'image1' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'image2' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'image3' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ],[
            'nama_umkm.required' => 'Nama UMKM tidak boleh kosong',
            'nama_produk.required' => 'Nama Produk tidak boleh kosong',
            'kategori.required' => 'Nama Kategori tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'harga.numeric' => 'Harga menggunakan angka saja',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'nomor_telepon.required' => 'Nomor Telepon tidak boleh kosong',
            'link_gmaps.required' => 'Kolom link gmaps tidak boleh kosong',
            'status.required' => 'Kolom Ketersediaan Tidak Boleh Kosong',
            'image1.required' => 'Gambar 1 tidak boleh kosong',
            'image2.required' => 'Gambar 2 tidak boleh kosong',
            'image3.required' => 'Gambar 3 tidak boleh kosong',
        ]);

        $data = Product::create([
            'nama_umkm' => $request->nama_umkm,
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'nomor_telepon' => $request->nomor_telepon,
            'link_gmaps' => $request->link_gmaps,
            'gambar1' => '',
            'gambar2' => '',
            'gambar3' => '',
            'status' => $request->status,
        ]);
        
        for($i=1;$i<=3;$i++){
            $temp = $request['image'.$i];
            $imageName = '[id '.$data->id.']_'.$request->nama_produk.'_'.$i.'.'.$temp->extension();

            $path = $request->file('image'.$i)->storeAs('images',$imageName);
            // $image_path = '/images/'.$imageName;
            // if(File::exists($image_path)) {
            //     File::delete($image_path);
            // }
            // $temp->move(\public_path('images'),$imageName);
            $data['gambar'.$i] = $imageName;
            $data->update();
        }
       

        if($data){
            return redirect()->intended('dashboard/product')->with(['success' => 'Berhasil menambah data produk']);
        }
        return redirect()->back()->with(['error' => 'Gagal menambah data produk']);
        
    }

    public function update(Request $request, $id){
        $data = Product::where('id',decrypt($id))->first();

        if($data){
            if($request->nama_umkm){
                $data->nama_umkm = $request->nama_umkm;
            }
            if($request->nama_produk){
                $data->nama_produk = $request->nama_produk;
            }
            if($request->kategori){
                $data->kategori = $request->kategori;
            }
            if($request->harga){
                $data->harga = $request->harga;
            }
            if($request->deskripsi){
                $data->deskripsi = $request->deskripsi;
            }
            if($request->nomor_telepon){
                $data->nomor_telepon = $request->nomor_telepon;
            }
            if($request->link_gmaps){
                $data->link_gmaps = $request->link_gmaps;
            }
            if($request->status){
                $data->status = $request->status;
            }
            if($request->image1){
                $request->validate([
                    'image1' => 'required|image|mimes:png,jpg,jpeg|max:2048'
                ],[
                    'image1.required' => 'Gambar 1 tidak boleh kosong',
                ]);
                $imageName = '[id '.$data->id.']_'.$data->nama_produk.'_1'.''.'.'.$request->image1->extension();

                $path = $request->file('image1')->storeAs('images',$imageName);
                // $image_path = '/images/'.$imageName;
                // if(File::exists($image_path)) {
                //     File::delete($image_path);
                // }
                // $request->image1->move(\public_path('images'),$imageName);
                $data['gambar1'] = $imageName;
            }
            if($request->image2){
                $request->validate([
                    'image2' => 'required|image|mimes:png,jpg,jpeg|max:2048'
                ],[
                    'image2.required' => 'Gambar 2 tidak boleh kosong',
                ]);
                $imageName = '[id '.$data->id.']_'.$data->nama_produk.'_2'.''.'.'.$request->image2->extension();
                
                $path = $request->file('image2')->storeAs('images',$imageName);
                // $image_path = '/images/'.$imageName;
                // if(File::exists($image_path)) {
                //     File::delete($image_path);
                // }
                // $request->image2->move(\public_path('images'),$imageName);
                $data['gambar2'] = $imageName;
            }
            if($request->image3){
                $request->validate([
                    'image3' => 'required|image|mimes:png,jpg,jpeg|max:2048'
                ],[
                    'image3.required' => 'Gambar 3 tidak boleh kosong',
                ]);
                $imageName = '[id '.$data->id.']_'.$data->nama_produk.'_3'.''.'.'.$request->image3->extension();
                
                $path = $request->file('image3')->storeAs('images',$imageName);
                // $image_path = '/images/'.$imageName;
                // if(File::exists($image_path)) {
                //     File::delete($image_path);
                // }
                // $request->image3->move(\public_path('images'),$imageName);
                $data['gambar3'] = $imageName;
            }
            $data->update();
            return redirect()->intended('dashboard/product')->with(['success' => 'Berhasil mengganti produk']);
        }
        return redirect()->back()->with(['error' => 'gagal mengganti produk']);
    }

    public function destroy($id){
        $data = Product::where('id',decrypt($id))->first();

        if($data){
            Storage::delete('images/'.$data->gambar1);
            Storage::delete('images/'.$data->gambar2);
            Storage::delete('images/'.$data->gambar3);
            
            $data->delete();
            return redirect()->intended('dashboard/product')->with(['success' => 'Berhasil menghapus produk']);
        }
        return redirect()->intended('dashboard/product')->with(['error' => 'gagal menghapus produk']);
    }

    public function index_general(){
        $data = Product::orderBy('id','desc')->paginate(16);
        $caraousel = Product::orderBy('id','desc')->get();
        
        if($caraousel->count() >= 4 ){
            for($i=0;$i<4;$i++){
                $aaa[$i] = $caraousel[$i];
            }
            $collection = collect([
                $aaa
            ]);
            $temp = $collection->collapse();
        }else{
            $temp = $caraousel;
        }
        

        return view('product')->with([
            'data' => $data,
            'caraousel' => $temp
        ]);
    }

    public function index_detail($id){
        $data = Product::where('id',decrypt($id))->first();

        return view('detail')->with([
            'data' => $data,
        ]);
    }

    public function search(Request $request){
        $data = Product::where('id', 'like','%'.$request->search.'%')
        ->orWhere('nama_umkm', 'like','%'.$request->search.'%')
        ->orWhere('nama_produk', 'like','%'.$request->search.'%')
        ->orWhere('kategori', 'like','%'.$request->search.'%')
        ->orWhere('harga', 'like','%'.$request->search.'%')
        ->orWhere('deskripsi', 'like','%'.$request->search.'%')
        ->orWhere('nomor_telepon', 'like','%'.$request->search.'%')
        ->orWhere('gambar1', 'like','%'.$request->search.'%')
        ->orWhere('gambar2', 'like','%'.$request->search.'%')
        ->orWhere('gambar3', 'like','%'.$request->search.'%')
        ->orWhere('status', 'like','%'.$request->search.'%')
        ->orderBy('id','desc')
        ->paginate(10);
        $data->appends(['search' => $request->search]);

        return view('view_product/index')->with([
            'data' => $data, 
        ]);
    }
}