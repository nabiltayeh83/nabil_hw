@extends('theme')


@section('title', 'Create New Post')


@section('content')



{!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!}
{{csrf_field()}}

{{ Form::label('title_itm', 'Title') }}
{{ Form::text('title', '', ['class' => 'form-control', 'style' => 'margin-bottom:10px;']) }}

{{ Form::label('title_itm', 'Details') }}
{{ Form::textarea('details', '', ['class' => 'form-control', 'style' => 'margin-bottom:10px; height:60px;']) }}

{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
<a class="btn btn-default" href="/posts">Cancle</a>

{!! Form::close() !!}


@endsection