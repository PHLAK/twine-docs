@extends('_layouts.master')

@section('content')
    <h1 class="font-serif font-light tracking-wide mb-4">{{ $page->getFilename() }}</h1>

    <p class="text-grey-dark text-lg mb-8">
        @yield('description')
    </p>

    <div class="my-8 text-lg">
        @code
            @yield('definition')
        @endcode
    </div>

    @hasSection('parameters')
        <h2 class="font-light text-grey-darker tracking-wide uppercase mt-12 mb-8">Parameters</h2>

        @yield('parameters')
    @endif

    @hasSection('examples')
        <h2 class="font-light text-grey-darker tracking-wide uppercase mt-12 mb-8">Examples</h2>

        @yield('examples')
    @endif

    @hasSection('aliases')
        <h2 class="font-light text-grey-darker tracking-wide uppercase mt-12 mb-8">Aliases</h2>

        @yield('aliases')
    @endif
@endsection
