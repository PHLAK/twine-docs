@extends('_layouts.method')

@section('description')
    Encode the string to a URL safe string.
@endsection

@section('definition')
    Twine\Str::urlencode( void ) : Twine\Str
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');

        $string->urlencode(); // Returns 'john+pinkerton'
    @endcode

    @code
        $path = new Twine\Str('/some/file/path.txt');

        $path->urlencode(); // Returns '%2Fsome%2Ffile%2Fpath.txt'
    @endcode
@endsection
