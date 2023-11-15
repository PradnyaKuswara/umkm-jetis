@extends('layouts/dashboard')

@section('title-page')
    Halaman Tambah Produk
@endsection

@section('content')
    <div>
        <h1 class="sans text-xl text-extrabold">Tambah Data Produk</h1>
    </div>
    <div class="mt-4">
        <div class="bg-white shadow-lg p-5">
            <form action="{{ url('dashboard/store-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid lg:grid-cols-2 mt-4 gap-2">
                    <div class="md:col-span-1">
                        <label for="nama_umkm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            UMKM</label>
                        <input type="text" name="nama_umkm" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan nama umkm" autocomplete="off">
                    </div>
                    <div class="md:col-span-1 ">
                        <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Produk</label>
                        <input type="text" name="nama_produk" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan nama produk" autocomplete="off">
                    </div>
                    <div class="md:col-span-1  lg:mt-4">
                        <label for="kategori"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <input type="text" name="kategori" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan kategori produk" autocomplete="off">
                    </div>
                    <div class="md:col-span-1  lg:mt-4">
                        <label for="harga"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input type="number" name="harga" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan harga produk" autocomplete="off">
                    </div>
                    <div class="md:col-span-1  lg:mt-4">
                        <label for="nomor_telepon"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telepon</label>
                        <div class="flex gap-2">
                            <span class="border rounded-lg py-2 px-3" id="basic-addon1" onclick=""><i
                                    class="">+62</i></span>
                            <input type="number" name="nomor_telepon" value=""
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
                            <option value="ready">Ready</option>
                            <option value="pre-order">Pre-order</option>
                        </select>
                    </div>
                    <div class="md:col-span-2  lg:mt-4">
                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea rows="30" type="text" name="deskripsi" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan deskripsi produk" autocomplete="off"></textarea>
                    </div>
                    <div class="md:col-span-2  lg:mt-4">
                        <label for="image1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                            1</label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" name="image1" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                            placeholder="Upload gambar disini" autocomplete="off">
                    </div>
                    <div class="md:col-span-2  lg:mt-4">
                        <label for="image2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                            2</label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" name="image2" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                            placeholder="Upload gambar disini" autocomplete="off">
                    </div>
                    <div class="md:col-span-2  lg:mt-4">
                        <label for="image3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                            3</label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" name="image3" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                            placeholder="Upload gambar disini" autocomplete="off">
                    </div>
                    <div class="md:col-span-2  lg:mt-4">
                        <label for="link_gmaps"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi UMKM (link google
                            maps)</label>
                        <input type="text" name="link_gmaps" value=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi dengan link google maps" autocomplete="off">
                    </div>
                </div>
                <div class="mt-4 grid md:grid-cols-2 gap-2">
                    <button type="submit"
                        class="border hover:opacity-75  text-white text-center rounded py-2 px-4 bg-orange-800  col-span-1">Tambah</button>

                    <a href="{{ url('dashboard/product') }}"
                        class=" border border-gray-300  hover:bg-gray-100 text-black text-center rounded py-2 px-4 col-span-1">Kembali</a>


                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer-script')
@endsection
