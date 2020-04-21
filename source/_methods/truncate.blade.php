@extends('_layouts.method')

@section('description')
    Truncate a string to a specific length and append a suffix.
@endsection

@section('definition')
    Twine\Str::truncate( int $length [, string $suffix = '...' ] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $length
                </span>
            </td>

            <td class="p-3">
                Length string will be truncated to, including suffix
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $suffix
                </span>
            </td>

            <td class="p-3">
                Suffix to append
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->truncate(12); // Returns 'john pink...'
        $string->truncate(10, '~'); // Returns 'john pink~'
        $string->truncate(8); // Returns 'john...'
    </x-code>
@endsection
