@extends('_layouts.method')

@section('description')
    Count the number of occurrences of a substring in the string.
@endsection

@section('definition')
    Twine\Str::count( string $string ) : int
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $string
                </span>
            </td>

            <td class="p-3">
                The substring to count
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('How much wood could a woodchuck chuck if a woodchuck could chuck wood?');

        $string->count('wood'); // Returns 4
    </x-code>
@endsection
