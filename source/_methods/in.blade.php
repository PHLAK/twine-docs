@extends('_layouts.method')

@section('description')
    Determine if the string exists in another string.
@endsection

@section('definition')
    Twine\Str::in( string $string [ , string $mode = Twine\Config\In::CASE_SENSITIVE ] ) : bool
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
                The string to compare against
            </td>
        <tr>

        <tr>
            <td class="p-3">
                <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                    $mode
                </span>
            </td>

            <td class="p-3">
                Flag for case-sensitive and case-insensitive mode
            </td>
        <tr>
    </table>

    <p class="leading-loose my-8">Available in mode flags:</p>

     <table>
         <tr>
             <td class="p-3">
                 <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                     Twine\Config\In::CASE_SENSITIVE
                 </span>
             </td>

             <td class="p-3">
                 Match the string with case sensitivity (default)
             </td>
         <tr>

         <tr>
             <td class="p-3">
                 <span class="bg-grey-lighter rounded p-1 font-mono text-grey-darkest">
                     Twine\Config\In::CASE_INSENSITIVE
                 </span>
             </td>

             <td class="p-3">
                 Match the string with case insensitivity
             </td>
         <tr>
     </table>
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('pink');

        $string->in('john pinkerton'); // Returns true
    </x-code>

    <x-code>
        $string = new Twine\Str('purple');

        $string->in('john pinkerton'); // Returns false
    </x-code>

    <x-code>
        $string = new Twine\Str('Pink');

        $string->in('john pinkerton', Twine\Config\In::CASE_INSENSITIVE); // Returns true
    </x-code>

    <x-code>
        $color = new Twine\Str('pink');
        $name = new Twine\Str('john pinkerton');

        $color->in($name); // Returns true
    </x-code>
@endsection
