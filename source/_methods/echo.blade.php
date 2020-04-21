@extends('_layouts.method')

@section('description')
    Echo the string.
@endsection

@section('definition')
    Twine\Str::echo( void ) : Twine\Str
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->echo(); // Echos 'john pinkerton'
    </x-code>
@endsection
