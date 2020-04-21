@extends('_layouts.method')

@section('description')
    Return a number of characters from the end of the string.
@endsection

@section('definition')
    Twine\Str::last( int $count ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $count
                </span>
            </td>

            <td class="p-3">
                The number of characters to be returned
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->last(9); // Returns 'pinkerton'
    </x-code>
@endsection
