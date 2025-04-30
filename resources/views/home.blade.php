@extends('components.layout')
@section('title', 'Home - AirDrumming Community')
@section('body')
    <div class="container-fluid w-full h-full">
        @include('sections.home_page.header')
        @include('sections.home_page.selection')
        @include('sections.home_page.contact')
        @include('sections.home_page.footer')
    </div>
@endsection
