@extends('_layouts.method')

@section('description')
    Determine if the string matches another string regardless of case.
@endsection

@section('definition')
    Twine\Str::insensitiveMatch( string $string ) : bool
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

        $string->insensitiveMatch('JoHN PiNKeRToN'); // Returns true
        $string->insensitiveMatch('BoB BeLCHeR'); // Returns false
    @endcode
@endsection
