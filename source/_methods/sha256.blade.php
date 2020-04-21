@extends('_layouts.method')

@section('description')
    Calculate the sha256 hash of the string.
@endsection

@section('definition')
    Twine\Str::sha256( [ bool $mode = Twine\Config\Sha256::DEFAULT ] ) : Twine\Str
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
                A sha256 mode flag
            </td>
        <tr>
    </table>

    <p class="leading-loose my-8">Available sha256 modes</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Sha256::DEFAULT
                </span>
            </td>

            <td class="p-3">
                Return the hash
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Sha256::RAW
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

        $string->sha256(); // Returns '7434f26c8c2fc83e57347feb2dfb235c2f47b149b54b80692beca9d565159dfd'
    </x-code>
@endsection
