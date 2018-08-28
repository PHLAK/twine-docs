<!DOCTYPE html>
<html lang="en" class="h-full">
    <head>
        <title>{{ $title ?? 'Documentation' }} &bull; Twine</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
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

                <div class="w-full h-full p-6 leading-normal md:w-4/5">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>