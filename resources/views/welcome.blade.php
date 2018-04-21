@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')

    <section id="landing-page">       
        <!-- Navigation Section -->
        @include('partials.navigation')

        <!-- Upper section -->
        @include('partials.uppersection')  
        
        <!-- Featured home section -->
        @include('partials.featured')

    </section>
    
@endsection

@section('widgets')

    <!-- Featured home section -->
    @include('frontend.index')

    <!-- Bottom section -->


@endsection

 

