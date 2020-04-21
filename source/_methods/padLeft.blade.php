@extends('_layouts.method')

@section('description')
    Pad left side of the string to a specific length.
@endsection

@section('definition')
    Twine\Str::padLeft( int $length [, string $padding = ' ' ] ) : Twine\Str
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
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->padLeft(20, '_'); // Returns '______john pinkerton'
    </x-code>
@endsection
