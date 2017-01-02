

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/bootstrap/css/lavish-bootstrap.css" rel="stylesheet"> 
  <!-- <link href="/bootstrap/css/lavish-bootstrap1.css" rel="stylesheet">  -->
	<link rel="icon" type="image/png" href="/images/dafault/icon.png" sizes="32x32">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/js/script.js"></script>


    <!-- Latest compiled and minified CSS -->
  <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

    <!-- Optional theme -->
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->

    <!-- Latest compiled and minified JavaScript -->


<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

  @if( Route::currentRouteName() == 'project.show')

    <title>{{ $project->name }}</title>
    <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="fb:app_id"  content="116473952025328" /> 
    <meta property="og:title" content="{{$project->name}}" />
    <meta property="og:type" content="article" />
    @if($project->sponsor_projects()->first() != null && $project->sponsor_projects()->first()->amount >= $likecount*10+$sharecount*20)
    <meta property="og:image" content="{{ $sponsor->logo_path }}" />
    @else
    <meta property="og:image" content="{{ $project->cover_img_path }}" />
    @endif
    <meta property="og:url" content="http://{{ $_SERVER['SERVER_NAME'] }}/projects/{{ Request::segment(2)}}" />
    <meta property="og:description" content="{{ str_replace(array("\r", "\n"), "", $project->content) }}" />




  @else
    <title>Wefund群眾募資平台</title>
  @endif







<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68691412-1', 'auto');
  ga('send', 'pageview');

</script>


<script type="text/javascript" charset="utf-8">
$('#modal-dialog').on('show', function() {
    var link = $(this).data('link'),
        confirmBtn = $(this).find('.confirm');
})


$('#btnYes').click(function() {
  
    // handle form processing here
  	
  	alert('submit form');
    $('form').submit();
  
});
</script>


	
</head>

@extends('layouts.header')
<br /><br /><br />

@yield('content')



@extends('layouts.footer')
</html>