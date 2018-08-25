@extends('_layouts.method')

@section('description')
    Convert all or parts of the string to lowercase.
@endsection

@section('definition')
    Twine\Str::lowercase( [ string $mode = Twine\Config\Lowercase::ALL ] ) : Twine\Str
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
                A lowercase mode flag
            </td>
        <tr>
    </table>

    <p class="my-8">Available lowercase modes:</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Lowercase::ALL
                </span>
            </td>

            <td class="p-3">
                Lowercase all characters of the string
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Lowercase::FIRST
                </span>
            </td>

            <td class="p-3">
                Lowercase the first character of the string
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Lowercase::WORDS
                </span>
            </td>

            <td class="p-3">
                Lowercase the first character of each word of the string
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('JOHN PINKERTON');

        $string->lowercase(); // Returns 'john pinkerton'
        $string->lowercase(Twine\Config\Lowercase::FIRST); // Returns 'jOHN PINKERTON'
        $string->lowercase(Twine\Config\Lowercase::WORDS); // Returns 'jOHN pINKERTON'
    @endcode

    @code
        $string = new Twine\Str('JOHN PINKERTON');

        $string->lowercaseFirst(); // Returns 'jOHN PINKERTON'
    @endcode

    @code
        $string = new Twine\Str('JOHN PINKERTON');

        $string->lowercaseWords(); // Returns 'jOHN pINKERTON'
    @endcode
@endsection

@section('aliases')
    <table class="my-4">
        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::lowercaseFirst()</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::lowercase(Twine\Config\Lowercase::FIRST)</code>
            </td>
        </tr>

        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::lowercaseWords()</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::lowercase(Twine\Config\Lowercase::WORDS)</code>
            </td>
        </tr>
    </table>
@endsection
