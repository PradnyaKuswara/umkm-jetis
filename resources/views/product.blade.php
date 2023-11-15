@extends('layouts/application')

@section('title-page')
    Product
@endsection

@section('content')
    <div id="controls-carousel" class="relative max-w-screen-2xl mx-auto animate__animated animate__fadeInLeft"
        data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-72 md:h-[600px] w-100 overflow-hidden rounded-lg ">
            <!-- Item 1 -->
            @if ($caraousel->count() == 1)
                <div class="hidden duration-1000 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('storage/images/' . $caraousel[0]->gambar1) }}"
                        class=" h-96 md:h-auto absolute transition ease-in-out delay-75 opacity-80 block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="container opacity-100 mx-auto">
                        <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div
                                class="absolute bg-opacity-80 bg-white float-left text-black rounded-e-lg opacity-100 py-2 px-8 font-extrabold text-2xl md:text-6xl">
                                {{ $caraousel[0]->nama_produk }}
                            </div>
                            <div
                                class="absolute  bg-opacity-80 top-12  md:top-20 bg-white float-left text-black rounded-e-lg py-2 mb-2 px-2 md:px-8 text-xs md:text-lg ">
                                <i class="fas fa-shop mr-2"></i>{{ $caraousel[0]->nama_umkm }}
                            </div>
                            <a class="text-sm md:text-xl absolute top-20 md:top-36 bg-white hover:opacity-60 rounded-e-lg shadow-lg opacity-90 text-black py-2 px-4 md:px-8 inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
                                href="{{ url('product/detail/' . Crypt::encrypt($caraousel[0]->id)) }}">Lihat product</a>
                        </div>
                    </div>
                </div>
            @endif

            @forelse ($caraousel as $item)
                <div class="hidden duration-1000 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('storage/images/' . $item->gambar1) }}"
                        class=" h-96 md:h-auto absolute transition ease-in-out delay-75 opacity-80 block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="container opacity-100 mx-auto">
                        <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div
                                class="absolute bg-opacity-80 bg-white float-left text-black rounded-e-lg opacity-100 py-2 px-8 font-extrabold text-2xl md:text-6xl">
                                {{ $item->nama_produk }}
                            </div>
                            <div
                                class="absolute  bg-opacity-80 top-12  md:top-20 bg-white float-left text-black rounded-e-lg py-2 mb-2 px-2 md:px-8 text-xs md:text-lg ">
                                <i class="fas fa-shop mr-2"></i>{{ $item->nama_umkm }}
                            </div>
                            <a class="text-sm md:text-xl absolute top-20 md:top-36 bg-white hover:opacity-60 rounded-e-lg shadow-lg opacity-90 text-black py-2 px-4 md:px-8 inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
                                href="{{ url('product/detail/' . Crypt::encrypt($item->id)) }}">Lihat product</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="hidden duration-1000 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('storage/images/image1.jpg') }}"
                        class="absolute opacity-90  block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="container mx-auto">
                        <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <p class="text-black py-2 px-8 font-extrabold text-6xl my-4">Tidak ada Produk
                            </p>

                        </div>
                    </div>
                </div>
                <div class="hidden duration-1000 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('storage/images/image1.jpg') }}"
                        class="absolute opacity-90  block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="container mx-auto">
                        <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <p class="text-black py-2 px-8 font-extrabold text-6xl my-4">Tidak ada Produk
                            </p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            @for ($i = 0; $i < $caraousel->count(); $i++)
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
            @endfor

            {{-- <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button> --}}
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <div class="mt-10 md:mt-24 max-w-screen-xl md:px-12">
        <h1 class="font-extrabold text-2xl">Produk</h1>
        <div class="grid md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 md:ml-20 mt-4 md:gap-x-56 md:gap-y-12 gap-y-8 ">
            @forelse ($data as $item)
                {{-- @if ($item->status == 'yes') --}}
                <div class="md:col-span-1 bg-white rounded-lg w-64 shadow-md  mx-auto">
                    <div class="inline-block">
                        <div
                            class="mx-auto hover:overflow-visible cursor-pointer max-w-xs overflow-hidden rounded-lg  bg-white">
                            <img class="w-64 h-64" src="{{ asset('storage/images/' . $item->gambar1) }}" alt="produk">
                        </div>
                        <div class="p-3">
                            <div class="flex items-center">
                                <p class="flex-1 text-md text-black font-bold">{{ $item->nama_produk }}</p>
                                <p class=" text-xs text-gray-500">{{ $item->kategori }}</p>
                            </div>

                            <p class="text-sm text-blue-600 font-bold">Rp {{ $item->harga }},00</p>

                            <p class="h-20 overflow-hidden text-ellipsis leading-4 text-xs text-justify mt-4 text-gray-500">
                                {{ $item->deskripsi }}</p>
                            <p class="mt-6 text-gray-500 font-bold text-xs">Status: {{ $item->status }}</p>
                            <div class="my-4 w-full">
                                <a href="{{ url('product/detail/' . Crypt::encrypt($item->id)) }}"
                                    class="flex item-center py-1 justify-center rounded-md bg-orange-500 hover:opacity-75 transition ease-in-out delay-75 text-white ">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @else --}}
                {{-- <div class="md:col-span-1 relative bg-white rounded-lg w-80 shadow-md  mx-auto">
                        <div class="absolute flex justify-center items-center h-full w-full z-50">
                            <p class="text-xl  shadow-lg rounded-full border bg-white px-3 py-2 text-gray-800 ">
                                Kosong
                            </p>
                        </div>
                        <div class="inline-block -z-10 opacity-30">
                            <div
                                class="mx-auto hover:overflow-visible cursor-pointer max-w-xs overflow-hidden rounded-lg  bg-white">
                                <img class="w-80 h-52" src="{{ asset('images/' . $item->gambar1) }}" alt="produk">
                            </div>
                            <div class="p-3">
                                <div class="flex items-center">
                                    <p class="flex-1 text-md text-black font-bold">{{ $item->nama_produk }}</p>
                                    <p class=" text-xs text-gray-500">{{ $item->kategori }}</p>
                                </div>

                                <p class="text-sm text-blue-600 font-bold">Rp {{ $item->harga }},00</p>

                                <p
                                    class="h-20 overflow-hidden text-ellipsis leading-4 text-xs text-justify mt-4 text-gray-500">
                                    {{ $item->deskripsi }}</p>
                                <div class="my-4 w-full">
                                    <a href="{{ url('product/detail/' . Crypt::encrypt($item->id)) }}"
                                        class="flex item-center py-1 justify-center rounded-md bg-orange-500 hover:opacity-75 transition ease-in-out delay-75 text-white ">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                {{-- @endif --}}

            @empty
                <div class="md:col-span-4 w-full bg-white border border-collapse shadow-md mt-4 md:mt-0 mx-auto">
                    <div class="inline-block px-3">
                        <div
                            class="p-5 w-full mx-auto hover:overflow-visible cursor-pointer max-w-xs overflow-hidden rounded-lg  bg-white">
                            {{-- <img class="w-auto h-auto" src="{{ asset('images/image1.jpg') }}" alt="produk"> --}}
                            <h1>Sementara ini, tidak ada produk</h1>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

    </div>
    <div class="mt-8 max-w-screen-2xl">
        {{ $data->links('pagination::tailwind') }}
    </div>
@endsection
