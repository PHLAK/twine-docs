@extends('_layouts.method')

@section('description')
    Determine if the string is composed of lowercase characters.
@endsection

@section('definition')
    Twine\Str::isLowercase() : bool
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('johnpinkerton');

        $string->isLowercase(); // Returns true
    </x-code>

    <x-code>
        $string = new Twine\Str('JohnPinkerton');

        $string->isLowercase(); // Returns false
    </x-code>
@endsection
