@extends('_layouts.method')

@section('description')
    Determine if the string is composed of alphabetic characters.
@endsection

@section('definition')
    Twine\Str::isAlphabetic() : bool
@endsection

@section('examples')
    @code
        $string = new Twine\Str('JohnPinkerton');

        $string->isAlphabetic(); // Returns true
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->isAlphabetic(); // Returns false
    @endcode
@endsection
