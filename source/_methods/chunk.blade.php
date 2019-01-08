@extends('_layouts.method')

@section('description')
    Spit the string into an array of chunks of a given length.
@endsection

@section('definition')
    Twine\Str::chunk( int $length ) : array
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $length
                </span>
            </td>

            <td class="p-3">
                The desired chunk length
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->chunk(3); // Returns ['joh', 'n p', 'ink', 'ert', 'on']
    @endcode
@endsection
