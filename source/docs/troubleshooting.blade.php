@extends('_layouts.master')

@section('title')
    Troubleshooting
@endsection

@section('sub-title')
    Help is never far away.
@endsection

@section('content')
    <p class="leading-loose my-8">
        For questions contact <a href="https://twitter.com/PHLAK">@PHLAK</a> on Twitter
        or via email at <a href="mailto:Chris@ChrisKankiewicz.com">Chris@ChrisKankiewicz.com</a>
    </p>

    <p class="leading-loose my-8">
        Please report bugs to the <a href="https://github.com/PHLAK/Twine/issues">GitHub Issue Tracker</a>.
    </p>

    <p class="leading-loose my-8">
        You can find the Twine documentation source code on <a href="https://github.com/PHLAK/twine-docs">GitHub</a>.
    </p>
@endsection

@section('footer')
    <div class="flex flex-row justify-between items-center">
        <div class="flex-1 text-left">
            @button(['link' => '/docs/method-chaining'])
                <i class="fas fa-angle-left"></i> Method Chaining
            @endbutton
        </div>

        <div class="flex-1 hidden text-center sm:inline-block">
            @button(['link' => "https://github.com/PHLAK/twine-docs/edit/master/source/docs/{$page->getFilename()}.{$page->getExtension()}"])
                <i class="far fa-edit"></i> Edit this Page
            @endbutton
        </div>

        <div class="flex-1 text-right"></div>
    </div>
@endsection
