@extends('layouts/application2')

@section('content-section')
    <div class="w-full ">
        <div class="grid lg:grid-cols-12">
            <div class="bg-white shadow-lg rounded-lg px-10 pt-8 pb-10 lg:col-span-6">
                <h1 class="text-6xl font-sans font-extrabold">Lupa password</h1>
                <h3 class="text-xl font-sans mt-2">Silahkan masukkan detail anda</h3>
                <form action="{{ url('password/update') }}" method="POST" class="mt-4" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-4/5 lg:w-10/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="text" name="email" placeholder="Email" autocomplete="off"
                            value="{{ Session::get('email') }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input type="password"
                            class="shadow appearance-none border  rounded w-3/5  lg:w-10/12 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" name="password" type="password" placeholder="******************">
                        <span class="border rounded py-2 px-3" id="basic-addon1" onclick=""><i class="fa fa-eye-slash"
                                onclick="change(this);myFunction(); "></i></span>
                        {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Konfirmasi Password
                        </label>
                        <input type="password"
                            class="shadow appearance-none border rounded w-3/5  lg:w-10/12 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="password_confirmation" name="password_confirmation" type="password_confirmation"
                            placeholder="******************">
                        <span class="border rounded py-2 px-3" id="basic-addon1" onclick=""><i class="fa fa-eye-slash"
                                onclick="change(this);myFunction2(); "></i></span>
                        {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
                    </div>
                    <div class="mb-4">
                        <input type="text"
                            class="shadow appearance-none border border-red-500 rounded w-3/5  lg:w-10/12 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="token" name="token" type="token" placeholder="token" value="{{ $token }}"
                            hidden>
                    </div>
                    <div class="mb-6">
                        <button
                            class="bg-orange-500 hover:opacity-75 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline"
                            type="submit">
                            Submit
                        </button>
                        {{-- <a href="{{ url('/') }}"
                            class="inline-flex items-center justify-center py-2 px-4 mt-3 lg:mt-0  text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            Halaman Utama
                        </a> --}}
                    </div>
                </form>
            </div>
            <div class=" lg:col-span-6 lg:flex animate__animated animate__fadeIn">
                <img class="rounded-lg lg:rounded-e-full  drop-shadow-lg" src="{{ asset('storage/images/logo.png') }}"
                    alt="mockup">
            </div>
        </div>
        <span class="block mt-4 text-sm text-gray-500 sm:text-center dark:text-gray-400">©
            {{ \Carbon\Carbon::now()->format('Y') }}
            <a href="#" class="hover:underline">UMKM Dusun Jetis</a>.
            All Rights
            Reserved.</span>

    </div>
@endsection
@section('footer-script')
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
                // x.classList.toggle("fa-thumbs-down");
            } else {
                x.type = "password";
            }
        }

        function myFunction2() {
            var x = document.getElementById("password_confirmation");
            if (x.type === "password") {
                x.type = "text";
                // x.classList.toggle("fa-thumbs-down");
            } else {
                x.type = "password";
            }
        }

        function change(x) {
            x.classList.toggle("fa-eye");
        }

        function change2(x) {
            x.classList.toggle("fa-eye");
        }
    </script>
@endsection
