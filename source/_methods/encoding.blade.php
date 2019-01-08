@extends('_layouts.method')

@section('description')
    Set the internal character encoding.
@endsection

@section('definition')
    Twine\Str::encoding( string $encoding ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $encoding
                </span>
            </td>

            <td class="p-3">
                The desired character encoding
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->encoding('ASCII');
    @endcode
@endsection
