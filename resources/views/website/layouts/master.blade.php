<!doctype html>
<html lang="{{app()->getlocale()}}" dir="{{app()->islocale('ar') ? "rtl" : "ltr"}}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet">
		<link href={{asset("assets/css/tiny-slider.css")}} rel="stylesheet">
		<link href={{asset("assets/css/style.css")}} rel="stylesheet">
		<title>DEPi Graduation Project</title>
	</head>
	<body @if ( LaravelLocalization::getCurrentLocale() == "ar" ) class="rtl" @else class="ltr"  @endif>

@include('website.includes.navbar')
@include('website.includes.hero')


@yield("content")



@include('website.includes.footer')

		<script src={{asset("assets/js/bootstrap.bundle.min.js")}}></script>
		<script src={{asset("assets/js/tiny-slider.js")}}></script>
		<script src={{asset("assets/js/custom.js")}}></script>
	</body>

</html>
