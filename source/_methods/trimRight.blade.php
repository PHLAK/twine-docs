@extends('_layouts.method')

@section('description')
    Remove whitespace or a specific set of characters from the end of the string.
@endsection

@section('definition')
    Twine\Str::trimRight( [ string $mask = " \t\n\r\0\x0B" ] ) : Twine\Str
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
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('  john pinkerton    ');

        $string->trimRight(); // Returns '  john pinkerton'
    </x-code>
@endsection
