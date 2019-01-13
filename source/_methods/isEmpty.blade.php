@extends('_layouts.method')

@section('description')
    Determine if the string is empty.
@endsection

@section('definition')
    Twine\Str::isEmpty() : bool
@endsection

@section('examples')
    @code
        $string = new Twine\Str('');

        $string->isEmpty(); // Returns true
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->isEmpty(); // Returns false
    @endcode
@endsection
