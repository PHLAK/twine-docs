@extends('_layouts.method')

@section('description')
    Encode the string to or decode it from a URL safe string.
@endsection

@section('definition')
    Twine\Str::url( string $mode = Twine\Config\Url::ENCODE ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $mode
                </span>
            </td>

            <td class="p-3">
                The string to compare against
            </td>
        <tr>
    </table>

    <p class="leading-loose my-8">Available url modes:</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Url::ENCODE
                </span>
            </td>

            <td class="p-3">
                Encode the string to a URL safe string
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Url::DECODE
                </span>
            </td>

            <td class="p-3">
                Decode the string from a URL safe string
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john+pinkerton/john=pinkerton');

        $string->url(); // Returns 'john%2Bpinkerton%2Fjohn%3Dpinkerton'
    </x-code>

    <x-code>
        $path = new Twine\Str('/some/file/path.txt');

        $path->urlencode(); // Returns '%2Fsome%2Ffile%2Fpath.txt'
    </x-code>
@endsection
