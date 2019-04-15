@extends('layouts.app')

@section('content')
    {{$profileUser->name}}
    <small>registered {{ $profileUser->created_at->diffForHumans() }}</small>
@endsection