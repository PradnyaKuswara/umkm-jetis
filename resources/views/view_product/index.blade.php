@extends('layouts/dashboard')

@section('title-page')
    Halaman Produk
@endsection

@section('content')
    <div>
        <h1 class="sans text-xl text-extrabold">Table Produk</h1>
    </div>

    <div class="mt-4 relative overflow-x-auto shadow-lg sm:rounded-lg">
        <div class="pb-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1 p-5 flex justify-between">
                <div class="flex items-center">
                    <form action="{{ url('dashboard/search-product') }}" method="get" class="flex items-center">
                        <button type="submit"> <i class="fas fa-search"></i></button>
                        <input type="search" id="table-search" name="search"
                            class="block ml-4 p-2  text-sm text-gray-900 border border-gray-300 rounded-lg w-96 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="Search for items" autocomplete="off">
                    </form>
                </div>
            </div>
            <div class="">
                <a href="{{ url('dashboard/create-product') }}"
                    class="float-left ml-4 mb-6 py-1 px-3 bg-orange-800 text-white hover:opacity-75  text-base font-medium text-center border border-gray-300 rounded-lg  focus:ring-4 focus:ring-gray-100">
                    Tambah Data
                </a>
            </div>

        </div>

        <table class="mt-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="border-b text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border-r">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Nama UMKM
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Nama Produk
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Kategori
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Harga
                    </th>
                    {{-- <th scope="col" class="px-6 py-3 border-r">
                        Deskripsi
                    </th> --}}
                    <th scope="col" class="px-6 py-3 border-r">
                        Nomor Telepon
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Lokasi
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Gambar 1
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Gambar 2
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Gambar 3
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Ketersediaan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 border-r">
                            {{ $item->id }}
                        </td>
                        <td class="px-6 py-4 border-r">
                            {{ $item->nama_umkm }}
                        </td>
                        <td class="px-6 py-4 border-r">
                            {{ $item->nama_produk }}
                        </td>
                        <td class="px-6 py-4 border-r">
                            {{ $item->kategori }}
                        </td>
                        <td class="px-6 py-4 border-r">
                            {{ $item->harga }}
                        </td>
                        {{-- <td class="px-6 py-4 border-r">
                            {{ $item->deskripsi }}
                        </td> --}}
                        <td class="px-6 py-4 border-r">
                            {{ $item->nomor_telepon }}
                        </td>
                        <td class="px-6 py-4 border-r">
                            {{ $item->link_gmaps }}
                        </td>
                        <td class="px-6 py-4 border-r">
                            <img src="{{ asset('storage/images/' . $item->gambar1) }}" class="w-10 h-10" alt=""
                                data-modal-target="modal{{ $item->gambar1 }}"data-modal-toggle="modal{{ $item->gambar1 }}">

                            {{-- <div id="modal{{ $item->gambar1 }}" tabindex="-1"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                {{ $item->gambar1 }}
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="modal{{ $item->gambar1 }}">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-6">
                                            <img src="{{ asset('images/' . $item->gambar1) }}" class="w-full h-full"
                                                alt="">
                                        </div>

                                    </div>
                                </div>
                            </div> --}}
                        </td>
                        <td class="px-6 py-4 border-r">
                            <img src="{{ asset('storage/images/' . $item->gambar2) }}" class="w-10 h-10" alt="">
                        </td>
                        <td class="px-6 py-4 border-r">
                            <img src="{{ asset('storage/images/' . $item->gambar3) }}" class="w-10 h-10" alt="">
                        </td>
                        <td class="px-6 py-4 border-r">
                            {{ $item->status }}
                        </td>
                        <td class="px-6 py-4 flex ">
                            <a href="{{ url('dashboard/edit-product/' . Crypt::encrypt($item->id)) }}"
                                class="font-medium text-green-600 mr-2"> <i class="fas fa-pencil"></i>
                            </a>
                            <form
                                onsubmit="return confirm('Apakah anda yakin ingin menghapus data produk id {{ $item->id }} ?');"
                                action="{{ url('dashboard/delete-product/' . Crypt::encrypt($item->id)) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600  hover:underline"><i
                                        class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>

                @empty
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td colspan="3" class="px-6 py-4">
                            Data Produk Tidak Ditemukan
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-6 px-3 py-3 ">
            {{ $data->links('pagination::tailwind') }}
        </div>


    </div>
@endsection
