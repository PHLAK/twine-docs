@extends('_layouts.master')

@section('title')
    Twine Documentation
@endsection

@section('content')
    <h1 class="font-serif font-light tracking-wide mb-4">Getting Started</h1>

    <p class="text-grey-dark text-lg mb-8">
        Twine is a simple string manipulation library with an expressive, fluent syntax.
    </p>

    <h2 class="font-light text-grey-darker tracking-wide uppercase mt-12 mb-8">Installation</h2>

    <p class="my-8">
        Twine can be installed in multiple ways to suit your individual needs.
    </p>

    <blockquote class="bg-blue-lightest border-l-4 border-blue-light rounded-lg shadow text-sm my-8 p-4">
        <i class="fa fa-exclamation-circle text-blue-light mr-1"></i>

        <span class="text-grey-darker">Twine requires PHP &gt;= 7.0</span>
    </blockquote>

    <h3 class="font-serif font-light text-grey-dark tracking-wide mt-8 mb-4">Composer</h3>

    <p class="my-8">
        The recommended installation method is via PHP's <a href="https://getcomposer.org/">Composer</a>
        package manager. For help getting started with Composer or just to learn more check out the
        official <a href="https://getcomposer.org/doc/">Composer documentation</a>.
    </p>

    <p class="my-8">
        Once you have Composer set up, installing Twine is as simple as running

        @code(['language' => 'bash'])
            composer install phlak/twine
        @endcode

        from within your application directory.
    </p>

    <h3 class="font-serif font-light text-grey-dark tracking-wide mt-8 mb-4">Git</h3>

    @code(['language' => 'bash'])
        git clone https://github.com/PHLAK/Twine.git
    @endcode

    <h2 class="font-light text-grey-darker tracking-wide uppercase mt-12 mb-8">Instantiation</h2>

    <p class="my-8">First, import Twine:</p>

    @code
        use PHLAK\Twine;
    @endcode

    <p class="my-8">Then instantiate a Twine string:</p>

    @code
        $string = new Twine\Str('john pinkerton');
    @endcode

    <p class="my-8">or statically via the <code class="language-php">make()</code> method</p>

    @code
        $string = Twine\Str::make('john pinkerton');
    @endcode

    <p class="my-8">or with the <code class="language-php">str()</code> helper method</p>

    @code
        $string = str('john pinkerton');
    @endcode

    <h2 class="font-light text-grey-darker tracking-wide uppercase mt-12 mb-8">Miscellaneous</h2>

    <h3 class="font-serif font-light text-grey-dark tracking-wide mt-8 mb-4">Changelog</h3>

    <p class="my-8">A list of changes can be found on the <a href="https://github.com/PHLAK/Twine/releases">GitHub Releases</a> page.</p>

    <h3 class="font-serif font-light text-grey-dark tracking-wide mt-8 mb-4">Troubleshooting</h3>

    <p class="my-8">Please report bugs to the [GitHub Issue Tracker](https://github.com/PHLAK/Twine/issues).</p>
@endsection
