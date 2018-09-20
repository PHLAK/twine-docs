@extends('_layouts.method')

@section('description')
    Determine if the string matches a regular expression pattern.
@endsection

@section('definition')
    Twine\Str::matches( string $patern ) : bool
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $patern
                </span>
            </td>

            <td class="p-3">
                A regular expression pattern
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->matches('/[a-z]+ [a-z]+/'); // Returns true
        $string->matches('/[0-9]+/'); // Returns false
    @endcode
@endsection
