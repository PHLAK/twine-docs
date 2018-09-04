@extends('_layouts.method')

@section('description')
    Wrap the string after an exact number of characters.
@endsection

@section('definition')
    Twine\Str::wrapHard( int $width [, $break = "\n" ] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $width
                </span>
            </td>

            <td class="p-3">
                Number of characters at which to wrap
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $break
                </span>
            </td>

            <td class="p-3">
                Character used to break the string
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->wrapHard(5); // Returns "john\npinke\nrton"
    @endcode
@endsection
