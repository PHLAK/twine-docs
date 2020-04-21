@extends('_layouts.method')

@section('description')
    Determine if the string is composed of printable characters.
@endsection

@section('definition')
    Twine\Str::isPrintable() : bool
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->isPrintable(); // Returns true
    </x-code>

    <x-code>
        $string = new Twine\Str("john\npinkerton");

        $string->isPrintable(); // Returns false
    </x-code>
@endsection
