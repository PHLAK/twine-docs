@extends('_layouts.method')

@section('description')
    Split a string by a string.
@endsection

@section('definition')
    Twine\Str::explode( string $delimiter [ , int $limit = PHP_INT_MAX ] ) : array
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $delimiter
                </span>
            </td>

            <td class="p-3">
                The boundary string

            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $limit
                </span>
            </td>

            <td class="p-3">
                <p>The maximum number of elements in the exploded array.</p>

                <ul class="my-4">
                    <li class="my-2">If limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of string.</li>
                    <li class="my-2">If the limit parameter is negative, all components except the last -limit are returned.</li>
                    <li class="my-2">If the limit parameter is zero, then this is treated as 1</li>
                </ul>
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->explode(' '); // Returns ['john', 'pinkerton']
    @endcode

    @code
        $string = new Twine\Str('john maurice mcclean pinkerton');

        $string->explode(' ', 3); // Returns ['john', 'maurice', 'mcclean pinkerton']
    @endcode
@endsection
