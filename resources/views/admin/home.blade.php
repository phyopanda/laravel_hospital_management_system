<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
@include('admin.css')

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.navbar')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.sidebar')
  <!-- End Sidebar-->
  @include('admin.body')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('admin.footer')
  <!-- Vendor JS Files -->
  @include('admin.script')

</body>

</html>