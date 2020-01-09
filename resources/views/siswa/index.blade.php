<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>

    <body>

    <div class="contener">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
        @endif
        <div style="margin-left: 10px; margin-right: 10px;">
            <div class="col-6">
                <h1> Data siswa </h1> 
            </div>
            <div class="col-6 float-right">
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah data siswa
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/siswa/create" method="POST">
                            {{csrf_field()}}
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agame" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama">
                          </div>
                          <div>
                              <label for="label1" >Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="label1" class="custom-select">
                                  <option value="L">Laki-laki</option>
                                  <option value="P">Perempuan</option>
                                </select>
                          </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        
            <table class="table table-hover"> 
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>

                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{$siswa->nama}}</td>
                    <td>{{$siswa->jenis_kelamin}}</td>
                    <td>{{$siswa->agame}}</td>
                    <td>{{$siswa->alamat}}</td>
                    <td> <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning " >Edit</a></td>
                    <td> <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger" onclick="return confirm('Anda Yakin ingin menghapus?')">Hapus</a> </td>
                </tr>
                @endforeach
            </tanle>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>
