@extends('layouts.app')
@section('content')
<div class="container my-2">
    <h2 class="mb-5" style="font-weight: 700; color: #34364a;">
      Hasil untuk "{{request('search')}}"
    </h2>
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
                    <p class="card-text" style="font-weight:440">Lorem ipsum <strong>{{ $produk->nama_produk }}</strong> sit amet consectetur, adipisicing elit. Quam alias a laborum nisi assumenda numquam earum? Hic molestias distinctio non.</p>
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
          @endforeach
        @else
          <h3 class="text-center mt-4" style="font-weight: 600">produk belum tersedia nih</h3>
      @endif
        {{-- <div class="item">
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
            <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
              <img
                src="img/contoh thumbnail produk.png"
                class="card-img-top"
                alt="contoh produk"
              />
              <div class="card-body">
                <h5
                  class="card-title mb-3 text-center"
                  style="font-weight: 700"
                >
                  Nama produk
                </h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Molestiae, libero! Recusandae officiis accusamus veritatis
                  illo nulla libero vel, sunt velit.
                </p>
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
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
            <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
              <img
                src="img/contoh thumbnail produk.png"
                class="card-img-top"
                alt="contoh produk"
              />
              <div class="card-body">
                <h5
                  class="card-title mb-3 text-center"
                  style="font-weight: 700"
                >
                  Nama produk
                </h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Molestiae, libero! Recusandae officiis accusamus veritatis
                  illo nulla libero vel, sunt velit.
                </p>
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
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
            <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
              <img
                src="img/contoh thumbnail produk.png"
                class="card-img-top"
                alt="contoh produk"
              />
              <div class="card-body">
                <h5
                  class="card-title mb-3 text-center"
                  style="font-weight: 700"
                >
                  Nama produk
                </h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Molestiae, libero! Recusandae officiis accusamus veritatis
                  illo nulla libero vel, sunt velit.
                </p>
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
            <a
              href="\detail"
              class="link-dark"
              style="text-decoration: none"
            >
              <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
                <img
                  src="img/contoh thumbnail produk.png"
                  class="card-img-top"
                  alt="contoh produk"
                />
                <div class="card-body">
                  <h5
                    class="card-title mb-3 text-center"
                    style="font-weight: 700"
                  >
                    Nama produk
                  </h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Molestiae, libero! Recusandae officiis accusamus veritatis
                    illo nulla libero vel, sunt velit.
                  </p>
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
            <a
              href="\detail"
              class="link-dark"
              style="text-decoration: none"
            >
              <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
                <img
                  src="img/contoh thumbnail produk.png"
                  class="card-img-top"
                  alt="contoh produk"
                />
                <div class="card-body">
                  <h5
                    class="card-title mb-3 text-center"
                    style="font-weight: 700"
                  >
                    Nama produk
                  </h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Molestiae, libero! Recusandae officiis accusamus veritatis
                    illo nulla libero vel, sunt velit.
                  </p>
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
            <a
              href="\detail"
              class="link-dark"
              style="text-decoration: none"
            >
              <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
                <img
                  src="img/contoh thumbnail produk.png"
                  class="card-img-top"
                  alt="contoh produk"
                />
                <div class="card-body">
                  <h5
                    class="card-title mb-3 text-center"
                    style="font-weight: 700"
                  >
                    Nama produk
                  </h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Molestiae, libero! Recusandae officiis accusamus veritatis
                    illo nulla libero vel, sunt velit.
                  </p>
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
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
            <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
              <img
                src="img/contoh thumbnail produk.png"
                class="card-img-top"
                alt="contoh produk"
              />
              <div class="card-body">
                <h5
                  class="card-title mb-3 text-center"
                  style="font-weight: 700"
                >
                  Nama produk
                </h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Molestiae, libero! Recusandae officiis accusamus veritatis
                  illo nulla libero vel, sunt velit.
                </p>
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
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
            <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
              <img
                src="img/contoh thumbnail produk.png"
                class="card-img-top"
                alt="contoh produk"
              />
              <div class="card-body">
                <h5
                  class="card-title mb-3 text-center"
                  style="font-weight: 700"
                >
                  Nama produk
                </h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Molestiae, libero! Recusandae officiis accusamus veritatis
                  illo nulla libero vel, sunt velit.
                </p>
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
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
            <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
              <img
                src="img/contoh thumbnail produk.png"
                class="card-img-top"
                alt="contoh produk"
              />
              <div class="card-body">
                <h5
                  class="card-title mb-3 text-center"
                  style="font-weight: 700"
                >
                  Nama produk
                </h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Molestiae, libero! Recusandae officiis accusamus veritatis
                  illo nulla libero vel, sunt velit.
                </p>
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
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
            <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
              <img
                src="img/contoh thumbnail produk.png"
                class="card-img-top"
                alt="contoh produk"
              />
              <div class="card-body">
                <h5
                  class="card-title mb-3 text-center"
                  style="font-weight: 700"
                >
                  Nama produk
                </h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Molestiae, libero! Recusandae officiis accusamus veritatis
                  illo nulla libero vel, sunt velit.
                </p>
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
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
            <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
              <img
                src="img/contoh thumbnail produk.png"
                class="card-img-top"
                alt="contoh produk"
              />
              <div class="card-body">
                <h5
                  class="card-title mb-3 text-center"
                  style="font-weight: 700"
                >
                  Nama produk
                </h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Molestiae, libero! Recusandae officiis accusamus veritatis
                  illo nulla libero vel, sunt velit.
                </p>
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
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
          </a>
          <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
            <img
              src="img/contoh thumbnail produk.png"
              class="card-img-top"
              alt="contoh produk"
            />
            <div class="card-body">
              <h5
                class="card-title mb-3 text-center"
                style="font-weight: 700"
              >
                Nama produk
              </h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Molestiae, libero! Recusandae officiis accusamus veritatis
                illo nulla libero vel, sunt velit.
              </p>
            </div>
            <div class="ratings">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
          </div>
        </div>

        <div class="item">
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
            <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
              <img
                src="img/contoh thumbnail produk.png"
                class="card-img-top"
                alt="contoh produk"
              />
              <div class="card-body">
                <h5
                  class="card-title mb-3 text-center"
                  style="font-weight: 700"
                >
                  Nama produk
                </h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Molestiae, libero! Recusandae officiis accusamus veritatis
                  illo nulla libero vel, sunt velit.
                </p>
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
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
            <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
              <img
                src="img/contoh thumbnail produk.png"
                class="card-img-top"
                alt="contoh produk"
              />
              <div class="card-body">
                <h5
                  class="card-title mb-3 text-center"
                  style="font-weight: 700"
                >
                  Nama produk
                </h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Molestiae, libero! Recusandae officiis accusamus veritatis
                  illo nulla libero vel, sunt velit.
                </p>
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
          <a
            href="\detail"
            class="link-dark"
            style="text-decoration: none"
          >
            <div class="kartu card shadow-sm p-2" style="border-radius: 20px">
              <img
                src="img/contoh thumbnail produk.png"
                class="card-img-top"
                alt="contoh produk"
              />
              <div class="card-body">
                <h5
                  class="card-title mb-3 text-center"
                  style="font-weight: 700"
                >
                  Nama produk
                </h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Molestiae, libero! Recusandae officiis accusamus veritatis
                  illo nulla libero vel, sunt velit.
                </p>
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
@endsection