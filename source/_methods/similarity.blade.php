@extends('_layouts.method')

@section('description')
    Calculate the similarity percentage between two strings.
@endsection

@section('definition')
    Twine\Str::similarity( string $string ) : float
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
    </table>
@endsection

@section('examples')
    @code
    $string = new Twine\Str('john pinkerton');

    $string->similarity('jim ponkerten'); // Returns 66.666666666667
    @endcode
@endsection
