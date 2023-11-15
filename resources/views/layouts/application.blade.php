<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>@yield('title-page')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('storage/images/logo.png') }}">

    <!-- Icon -->
    <script src="https://kit.fontawesome.com/b1f0352e54.js" crossorigin="anonymous"></script>
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- css Tailwind -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- js Tailwind -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style type="text/css">
        html,
        body {
            width: 100%;
            font-family: 'Poppins';
            scroll-behavior: smooth;
            scroll-padding-top: 40px;
            scroll-padding-bottom: 40px;
            z-index: 1;
        }

        /* .open-sans {
            font-family: OpenSans;
        }

        .tiempos {
            font-family: TiemposHeadlineSemibold;
        } */
    </style>

</head>

<body>
    <div class="min-h-screen min-w-full">
        @include('components/message')
        <header class="absolute inset-x-0 top-0 z-20">
            <nav class="flex items-center justify-between p-2 lg:px-8  bg-gradient-to-r from-white to-orange-100"
                aria-label="Global">
                <div class="flex lg:flex-1 ">
                    <a href="{{ url('/') }}" class="-m-1.5 p-1.5">

                        {{-- <span class="">Emping Growol</span> --}}
                        <img class="h-12 w-auto" src="{{ asset('storage/images/logo.png') }}" alt="">

                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="btn-open -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12 ">
                    <a href="{{ url('/') }}"
                        class="text-sm leading-6 open-sans text-gray-900 {{ Request::path() == '/' ? 'font-bold' : 'font-light' }}">Home</a>
                    <a href="{{ url('/product') }}"
                        class="text-sm leading-6 open-sans text-gray-900 {{ Request::path() == 'product' ? 'font-bold' : 'font-light' }}">Product</a>
                    <a href="{{ url('/about') }}"
                        class="text-sm leading-6 open-sans text-gray-900 {{ Request::path() == 'about' ? 'font-bold' : 'font-light' }}">About</a>
                    <a href="{{ url('/login') }}" class="text-sm open-sans font-semibold leading-6 text-gray-900">Log
                        in
                        <span aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="menu hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="layout fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-full sm:ring-4 sm:ring-gray-900/10 animate__animated animate__fadeInDown">
                    <div class="flex items-center justify-between">
                        {{-- <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                        </a> --}}
                        <button type="button" class="btn-close -m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="{{ url('/') }}"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base open-sans font-semibold leading-7 text-gray-900 hover:bg-orange-500 hover:text-white">Home</a>
                                <a href="{{ url('/product') }}"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base open-sans font-semibold leading-7 text-gray-900 hover:bg-orange-500 hover:text-white">Product</a>
                                <a href="{{ url('/about') }}"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base open-sans font-semibold leading-7 text-gray-900 hover:bg-orange-500 hover:text-white">About</a>
                            </div>
                            <div class="py-6">
                                <a href="{{ url('/login') }}"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base open-sans font-semibold leading-7 text-gray-900 hover:bg-orange-950 hover:text-white">Log
                                    in</a>
                            </div>
                            <div class="py-6">
                                <span class="block text-sm text-gray-500 open-sans sm:text-center dark:text-gray-400">©
                                    {{ \Carbon\Carbon::now()->format('Y') }}
                                    <a href="{{ url('/') }}" class="hover:underline">UMKM Dusun Jetis</a>.
                                    All Rights
                                    Reserved.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>

            <div class="container max-w-full p-5 py-28 mx-auto lg:p-8 lg:py-24">
                @yield('content')
            </div>

        </main>

        <!--Footer container-->
        <footer>
            <div
                class="px-4 pt-12 pb-12 mx-auto sm:max-w-full md:max-w-full lg:max-w-full bg-gradient-to-r to-white from-orange-100  md:px-24 lg:px-8">
                <div class="grid gap-10 row-gap-6  sm:grid-cols-2 lg:grid-cols-4">
                    <div class="sm:col-span-2">
                        <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                            <img class="h-12 w-auto" src="{{ asset('storage/images/logo.png') }}" alt="">
                            <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">UMKM Dusun
                                Jetis</span>
                        </a>
                        <div class="mt-6 lg:max-w-sm">
                            <p class="text-sm text-gray-800">
                                UMKM adalah singkatan dari Usaha Mikro, Kecil, dan Menengah. UMKM merujuk pada
                                sektor bisnis yang melibatkan usaha-usaha dengan skala kecil hingga menengah.
                            </p>
                            <p class="mt-4 text-sm text-gray-800">
                                Usaha-usaha ini biasanya
                                dimiliki oleh individu atau kelompok kecil yang memiliki sumber daya terbatas.
                            </p>
                        </div>
                    </div>
                    <div class="space-y-2 text-sm">
                        <p class="text-base font-bold tracking-wide text-gray-900">Contacts</p>
                        <div class="flex">
                            <p class="mr-1 text-gray-800">Phone:</p>
                            <a href="tel:08989457168" aria-label="Our phone" title="Our phone"
                                class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">08989457168</a>
                        </div>
                        <div class="flex">
                            <p class="mr-1 text-gray-800">Email:</p>
                            <a href="#" aria-label="Our email" title="Our email"
                                class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">milunaemping@gmail.com</a>
                        </div>
                        <div class="flex">
                            <p class="mr-1 text-gray-800">Address:</p>
                            <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Our address"
                                title="Our address"
                                class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                                RT 03, Dusun Jetis, Sendangsari, Bantul, Yogyakarta, Indonesia
                            </a>
                        </div>
                    </div>
                    {{-- <div>
                        <span class="text-base font-bold tracking-wide text-gray-900">Social</span>
                        <div class="flex items-center mt-1 space-x-3">
                            <a href="/"
                                class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                    <path
                                        d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                                    </path>
                                </svg>
                            </a>
                            <a href="/"
                                class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                    <circle cx="15" cy="15" r="4"></circle>
                                    <path
                                        d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                                    </path>
                                </svg>
                            </a>
                            <a href="/"
                                class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                    <path
                                        d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                                    </path>
                                </svg>
                            </a>
                        </div> --}}
                    <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
                        <p class="text-sm text-gray-600">
                            © {{ Carbon\Carbon::now()->year }} UMKM Dusun Jetis. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });
</script>
<script>
    const btnClose = document.querySelector(".btn-close");
    const btnOpen = document.querySelector(".btn-open");
    const menu = document.querySelector(".menu");
    const layout = document.querySelector(".layout");

    btnOpen.addEventListener("click", () => {
        menu.classList.toggle("hidden");

    });

    btnClose.addEventListener("click", () => {
        menu.classList.toggle("hidden");

    });
</script>
@yield('footer-script')

</html>
