@extends('_layouts.method')

@section('description')
    Determine if the string ends with another string.
@endsection

@section('definition')
    Twine\Str::endsWith( string $string ) : bool
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
                The string to compare against
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->endsWith('pinkerton'); // Returns true
        $string->endsWith('john'); // Returns false
    </x-code>
@endsection
