<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>


</head>

<body>
<div class="container">


<div style="border:2px dotted #666666; padding:10px; font-family:arial;">

<ul>
<li><a href='/posts' class="active">Home</a></li>
</ul>


<div style="padding:20px; font-family:arial;">

    @if (count($errors) > 0)
    	<div class="alert alert-danger">
        	@foreach ($errors->all() as $error)
            - {{ $error }} <br>
            @endforeach
        </div>
    @endif

<h3>@yield('title')</h3><hr /><br />
@yield('content')<br><br>
</div>

<div style="padding:15px; font-family:arial; background:#333; color:#FFF; font-size:12px; text-align:center; height:110px;"  
class="navbar navbar-inverse">
<br /><br />Copy Rights
</div>

</div>

</div>
</body></html>