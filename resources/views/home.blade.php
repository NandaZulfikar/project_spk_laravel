@extends('layouts.template')

@section('judul')
Home
@endsection

@section('hero')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Kami menyediakan Motor yang anda inginkan</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Gratis ongkir se indonesia</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Selengkapnya</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('tema/motor/pul.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
@endsection

@section('main')


<main id="main">
<!-- ======= About Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h2>TENTANG KAMI</h2>
          <p>
            Mbrem Mbrem adalah tempat pembelian motor sesuai dengan kriteria yang anda inginkan sesuai dengan budget yang anda miliki serta harga yang terjangkau. 
          </p>
          <div class="text-center text-lg-start">

            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{asset('tema/motor/beat.png')}}" class="img-fluid" alt="">
      </div>

    </div>
  </div>

</section><!-- End About Section -->

<!-- ======= Values Section ======= -->
<section id="values" class="values">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Mbrem Mbrem</h2>
      <p>LAYANAN KAMI</p>
    </header>

    <div class="row">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="box">
          <img src="{{asset('tema/img/uang-icon.png')}}" class="img-fluid" alt="">
          <h3>HARGA MURAH</h3>
          <p>Harga yang kami berikan merupakan harga yang terjangkau di berbagai kalangan dan tentunya dapat menyesuaikan budget anda.</p>
        </div>
      </div>


      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
        <div class="box">
          <img src="{{asset('tema/motor/motor3.png')}}" class="img-fluid" alt="">
          <h3>TERAWAT</h3>
          <p>Armada kami merupakan armada yang terawat dan bersih, sehingga Anda tidak perlu khawatir dengan kebersihan dan kenyamanan saat berkendara.</p>
        </div>
      </div>
    

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="{{asset('tema/img/contact.png')}}" class="img-fluid" alt="">
            <h3>FASILITAS</h3>
            <p>kami menyediakan fasilitas yang lengkap dan aman untuk para customer kami
              dan jika anda mengalami kendala pada saat akan membeli motor , anda bisa langsung menghubungi kami.
            </p>
      </div>
    </div>

    

</section><!-- End Values Section -->


<!-- ======= Review Konsumen ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Konsumen yang suka</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Rating</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-headset" style="color: #15be56;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pelayanan</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-people" style="color: #bb0852;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p></p>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Review konsumen -->  

<!-- ======= Testimonial Konsumen ======= -->
<section id="testimonials" class="testimonials">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>TESTIMONI</p>
      <br>
      <h2>Beberapa Pelanggan yang telah merasakan kepuasan layanan kami</h2>
    </header>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>HUBUNGI KAMI</p>
    </header>

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jln.Kleben<br>Tegal, No. 25</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-telephone"></i>
              <h3>Telephone</h3>
              <p>+6285290233878</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>mbremmbrem@gmail.com</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-clock"></i>
              <h3>Jam Buka</h3>
              <p>Senin - Jumat<br>9:00 - 16.00</p>
              <br>
              <p> Sabtu - Minggu<br>08.00 - 17.00</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="row gy-4">
           <img src="{{asset('tema/motor/motor1.2.png')}}" alt="">
           
@endsection