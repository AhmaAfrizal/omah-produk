@extends('layouts.app')
   
@section('content')
{{-- ini adalah tampilan aslikartu  --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are user biasa.
                </div>
            </div>
        </div>
    </div> --}}

{{-- ini adalah tampilan custom --}}
<!-- ini adalah crousel -->

  <div class="container" style="border-radius: 20px">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="crsl-in carousel-inner mt-2" >
        <div class="carousel-item active">
          <img src="img/image2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/image3.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/image5.png" class="d-block w-100" alt="...">
        </div>
      </div>
      {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> --}}
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

          {{-- <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/makanan ringan.png" class="kater-gam card-img-top" alt="kategori">
                <p class="kater-font card-title text-center">makanan ringan</p>
              </div>
            </a>
          </div>
          <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/roti&kue.png" class="kater-gam card-img-top" alt="contoh produk">
                <p class="kater-font card-title text-center">roti&Kue</p>
              </div>
            </a>
          </div>
          <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/kerajinan.png" class="kater-gam card-img-top" alt="contoh produk">
                <p class="kater-font card-title text-center">kerajinan</p>
              </div>
            </a>
          </div>
          <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/perabot.png" class="kater-gam card-img-top" alt="contoh produk">
                <p class="kater-font card-title text-center">perabot</p>
              </div>
            </a>
          </div>
          <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/dessert.png" class="kater-gam card-img-top" alt="contoh produk">
                <p class="kater-font card-title text-center">dessert</p>
              </div>
            </a>
          </div>
          <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/pakaian.png" class="kater-gam card-img-top" alt="contoh produk">
                <p class="kater-font card-title text-center">pakaian</p>
              </div>
            </a>
          </div>        
          <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/bumbu&bahan masak.png" class="kater-gam card-img-top" alt="contoh produk">
                <p class="kater-font card-title text-center">bumbu&bahan masak</p>
              </div>
            </a>
          </div>
          <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/makanan berat.png" class="kater-gam card-img-top" alt="contoh produk">
                <p class="kater-font card-title text-center">makanan berat</p>
              </div>
            </a>
          </div>
          <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/minuman.png" class="kater-gam card-img-top" alt="contoh produk">
                <p class="kater-font card-title text-center">minuman</p>
              </div>
            </a>
          </div>
          <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/makanan tradisional.png" class="kater-gam card-img-top" alt="contoh produk">
                <p class="kater-font card-title text-center">makanan tradisional</p>
              </div>
            </a>
          </div>
          <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/aksesoris.png" class="kater-gam card-img-top" alt="contoh produk">
                <p class="kater-font card-title text-center">aksesoris</p>
              </div>
            </a>
          </div>
          <div class="kat">
            <a href="#" class="link-dark" style="text-decoration: none;">
              <div class="kater card shadow-sm p-3">
                <img src="img/lain-lain.png" class="kater-gam card-img-top" alt="contoh produk">
                <p class="kater-font card-title text-center">lain-lain</p>
              </div>
            </a>
          </div> --}}

          @foreach($kategori as $kategori)
						{{-- <option value="{{ $kategori->id }}">{{ $kategori->jenis_kategori }}</option> --}}
            <div class="kat">
              <a href="
                        {{-- \kategori\{{$kategori->url_jenis_kategori}} --}}
                        \kategori
                      " class="link-dark" style="text-decoration: none;">
                <div class="kater card shadow-sm p-3">
                  <img src="img/{{ $kategori->jenis_kategori }}.png" class="kater-gam card-img-top" alt="kategori {{ $kategori->jenis_kategori }}">
                  <p class="kater-font card-title text-center">{{ $kategori->jenis_kategori }}</p>
                </div>
              </a>
            </div>
					@endforeach
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
          @if ($produk->count())    
          @foreach ($produk as $produk)
            <div class="item">
              <a href="
                        {{-- /detail --}}
                        \produk\{{$produk->url_produk}}
                        {{-- {{ route('produk.show',$produk->id) }} --}}
                      " class="link-dark" style="text-decoration: none;">
                <div class="kartu card shadow-sm p-2">
                  <img src="foto_produk\{{$produk->foto_produk}}" class="gam card-img-top" alt="gambar {{ $produk->nama_produk }}">
                  <div class="card-body">
                    <h5 class="card-title text-center" style="font-weight:700;">{{ $produk->nama_produk }}</h5>
                    <p class="card-text" style="font-weight:440">
                      <strong>{{ $produk->nama_produk }}</strong> Adalah salah satu produk {{$produk->kategori->jenis_kategori}} yang dibuat oleh salah satu industri yang ada di sebuah daerah di indonesia.
                    </p>
                  </div>
                  <div class="ratings">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <small class="ms-1">created at {{ $produk->created_at->diffForHumans() }}</small>
                  </div>
                </div>
              </a>                
            </div>
            @endforeach
            @else
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
          @endif

            {{-- <div class="item">
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
            </div> --}}
        </div>        
  </div>
</div>
@endsection