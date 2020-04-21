@extends('_layouts.method')

@section('description')
    Calculate the crc32 polynomial of the string.
@endsection

@section('definition')
    Twine\Str::crc32( void ) : int
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->crc32(); // Returns 3367853299
    </x-code>
@endsection
