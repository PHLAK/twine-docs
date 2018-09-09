<div class="mb-8">
    <p class="mb-2 uppercase tracking-wide text-grey font-bold">
        Introduction
    </p>

    <ul class="list-reset ml-2">
        <li class="mb-2">
            <a href="/docs/what-is-twine" class="block no-underline hover:underline text-grey-darkest">
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
            <a href="/docs/installation" class="block no-underline hover:underline text-grey-darkest">
                Installation
            </a>
        </li>

        <li class="mb-2">
            <a href="/docs/usage" class="block no-underline hover:underline text-grey-darkest">
                Usage
            </a>
        </li>

        <li class="mb-2">
            <a href="/docs/method-chaining" class="block no-underline hover:underline text-grey-darkest">
                Method Chaining
            </a>
        </li>

        <li class="mb-2">
            <a href="/docs/troubleshooting" class="block no-underline hover:underline text-grey-darkest">
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
                <a href="/docs/methods/{{ $method->getFilename() }}" class="block no-underline hover:underline text-grey-darkest">
                    {{ $method->getFilename() }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
