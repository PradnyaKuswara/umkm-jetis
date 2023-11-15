<!DOCTYPE html>
<html class="h-full" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>404 Error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="icon" href="{{ asset('image/GOFIT.png') }}" type="image/icon type"> --}}

    {{-- bootstrap  --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/b1f0352e54.js" crossorigin="anonymous"></script>
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- css --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

</head>

<body class="h-full">
    <section class="flex items-center h-full p-16 dark:bg-gray-900 dark:text-gray-100">
        <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
            <div class="max-w-md text-center">
                <h2 class="mb-8 font-extrabold text-9xl dark:text-gray-600">
                    <span class="sr-only">Error</span>404
                </h2>
                <p class="text-2xl font-semibold md:text-3xl">Sorry, we couldn't find this page.</p>
                <p class="mt-4 mb-8 dark:text-gray-400">But dont worry, you can find plenty of other things on our
                    homepage.</p>
                <a rel="" href="{{ url('/') }}"
                    class="px-8 py-3 font-semibold text-white rounded bg-orange-500 dark:bg-violet-400 dark:text-gray-900">Back
                    to
                    homepage</a>
            </div>
        </div>
    </section>
</body>

</html>
