<div class="mb-8">
    <p class="mb-2 uppercase tracking-wide text-grey font-bold">
        Documentation
    </p>

    <ul class="list-reset ml-2">
        <li class="mb-2">
            <a href="/getting-started" class="block no-underline hover:underline text-grey-darkest">
                Getting Started
            </a>
        </li>

        <li class="mb-2">
            <a href="/method-chaining" class="block no-underline hover:underline text-grey-darkest">
                Method Chaining
            </a>
        </li>
    </ul>
</div>

<div class="mb-8">
    <p class="mb-2 uppercase tracking-wide text-grey font-bold">Methods</p>

    <ul class="list-reset ml-2">
        @foreach ($methods->sort() as $method)
            <li class="mb-2">
                <a href="/methods/{{ strtolower($method->getFilename()) }}" class="block no-underline hover:underline text-grey-darkest">{{ $method->getFilename() }}</a>
            </li>
        @endforeach
    </ul>
</div>
