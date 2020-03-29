@extends('templates.master')

@section('aside')
	@include('partials.aside')
@stop

@section('header')
	@include('partials.header')	
@stop

@section('content')
	@auth
		@include('partials.content')
	@endauth
	@guest
    	@include('auth.login')
	@endguest
@stop

@section('footer')
	@include('partials.footer')
@stop