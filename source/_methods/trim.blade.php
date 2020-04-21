@extends('_layouts.method')

@section('description')
    Remove white space or a specific set of characters from the beginning and/or end of the string.
@endsection

@section('definition')
    Twine\Str::trim( [ string $mask = " \t\n\r\0\x0B" [, string $mode = Config\Trim::BOTH ]] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $mask
                </span>
            </td>

            <td class="p-3">
                A list of characters to be stripped
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $mode
                </span>
            </td>

            <td class="p-3">
                A trim mode flag
            </td>
        <tr>
    </table>

    <p class="leading-loose my-8">Available trim modes:</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Trim::BOTH
                </span>
            </td>

            <td class="p-3">
                Trim characters from the beginning and end of the string
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Trim::LEFT
                </span>
            </td>

            <td class="p-3">
                Only trim characters from the beginning of the string
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Trim::RIGHT
                </span>
            </td>

            <td class="p-3">
                Only trim characters from the end of the string
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('  john pinkerton    ');

        $string->trim(); // Returns 'john pinkerton'
        $string->trim(Twine\Config\Trim::LEFT); // Returns 'john pinkerton    '
        $string->trim(Twine\Config\Trim::RIGHT); // Returns '  john pinkerton'
    </x-code>

    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->trim('jton'); // Returns 'hn pinker'
    </x-code>

    <x-code>
        $string = new Twine\Str('  john pinkerton    ');

        $string->trimLeft(); // Returns 'john pinkerton    '
    </x-code>

    <x-code>
        $string = new Twine\Str('  john pinkerton    ');

        $string->trimRight(); // Returns '  john pinkerton'
    </x-code>
@endsection

@section('aliases')
    <table class="my-4">
        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::trimLeft($mask)</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::trim($mask, Twine\Config\Trim::LEFT)</code>
            </td>
        </tr>

        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::trimRight($mask)</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::trim($mask, Twine\Config\Trim::RIGHT)</code>
            </td>
        </tr>
    </table>
@endsection
