@extends('_layouts.master')

@section('title')
    Method Chaining
@endsection

@section('sub-title')
    Unlocking the power of Twine.
@endsection

@section('content')
    <p class="leading-loose my-8">A Twine string can be manipulated fluently by chaining methods.</p>

    <h2 class="font-light text-grey-darker tracking-wide uppercase mt-12 mb-8">Example Method Chains</h2>

    <p class="leading-loose my-8">Perform a substring comparison.</p>

    @code
        $string = new Twine\Str('john pinkerton');

        $string->substring(5, 4)->equals('pink'); // Returns true
    @endcode

    <p class="leading-loose my-8">Encode a file in compliance with <a href="https://tools.ietf.org/html/rfc2045">RFC 2045</a>.</p>

    @code
        $string = new Twine\Str(file_get_contents('garbage.bin'));

        $string->base64()->wrap(76, "\r\n", Twine\Config\Wrap::HARD);
    @endcode
@endsection

@section('footer')
    <div class="flex flex-row justify-between items-center">
        <div class="flex-auto text-left">
            @button(['link' => '/docs/usage'])
                <i class="fas fa-angle-left"></i> Usage
            @endbutton
        </div>

        <div class="flex-auto hidden text-center sm:inline-block">
            @button(['link' => "https://github.com/PHLAK/twine-docs/edit/master/source/docs/{$page->getFilename()}.{$page->getExtension()}"])
                <i class="far fa-edit"></i> Edit this Page
            @endbutton
        </div>

        <div class="flex-auto text-right">
            @button(['link' => '/docs/troubleshooting'])
                Troubleshooting <i class="fas fa-angle-right"></i>
            @endbutton
        </div>
    </div>
@endsection
