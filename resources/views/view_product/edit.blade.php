@extends('layouts/dashboard')

@section('title-page')
    Halaman Edit Produk
@endsection

@section('content')
    <div>
        <h1 class="sans text-xl text-extrabold">Edit Data Produk</h1>
    </div>
    <div class="mt-4">
        <div class="bg-white shadow-lg p-5">
            <form action="{{ url('dashboard/update-product/' . Crypt::encrypt($data->id)) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid lg:grid-cols-2 mt-4 gap-2 ">
                    <div class="lg:col-span-1 ">
                        <label for="nama_umkm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            UMKM</label>
                        <input type="text" name="nama_umkm" value="{{ $data->nama_umkm }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan nama umkm" autocomplete="off">
                    </div>
                    <div class="md:col-span-1 ">
                        <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Produk</label>
                        <input type="text" name="nama_produk" value="{{ $data->nama_produk }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan nama produk" autocomplete="off">
                    </div>
                    <div class="md:col-span-1  lg:mt-4">
                        <label for="kategori"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <input type="text" name="kategori" value="{{ $data->kategori }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan kategori produk" autocomplete="off">
                    </div>
                    <div class="md:col-span-1  lg:mt-4">
                        <label for="harga"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input type="number" name="harga" value="{{ $data->harga }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan harga produk" autocomplete="off">
                    </div>
                    <div class="md:col-span-1  lg:mt-4">
                        <label for="nomor_telepon"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telepon</label>
                        <div class="flex gap-2">
                            <span class="border rounded-lg py-2 px-3" id="basic-addon1" onclick=""><i
                                    class="">+62</i></span>
                            <input type="number" name="nomor_telepon" value="{{ $data->nomor_telepon }}"
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5"
                                placeholder="Isi dengan nomor telepon penjual (0 di depan nomor tidak usah)"
                                autocomplete="off">
                        </div>

                    </div>
                    <div class="md:col-span-1  lg:mt-4">
                        <label for="status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketersediaan</label>
                        <select name="status" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan nomor telepon penjual" autocomplete="off">
                            <option value="" hidden>Pilih Status Ketersediaan</option>
                            @if ($data->status == 'ready')
                                <option value="ready"selected>Ready</option>
                                <option value="pre-order">Pre-order</option>
                            @else
                                <option value="ready">Ready</option>
                                <option value="pre-order"selected>Pre-order</option>
                            @endif


                        </select>
                    </div>
                    <div class="md:col-span-2  lg:mt-4">
                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea rows="30" type="text" name="deskripsi" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan nama produk" autocomplete="off">{{ $data->deskripsi }}</textarea>
                    </div>
                    <div class="col-span-1  lg:mt-4">
                        <label for="image1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                            1</label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" name="image1" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                            placeholder="Upload gambar disini" autocomplete="off">
                    </div>
                    <div class="col-span-1  lg:mt-4">
                        <img src="{{ asset('storage/images/' . $data->gambar1) }}" class="w-20 h-20" alt="">
                    </div>
                    <div class="col-span-1  lg:mt-4">
                        <label for="image2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                            2</label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" name="image2" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                            placeholder="Upload gambar disini" autocomplete="off">
                    </div>
                    <div class="col-span-1  lg:mt-4">
                        <img src="{{ asset('storage/images/' . $data->gambar2) }}" class="w-20 h-20" alt="">
                    </div>
                    <div class="col-span-1  lg:mt-4">
                        <label for="image3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                            3</label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" name="image3" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                            placeholder="Upload gambar disini" autocomplete="off">
                    </div>
                    <div class="col-span-1  lg:mt-4">
                        <img src="{{ asset('storage/images/' . $data->gambar3) }}" class="w-20 h-20" alt="">
                    </div>
                    <div class="md:col-span-2  lg:mt-4">
                        <label for="link_gmaps"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi UMKM (link google
                            maps)</label>
                        <input type="text" name="link_gmaps" value="{{ $data->link_gmaps }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan link google maps" autocomplete="off">
                    </div>
                </div>
                <div class="mt-4 grid lg:grid-cols-2 gap-2">
                    <button type="submit"
                        class="border hover:opacity-75  text-white text-center rounded py-2 px-4 bg-orange-800  col-span-1">Edit</button>
                    <a href="{{ url('dashboard/product') }}"
                        class="border border-gray-300  hover:bg-gray-100 text-black text-center rounded py-2 px-4 col-span-1">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer-script')
@endsection
