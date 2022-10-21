@extends('layouts.app')
   
@section('content')
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        informasi pengguna
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-2 col-4">
            <img
              class="img-team rounded-circle shadow-1-strong ms-lg-5 me-3 img-fluid"
              src="img/user icon.png"
              alt="avatar"
            />
          </div>
          <div class="col-lg-6 col-8">
            <p class="mt-3 ms-lg-5"><strong>{{ Auth::user()->name }}</strong></p>
            <p class="ms-lg-5">{{ Auth::user()->email }}</p>
          </div>
        </div>
        <hr class="style1 my-4"/>
      </div>
    </div>
  </div>
  </div>
</div>

{{-- ini adalah tampilan aslikartu  --}}
{{-- <div class="row justify-content-center">
  <div class="col-md-8">
      <div class="card">
          <div class="card-header">informasi pengguna</div>
          <div class="card-body">
              <div class="col-md-3">
                <p>lasnlkansdklas</p>
              </div>
              <div class="col-md-5">
                <p>laksdlknslasknd</p>
              </div>
          </div>
      </div>
  </div>
</div>  --}}

{{-- <div class="row justify-content-center mt-3">
  <div class="col-md-8">
      <div class="card">
          <div class="card-header">Dashboard</div>
          <div class="card-body">
              Halaman Profile
          </div>
      </div>
  </div>
</div>  --}}

{{-- ini adalah tampilan custom --}}
<!-- ini adalah crousel -->
{{-- <div class="container" style="border-radius: 20px">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner mt-2" style="border-radius: 20px">
        <div class="carousel-item active">
          <img src="img/image1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/image2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/image3.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/image4.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/image5.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- ini adalah kategori -->
    <div class="container my-5">
      <h2  style="font-weight: 700; color:#34364a">Kategori</h2>
      <hr class="dekorasi">  
    </div>
    <div class="container-fluid">
      <div class="container lg-mt-4 md-mt-2">
        <div class="scrollmenu">
          <div class="kat">
            <a href="#" class=""><img src="img/kategori snack.png" alt="" class="gmbr"></a>
          </div>
          <div class="kat">
            <a href="#"><img src="img/kategori rotiKue.png" alt="" class="gmbr"></a>
          </div>
          <div class="kat">
            <a href="#"><img src="img/kategori kerajinan.png" alt="" class="gmbr"></a>
          </div>
          <div class="kat">
            <a href="#"><img src="img/kategori perabot rumah tangga.png" alt="" class="gmbr"></a>
          </div>
          <div class="kat">
            <a href="#"><img src="img/kategori dessert.png" alt="" class="gmbr"></a>
          </div>
          <div class="kat">
            <a href="#"><img src="img/kategori pakaian.png" alt="" class="gmbr"></a>
          </div>
        
          <div class="kat">
            <a href="#"><img src="img/kategori bumbuBahan masak.png" alt="" class="gmbr"></a>
          </div>
          <div class="kat">
            <a href="#"><img src="img/kategori makanan.png" alt="" class="gmbr"></a>
          </div>
          <div class="kat">
            <a href="#"><img src="img/kategori minuman.png" alt="" class="gmbr"></a>
          </div>
          <div class="kat">
            <a href="#"><img src="img/kategori makanan tradisional.png" alt="" class="gmbr"></a>
          </div>
          <div class="kat">
            <a href="#"><img src="img/kategori aksesoris.png" alt="" class="gmbr"></a>
          </div>
          <div class="kat">
            <a href="#"><img src="img/kategori lain-lain.png" alt="" class="gmbr"></a>
          </div>
        </div>
        </div>
      </div>
    </div>

    <!-- isi atau content -->
   <div class="container my-5">
     <h2 style="font-weight: 700; color:#34364a">Explore</h2> 
     <hr class="dekorasi">    	
   </div>

  <div class="container my-5">        
        <div class="explore">
            <div class="item">
              <a href="\detail" class="link-dark" style="text-decoration: none;">
                <div class="kartu card shadow-sm p-2">
                  <img src="img/contoh thumbnail produk.png" class="card-img-top" alt="contoh produk">
                  <div class="card-body">
                    <h5 class="card-title text-center" style="font-weight:700;">Nama produk</h5>
                    <p class="card-text" style="font-weight:400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero! Recusandae officiis accusamus veritatis illo nulla libero vel, sunt velit.</p>
                  </div>
                  <div class="ratings">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
              </a>                
            </div>
            <div class="item">
              <a href="\detail" class="link-dark" style="text-decoration: none;">
                <div class="kartu card shadow-sm p-2">
                  <img src="img/contoh thumbnail produk.png" class="card-img-top" alt="contoh produk">
                  <div class="card-body">
                    <h5 class="card-title text-center" style="font-weight:700;">Nama produk</h5>
                    <p class="card-text"style="font-weight:400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero! Recusandae officiis accusamus veritatis illo nulla libero vel, sunt velit.</p>
                  </div>
                  <div class="ratings">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
              </a>
                
            </div>
            <div class="item">
              <a href="\detail" class="link-dark" style="text-decoration: none;">
                <div class="kartu card shadow-sm p-2">
                  <img src="img/contoh thumbnail produk.png" class="card-img-top" alt="contoh produk">
                  <div class="card-body">
                    <h5 class="card-title text-center" style="font-weight:700;">Nama produk</h5>
                    <p class="card-text"style="font-weight:400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero! Recusandae officiis accusamus veritatis illo nulla libero vel, sunt velit.</p>
                  </div>
                  <div class="ratings">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
              </a>
                
            </div>        
            <div class="item">
              <a href="\detail" class="link-dark" style="text-decoration: none;">
              <div class="kartu card shadow-sm p-2">
                <img src="img/contoh thumbnail produk.png" class="card-img-top" alt="contoh produk">
                <div class="card-body">
                  <h5 class="card-title text-center" style="font-weight:700;">Nama produk</h5>
                  <p class="card-text"style="font-weight:400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero! Recusandae officiis accusamus veritatis illo nulla libero vel, sunt velit.</p>
                </div>
                <div class="ratings">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              </a>              
            </div>
            <div class="item">
              <a href="\detail" class="link-dark" style="text-decoration: none;">
                <div class="kartu card shadow-sm p-2">
                  <img src="img/contoh thumbnail produk.png" class="card-img-top" alt="contoh produk">
                 <div class="card-body">
                    <h5 class="card-title text-center" style="font-weight:700;">Nama produk</h5>
                    <p class="card-text"style="font-weight:400">Lorem ipsum dolor sit amet consectetur, adipisicing elit.   Molestiae, libero! Recusandae officiis accusamus veritatis illo nulla libero vel, sunt velit.</p>
                  </div>
                  <div class="ratings">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
              </a>
              
            </div>
            <div class="item">
              <a href="\detail" class="link-dark" style="text-decoration: none;">
                <div class="kartu card shadow-sm p-2">
                  <img src="img/contoh thumbnail produk.png" class="card-img-top" alt="contoh produk">
                  <div class="card-body">
                    <h5 class="card-title text-center" style="font-weight:700;">Nama produk</h5>
                    <p class="card-text"style="font-weight:400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero! Recusandae officiis accusamus veritatis illo nulla libero vel, sunt velit.</p>
                  </div>
                  <div class="ratings">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
              </a>              
            </div>        
            <div class="item">
              <a href="\detail" class="link-dark" style="text-decoration: none;">
                <div class="kartu card shadow-sm p-2">
                  <img src="img/contoh thumbnail produk.png" class="card-img-top" alt="contoh produk">
                  <div class="card-body">
                    <h5 class="card-title text-center" style="font-weight:700;">Nama produk</h5>
                    <p class="card-text"style="font-weight:400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero! Recusandae officiis accusamus veritatis illo nulla libero vel, sunt velit.</p>
                  </div>
                  <div class="ratings">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
              </a>              
            </div>
            <div class="item">
              <a href="\detail" class="link-dark" style="text-decoration: none;">
                <div class="kartu card shadow-sm p-2">
                  <img src="img/contoh thumbnail produk.png" class="card-img-top" alt="contoh produk">
                  <div class="card-body">
                    <h5 class="card-title text-center" style="font-weight:700;">Nama produk</h5>
                    <p class="card-text"style="font-weight:400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero! Recusandae officiis accusamus veritatis illo nulla libero vel, sunt velit.</p>
                  </div>
                  <div class="ratings">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
              </a>              
            </div>
            <div class="item">
              <a href="\detail" class="link-dark" style="text-decoration: none;">
                <div class="kartu card shadow-sm p-2">
                  <img src="img/contoh thumbnail produk.png" class="card-img-top" alt="contoh produk">
                  <div class="card-body">
                    <h5 class="card-title text-center" style="font-weight:700;">Nama produk</h5>
                    <p class="card-text"style="font-weight:400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero! Recusandae officiis accusamus veritatis illo nulla libero vel, sunt velit.</p>
                  </div>
                  <div class="ratings">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
              </a>              
            </div>
        </div>        
  </div>
</div> --}}
@endsection