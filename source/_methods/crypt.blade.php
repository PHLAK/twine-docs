@extends('_layouts.method')

@section('description')
    Hash the string using the standard Unix DES-based algorithm or an
    alternative algorithm that may be available on the system.
@endsection

@section('definition')
    Twine\Str::crypt( string $salt ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $salt
                </span>
            </td>

            <td class="p-3">
                A salt string to base the hashing on
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->crypt('NaCl'); // Returns 'Naq9mOMsN7Yac'
    </x-code>
@endsection
