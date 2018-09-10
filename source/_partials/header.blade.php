<div class="h-1 bg-red-dark"></div>

<div class="flex bg-white border-b h-16 items-center">
    <div class="w-full max-w-2xl mx-auto flex items-center">
        <div class="w-4/5 px-4 sm:w-2/5">
            <a href="/" class="my-1 no-underline text-2xl text-red-dark">
                Twine
            </a>

            <span class="px-2 text-grey text-lg">
                <a href="https://github.com/PHLAK/Twine" class="inline-block text-lg text-grey hover:text-grey-darkest m-2">
                    <i class="fab fa-github"></i>
                </a>

                <a href="https://twitter.com/PHLAK" class="inline-block text-lg text-grey hover:text-blue-light m-2">
                    <i class="fab fa-twitter"></i>
                </a>
            </span>
        </div>

        <div class="w-1/5 px-4 text-right sm:w-3/5">
            <span class="hidden font-mono text-grey-dark text-sm md:text-base sm:inline-block">
                composer install phlak/twine
            </span>

            @unless ($page->getFilename() == 'index')
                <button onclick="toggleNavigation()" class="inline-block border rounded ml-2 px-3 py-2 hover:bg-grey-lighter md:hidden">
                    <i class="fal fa-bars text-grey"></i>
                </button>

                <script>
                    function toggleNavigation() {
                        var navigation = document.getElementById('navigation');

                        if (navigation.style.display !== 'block') {
                            navigation.style.display = 'block';
                        } else {
                            navigation.style.display = 'none';
                        }
                    }
                </script>
            @endunless
        </div>
    </div>
</div>
