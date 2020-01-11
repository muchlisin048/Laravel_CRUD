<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
          .hilang{
            text-decoration: none;
          }
        </style>

    </head>

    <body>

    <div class="contener">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
        @endif
        <div style="margin-left: 100px; margin-right: 100px; margin-top: 50px;">
          <div style="background-color: #FFBF00; width: 100%; padding: 25px; margin-bottom: 20px; color: white;">
            <h1>Edit Data</h1>
          </div>
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
                            {{csrf_field()}}
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$siswa->nama}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agame" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="agama" value="{{$siswa->agame}}">
                          </div>
                          <div>
                              <label for="label1" >Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="label1" class="custom-select" >
                                  <option value="L" @if($siswa->jenis_kelamin =="L") selected @endif>Laki-laki</option>
                                  <option value="P" @if($siswa->jenis_kelamin =="P") selected @endif>Perempuan</option>
                                </select>
                          </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea  name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$siswa->alamat}}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer" style="margin-left: 50px;">
                        <button style="border: none;" type="button" data-dismiss="modal"><a class="btn btn-secondary" href="/siswa">Close</a></button>
                        <button type="submit" class="btn btn-warning">Update</button>
            </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>
