@extends('_layouts.master')

@section('title')
    Installation
@endsection

@section('sub-title')
    Installing Twine is quick and easy with Composer.
@endsection

@section('content')
    <p class="leading-loose my-8">
        In order to use Twine you will need to install it on a per-project basis.
        The recommended installation method is via PHP's <a class="text-blue underline" href="https://getcomposer.org/">Composer</a>
        package manager. For help getting started with Composer or if you want
        to learn more check out the official <a class="text-blue underline" href="https://getcomposer.org/doc/">Composer documentation</a>.
    </p>

    <x-info>
        Twine requires PHP &gt;= 7.0 and Composer
    </x-info>

    <p class="leading-loose my-8">
        With Composer set up, run <code class="language-plaintext">composer install phlak/twine</code>
        from your application's root directory to install Twine.
    </p>

    <x-code>(['language' => 'bash'])
        $ cd /your/awesome/project
        $ composer require phlak/twine
    </x-code>

    <x-attention>
        Make sure <span class="font-mono">~/.composer/vendor/bin</span> is in
        your <span class="font-mono">$PATH</span>
    </x-attention>
@endsection

@section('footer')
    <div class="flex flex-row justify-between items-center">
        <div class="flex-auto text-left">
            <x-button link="/docs/what-is-twine">
                <i class="fal fa-angle-left"></i> What is Twine?
            </x-button>
        </div>

        <div class="flex-auto text-right">
            <x-button link="/docs/usage">
                Usage <i class="fal fa-angle-right"></i>
            </x-button>
        </div>
    </div>
@endsection
