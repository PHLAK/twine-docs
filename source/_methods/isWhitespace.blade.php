@extends('_layouts.method')

@section('description')
    Determine if the string is composed of alphabetic characters.
@endsection

@section('definition')
    Twine\Str::isWhitespace() : bool
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str(" \r\n\t");

        $string->isWhitespace(); // Returns true
    </x-code>

    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->isWhitespace(); // Returns false
    </x-code>
@endsection
