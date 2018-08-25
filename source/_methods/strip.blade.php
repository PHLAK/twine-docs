@extends('_layouts.method')

@section('description')
    Remove one or more strings from the string.
@endsection

@section('definition')
    Twine\Str::strip( string|array $search ) : Twine\Str
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
                One or more strings to be removed
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->strip('pink'); // Returns 'john erton'
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->strip(['a', 'e', 'i', 'o', 'u']); // Returns 'jhn pnkrtn'
    @endcode
@endsection
