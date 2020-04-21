@extends('_layouts.method')

@section('description')
    Pad the string to a specific length.
@endsection

@section('definition')
    Twine\Str::pad( int $length [, string $padding = ' ' [, int $mode = Twine\Config\Pad::RIGHT ]] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $length
                </span>
            </td>

            <td class="p-3">
                Length to pad the string to
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $padding
                </span>
            </td>

            <td class="p-3">
                Character to pad the string with
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $mode
                </span>
            </td>

            <td class="p-3">
                A pad mode flag
            </td>
        <tr>
    </table>

    <p class="leading-loose my-8">Available pad modes</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Pad::RIGHT
                </span>
            </td>

            <td class="p-3">
                Only pad the right side of the string
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Pad::LEFT
                </span>
            </td>

            <td class="p-3">
                Only pad the left side of the string
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Pad::BOTH
                </span>
            </td>

            <td class="p-3">
                Pad both sides of the string
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->pad(20, '_');  // Returns 'john pinkerton______'
        $string->pad(20, '_', Twine\Config\Pad::LEFT); // Returns '______john pinkerton'
        $string->pad(20, '_', Twine\Config\Pad::BOTH); // Returns '___john pinkerton___'
    </x-code>

    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->padRight(20, '_');  // Returns 'john pinkerton______'
    </x-code>

    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->padLeft(20, '_'); // Returns '______john pinkerton'
    </x-code>

    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->padBoth(20, '_'); // Returns '___john pinkerton___'
    </x-code>
@endsection

@section('aliases')
    <table class="my-4">
        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::padRight($length, $padding)</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::pad($length, $padding, Twine\Config\Pad::RIGHT)</code>
            </td>
        </tr>

        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::padLeft($length, $padding)</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::pad($length, $padding, Twine\Config\Pad::LEFT)</code>
            </td>
        </tr>

        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::padBoth($length, $padding)</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::pad($length, $padding, Twine\Config\Pad::BOTH)</code>
            </td>
        </tr>
    </table>
@endsection
