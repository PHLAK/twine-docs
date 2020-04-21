@extends('_layouts.method')

@section('description')
    Get the length of the string.
@endsection

@section('definition')
    Twine\Str::length( void ) : int
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->length(); // Returns 14
    </x-code>
@endsection
