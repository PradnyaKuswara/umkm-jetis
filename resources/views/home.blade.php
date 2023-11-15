@extends('layouts/application')

@section('title-page')
    Home
@endsection

@section('content')
    <section>
        <div class="relative isolate px-6 md:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl bg-orange-100 sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#f6d35e] to-[#d88e1e] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl py-28 sm:py-48 md:py-28">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        Deskripsi <a href="{{ asset('/#3') }}" class="font-semibold text-orange-500"><span
                                class="absolute inset-0" aria-hidden="true"></span>Selengkapnya <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-4xl font-extrabold tracking-tight text-black sm:text-7xl">UMKM Dusun Jetis
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Bentuk pemberdayaan UMKM yang terletak di dusun
                        Jetis,
                        Desa Sendangsari, Bantul, Yogyakarta, Indonesia</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="{{ url('/product') }}"
                            class="rounded-md bg-orange-500 px-20 py-2.5 text-sm font-semibold text-white shadow-sm hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Telusuri
                            Produk</a>
                        {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Contact Person <span
                                aria-hidden="true">→</span></a> --}}
                    </div>
                </div>
                <div class="text-center mt-10">
                    <p class="text-sm text-gray-400">
                        © {{ Carbon\Carbon::now()->year }} UMKM Dusun Jetis. All rights reserved.
                    </p>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#f6d35e] to-[#d88e1e] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </section>

    <section id="3" class="md:mt-24 max-w-screen-xl mx-auto  px-6 md:px-8">

        <div class=" gap-4 justify-between h-full items-center  grid md:grid-cols-4 mx-auto">
            <div class="md:col-span-1 ">
                <h1 class="text-2xl font-extrabold">Keberhasilan UMKM adalah cermin dari semangat dan ketekunan para
                    pengusaha muda</h1>
            </div>
            <div class="md:col-span-1 ">
                <img src="{{ asset('storage/images/logo.png') }}" class="bg-transparent" height="1000" width="1000"
                    alt="about image">
            </div>
            <div class="mt-4 md:mt-0 md:col-span-1  ">
                <h1 class="text-4xl font-extrabold">100+ </h1>
                <h1 class="max-w-xs">Client, tersebar di seluruh wilayah yogyakarta dan Indonesia</h1>
            </div>
            <div class="mt-4 md:mt-0 md:col-span-1  ">
                <h1 class="text-4xl font-extrabold">100+ </h1>
                <h1 class="">Produk berhasil di distribusikan dan dijual dengan mementingkan kualitas</h1>
            </div>

        </div>
    </section>
    <section class="mt-28 md:mt-24 max-w-screen-xl mx-auto px-6 md:px-8">
        <div class="grid md:grid-cols-2 md:place-item-center md:gap-8">
            <div class="md:col-span-1">
                <h1 class="font-bold text-black text-xl">Keunggulan produk UMKM Dusun Jetis</h1>
                <div class="flex item-center mt-4">
                    <div class="rounded-md bg-red-700 w-10 h-10 mr-4"></div>
                    <div>
                        <p class="text-md font-bold">Unik dan Berbeda </p>
                        <p class="text-md text-justify">Produk UMKM Dusun Jetis memiliki keunikan dan
                            kekhasan yang tidak dapat ditemukan di produk massal. Keunikan ini dapat menjadi daya tarik bagi
                            konsumen yang mencari pengalaman berbelanja yang berbeda dan menarik.</p>
                    </div>

                </div>

                <div class="flex item-center mt-4">
                    <div class="rounded-md bg-blue-700 w-10 h-10 mr-4"></div>
                    <div>
                        <p class="text-md font-bold">Bahan Berkualitas</p>
                        <p class="text-md text-justify"> Beberapa UMKM Dusun Jetis menonjolkan penggunaan bahan-bahan
                            berkualitas tinggi, termasuk bahan lokal dan ramah lingkungan. Ini mencerminkan kepedulian
                            terhadap kualitas dan dampak lingkungan yang positif.</p>
                    </div>

                </div>
                <div class="flex item-center mt-4">
                    <div class="rounded-md bg-green-700 w-10 h-10 mr-4"></div>
                    <div>
                        <p class="text-md font-bold">Fleksibilitas Produksi</p>
                        <p class="text-md text-justify">UMKM Dusun Jetis cenderung lebih fleksibel dalam
                            memproduksi dalam jumlah kecil atau pesanan khusus. Ini memungkinkan mereka untuk merespons
                            dengan cepat terhadap perubahan tren atau kebutuhan pasar.</p>
                    </div>

                </div>
                <div class="flex item-center mt-4">
                    <div class="rounded-md bg-orange-700 w-10 h-10 mr-4"></div>
                    <div>
                        <p class="text-md font-bold">Harga yang Bersaing</p>
                        <p class="text-md text-justify">Meskipun memiliki keunikan dan kualitas yang tinggi, banyak produk
                            UMKM ditawarkan dengan harga yang lebih bersaing daripada produk-produk dari merek besar. Hal
                            ini dapat menarik konsumen tanpa mengeluarkan biaya
                            yang terlalu tinggi.</p>
                    </div>

                </div>
            </div>
            <div class="md:col-span-1 mt-4 lg:mt-0">
                <div class="md:relative flex-1 md:mt-12 mx-auto gap-4 md:gap-0">
                    <img src="{{ asset('storage/images/produk1.jpg') }}" alt=""
                        class="md:absolute w-96 h-96 md:h-[200px] md:w-[200px] mx-auto md:mx-0 top-32 right-14 rounded-md">
                    <img src="{{ asset('storage/images/produk2.jpg') }}" alt=""
                        class="mt-8 md:mt-0 w-96 h-96 md:h-[200px] md:w-[200px] mx-auto md:absolute md:mx-0 md:block top-30 left-20 rounded-md">
                    <img src="{{ asset('storage/images/produk3.jpg') }}" alt=""
                        class="mt-8 md:mt-0 w-96 h-96 md:h-[200px] md:w-[200px] mx-auto md:absolute md:mx-0 md:block top-72 left-20 rounded-md">
                </div>
            </div>
        </div>
    </section>
    <div class="relative isolate px-6 md:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl  sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#f6d35e] to-[#d88e1e] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
@endsection

@section('footer-script')
@endsection
