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
  <div class="row">
    <div class="col-lg-12">   
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with hoverable rows</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <!-- <th scope="col">Email</th> -->
                    <th scope="col">Phone</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Room</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data as $datas)
                  <tr>
                    <th scope="row">{{ $datas->id}}</th>
                    <td><img src="admin/doctorimage/{{$datas->image}}" style="width:70px;" alt=""/></td>
                    <td>{{ $datas->name}}</td>
                    <!-- <td>{{ $datas->email}}</td> -->
                    <td>{{ $datas->phone}}</td>
                    <td>{{ $datas->speciality}}</td>
                    <td>{{ $datas->room}}</td>
                    <td><a class="btn btn-success" href="{{ url('updatedoctor',$datas->id)}}">update</td>
                    <td><a class="btn btn-danger" onclick="return confirm('are you sure delete this ?')" href="{{ url('deletedoctor',$datas->id)}}">delete</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
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