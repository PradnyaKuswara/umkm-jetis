@extends('layouts/application')

@section('title-page')
    About
@endsection

@section('content')
    <div class="relative isolate px-6 md:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#f5f2e6] to-[#f7be69] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="max-w-screen-lg lg:p-3 mx-auto">
            <div class="flex items-center justify-center ">
                <img class="h-12 w-auto" src="{{ asset('storage/images/logo.png') }}" alt="">
                <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">UMKM Dusun Jetis</span>
            </div>
            <div class="mt-6">
                <p class="text-justify   ">UMKM adalah singkatan dari Usaha Mikro, Kecil, dan Menengah. UMKM merujuk pada
                    sektor bisnis yang melibatkan usaha-usaha dengan skala kecil hingga menengah. Usaha-usaha ini biasanya
                    dimiliki oleh individu atau kelompok kecil yang memiliki sumber daya terbatas.
                    UMKM memainkan peran penting dalam perekonomian suatu negara. Mereka menyumbang pada pertumbuhan
                    ekonomi, penciptaan lapangan kerja, dan pengurangan kemiskinan. UMKM juga sering kali menjadi sumber
                    inovasi dan kreativitas.
                </p>
            </div>
            <div class="mt-10">
                <h1 class="text-3xl text-black font-extrabold mx-auto">Arti Logo</h1>
                <div class="grid md:grid-cols-2 gap-8 place-items-center mt-10">
                    <div class="md:col-span-1">
                        <h1 class="text-md text-black text-justify">Tas belanja sering kali melambangkan konsumsi,
                            pembelian, dan
                            aktivitas berbelanja. Elemen ini dapat mengandung arti seperti:
                            Kemakmuran: Menggambarkan kemampuan untuk membeli barang dan mewujudkan kebutuhan dan keinginan.
                            Konsumsi: Menggambarkan budaya konsumsi dan daya beli.
                            Praktisitas: Melambangkan kemudahan dan kenyamanan dalam berbelanja</h1>
                    </div>
                    <div class="md:col-span-1">
                        <img src="{{ asset('storage/images/logo-tas.png') }}" class="w-96 h-96" alt="">
                    </div>
                    <div class="md:col-span-1">
                        <img src="{{ asset('storage/images/logo-tangan.png') }}" class="w-96 h-96" alt="">
                    </div>
                    <div class="md:col-span-1">

                        <h1 class="text-md text-black  text-justify">Simbol tangan kerjasama biasanya melambangkan
                            persatuan, kerjasama, dan kesolidaritas. Elemen ini dapat mengandung arti seperti:
                            Solidaritas: Melambangkan persatuan dan dukungan antarindividu atau kelompok.
                            Kerjasama: Menggambarkan kolaborasi dan koordinasi untuk mencapai tujuan bersama.
                            Persatuan: Melambangkan kesatuan dalam visi, nilai, atau tujuan.</h1>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <h1 class="text-3xl text-black font-extrabold mx-auto">Lokasi</h1>
                <div class="grid md:grid-cols-2 gap-5 place-items-center mt-10">
                    <div class="md:col-span-1">
                        <img src="{{ asset('storage/images/gmaps-jetis.png') }}" height="700" width="700"
                            class="rounded-md" alt="">
                    </div>
                    <div class="md:col-span-1 mt-6 md:mt-10">
                        <p class="text-base font-bold"> <i class="fas fa-location"></i> RT 03, Dusun Jetis, Sendangsari</p>
                        <p class="text-base font-bold">Bantul, Yogyakarta, Indonesia</p>
                        <div class="mt-6">
                            <a href="https://goo.gl/maps/UzNCTVDEi1PDJSoA6" target="_blank"
                                class=" px-6 rounded-lg mt-6 hover:opacity-75 py-2 bg-gray-200">
                                <i class="fas fa-arrow-right mr-2 text-black"></i> <span class="text-black ">Klik
                                    lokasi</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
