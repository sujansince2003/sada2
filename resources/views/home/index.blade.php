@extends('layout.app')

@include('components.header')

@section('content')
    <div>
        <div >
            @include('components.hero')
            @include('components.about')
        </div>
        @include('components.benefits')
        @include('components.process')
        @include('components.ourteam')
        @include('components.contact')
        @include('components.footer')


    </div>
@endsection
