<!DOCTYPE html>
<html lang="en" class="h-full">
    <head>
        <title>Twine &bull; String manipulation, leveled up!</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/build') }}">
    </head>

    <body class="min-h-full font-sans">
        <div class="h-1 bg-red-dark"></div>

        <div class="flex bg-white border-b h-16 items-center">
            <div class="w-full max-w-2xl mx-auto flex items-center">
                <div class="w-1/5 px-4">
                    <a href="/" class="my-1 no-underline text-2xl text-red-dark">
                        Twine
                    </a>
                </div>

                <div class="w-4/5 px-4 text-right">
                    <span class="font-mono text-grey-dark text-base">
                        composer install phlak/twine
                    </span>
                </div>
            </div>
        </div>

        <div class="billboard bg-grey-lightest border-b">
            <div class="container h-full w-full max-w-xl mx-auto py-8 text-center">
                <h1 class="font-serif font-light text-grey-darker text-xl sm:text-3xl md:text-4xl tracking-wide mt-0 mb-4">
                    String mainpulation, leveled up!
                </h1>

                <div class="terminal inline-block w-auto rounded-lg shadow-lg overflow-hidden my-6">
                    <div class="flex justify-between h-8 p-2 bg-grey-light items-center">
                        <div class="">
                            <span class="inline-block float-right rounded-full bg-grey-dark w-3 h-3"></span>
                        </div>
                        <span class="font-semibold text-grey-dark">Twine</span>
                        <span class="inline-block float-right rounded-full bg-red-dark w-3 h-3"></span>
                    </div>

                    <div class="p-1 roiunded-b-lg" style="background-color: #121314">
                        <asciinema-player src="/assets/twine.cast" autoplay="true" loop="1" font-size=".875rem"></asciinema-player>
                    </div>
                </div>

                <div class="my-4">
                    <a href="/docs/what-is-twine" class="inline-block bg-white hover:bg-grey-darker border-2 border-grey-darker rounded-full shadow hover:shadow-md font-semibold text-grey-darker hover:text-white no-underline m-2 px-8 py-4">
                        View the Docs
                    </a>

                    <a href="https://github.com/PHLAK/Twine" class="inline-block bg-white hover:bg-grey-darker border-2 border-grey-darker rounded-full shadow hover:shadow-md font-semibold text-grey-darker hover:text-white no-underline m-2 px-8 py-4">
                        GitHub
                    </a>
                </div>
            </div>
        </div>

        <div>
            <div class="container h-full w-full max-w-xl mx-auto py-8 text-center">

                <div class="my-8 mx-auto flex justify-center">
                    <a href="https://github.com/PHLAK/Twine" class="block flex mx-6 items-center no-underline text-xl text-grey-darker hover:text-blue-light">
                        <i class="fab fa-github"></i> <span class="ml-2">GitHub</span>
                    </a>

                    <a href="https://twitter.com/PHLAK" class="block flex mx-6 items-center no-underline text-xl text-grey-darker hover:text-blue-light">
                        <i class="fab fa-twitter"></i> <span class="ml-2">Twitter</span>
                    </a>
                </div>

            </div>
        </div>

        <script src="{{ mix('js/asciinema-player.js', 'assets/build') }}"></script>
    </body>
</html>
