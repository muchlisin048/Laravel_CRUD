<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<div>
            <nav  class="navbar navbar-expand-lg navbar-light bg-light" >
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="/siswa/home">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/siswa">Data siswa</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Aboute</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">terserah anda</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
            </nav>
         </div>

         <div class="col-6 float-right">
         	<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah data siswa
            </button>
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



	<div style="margin-bottom: 15px; margin-top: 20px;">
		<h1>Kartu Keluarga</h1>
	</div>

	<div>
         <table class="table table-hover"> 
                <tr>
                    <th>Nama</th>
                    <th>No KK</th>
                    <th>NIK</th>
                    <th>Nomor Hp</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>

                @foreach($data_kartu as $kartu)
                <tr>
                    <td>{{$kartu->nama}}</td>
                    <td>{{$kartu->no_kk}}</td>
                    <td>{{$kartu->nik}}</td>
                    <td>{{$kartu->nomer}}</td>
                    <td>{{$kartu->jenis_kelamin}}</td>
                    <td>{{$kartu->agama}}</td>
                    <td>{{$kartu->alamat}}</td>
                    <td> <a href="/siswa/{{$kartu->id}}/edit" class="btn btn-warning " >Edit</a></td>
                    <td> <a href="/siswa/{{$kartu->id}}/delete" class="btn btn-danger" onclick="return confirm('Anda Yakin ingin menghapus?')">Hapus</a> </td>
                </tr>
                @endforeach
            </tanle>
    </div>


</body>
</html>