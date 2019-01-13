@extends('_layouts.method')

@section('description')
    Determine if the string is not empty.
@endsection

@section('definition')
    Twine\Str::isNotEmpty() : bool
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->isNotEmpty(); // Returns true
    @endcode

    @code
        $string = new Twine\Str('');

        $string->isNotEmpty(); // Returns false
    @endcode
@endsection
