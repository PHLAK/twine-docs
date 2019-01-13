@extends('_layouts.method')

@section('description')
    Determine if the string is composed of alphanumeric characters.
@endsection

@section('definition')
    Twine\Str::isAlphanumeric() : bool
@endsection

@section('examples')
    @code
        $string = new Twine\Str('JohnPinkerton123');

        $string->isAlphanumeric(); // Returns true
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->isAlphanumeric(); // Returns false
    @endcode
@endsection
