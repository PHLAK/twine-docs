@extends('_layouts.method')

@section('description')
    Get every nth character of the string.
@endsection

@section('definition')
    Twine\Str::nth( int $step [ , int $offset = 0 ] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $step
                </span>
            </td>

            <td class="p-3">
                The number of characters to step
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $offset
                </span>
            </td>

            <td class="p-3">
                The string offset to start at
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->nth(3); // Returns 'jnieo'
        $string->nth(3, 2); // Returns 'hpkt'
    </x-code>
@endsection
