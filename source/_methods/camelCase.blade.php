@extends('_layouts.method')

@section('description')
    Convert the string to camelCase.
@endsection

@section('definition')
    Twine\Str::camelCase( void ) : Twine\Str
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->camelCase(); // Returns 'johnPinkerton'
    </x-code>
@endsection

@section('aliases')
    <table class="my-4">
        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::pascalCase()</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::camelCase()</code>
            </td>
        </tr>
    </table>
@endsection
