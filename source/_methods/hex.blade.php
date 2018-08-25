@extends('_layouts.method')

@section('description')
    Encode and decode the string to and from hex.
@endsection

@section('definition')
    Twine\Str::hex( [ string $mode = Config\Hex::ENCODE ] ) : Twine\Str
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
                A hex mode flag
            </td>
        <tr>
    </table>

    <p class="my-8">Available hex modes:</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Hex::ENCODE
                </span>
            </td>

            <td class="p-3">
                Encode the string to hex
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Hex::DECODE
                </span>
            </td>

            <td class="p-3">
                Decode the string from hex
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->hex(); // Returns '\x6a\x6f\x68\x6e\x20\x70\x69\x6e\x6b\x65\x72\x74\x6f\x6e'
    @endcode

    @code
        $string = new Twine\Str('\x6a\x6f\x68\x6e\x20\x70\x69\x6e\x6b\x65\x72\x74\x6f\x6e');

        $string->hex(Twine\Config\Hex::DECODE); // Returns 'john pinkerton'
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->hexEncode(); // Returns '\x6a\x6f\x68\x6e\x20\x70\x69\x6e\x6b\x65\x72\x74\x6f\x6e'
    @endcode

    @code
        $string = new Twine\Str('\x6a\x6f\x68\x6e\x20\x70\x69\x6e\x6b\x65\x72\x74\x6f\x6e');

        $string->hexDecode(); // Returns 'john pinkerton'
    @endcode
@endsection

@section('aliases')
    <table class="my-4">
        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::hexEncode()</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::hex(Twine\Config\Hex::ENCODE)</code>
            </td>
        </tr>

        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::hexDecode()</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::hex(Twine\Config\Hex::DECODE)</code>
            </td>
        </tr>
    </table>
@endsection
