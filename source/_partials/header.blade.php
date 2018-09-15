<div class="h-1 bg-red-dark"></div>

<div class="flex bg-white border-b h-16 items-center">
    <div class="flex flex-row justify-between w-full max-w-2xl mx-auto items-center">
        <div class="w-1/5 px-4 md:px-6">
            <a href="/" class="my-1 no-underline text-2xl text-red-dark">
                Twine
            </a>

            <span class="hidden text-grey text-lg md:inline-block">
                <a href="https://github.com/PHLAK/Twine" class="inline-block text-lg text-grey hover:text-grey-darkest m-1">
                    <i class="fab fa-github"></i>
                </a>

                <a href="https://twitter.com/PHLAK" class="inline-block text-lg text-grey hover:text-blue-light m-1">
                    <i class="fab fa-twitter"></i>
                </a>
            </span>
        </div>

        <div class="flex flex-row justify-end w-4/5 px-4 md:px-6">
            <div class="relative w-full md:max-w-xs">
                <div class="flex items-center absolute pin-l pin-y ml-4 text-sm text-grey z-10">
                    <i class="fal fa-search fa-fw"></i>
                </div>

                <input type="text" placeholder="Search the docs" id="docsearch" class="border rounded-full shadow-inner text-grey-darker px-3 pl-10 py-2 w-full focus:outline-none" autocomplete="off" spellcheck="false">
            </div>

            <button onclick="toggleNavigation()" class="border rounded self-end ml-2 px-3 py-2 hover:bg-grey-lighter md:hidden">
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
        </div>
    </div>
</div>
