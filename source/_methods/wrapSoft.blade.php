@extends('_layouts.method')

@section('description')
    Wrap the string after the first whitespace character after a given number of characters.
@endsection

@section('definition')
    Twine\Str::wrapSoft( int $width [, $break = "\n" ] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $width
                </span>
            </td>

            <td class="p-3">
                Number of characters at which to wrap
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $break
                </span>
            </td>

            <td class="p-3">
                Character used to break the string
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->wrapSoft(5); // Returns "john\npinkerton"
    </x-code>
@endsection
