@extends('_layouts.method')

@section('description')
    Split the string into an array of characters.
@endsection

@section('definition')
    Twine\Str::characters( [ $mode = Twine\Config\Characters::ALL ] )  : array
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
                A characters mode flag
            </td>
        <tr>
    </table>

    <p class="leading-loose my-8">Available characters modes:</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Characters::ALL
                </span>
            </td>

            <td class="p-3">
                Return all characters in the string
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Characters::UNIQUE
                </span>
            </td>

            <td class="p-3">
                Return each character only once ignoring duplicate characters
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $characters = $string->characters(); // Returns  ['j', 'o', 'h', 'n', ' ', 'p', 'i', 'n', 'k', 'e', 'r', 't', 'o', 'n']
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $characters = $string->characters(Twine\Config\Characters::UNIQUE); // Returns ['j', 'o', 'h', 'n', ' ', 'p', 'i', 'k', 'e', 'r', 't']
    @endcode
@endsection
