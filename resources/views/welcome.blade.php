@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@foreach($events as $event)
    dd($event);
    <p>{{ $event->title}} -- {{ $event->description}} </p>
@endforeach

@endsection

