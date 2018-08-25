@extends('_layouts.method')

@section('description')
    Insert some text into the string at a given position.
@endsection

@section('definition')
    Twine\Str::insert( string $string , int $position ) : Twine\Str
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
                Text to insert
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $position
                </span>
            </td>

            <td class="p-3">
                Position at which to insert the text
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->insert('athan', 4); // Returns 'johnathan pinkerton'
    @endcode
@endsection
