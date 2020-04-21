@extends('_layouts.method')

@section('description')
    Decode the base64 encoded string.
@endsection

@section('definition')
    Twine\Str::base64Decode( void ) : Twine\Str
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('am9obiBwaW5rZXJ0b24=');

        $string->base64Decode(); // Returns 'john pinkerton'
    </x-code>
@endsection
