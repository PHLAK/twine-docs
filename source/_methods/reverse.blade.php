@extends('_layouts.method')

@section('description')
    Reverse the string.
@endsection

@section('definition')
    Twine\Str::reverse( void ) : Twine\Str
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->reverse(); // Returns 'notreknip nhoj'
    </x-code>
@endsection
