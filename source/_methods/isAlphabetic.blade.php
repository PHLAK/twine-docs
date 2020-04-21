@extends('_layouts.method')

@section('description')
    Determine if the string is composed of alphabetic characters.
@endsection

@section('definition')
    Twine\Str::isAlphabetic() : bool
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('JohnPinkerton');

        $string->isAlphabetic(); // Returns true
    </x-code>

    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->isAlphabetic(); // Returns false
    </x-code>
@endsection
