@extends('_layouts.method')

@section('description')
    Determine if the string is composed of lowercase characters.
@endsection

@section('definition')
    Twine\Str::isLowercase() : bool
@endsection

@section('examples')
    @code
        $string = new Twine\Str('johnpinkerton');

        $string->isLowercase(); // Returns true
    @endcode

    @code
        $string = new Twine\Str('JohnPinkerton');

        $string->isLowercase(); // Returns false
    @endcode
@endsection
