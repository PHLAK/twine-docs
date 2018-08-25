@extends('_layouts.method')

@extends('_layouts.method')

@section('description')
    Return part of the string occurring after a specific string.
@endsection

@section('definition')
    Twine\Str::after( string $string ) : Twine\Str
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
                The delimiting string
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->after(' '); // Returns 'pinkerton'
    @endcode
@endsection
