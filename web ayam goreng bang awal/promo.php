<?php
include('admin/koneksi.php');
include('header.php');
?>


<section id="promo" class=" overlay-hidden">
    <div class="container ">
      <div class="row">
        <div class="col-9 mt-5">
          <h2>Semua Promo </h2>
          <p>Dapatkan Promo Menarik</p>
        </div>
      </div>
    </div>

    <div class="container position-relative md-3">
      <div class="row">       
          <div class="col-12 d-flex justify-content-start">
            
            <div class="card-promo position-relative me-4">
              <img src="aset/img/promo.png" alt="">
              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                  <h5>
                  PROMO
                  MENARIK
                  </h5>
                  <button><a href="detail_promo.php"> Lihat Promo</a></button>
                </div>
              </div>
            </div>

          <div class="card-promo position-relative me-4">
            <img src="aset/img/promo.png" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>
                  PROMO
                  MENARIK
                </h5>
                <button><a href="detail_promo.php"> Lihat Promo</a></button>
              </div>
            </div>
          </div>

          <div class="card-promo position-relative me-4">
            <img src="aset/img/promo.png" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>
                  PROMO
                  MENARIK
                </h5>
                <button><a href="detail_promo.php"> Lihat Promo</a></button>
              </div>
            </div>
          </div>

          <div class="card-promo position-relative me-4">
            <img src="aset/img/promo.png" alt="">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
              <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <h5>
                  PROMO
                  MENARIK
                </h5>
                <button><a href="detail_promo.php"> Lihat Promo</a></button>
              </div>
            </div>
          </div>

          
          <button class="button-arrow-left position-absolute start-0 top-50 ">
            <img src="aset/img/Chevron Left.png" alt="">
          </button>
      
          <button class="button-arrow-right position-absolute end-0 top-50 ">
            <img src="aset/img/Chevron Right.png" alt="">
          </button> 
      </div> 
                       
    </div>
    

  </section>

  <?php
include('footer.php');
?>