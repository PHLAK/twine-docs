@extends('_layouts.method')

@section('description')
    Append one or more strings to the string.
@endsection

@section('definition')
    Twine\Str::append( string ...$strings ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    ...$strings
                </span>
            </td>

            <td class="p-3">
                One or more strings to append
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->append(' jr'); // Returns 'john pinkerton jr'
    @endcode
@endsection
