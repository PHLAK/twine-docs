@extends('_layouts.method')

@section('description')
    Convert the string to pascalCase.
@endsection

@section('definition')
    Twine\Str::pascalCase( void ) : Twine\Str
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->pascalCase(); // Returns 'JohnPinkerton'
    @endcode
@endsection

@section('aliases')
    <table class="my-4">
        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::camelCase()</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::pascalCase()</code>
            </td>
        </tr>
    </table>
@endsection
