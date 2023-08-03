<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
        <section class="header_area">
            <div class="navbar-area bg-white">
                <div class="container relative">
                    <div class="row items-center">
                        <div class="w-full">
                            <nav class="bg-white border-gray-200 dark:bg-gray-900">
                                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                                    <a href="https://flowbite.com" class="flex items-center">
                                    <img src="img/logo_elessaude.png" class="w-24"  alt="about" width="80" height="100">
                                    </a>
                                    <div class="flex items-center">
                                        <a href="tel:5541251234" class="mr-6 text-sm  text-gray-500 dark:text-white hover:underline">(555) 412-1234</a>
                                        <a href="#" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>
                                    </div>
                                </div>
                            </nav>
                            </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header navbar -->

            <div id="home" class="header_hero bg-gray relative z-10 overflow-hidden lg:flex items-center">
                <div class="hero_shape shape_1">
                    <img src="img/shape/shape-1.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_2">
                    <img src="img/shape/shape-2.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_3">
                    <img src="img/shape/shape-3.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_4">
                    <img src="img/shape/shape-4.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_6">
                    <img src="img/shape/shape-1.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_7">
                    <img src="img/shape/shape-4.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_8">
                    <img src="img/shape/shape-3.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_9">
                    <img src="img/shape/shape-2.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_10">
                    <img src="img/shape/shape-4.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_11">
                    <img src="img/shape/shape-1.svg" alt="shape">
                </div><!-- hero shape -->
                <div class="hero_shape shape_12">
                    <img src="img/shape/shape-2.svg" alt="shape">
                </div><!-- hero shape -->

                <div class="container">
                    <div class="row">
                        <div class="w-full lg:w-1/2">
                            <div class="header_hero_content pt-150 lg:pt-0">
                                <h2 class="hero_title text-2xl sm:text-4xl md:text-5xl lg:text-4xl xl:text-5xl font-extrabold">Creative Multipurpose Tailwind CSS <span class="text-theme-color">Template</span></h2>
                                <p class="mt-8 lg:mr-8">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                                <div class="hero_btn mt-10">
                                    <a class="main-btn" href="#0">Get Started</a>
                                </div>
                            </div> <!-- header hero content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
                <div class="header_shape hidden lg:block"></div>

                <div class="header_image flex items-center">
                    <div class="image 2xl:pl-25">
                        <img src="img/header-image.svg" alt="Header Image">
                    </div>
                </div> <!-- header image -->
            </div> <!-- header hero -->

        </section>


            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
