@extends('_layouts.master')

@section('title')
    Installation
@endsection

@section('content')
    <h1 class="font-serif font-light tracking-wide mb-4">Installation</h1>

    <p class="text-grey-dark text-lg mb-8">
        Installing Twine is quick and easy with Composer.
    </p>

    <p class="leading-loose my-8">
        In order to use Twine you will need to install it on a per-project basis.
        The recommended installation method is via PHP's <a href="https://getcomposer.org/">Composer</a>
        package manager. For help getting started with Composer or if you want
        to learn more check out the official <a href="https://getcomposer.org/doc/">Composer documentation</a>.
    </p>

    <blockquote class="bg-blue-lightest border-l-4 border-blue-light rounded-lg shadow text-sm my-8 p-4">
        <i class="fa fa-info-circle text-blue-light mr-1"></i>

        <span class="text-grey-darker">Twine requires PHP &gt;= 7.0 and Composer</span>
    </blockquote>

    <p class="leading-loose my-8">
        With Composer set up, run <code class="language-plaintext">composer install phlak/twine</code>
        from your application's root directory to install Twine.
    </p>

    @code(['language' => 'bash'])
        $ cd /your/awesome/project
        $ composer install phlak/twine
    @endcode

    <blockquote class="bg-yellow-lightest border-l-4 border-yellow-dark rounded-lg shadow text-sm my-8 p-4">
        <i class="fa fa-exclamation-triangle text-yellow-dark mr-1"></i>

        <span class="text-grey-darker">
            Make sure <span class="font-mono">~/.composer/vendor/bin</span> is
            in your <span class="font-mono">$PATH</span>
        </span>
    </blockquote>
@endsection
