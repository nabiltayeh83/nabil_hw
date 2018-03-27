@extends('theme')


@section('title', 'All Posts')


@section('content')

<a href="/posts/create" class="btn btn-primary">create new post</a><br><br>


	@if(isset($results))
    	
   	<div class="row marketing btn-primary" style="padding:12px;">
		<div class="col-lg-1" style="text-align:left;">#</div>
        <div class="col-lg-3" style="text-align:left;">Title</div>
        <div class="col-lg-6" style="text-align:left;">Content</div>
        <div class="col-lg-2" style="text-align:left;"></div>
	    </div>
        
        @php 
        $i = 0;
        @endphp
        
        @foreach($results as $r)
        
        @php 
        $i ++;
        @endphp
        
        <div class="row marketing" style="padding:10px;">
		<div class="col-lg-1" style="text-align:left;">{{$i}}</div>
        <div class="col-lg-3" style="text-align:left;">{{$r->title}}</div>
        <div class="col-lg-6" style="text-align:left;">{{$r->details}}</div>
        <div class="col-lg-2" style="text-align:left;">
        <a href="/posts/{{$r->id}}/edit" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
        <a href="/posts/delete/{{$r->id}}/" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
        </div>
	    </div>
        <hr />
        
        @endforeach
        
        </table>
        
    @endif

@endsection
