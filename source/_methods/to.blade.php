@extends('_layouts.method')

@section('description')
    Return part of the string up to and including the first occurance of another string.
@endsection

@section('definition')
    Twine\Str::to( string $string ) : Twine\Str
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
                The string to end with
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->to('pink'); // Returns 'john pink'
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->to('purple'); // Returns ''
    @endcode
@endsection
