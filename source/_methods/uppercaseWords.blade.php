@extends('_layouts.method')

@section('description')
    Convert the first character of each word in the string to uppercase.
@endsection

@section('definition')
    Twine\Str::uppercaseWords() : Twine\Str
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->uppercaseWords(); // Returns 'John Pinkerton'
    @endcode
@endsection
