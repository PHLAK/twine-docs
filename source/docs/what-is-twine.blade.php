@extends('_layouts.master')

@section('title')
    What is Twine?
@endsection

@section('sub-title')
    Twine is a simple string manipulation library with an expressive, fluent syntax.
@endsection

@section('content')
    <h2 class="font-light text-grey-darker text-xl tracking-wide uppercase mt-12 mb-8">
        The Problem
    </h2>

    <p class="leading-loose my-8">
        PHP's built-in string functions are plentiful and work fine for one-off
        string operations. However, once you have to spend more than a few
        cycles working with strings in PHP the minor annoyances of the methods
        can become glaring problems that make them a pain to read and use.
    </p>

    <p class="leading-loose my-8">
        Consider the following snippet of code for a moment.
    </p>

    @code
        $contents = file_get_contents('garbage.bin');

        return str_replace("\n", '&lt;br&gt;', wordwrap(base64_encode($contents), 80)));
    @endcode

    <p class="leading-loose my-8">
         With a little analysys we can determine that this code does the following:
    </p>

    <ol class="leading-loose">
        <li>Grabs the contents of a binary file</li>
        <li>Encodes the contents of that file to base64</li>
        <li>Wraps the contents of the string at a line length of 80 characters</li>
        <li>Replaces all newline characters with a <code class="language-html">&lt;br&gt;</code> element</li>
    </ol>

    <p class="leading-loose my-8">
        The main issue with this code is that the order of operations is
        "inside out". That is to say that the order in which things happen to
        the data starts with the inner-most function
        (<code class="language-php">base64_encode</code>) and ends with the
        outer-most function (<code class="language-php">str_replace</code>).
        This results in the way we read the code being backwards.
    </p>

    <p class="leading-loose my-8">
        Additionally, the parameters of the functions become disconnected from
        the functions themselves. This makes it difficult to tell which function
        a paramter belongs to (does that <code class="language-php">80</code>
        belong to  <code class="language-php">str_replace</code>,
        <code class="language-php">wordwrap</code> or
        <code class="language-php">base64_encode</code>?). Sure it may not seem
        like a major issue but imagine if every method had multiple parameters
        or if we split the code to multiple lines.
    </p>

    <p class="leading-loose my-8">
        These problems aren't insurmountable. We could even rewrite the snippet
        to address these issues specifically.
    </p>

    @code
        $contents = file_get_contents('garbage.bin');
        $base64 = base64_encode($contents);
        $wrapped = wordwrap($base64, 80);

        return str_replace("\n", '&lt;br&gt;', $wrapped);
    @endcode

    <p class="leading-loose my-8">
        This solves the "inside out" problem and brings the disconnected
        parameter much closer to the calling method but we've doubled the line
        count and introduced several short-lived, <a class="text-blue underline" href="https://en.wikipedia.org/wiki/Temporary_variable">temporary variables</a>.
    </p>

    <p class="leading-loose my-8">
        Of course neither of these snippets are inherently bad and both work
        perfectly fine. However, don't you think we can do better.
    </p>

    <h3 class="font-serif font-light text-grey-dark tracking-wide mt-12 mb-8">
        Enter Twine
    </h3>

    <p class="leading-loose my-8">
        Twine takes an object-oriented approach to making string manipulation
        and comparisons easy and readable. With Twine every string is an object.
        This gives you power and flexibility that native strings do not have in
        PHP. Using Twine we can re-write the snippet like so:
    </p>

    @code
        $string = new Twine\Str(file_get_contents('garbage.bin'))

        return $string->base64()->wrap(80)->replace("\n", '&lt;br&gt;');
    @endcode

    <p class="leading-loose my-8">
        Now doesn't that read better? With Twine we've solved the "inside out"
        problem, brought all parameters inline with their methods AND reduced
        the overall ammount of code. This is a win-win!
    </p>

    <p class="leading-loose my-8">
        So what are you waiting for?! <a class="text-blue underline" href="/docs/installation">Get started with Twine</a>!
    </p>
@endsection

@section('footer')
    <div class="flex flex-row justify-between items-center">
        <div class="flex-1 text-left"></div>

        <div class="flex-1 text-right">
            @button(['link' => '/docs/installation'])
                Installation <i class="fal fa-angle-right"></i>
            @endbutton
        </div>
    </div>
@endsection
