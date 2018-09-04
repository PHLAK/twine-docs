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

    <h2 class="font-light text-grey-darker tracking-wide uppercase mt-12 mb-8">Instantiation</h2>

    <p class="leading-loose my-8">
        Using Twine is simple, once installed start by importing the library.
    </p>

    @code
        &lt;?php

        use PHLAK\Twine;

        // ...
    @endcode

    <p class="leading-loose my-8">
        Next you must instatiate a Twine object. There are multiple ways to
        accomplish this. No one method is better than the rest so choose the one
        that best suits you and your project's needs. You may even use multiple
        instantiation methods within the same project or file.
    </p>

    <h3 class="font-serif font-light text-grey-dark tracking-wide mt-12 mb-8">
        New <span class="font-mono">Twine\Str</span> Object
    </h3>

    <p class="leading-loose my-8">
        The default method of instantiation is to simply new up a
        <code class="language-php">Twine\Str</code> object passing your string
        as the first and only parameter.
    </p>

    @code
        $string = new Twine\Str('john pinkerton');
    @endcode

    <blockquote class="items-start bg-blue-lightest border-l-4 border-blue-light rounded-lg shadow text-sm my-8 p-4">
        <i class="fa fa-info-circle text-blue-light mr-1"></i>

        <span class="text-grey-darker">
            When passing a non-string parameter to the <code class="language-php">Twine\Str</code>
            object it will be cast as a string internally.
        </span>
    </blockquote>

    <h3 class="font-serif font-light text-grey-dark tracking-wide mt-12 mb-8">
        Static <span class="font-mono">make()</span> Method
    </h3>

    <p class="leading-loose my-8">
        You may also instantiate a <code class="language-php">Twine\Str</code>
        object statically via the <code class="language-php">make()</code> method.
    </p>

    @code
        $string = Twine\Str::make('john pinkerton');
    @endcode

    <h3 class="font-serif font-light text-grey-dark tracking-wide mt-12 mb-8">
        The <span class="font-mono">str()</span> Helper
    </h3>

    <p class="leading-loose my-8">
        Twine also comes with a global <code class="language-php">str()</code>
        helper method. The method takes a string as the only parameter and
        returns a <code class="language-php">Twine\Str</code> object.
    </p>

    @code
        $string = str('john pinkerton');
    @endcode

    <h2 class="font-light text-grey-darker tracking-wide uppercase mt-12 mb-8">Usage</h2>

    <p class="leading-loose my-8">
        Once you have a concrete <code class="language-php">Twine\Str</code>
        instance you may treat it like any other string. This includes echoing
        it or using any of PHPs built in string functions against it.
    </p>

    @code
        echo $string; // Echos 'john pinkerton'

        str_shuffle($string) // Returns something like 'enoipo ktnjhnr'

        strlen($string); // Returns 14
    @endcode

    <p class="leading-loose my-8">
        Keep in mind that a <code class="language-php">Twine\Str</code> object
        is <em>not</em> an actual a string primitive.
    </p>

    @code
        is_string($string); // Returns false
    @endcode

    <p class="leading-loose my-8">
        At this point you're ready to start using Twine by calling any of it's
        many built in methods.
    </p>

    @code
        $str->substr(5, 4); // Returns 'pink'

        $string->uppercaseWords(); // Returns 'John Pinkerton'

        $string->words(); // Returns ['john', 'pinkerton']
    @endcode

    <p class="leading-loose my-8">
        You can even chain these together for advanced functionality and ease of use.
    </p>

    @code
        $string->substring(5, 4)->equals('pink'); // Returns true

        $string->prepend('mr. ')->uppercaseWords(); // Returns 'Mr. John Pinkerton'
    @endcode

    <p class="leading-loose my-8">
        See the <a href="/method-chaining">Method Chaining</a> section for more info and examples.
    </p>

    <h3 class="font-serif font-light text-grey-dark tracking-wide mt-12 mb-8">
        Usage Tips
    </h3>

    <p class="leading-loose my-8">
        When using the static <code class="language-php">make()</code> method or
        the <code class="language-php">str()</code> helper you can chain methods
        immediately after in a single line.
    </p>

    @code
        Twine\Str::make('john pinkerton')->uppercaseWords();
    @endcode

    @code
        str('john pinkerton')->uppercaseWords();
    @endcode


    <h2 class="font-light text-grey-darker tracking-wide uppercase mt-12 mb-8">Miscellaneous</h2>

    <h3 class="font-serif font-light text-grey-dark tracking-wide mt-12 mb-8">Changelog</h3>

    <p class="leading-loose my-8">
        A list of changes can be found on the <a href="https://github.com/PHLAK/Twine/releases">GitHub Releases</a> page.
    </p>

    <h3 class="font-serif font-light text-grey-dark tracking-wide mt-12 mb-8">Troubleshooting</h3>

    <p class="leading-loose my-8">
        For questions contact <a href="https://twitter.com/PHLAK">@PHLAK</a> on Twitter
        or via email at <a href="mailto:Chris@ChrisKankiewicz.com">Chris@ChrisKankiewicz.com</a>
    </p>

    <p class="leading-loose my-8">
        Please report bugs to the <a href="https://github.com/PHLAK/Twine/issues">GitHub Issue Tracker</a>.
    </p>
@endsection
