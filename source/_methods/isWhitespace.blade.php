@extends('_layouts.method')

@section('description')
    Determine if the string is composed of alphabetic characters.
@endsection

@section('definition')
    Twine\Str::isWhitespace() : bool
@endsection

@section('examples')
    @code
        $string = new Twine\Str(" \r\n\t");

        $string->isWhitespace(); // Returns true
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->isWhitespace(); // Returns false
    @endcode
@endsection
