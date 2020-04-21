@extends('_layouts.method')

@section('description')
    Determine if the string is empty.
@endsection

@section('definition')
    Twine\Str::isEmpty() : bool
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('');

        $string->isEmpty(); // Returns true
    </x-code>

    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->isEmpty(); // Returns false
    </x-code>
@endsection
