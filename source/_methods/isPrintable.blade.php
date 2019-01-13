@extends('_layouts.method')

@section('description')
    Determine if the string is composed of printable characters.
@endsection

@section('definition')
    Twine\Str::isPrintable() : bool
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->isPrintable(); // Returns true
    @endcode

    @code
        $string = new Twine\Str("john\npinkerton");

        $string->isPrintable(); // Returns false
    @endcode
@endsection
