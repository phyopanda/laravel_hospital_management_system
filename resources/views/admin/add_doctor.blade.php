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
  <main id="main" class="main">
<section class="section">

  @if(session()->has('message'))

    <div class="alert alert-success">
      {{session()->get('message')}}
    </div>

  @endif
  <div class="row">
    <div class="col-lg-6">   
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with hoverable rows</h5>


              <form action="{{ url('add_doctor') }}" method="post" enctype="multipart/form-data">
                @csrf
                  <table class="table">
                      <tr>
                        <th><label>Doctor Name</label></th>
                        <td><input type="text" placeholder="Doctor name" name="name" required=""/></td>
                      </tr>
                      <tr>
                        <th><label>Phone</label></th>
                        <td><input type="text" placeholder="Phone number" name="phone" required=""/></td>
                      </tr>
                        <th><label>Speciality</label></th>
                        <td><select name="speciality">
                              <option value="eye">eye</option>
                              <option value="heart">heart</option>
                              <option value="teeth">teeth</option>
                              <option value="skin">skin</option>
                              <option value="boom">boom</option>
                        </select></td>
                      </tr>
                      <tr>
                        <th><label>Room</label></th>
                        <td><input type="text" placeholder="Room number" name="room" required=""/></td>
                      </tr>
                      <tr>
                        <th><label>Doctor Image</label></th>
                        <td><input type="file" placeholder="Doctor image" name="image" required=""/></td>
                      </tr>
                      <tr>
                        <td ><input type="submit" value="Add Article"
                        class="btn btn-primary">
                        </td>
                      </tr>
                      </table>
                </from>
              <!-- End Table with hoverable rows -->

            </div>
          </div>
        </div>
    </div>
</section>
</main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('admin.footer')
  <!-- Vendor JS Files -->
  @include('admin.script')

</body>

</html>