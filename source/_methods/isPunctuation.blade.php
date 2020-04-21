@extends('_layouts.method')

@section('description')
    Determine if the string is composed of punctuation characters.
@endsection

@section('definition')
    Twine\Str::isPunctuation() : bool
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('*&$();,.?');

        $string->isPunctuation(); // Returns true
    </x-code>

    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->isPunctuation(); // Returns false
    </x-code>
@endsection
