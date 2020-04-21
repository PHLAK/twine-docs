@extends('_layouts.method')

@section('description')
    Repeat the string multiple times.
@endsection

@section('definition')
    Twine\Str::repeat( int $multiplier ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $multiplier
                </span>
            </td>

            <td class="p-3">
                Number of times to repeat the string
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('beetlejuice');

        $string->repeat(3); // Returns 'beetlejuicebeetlejuicebeetlejuice'
    </x-code>
@endsection
