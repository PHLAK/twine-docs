@extends('_layouts.method')

@section('description')
    Randomly shuffle the characters of the string.
@endsection

@section('definition')
    Twine\Str::shuffle( void ) : Twine\Str
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->shuffle(); // Returns something like 'nphjin erkotno'
    @endcode
@endsection
