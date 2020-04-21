@extends('_layouts.method')

@section('description')
    Calculate the md5 hash of the string.
@endsection

@section('definition')
    Twine\Str::md5( [ bool $mode = Twine\Config\Md5::DEFAULT ] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $mode
                </span>
            </td>

            <td class="p-3">
                A md5 mode flag
            </td>
        <tr>
    </table>

    <p class="leading-loose my-8">Available md5 modes</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Md5::DEFAULT
                </span>
            </td>

            <td class="p-3">
                Return the hash
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Md5::RAW
                </span>
            </td>

            <td class="p-3">
                Return the raw binary of the hash
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->md5(); // Returns '30cac4703a16a2201ec5cafbd600d803'
    </x-code>
@endsection
