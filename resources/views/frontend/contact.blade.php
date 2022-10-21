@extends('layouts.app')
@section('content')
<section class=" my-lg-4">
    <div class="container h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
  
          <img src="img/kontak.png" class="img-fluid"
            alt="Sample image">
  
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form>
            <div class="divider text-center my-4">
              <h2  class="fw-bold mb-4" style="font-weight: 700; color:#767676; left:232px;">Contact us</h2>
            </div>
  
            <!-- memasukkan nama -->
            <div class="form-outline mb-3">
              <input type="name" id="name" style="background-color:#ebebeb; border-radius: 30px;  font-weight: 600; font-size: 20px; padding-left: 26px; padding-top: 10px; padding-bottom: 10px;" class="form-control form-control-lg"
                placeholder="Nama" />
            </div>
  
            <!-- memasukkan email -->
            <div class="form-outline mb-3">
              <input type="email" id="email" style="background-color:#ebebeb; border-radius: 30px; font-weight: 600; font-size: 20px; padding-left: 26px; padding-top: 10px; padding-bottom: 10px;" class="form-control form-control-lg"
                placeholder="Email" />
            </div>
            <!-- masukkan pesan -->
            <div class="form-outline mb-2">
              <textarea name="" id="" cols="40" rows="5" style="background-color:#ebebeb; border-radius: 20px;  font-weight: 600; font-size: 20px; padding-left: 26px; padding-top: 19px; padding-bottom: 19px;" class="form-control form-control-lg" placeholder="pesan"></textarea>
          </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <!-- <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div> -->
              <!-- <a href="#!" class="text-body">Lupa password?</a> -->
            </div>
            <!-- ini adalah tombol -->
            <div class="text-center text-lg-start mt-2 pt-2">
              <button type="button" class="btn btn-success btn-lg"
                style="padding-left: 40px; padding-right: 40px; padding-top:7px; padding-bottom: 7px ; border-radius:30px; font-size: 16px; font-weight:600;">Kirim</button>
              <!-- <p class="small fw-bold mt-3 mt-lg-2 pt-1 mb-0">Belum mempunyai akun? <a href="register.html"
                  class="link-danger" style="text-decoration: none;">Register</a></p> -->
            </div>
  
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection