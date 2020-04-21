@extends('_layouts.master')

@section('title')
    Method Chaining
@endsection

@section('sub-title')
    Unlocking the power of Twine.
@endsection

@section('content')
    <p class="leading-loose my-8">A Twine string can be manipulated fluently by chaining methods.</p>

    <h2 class="font-light text-grey-darker text-2xl tracking-wide uppercase mt-12 mb-8">Example Method Chains</h2>

    <p class="leading-loose my-8">Perform a substring comparison.</p>

    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->substring(5, 4)->equals('pink'); // Returns true
    </x-code>

    <p class="leading-loose my-8">Encode a file in compliance with <a class="text-blue underline" href="https://tools.ietf.org/html/rfc2045">RFC 2045</a>.</p>

    <x-code>
        $string = new Twine\Str(file_get_contents('garbage.bin'));

        $string->base64()->wrap(76, "\r\n", Twine\Config\Wrap::HARD);
    </x-code>
@endsection

@section('footer')
    <div class="flex flex-row justify-between items-center">
        <div class="flex-auto text-left">
            <x-button link="/docs/usage">
                <i class="fal fa-angle-left"></i> Usage
            </x-button>
        </div>

        <div class="flex-auto text-right">
            <x-button link="/docs/troubleshooting">
                Troubleshooting <i class="fal fa-angle-right"></i>
            </x-button>
        </div>
    </div>
@endsection
