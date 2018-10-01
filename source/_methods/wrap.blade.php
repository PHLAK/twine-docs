@extends('_layouts.method')

@section('description')
    Wrap the string to a given number of characters.
@endsection

@section('definition')
    Twine\Str::wrap( int $width [, string $break = "\n" [, bool $mode = Twine\Config\Wrap::SOFT ]] ) : Twine\Str
@endsection

@section('parameters')
    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $width
                </span>
            </td>

            <td class="p-3">
                Number of characters at which to wrap
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $break
                </span>
            </td>

            <td class="p-3">
                Character used to break the string
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $mode
                </span>
            </td>

            <td class="p-3">
                A wrap mode flag
            </td>
        <tr>
    </table>

    <p class="leading-loose my-8">Available wrap modes:</p>

    <table>
        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Wrap::SOFT
                </span>
            </td>

            <td class="p-3">
                Wrap after the specified width
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    Twine\Config\Wrap::HARD
                </span>
            </td>

            <td class="p-3">
                Always wrap at or before the specified width
            </td>
        <tr>
    </table>
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->wrap(5); // Returns "john\npinkerton"
        $string->wrap(5, "\n", Twine\Config\Wrap::HARD); // Returns "john\npinke\nrton"
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->wrapSoft(5); // Returns "john\npinkerton"
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->wrapHard(5); // Returns "john\npinke\nrton"
    @endcode
@endsection

@section('aliases')
    <table class="my-4">
        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::wrapSoft($width, $break)</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::wrap($width, $break, Twine\Config\Trim::LEFT)</code>
            </td>
        </tr>

        <tr>
            <td class="p-3">
                <code class="language-php">Twine\Str::wrapHard($width, $break)</code>
            </td>

            <td class="text-lg">=</td>

            <td class="p-3">
                <code class="language-php">Twine\Str::wrap($width, $break, Twine\Config\Trim::RIGHT)</code>
            </td>
        </tr>
    </table>
@endsection
