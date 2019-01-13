@extends('_layouts.method')

@section('description')
    Determine if the string is composed of numeric characters.
@endsection

@section('definition')
    Twine\Str::isNumeric() : bool
@endsection

@section('examples')
    @code
        $string = new Twine\Str('1337');

        $string->isNumeric(); // Returns true
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->isNumeric(); // Returns false
    @endcode
@endsection
