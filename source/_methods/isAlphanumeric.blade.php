@extends('_layouts.method')

@section('description')
    Determine if the string is composed of alphanumeric characters.
@endsection

@section('definition')
    Twine\Str::isAlphanumeric() : bool
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('JohnPinkerton123');

        $string->isAlphanumeric(); // Returns true
    </x-code>

    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->isAlphanumeric(); // Returns false
    </x-code>
@endsection
