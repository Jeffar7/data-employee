<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <title>Detail Karyawan</title>
</head>

<body>

  <div class="container">
    <div class="d-flex justify-content-center">

      <div class="card mt-5" style="width: 80rem;">
            <div class="card-header text-center">
                Detail Karyawan
            </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Field</th>
                                        <th scope="col">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Nama</th>
                                        <td>{{$employee->nama}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td>{{$employee->jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nomor Hp</th>
                                        <td>{{$employee->nomor_hp}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email Aktif</th>
                                        <td>{{$employee->email}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Current Salary</th>
                                        <td>{{$employee->current_salary}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Foto Profil</th>
                                        <td>
                                            <img src="{{ asset('storage/' . $employee['foto_profil'])}}" alt="{{$employee['foto_profil']}}" class="img-fluid" style="width: 150px; height:100px;">
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                            <a href="/karyawan/export-word/{{$employee->id}}" class="btn btn-primary">Export Word</a>
                        </div>
                    </div>
                <div>
            </div>
        </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>