<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProdusenRegister</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Register</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<form class="mt-5" action=" {{ route('input.kontributor') }} " method="POST">
  {{ csrf_field() }}
  <h1>Form Input Data</h1>

  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

        <div class="form-group row mt-5">
          <label class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Masukan Nama kamu" required>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Masukan Email kamu" required>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Masukan Alamat kamu" required>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nomor HP/Telp</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Masukan HP/Telp kamu" required>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Kode Pos</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="kode_pos" value="{{old('kode_pos')}}" placeholder="Masukan Kode Pos kamu" required>
          </div>
        </div>
        
        <div class="form-group row mt-5">
          <div class="col-sm-12">
            <input type="submit" class="btn btn-success form-control" value="Submit">
          </div>
        </div>
</form>
    </div>
</body>
</html>