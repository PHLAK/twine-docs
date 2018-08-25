@extends('_layouts.method')

@section('description')
    Replace parts of the string with another string.
@endsection

@section('definition')
    Twine\Str::replace( string|array $search , string|array $replace [, int &$count = null ] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $search
                </span>
            </td>

            <td class="p-3">
                One or more strings to be replaced
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $replace
                </span>
            </td>

            <td class="p-3">
                One or more strings to replace with
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    &$count
                </span>
            </td>

            <td class="p-3">
                This will be set to the number of replacements performed
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->replace('john', 'bob'); // Returns 'bob pinkerton'
        $string->replace(['a', 'e', 'i', 'o', 'u'], 'x'); // Returns 'jxhn pxnkxrtxn'
        $string->replace(['o', 'n'], ['a', 'm']); // Returns 'jahm pimkertam'
        $string->replace('n', 'x', $count); // Returns 'johx pixkertox' and $count will be 3
    @endcode
@endsection
