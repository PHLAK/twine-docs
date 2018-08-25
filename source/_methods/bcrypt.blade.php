@extends('_layouts.method')

@section('description')
    Creates a hash from the string using the CRYPT_BLOWFISH algorithm.
@endsection

@section('definition')
    Twine\Str::bcrypt( [ array $options = [] ] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $options
                </span>
            </td>

            <td class="p-3">
                An array of bcrypt hasing options
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->bcrypt(['salt' => 'NaClNaClNaClNaClNaClNaCl']); // Returns '$2y$10$NaClNaClNaClNaClNaClNOMtb0r8BE2WGaLqvGur17DqtgjsWl0lW'
    @endcode
@endsection
