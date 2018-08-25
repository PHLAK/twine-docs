@extends('_layouts.method')

@section('description')
    Return a formatted string.
@endsection

@section('definition')
    Twine\Str::format( mixed ...$args ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    ...$args
                </span>
            </td>

            <td class="p-3">
                Any number of elements to fill the string
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('Hello %s! Welcome to %s, population %b.');

        $string->format('John', 'Pinkertown', 1337); // Returns 'Hello John! Welcome to Pinkertown, population 10100111001.'
    @endcode
@endsection
