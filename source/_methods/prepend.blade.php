@extends('_layouts.method')

@section('description')
    Prepend one or more strings to the string.
@endsection

@section('definition')
    Twine\Str::prepend( string ...$strings ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    ...$strings
                </span>
            </td>

            <td class="p-3">
                One or more strings to append
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->prepend('mr '); // Returns 'mr john pinkerton'
    </x-code>

    <x-code>
        $first = new Twine\Str('john');
        $last = new Twine\Str('pinkerton');

        $last->prepend('mr', ' ', $first); // Returns 'mr john pinkerton'
    </x-code>
@endsection

@section('aliases')
    <table class="my-4">
        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::first($count)</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::substring(0, $count)</code>
            </td>
        </tr>

        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::last($count)</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::substring(-$count)</code>
            </td>
        </tr>
    </table>
@endsection
