<div class="mb-8">
    <p class="mb-2 uppercase tracking-wide text-grey font-bold">
        Introduction
    </p>

    <ul class="list-reset ml-2">
        <li class="mb-2">
            <a href="/docs/what-is-twine" class="block no-underline hover:underline text-grey-darkest {{ $page->getPath() == '/docs/what-is-twine' ? 'active' : null }}">
                What is Twine?
            </a>
        </li>
    </ul>
</div>

<div class="mb-8">
    <p class="mb-2 uppercase tracking-wide text-grey font-bold">
        Getting Started
    </p>

    <ul class="list-reset ml-2">
        <li class="mb-2">
            <a href="/docs/installation" class="block no-underline hover:underline text-grey-darkest {{ $page->getPath() == '/docs/installation' ? 'active' : null }}">
                Installation
            </a>
        </li>

        <li class="mb-2">
            <a href="/docs/usage" class="block no-underline hover:underline text-grey-darkest {{ $page->getPath() == '/docs/usage' ? 'active' : null }}">
                Usage
            </a>
        </li>

        <li class="mb-2">
            <a href="/docs/method-chaining" class="block no-underline hover:underline text-grey-darkest {{ $page->getPath() == '/docs/method-chaining' ? 'active' : null }}">
                Method Chaining
            </a>
        </li>

        <li class="mb-2">
            <a href="/docs/troubleshooting" class="block no-underline hover:underline text-grey-darkest {{ $page->getPath() == '/docs/troubleshooting' ? 'active' : null }}">
                Troubleshooting
            </a>
        </li>
    </ul>
</div>

<div class="mb-8">
    <p class="mb-2 uppercase tracking-wide text-grey font-bold">Methods</p>

    <ul class="list-reset ml-2">
        @foreach ($methods->sort() as $method)
            <li class="mb-2">
                <a href="/docs/methods/{{ $method->getFilename() }}" class="block no-underline hover:underline text-grey-darkest {{ $page->getPath() == "/docs/methods/{$method->getFilename()}" ? 'active' : null }}">
                    {{ $method->getFilename() }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
