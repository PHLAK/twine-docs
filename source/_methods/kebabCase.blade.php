@extends('_layouts.method')

@section('description')
    Convert the string to kebabCase.
@endsection

@section('definition')
    Twine\Str::kebabCase( void ) : Twine\Str
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->kebabCase(); // Returns 'john-pinkerton'
    </x-code>
@endsection
