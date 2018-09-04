@extends('_layouts.method')

@section('description')
    Determine if the string is equal to another string.
@endsection

@section('definition')
    Twine\Str::equals( string $string [, string $mode = Twine\Config\Equals::CASE_SENSITIVE ] ) : bool
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

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $mode
                </span>
            </td>

            <td class="p-3">
                An equals mode flag
            </td>
        <tr>
    </table>

    <p class="leading-loose my-8">Available equals modes:</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Equals::CASE_SENSITIVE
                </span>
            </td>

            <td class="p-3">
                Match the string with case sensitivity
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Equals::CASE_INSENSITIVE
                </span>
            </td>

            <td class="p-3">
                Match the string with case insensitivity
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->equals('john pinkerton'); // Returns true
        $string->equals('JoHN PiNKeRToN'); // Returns false
        $string->equals('JoHN PiNKeRToN', Twine\Config\Equals::CASE_INSENSITIVE); // Returns true
        $string->equals('BoB BeLCHeR', Twine\Config\Equals::CASE_INSENSITIVE); // Returns false
    @endcode
@endsection

@section('aliases')
    <table class="my-4">
        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::insensitiveMatch($string)</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::equals($string, Twine\Config\Equals::CASE_INSENSITIVE)</code>
            </td>
        </tr>
    </table>
@endsection
