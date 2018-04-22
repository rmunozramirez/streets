@extends('layouts.app')
@section ('title',  "| $page_name")

@section('content')

    <section id="landing-page">       
        <!-- Navigation Section -->
        @include('layouts.navigation')

        <!-- Upper section -->
        @include('frontend.partials.uppersection')  
        
        <!-- Featured home section -->
        @include('frontend.partials.featured')

    </section>
    
@endsection

@section('widgets')

    <!-- Featured home section -->
    @include('frontend.index')

    <!-- Bottom section -->


@endsection

 

