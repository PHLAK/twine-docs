@extends('_layouts.method')

@section('description')
    Convert the string to studlyCase.
@endsection

@section('definition')
    Twine\Str::studlyCase( void ) : Twine\Str
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->studlyCase(); // Returns 'JohnPinkerton'
    @endcode
@endsection
