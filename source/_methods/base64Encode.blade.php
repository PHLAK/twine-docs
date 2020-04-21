@extends('_layouts.method')

@section('description')
    Encode the string to base64.
@endsection

@section('definition')
    Twine\Str::base64Encode( void ) : Twine\Str
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->base64Encode(); // Returns 'am9obiBwaW5rZXJ0b24='
    </x-code>
@endsection
