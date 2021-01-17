@extends('layouts.skeleton')
@section('title', 'Play Gomoku Online')
@section('description-page', 'Ligomoku is a place to play gomoku online. It handles Tournaments and cool IAs')
@section('titule-og', 'Ligomoku | Play Gomoku online')
@section('description-og', 'Ligomoku is a place to play gomoku online. It handles Tournaments and cool IAs')
@section('description-tc', 'Ligomoku is a place to play gomoku online. It handles Tournaments and cool IAs')
@section('description-td', 'Ligomoku is a place to play gomoku online. It handles Tournaments and cool IAs')
@section('content')
	{{--@include('parts.navs')
	@include('contents.index')--}}
    @include('contents.dashboard')
@endsection