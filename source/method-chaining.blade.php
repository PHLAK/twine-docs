@extends('_layouts.master')

@section('title')
    Method Chaining
@endsection

@section('content')
    <h1 class="font-serif font-light tracking-wide mb-4">Method Chaining</h1>

    <p class="text-grey-dark text-lg mb-8">
        Unlock the power of Twine.
    </p>

    <p class="my-8">A Twine string can be manipulated fluently by chaining methods.</p>

    <h2 class="font-light text-grey-darker tracking-wide uppercase mt-12 mb-8">Example Method Chains</h2>

    <p class="my-8">Perform a substring comparison.</p>

    @code
        $string = new Twine\Str('john pinkerton');

        $string->substring(5, 4)->equals('pink'); // Returns true
    @endcode

    <p class="my-8">Encode a file in compliance with <a href="https://tools.ietf.org/html/rfc2045">RFC 2045</a>.</p>

    @code
        $string = new Twine\Str(file_get_contents('garbage.bin'));

        $string->base64()->wrap(76, "\r\n", Twine\Config\Wrap::HARD);
    @endcode
@endsection
