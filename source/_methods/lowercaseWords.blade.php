@extends('_layouts.method')

@section('description')
    Convert the first letter of the string to lowercase.
@endsection

@section('definition')
    Twine\Str::lowercaseWords() : Twine\Str
@endsection

@section('examples')
    @code
        $string = new Twine\Str('JOHN PINKERTON');

        $string->lowercaseWords(); // Returns 'jOHN pINKERTON'
    @endcode
@endsection
