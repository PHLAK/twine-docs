@extends('_layouts.method')

@section('description')
    Encode the string to or decode from a base64 encoded value.
@endsection

@section('definition')
    Twine\Str::base64( [ string $mode = Twine\Config\Base64::ENCODE ] ) : Twine\Str
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
                A base64 mode flag
            </td>
        <tr>
    </table>

    <p class="leading-loose my-8">Available base64 modes:</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Base64::ENCODE
                </span>
            </td>

            <td class="p-3">
                Encode the string to base64
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Base64::DECODE
                </span>
            </td>

            <td class="p-3">
                Decode the string from base64
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->base64(); // Returns 'am9obiBwaW5rZXJ0b24='
    </x-code>

    <x-code>
        $string = new Twine\Str('am9obiBwaW5rZXJ0b24=');

        $string->base64(Twine\Config\Base64::DECODE); // Returns 'john pinkerton'
    </x-code>

    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->base64Encode(); // Returns 'am9obiBwaW5rZXJ0b24='
    </x-code>

    <x-code>
        $string = new Twine\Str('am9obiBwaW5rZXJ0b24=');

        $string->base64Decode(); // Returns 'john pinkerton'
    </x-code>
@endsection

@section('aliases')
    <table class="my-4">
        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::base64Encode()</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::base64(Twine\Config\Base64::ENCODE)</code>
            </td>
        </tr>

        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::base64Decode()</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::base64(Twine\Config\Base64::DECODE)</code>
            </td>
        </tr>
    </table>
@endsection
