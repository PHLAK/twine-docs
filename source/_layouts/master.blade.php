<!DOCTYPE html>
<html lang="en" class="h-full">
    <head>
        <title>
            @hasSection('title')
                @yield('title') &bull;
            @endif

            Twine Documentation
        </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/light.css" integrity="sha384-9QuzjQIM/Un6pY9bKVJGLW8PauASO8Mf9y3QcsHhfZSXNyXGoXt/POh3VLeiv4mw" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-AOiME8p6xSUbTO/93cbYmpOihKrqxrLjvkT2lOpIov+udKmjXXXFLfpKeqwTjNTC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-Yz2UJoJEWBkb0TBzOd2kozX5/G4+z5WzWMMZz1Np2vwnFjF5FypnmBUBPH2gUa1F" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/build') }}">

        <script src="{{ mix('js/app.js', 'assets/build') }}"></script>
    </head>

    <body class="min-h-full font-sans">
        @include('_partials.header')

        <div class="container md:flex h-full md:max-w-2xl mx-auto">
            <div class="md:flex w-full mx-auto">
                <nav id="navigation" class="hidden absolute pin-r bg-white border-l border-b shadow-lg p-6 text-sm md:w-1/5 md:block md:relative md:border-0 md:border-r md:shadow-none">
                    @include('_partials.navigation')
                </nav>

                <div class="w-full h-full p-6 md:w-4/5">
                    <div class="flex flex-row justify-between items-center mb-4">
                        <h1 class="font-serif font-light tracking-wide">
                            @yield('title')
                        </h1>

                        @button(['link' => $page->editLink()])
                            <i class="fal fa-edit"></i> <span class="hidden sm:inline-block">Improve this Page</span>
                        @endbutton
                    </div>

                    <p class="text-grey-dark text-lg mb-8">
                        @yield('sub-title')
                    </p>

                    @yield('content')

                    @hasSection('footer')
                        <div class="border-t mt-8 py-8">
                            @yield('footer')
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
