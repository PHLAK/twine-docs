@extends('_layouts.method')

@section('description')
    Return part of the string occurring before a specific string.
@endsection

@section('definition')
    Twine\Str::before( string $string ) : Twine\Str
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
                The delimiting string
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->before(' '); // Returns 'john'
    </x-code>
@endsection
