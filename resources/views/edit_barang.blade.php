<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Produk</title>
  </head>
  <body>
    <h1><center>OMAH PRODUK</center></h1>

    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="editproduk">Edit Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/barang">Produk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h3>Edit Produk</h3>
        </div>
        <div class="card-body">
          <form action="/edit_barang/{{$barang->id_barang}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                <input name="nama_barang" type="text" class="form-control" value="{{$barang->nama_barang}}">
            </div>
            <div class="from-group">
                <label for="exampleFormControlInput1" class="form-label">Deskripsi Produk</label>
                <Textarea name="deskripsi" cols="20" rows="4" class="form-control" placeholder="Deskripsi Produk"></Textarea>
            </div>
            <div class="mb-3"> 
                <label for="exampleFormControlInput1" class="form-label">Kisaran Harga Produk</label>
                <input name="harga_satuan" type="number" class="form-control" value="{{$barang->harga_satuan}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Stok</label>
                <input name="stok" type="number" class="form-control" value="{{$barang->stok}}">
            </div>
            <div>
                <button name="btn_update" value="ditekan" type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
