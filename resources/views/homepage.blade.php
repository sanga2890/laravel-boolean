
@extends('layouts.app')

@section('content')
    @include('partials.home.jumbotron')
    @include('partials.home.first_stripe')
    @include('partials.home.aziende')
    @include('partials.home.lessons')
@endsection

@section('title', 'Homepage')
