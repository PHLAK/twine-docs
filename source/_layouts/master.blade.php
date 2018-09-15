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

        <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/build') }}">

        <script src="{{ mix('js/app.js', 'assets/build') }}"></script>
    </head>

    <body class="min-h-full font-sans">
        @include('_partials.header')

        <div class="container md:flex h-full max-w-2xl mx-auto">
            <div class="md:flex w-full mx-auto">
                <nav id="navigation" class="hidden absolute pin-r bg-white border-l border-b shadow-lg p-4 text-sm md:w-1/5 md:block md:relative md:border-0 md:border-r md:px-4 md:shadow-none">
                    @include('_partials.navigation')
                </nav>

                <div class="docSearch-content w-full h-full p-4 md:w-4/5 md:px-6">
                    <div class="flex flex-row justify-between items-center mb-4">
                        <h1 class="font-serif font-light tracking-wide">
                            @yield('title')
                        </h1>

                        @button(['link' => $page->editLink()])
                            <i class="fal fa-edit"></i> <span class="hidden sm:inline-block">Improve this Page</span>
                        @endbutton
                    </div>

                    <p class="text-grey-dark text-lg leading-normal mb-8">
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

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
        <script type="text/javascript">
            docsearch({
                apiKey: '1ffce654b0ba7cf0820e1921ccae93be',
                indexName: 'twine',
                inputSelector: '#docsearch'
            });
        </script>
    </body>
</html>
