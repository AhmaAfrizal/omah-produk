@extends('layouts.app')
@section('content')
    <!-- ini adalah isi -->
    <div class="container-fluid my-4">
        <div class="container">
          <!-- d-flex justify-content-center align-items-center h-100 my-4 -->
          <div class="atas">
            <div class="gambar">
              <div class="img-produk">
                <img src="img/contoh produk.png" alt="" class="img-fluid" />
              </div>
            </div>
  
            <div
              class="details"
              style="color: #34364a">
              <div class="judul">
                <h2 style="font-weight: 700">madu murni bermadji</h2>
              </div>
              <div class="detil my-4 ms-3" style="font-weight: 600;">
                <p>Alamat : </p>
                <p>Pendiri : </p>
                <p>Berdiri sejak: </p>
                <p>Kategori : </p>
                <p>Situs web : </p>
                <p>Sosial media : </p>
              </div>
            
  
              <!-- ini adalah ratings -->
              <div class="rate">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
  
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
  
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
  
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
  
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
                <br />
                <h6 class="vote" style="padding-left: 5px; font-weight: 600">
                  5.0 | 15k vote
                </h6>
              </div>
            </div>
  
            <!-- ini adalah qrCode -->
            <div class="qrcode text-center">
              <img src="img/qrcode.png" alt="" class="img-fluid" />
              <p class="caps">
                <i class="fa-solid fa-share-nodes me-1"></i>
                <a
                  href="#"
                  class="tautan link-dark"
                  style="text-decoration: none; font-weight: 600;"
                  >Share
                </a>
              </p>
            </div>
          </div>
  
          <hr class="style1 my-4" />
  
          <!-- ini adalah deskripsi produk -->
          <div class="desk col-12">
            <p style="font-weight: 400; font-size: 20">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. At
              consequatur expedita incidunt eaque nisi iusto voluptatem velit,
              corporis nostrum aliquam repudiandae delectus exercitationem iure
              quam sapiente voluptate perferendis similique totam veniam
              consequuntur obcaecati? Culpa quaerat neque nam pariatur
              necessitatibus, ex quam iusto, hic cumque id aut. Qui consectetur
              maxime at explicabo veritatis minima! Eos error placeat, ex
              consequatur veritatis deleniti! Blanditiis ducimus, quo molestiae
              mollitia obcaecati quibusdam doloremque quod nihil. <br />
              <br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
              ab labore delectus eos est. Ex provident expedita vel necessitatibus
              dicta sint, facilis, corrupti, amet quod eos sunt! Similique dicta
              iste atque blanditiis vitae et earum excepturi illo, odio animi sit,
              tempore voluptate rem id sapiente consectetur provident odit
              adipisci doloribus. Repellendus dolores tempora quos iusto facilis
              ipsam porro dolorem! Corrupti commodi modi nemo cumque quia quidem
              vero voluptatem id incidunt?<br />
              <br />Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia
              ipsa provident odit adipisci magnam iste porro, eaque ipsam
              laudantium autem voluptatibus ducimus aliquam incidunt nisi eos quas
              quo in voluptatum maxime nobis laborum consectetur neque. Adipisci
              rem, a fugit obcaecati cupiditate vitae exercitationem, laudantium
              animi accusamus corporis beatae aliquam aliquid facilis corrupti
              ipsum harum non tempora enim dicta sunt iste. Cupiditate iusto
              facilis, ratione aliquam blanditiis velit voluptatum inventore? Ea.
              <br />
              <br />Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Aliquam voluptatem explicabo soluta sapiente ipsam, tempore eligendi
              quis magni at temporibus quas quisquam. Labore tenetur modi facilis
              provident magnam. Recusandae eos eligendi modi dignissimos velit,
              vel hic dolorem eum quidem error. Aspernatur molestiae autem
              accusantium adipisci recusandae est quo rem error ratione
              laboriosam! Laborum sint at aut inventore rerum perferendis, in
              ipsum perspiciatis, voluptas hic incidunt iure doloribus provident,
              necessitatibus voluptatem?<br />
              <br />Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Incidunt minima expedita atque iusto mollitia assumenda non deserunt
              ipsam libero nobis. Incidunt ullam perspiciatis quas debitis
              suscipit sed expedita rerum non et dolor sunt eum itaque, vitae ipsa
              vero ipsam sapiente error fugiat praesentium nisi? Quo culpa
              similique vitae, corrupti hic maxime blanditiis non, temporibus,
              harum reiciendis adipisci est veritatis praesentium. Amet nulla
              atque aliquid dolore ipsam magni suscipit, delectus recusandae.
              <br />
              <br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
              expedita porro harum a aliquam illum cumque est! Sit fugiat harum
              eos perspiciatis deserunt explicabo hic dicta debitis distinctio
              expedita quasi, sed quae facere autem corrupti. Et harum dolores
              quia, omnis totam fugiat aperiam ad corporis dolorem nisi ex at
              accusamus nulla quae! Quis, ea ullam ut veritatis culpa corrupti non
              dolore iure rerum laborum necessitatibus nemo aliquid esse doloribus
              suscipit?
              <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est error nulla aut non commodi soluta ea quod optio in modi, dolorum perspiciatis, sequi quae. Inventore sequi optio nesciunt temporibus expedita, eius maiores accusamus quisquam, sapiente id quas corrupti unde quasi? Commodi, quod possimus harum sunt ipsam quam error iusto tenetur officia veritatis adipisci, neque modi quas debitis sequi voluptate, accusantium est eum perferendis magnam! Necessitatibus tenetur molestias sequi doloribus a et excepturi, at saepe quia reiciendis id omnis, quam officia voluptatem dolor nulla pariatur facilis odio optio aliquam, quisquam quis provident? Corrupti doloribus illum exercitationem culpa quasi eius expedita earum?<br>
              <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, corrupti voluptate earum, voluptatem sed nisi necessitatibus perspiciatis reiciendis veritatis, possimus nesciunt pariatur. Corporis quo itaque iure quidem quis, laboriosam harum dolorem exercitationem dicta labore. Fugit, officiis? Magnam ut hic sed sunt, aperiam eos velit consequuntur dolor libero possimus assumenda corrupti nemo beatae a, nisi minima unde laborum? Maiores laboriosam ad quaerat quo iure eaque dolores iusto itaque illum earum ullam animi deserunt, esse, vero accusamus a suscipit quos recusandae veniam numquam incidunt? Atque, veritatis sapiente molestiae accusantium in ea porro explicabo pariatur maxime, placeat ullam eaque quo consequuntur deleniti reprehenderit.<br>
              <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus magni eaque maxime possimus sint assumenda, placeat ipsam eum illo? Magni, doloribus dolor. Provident sequi aperiam possimus! Labore numquam ex ea qui consequatur libero amet odit quaerat commodi expedita aspernatur nemo doloremque harum assumenda laborum ipsum, quasi consequuntur architecto nulla! Atque laborum nam, sunt sint veniam natus accusamus saepe quod aspernatur vero recusandae deleniti cumque, tempore explicabo odio dolore doloribus? Sunt accusantium, aperiam magni odio autem facilis atque itaque suscipit doloribus vero ducimus esse exercitationem quia provident laborum, laboriosam quo nostrum, eaque iure repudiandae. Quae pariatur quo eos deleniti error dolore.<br>
            </p>
  
  
            <p class="tmbh my-4">
              
              <!-- ini adalah link menambahkan ulasan produk
              dengan modal -->
              <div class="link">
                <i class="fa-solid fa-pen me-1"></i>
              <a
                href="#"
                class="tautan link-dark"
                style="text-decoration: none; font-weight: 600;"
                data-bs-toggle="modal"
                data-bs-target="#staticBackdrop"
                >ingin menambahkan ulasan produk?
              </a>
              </div>
              
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content" style="border-radius: 15px;">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Menambahkan ulasan produk <i class="fa-solid fa-pen me-1"></i> </h5>
                    </div>
                    <div class="modal-body">
                      <form action="#">
                        <div class="mb-3">
                          <textarea class="form-control" id="message-text" rows="8" placeholder="Ketuk untuk menambah ulasan"></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <form action="#">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">kembali <i class="fa-solid fa-xmark"></i></button>
                      <button type="button" class="btn btn-primary" >kirim <i class="fas fa-long-arrow-alt-right ms-1"></i>
                      </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </p>
          </div>
          <hr class="style1 my-4" />
  
          <!-- ini adalah komentar -->
          <div class="container my-2 py-2 text-dark">
            <div class="row d-flex justify-content-center">
              <div class="col-md-10 col-lg-10 col-xl-12">
                <div class="d-flex flex-start w-100">
                  <img
                    class="rounded-circle shadow-1-strong me-3"
                    src="img/user icon.png"
                    alt="avatar"
                    width="65"
                    height="65"
                  />
                  <div class="w-100">
                    <h5>Add a comment</h5>
                    <div class="form-outline">
                      <textarea
                        class="form-control"
                        id="textAreaExample"
                        rows="4"
                        style="border-radius: 20px"
                        placeholder="What is your view?"
                      ></textarea>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                      <button
                        type="button"
                        class="btn btn-success"
                        style="border-radius: 20px"
                      >
                        Send <i class="fas fa-long-arrow-alt-right ms-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

