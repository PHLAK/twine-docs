@extends('_layouts.method')

@section('description')
    Determine if the string is not empty.
@endsection

@section('definition')
    Twine\Str::isNotEmpty() : bool
@endsection

@section('examples')
    <x-code>
        $string = new Twine\Str('john pinkerton');

        $string->isNotEmpty(); // Returns true
    </x-code>

    <x-code>
        $string = new Twine\Str('');

        $string->isNotEmpty(); // Returns false
    </x-code>
@endsection
