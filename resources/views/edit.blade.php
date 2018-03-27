@extends('theme')


@section('title', 'Edit Post')


@section('content')

@if(isset($result))
	
    @foreach($result as $r)
    
{!! Form::open(['route' => ['posts.update', $r->id], 'method' => 'POST']) !!}
{{csrf_field()}}
{{method_field('PUT')}}


{{ Form::label('title_itm', 'Title') }}
{{ Form::text('title', $r->title, ['class' => 'form-control', 'style' => 'margin-bottom:10px;']) }}

{{ Form::label('title_itm', 'Details') }}
{{ Form::textarea('details', $r->details, ['class' => 'form-control', 'style' => 'margin-bottom:10px; height:60px;']) }}

{{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
<a class="btn btn-default" href="/posts">Cancle</a>

{!! Form::close() !!}
    
    @endforeach

@endif

@endsection