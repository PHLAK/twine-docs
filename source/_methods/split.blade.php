@extends('_layouts.method')

@section('description')
    Split the string into an array containing a specific number of chunks.
@endsection

@section('definition')
    Twine\Str::split( int $chunks ) : array
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $chunks
                </span>
            </td>

            <td class="p-3">
                The number of chunks
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->split(2); // Returns ['john pi ', 'nkerton']
        $string->split(3); // Returns ['john ', 'pinke', 'rton']
    @endcode
@endsection
