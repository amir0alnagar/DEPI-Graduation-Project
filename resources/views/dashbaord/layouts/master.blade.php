<!DOCTYPE html>
<html lang="{{app()->getlocale()}}" dir="{{app()->islocale('ar') ? "rtl" : "ltr"}}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
    <link href="{{asset("dashboard/assets/img/favicon.png")}}" rel="icon">
    <link href="{{asset("dashboard/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset("dashboard/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("dashboard/assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{asset("dashboard/assets/vendor/quill/quill.snow.css")}}" rel="stylesheet">
  <link href="{{asset("dashboard/assets/vendor/quill/quill.bubble.css")}}" rel="stylesheet">
  <link href="{{asset("dashboard/assets/vendor/remixicon/remixicon.css")}}" rel="stylesheet">
  <link href="{{asset("dashboard/assets/vendor/simple-datatables/style.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset("dashboard/assets/css/style.css")}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body @if ( LaravelLocalization::getCurrentLocale() == "ar" ) class="rtl" @else class="ltr"  @endif>
@include('dashbaord.includes.header')
@include('dashbaord.includes.sidebar')

@yield('content')

@include("dashbaord.includes.footer")
  <!-- Vendor JS Files -->
  <script src="{{asset("dashboard/assets/vendor/apexcharts/apexcharts.min.js")}}"></script>
  <script src="{{asset("dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("dashboard/assets/vendor/chart.js/chart.umd.js")}}"></script>
  <script src="{{asset("dashboard/assets/vendor/echarts/echarts.min.js")}}"></script>
  <script src="{{asset("dashboard/assets/vendor/quill/quill.js")}}"></script>
  <script src="{{asset("dashboard/assets/vendor/simple-datatables/simple-datatables.js")}}"></script>
  <script src="{{asset("dashboard/assets/vendor/tinymce/tinymce.min.js")}}"></script>
  <script src="{{asset("dashboard/assets/vendor/php-email-form/validate.js")}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset("dashboard/assets/js/main.js")}}"></script>

</body>

</html>
