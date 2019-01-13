@extends('_layouts.method')

@section('description')
    Determine if the string is composed of punctuation characters.
@endsection

@section('definition')
    Twine\Str::isPunctuation() : bool
@endsection

@section('examples')
    @code
        $string = new Twine\Str('*&$();,.?');

        $string->isPunctuation(); // Returns true
    @endcode

    @code
        $string = new Twine\Str('john pinkerton');

        $string->isPunctuation(); // Returns false
    @endcode
@endsection
