@extends('_layouts.method')

@section('description')
    Split the string into an array of words.
@endsection

@section('definition')
    Twine\Str::words( void ) : array
@endsection

@section('examples')
    @code
        $string = new Twine\Str('john pinkerton');
        
        $string->words(); // Returns ['john', 'pinkerton']
    @endcode
    
    @code
        $string = new Twine\Str('johnPinkerton');

        $string->words(); // Returns ['john', 'Pinkerton']
    @endcode

    @code
        $string = new Twine\Str('john_pinkerton');

        $string->words(); // Returns ['john', 'pinkerton']
    @endcode

    @code
        $string = new Twine\Str('john-pinkerton');
        
        $string->words(); // Returns ['john', 'pinkerton']
    @endcode
    
    @code
        $string = new Twine\Str('JohnPinkerton');

        $string->words(); // Returns ['John', 'Pinkerton']
    @endcode
@endsection
