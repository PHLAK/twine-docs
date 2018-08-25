@extends('_layouts.method')

@section('description')
    Join two strings with another string in between.
@endsection

@section('definition')
    Twine\Str::join( string $string [, string $glue = ' ' ] ) : Twine\Str
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
                The string to be joined
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $glue
                </span>
            </td>

            <td class="p-3">
                A string to use as the glue
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $first = new Twine\Str('john');
        $last = new Twine\Str('pinkerton');

        $first->join($last); // Returns 'john pinkerton'
    @endcode

    @code
        $min = new Twine\Str('1');
        $max = new Twine\Str('100');

        $min->join($max, '-'); // Returns '1-100'
    @endcode

    @code
        $file = new Twine\Str('noclist.txt');

        $file->join('bak', '.'); // Returns 'noclist.txt.bak'
    @endcode
@endsection
