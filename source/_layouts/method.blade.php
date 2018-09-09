@extends('_layouts.master')

@section('title')
    {{ $page->getFilename() }}
@endsection

@section('sub-title')
    @yield('description')
@endsection

@section('content')
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

@section('footer')
    <div class="flex flex-row justify-between items-center">
        <div class="flex-auto hidden text-center sm:inline-block">
            @button(['link' => "https://github.com/PHLAK/twine-docs/edit/master/source/_methods/{$page->getFilename()}.{$page->getExtension()}"])
                <i class="far fa-edit"></i> Edit this Page
            @endbutton
        </div>
    </div>
@endsection
