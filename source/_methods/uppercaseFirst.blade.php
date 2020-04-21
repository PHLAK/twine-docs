@extends('_layouts.method')

@section('description')
    Convert the first character of the string to uppercase.
@endsection

@section('definition')
    Twine\Str::uppercaseFirst() : Twine\Str
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->uppercaseFirst(); // Returns 'John pinkerton'
    </x-code>
@endsection
