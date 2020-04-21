@extends('_layouts.master')

@section('title')
    Usage
@endsection

@section('sub-title')
    Getting down and dirty with Twine.
@endsection

@section('content')
    <p class="leading-loose my-8">
        Using Twine is simple, once installed start by importing the library.
    </p>

    <x-code>
        &lt;?php

        use PHLAK\Twine;

        // ...
    </x-code>

    <p class="leading-loose my-8">
        Next you must instatiate a Twine object. There are multiple ways to
        accomplish this. No one method is better than the rest so choose the one
        that best suits you and your project's needs. You may even use multiple
        instantiation methods within the same project or file.
    </p>

    <p class="leading-loose my-8">
        The default method of instantiation is to simply new up a
        <code class="language-php">Twine\Str</code> object passing your string
        as the first and only parameter.
    </p>

    <x-code>
        $string = new Twine\Str('john pinkerton');
    </x-code>

    <x-info>
        When passing a non-string parameter to the
        <code class="language-php">Twine\Str</code>
        object it will be cast as a string internally.
    </x-info>

    <p class="leading-loose my-8">
        You may also instantiate a <code class="language-php">Twine\Str</code>
        object statically via the <code class="language-php">make()</code> method.
    </p>

    <x-code>
        $string = Twine\Str::make('john pinkerton');
    </x-code>

    <p class="leading-loose my-8">
        Twine also comes with a global <code class="language-php">str()</code>
        helper method. The method takes a string as the only parameter and
        returns a <code class="language-php">Twine\Str</code> object.
    </p>

    <x-code>
        $string = str('john pinkerton');
    </x-code>

    <p class="leading-loose my-8">
        Once you have a concrete <code class="language-php">Twine\Str</code>
        instance you may treat it like any other string. This includes echoing
        it or using any of PHPs built in string functions against it.
    </p>

    <x-code>
        echo $string; // Echos 'john pinkerton'

        str_shuffle($string) // Returns something like 'enoipo ktnjhnr'

        strlen($string); // Returns 14
    </x-code>

    <p class="leading-loose my-8">
        Keep in mind that a <code class="language-php">Twine\Str</code> object
        is <em>not</em> an actual a string primitive.
    </p>

    <x-code>
        is_string($string); // Returns false

        $string === 'john pinkerton' // Returns false
    </x-code>

    <p class="leading-loose my-8">
        At this point you're ready to start using Twine by calling any of it's
        many built in methods.
    </p>

    <x-code>
        $string->substring(5, 4); // Returns 'pink'

        $string->uppercaseWords(); // Returns 'John Pinkerton'

        $string->words(); // Returns ['john', 'pinkerton']
    </x-code>

    <p class="leading-loose my-8">
        You can even chain these together for advanced functionality and ease of use.
    </p>

    <x-code>
        $string->substring(5, 4)->equals('pink'); // Returns true

        $string->prepend('mr. ')->uppercaseWords(); // Returns 'Mr. John Pinkerton'
    </x-code>

    <p class="leading-loose my-8">
        See the <a class="text-blue underline" href="/docs/method-chaining">Method Chaining</a> section for more info and examples.
    </p>

    <h2 class="font-light text-grey-darker text-2xl tracking-wide uppercase mt-12 mb-8">
        Usage Tips
    </h2>

    <p class="leading-loose my-8">
        When using the static <code class="language-php">make()</code> method or
        the <code class="language-php">str()</code> helper you can chain methods
        immediately after in a single line.
    </p>

    <x-code>
        Twine\Str::make('john pinkerton')->uppercaseWords();
    </x-code>

    <x-code>
        str('john pinkerton')->uppercaseWords();
    </x-code>
@endsection

@section('footer')
    <div class="flex flex-row justify-between items-center">
        <div class="flex-auto text-left">
            <x-button link="/docs/installation">
                <i class="fal fa-angle-left"></i> Installation
            </x-button>
        </div>

        <div class="flex-auto text-right">
            <x-button link="/docs/method-chaining">
                Method Chaining <i class="fal fa-angle-right"></i>
            </x-button>
        </div>
    </div>
@endsection
