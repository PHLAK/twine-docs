@extends('_layouts.method')

@section('description')
    Convert all or parts of the string to uppercase.
@endsection

@section('definition')
    Twine\Str::uppercase( [ string $mode = Twine\Config\Uppercase::ALL ] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $mode
                </span>
            </td>

            <td class="p-3">
                An uppercase mode flag
            </td>
        <tr>
    </table>

    <p class="my-8">Available uppercase modes:</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Uppercase::ALL
                </span>
            </td>

            <td class="p-3">
                Uppercase all characters of the string
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Uppercase::FIRST
                </span>
            </td>

            <td class="p-3">
                Uppercase the first character of the string
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Uppercase::WORDS
                </span>
            </td>

            <td class="p-3">
                Uppercase the first character of each word of the string
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->uppercase(); // Returns 'JOHN PINKERTON'
        $string->uppercase(Twine\Config\Uppercase::FIRST); // Returns 'John pinkerton'
        $string->uppercase(Twine\Config\Uppercase::WORDS); // Returns 'John Pinkerton'
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->uppercaseFirst(); // Returns 'John pinkerton'
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->uppercaseWords(); // Returns 'John Pinkerton'
    @endcode
@endsection

@section('aliases')
    <table class="my-4">
        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::uppercaseFirst()</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::uppercase(Twine\Config\Uppercase::FIRST)</code>
            </td>
        </tr>

        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::uppercaseWords()</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::uppercase(Twine\Config\Uppercase::WORDS)</code>
            </td>
        </tr>
    </table>
@endsection
