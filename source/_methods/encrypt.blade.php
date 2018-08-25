@extends('_layouts.method')

@section('description')
    Encrypt the string.
@endsection

@section('definition')
    Twine\Str::encrypt( string $key, [ string $cipher = 'AES-128-CBC' ] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $key
                </span>
            </td>

            <td class="p-3">
                The key for encrypting
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $cipher
                </span>
            </td>

            <td class="p-3">
                The cipher method
            </td>
        <tr>
    </table>

    <p class="my-8">Supported cipher methods:</p>

    <ul class="my-4">
        <li class="my-2">
            <code class="language-plaintext">AES-128-CBC</code>
        </li>

        <li class="my-2">
            <code class="language-plaintext">AES-256-CBC</code>
        </li>
    </ul>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->encrypt('secret'); // Returns something like '$DZpEm9ZFec9ybxF7$y2rc62EapV8p+xOKGaQHKA==$pKe7S3T7tf8jaXWpUHc='
    @endcode
@endsection
