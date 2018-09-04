@extends('_layouts.method')

@section('description')
    Decode the hex encoded string.
@endsection

@section('definition')
    Twine\Str::hexDecode( void ) : Twine\Str
@endsection

@section('examples')
    @code
        $string = new Twine\Str('\x6a\x6f\x68\x6e\x20\x70\x69\x6e\x6b\x65\x72\x74\x6f\x6e');

        $string->hexDecode(); // Returns 'john pinkerton'
    @endcode
@endsection
