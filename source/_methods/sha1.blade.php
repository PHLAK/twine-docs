@extends('_layouts.method')

@section('description')
    Calculate the sha1 hash of the string.
@endsection

@section('definition')
    Twine\Str::sha1( [ bool $mode = Twine\Config\Sha1::DEFAULT ] ) : Twine\Str
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
                A sha1 mode flag
            </td>
        <tr>
    </table>

    <p class="my-8">Available sha1 modes</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Sha1::DEFAULT
                </span>
            </td>

            <td class="p-3">
                Return the hash
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Sha1::RAW
                </span>
            </td>

            <td class="p-3">
                Return the raw binary of the hash
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->sha1(); // Returns 'fcaf28c7705ba8f267472bb5aa8ad883f6bf0427'
    @endcode
@endsection
