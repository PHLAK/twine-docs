@extends('_layouts.master')

@section('title')
    Troubleshooting
@endsection

@section('sub-title')
    Help is never far away.
@endsection

@section('content')
    <p class="leading-loose my-8">
        For questions contact <a class="text-blue underline" href="https://twitter.com/PHLAK">@PHLAK</a> on Twitter
        or via email at <a class="text-blue underline" href="mailto:Chris@ChrisKankiewicz.com">Chris@ChrisKankiewicz.com</a>
    </p>

    <p class="leading-loose my-8">
        Please report bugs to the <a class="text-blue underline" href="https://github.com/PHLAK/Twine/issues">GitHub Issue Tracker</a>.
    </p>

    <p class="leading-loose my-8">
        You can find the Twine documentation source code on <a class="text-blue underline" href="https://github.com/PHLAK/twine-docs">GitHub</a>.
    </p>
@endsection

@section('footer')
    <div class="flex flex-row justify-between items-center">
        <div class="flex-1 text-left">
            <x-button link="/docs/method-chaining">
                <i class="fal fa-angle-left"></i> Method Chaining
            </x-button>
        </div>

        <div class="flex-1 text-right"></div>
    </div>
@endsection
