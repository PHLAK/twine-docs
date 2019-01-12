@extends('_layouts.method')

@section('description')
    Convert the first character of the string to uppercase.
@endsection

@section('definition')
    Twine\Str::uppercaseFirst() : Twine\Str
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->uppercaseFirst(); // Returns 'John pinkerton'
    @endcode
@endsection
