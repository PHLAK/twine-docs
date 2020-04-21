@extends('_layouts.method')

@section('description')
    Determine if the string is composed of uppercase characters.
@endsection

@section('definition')
    Twine\Str::isUppercase() : bool
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('JOHNPINKERTON');

        $string->isUppercase(); // Returns true
    </x-code>

    <x-code>
        $string = new Twine\Str('JohnPinkerton');

        $string->isUppercase(); // Returns false
    </x-code>
@endsection
