@extends('_layouts.method')

@section('description')
    Convert the string to snakeCase.
@endsection

@section('definition')
    Twine\Str::snakeCase( void ) : Twine\Str
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->snakeCase(); // Returns 'john_pinkerton'
    </x-code>
@endsection
