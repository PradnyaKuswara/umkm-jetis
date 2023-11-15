@extends('layouts/application')

@section('title-page')
    {{ $data->nama_produk }}
@endsection

@section('content')
    <div class="relative isolate px-6 md:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#f5f2e6] to-[#f7be69] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="max-w-screen-xl lg:p-3 mx-auto">
            <a href="{{ url('product') }}" class="hover:opacity-70 transition ease-in-out delay-75"> <i
                    class="fas fa-arrow-left mr-2 my-4"></i> Kembali</a>
            <div class="grid md:grid-cols-2  gap-14">
                <div class="md:col-span-1">
                    <img class="hover:scale-125 w-[500px] mx-auto md:mx-0 transition ease-in-out delay-100  h-[500px] transform-gpu rounded-md"
                        src="{{ asset('storage/images/' . $data->gambar1) }}" alt="image1"
                        onclick="showModal({{ asset('storage/images/' . $data->gambar1) }})">
                    <div class="flex mt-4 gap-4">
                        <div class="flex-col">
                            <img class="hover:scale-150 delay-100 transform-gpu transition ease-in-out rounded-md w-full h-20"
                                src="{{ asset('storage/images/' . $data->gambar2) }}" alt="image2">
                        </div>
                        <div class="flex-col">
                            <img class="hover:scale-150 delay-100 transform-gpu transition ease-in-out rounded-md w-full h-20"
                                src="{{ asset('storage/images/' . $data->gambar3) }}" alt="image2">
                        </div>
                    </div>
                </div>
                <div class="md:col-span-1">
                    <p class="text-xs text-gray-500 text-justify">{{ $data->kategori }}</p>
                    <p class="mt-2 text-3xl font-sans font-extrabold ">{{ $data->nama_produk }} </p>
                    <p class="mt-2 text-xl font-extrabold text-blue-500 ">Rp {{ $data->harga }},00</p>
                    <p class="mt-8 text-sm text-justify ">{{ $data->deskripsi }}</p>
                    <p class="mt-6 text-gray-500 font-bold text-xs">Status: {{ $data->status }}</p>
                    <div class="mt-8 flex items-center">
                        <p class=" flex-1 text-sm text-gray-500"><i class="fas fa-shop mr-2"></i>{{ $data->nama_umkm }}
                        </p>
                        <a href="{{ url($data->link_gmaps) }}" target="_blank"
                            class=" hover:opacity-75 text-sm text-blue-500  rounded-full"><i
                                class="fas fa-location-dot mr-2 fa-1x"></i>Lokasi UMKM
                        </a>
                    </div>


                    <div class="mt-8 w-full">
                        <a href="https://wa.me/+62{{ $data->nomor_telepon }}?text=Saya%20ingin%20membeli%20produk%20{{ $data->nama_produk }}%20ini%20{{ Request::Url() }}"
                            class="flex item-center py-1 justify-center rounded-md bg-orange-500 hover:opacity-75 transition ease-in-out delay-75 text-white ">Pesan
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-script')
@endsection
