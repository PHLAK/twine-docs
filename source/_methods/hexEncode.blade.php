@extends('_layouts.method')

@section('description')
    Encode the string to hex.
@endsection

@section('definition')
    Twine\Str::hexEncode( void ) : Twine\Str
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->hexEncode(); // Returns '\x6a\x6f\x68\x6e\x20\x70\x69\x6e\x6b\x65\x72\x74\x6f\x6e'
    </x-code>
@endsection
