@extends('layouts.layout');

@section('headers')
    
@endsection
@section('content')
<header id="header">
    <div class="d-flex d-flex-column">
        <div class="profile">
            <img src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t1.15752-9/440543752_1181375013296925_8955377583172609714_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG-Q-tsNRGNP0Zf0ZnNbpGBcILW6MFrP49wgtbowWs_jxcLYjG6ZyS1uBpH3jRJxsY-FqxGFOhPSS7xZNtTB1OO&_nc_ohc=eUfC2UF82S0Q7kNvgEgj8iy&_nc_ht=scontent.fmnl4-3.fna&oh=03_Q7cD1QHjOwKf7H8Uh3eoMkAJP4U7bl5DD7hn2giI8rH89FdgUg&oe=666A67B9" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">James Adamor Castillo</a></h1>
        </div>
    </div>

    <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{url ('#hero')}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{url ('#about')}}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="{{url ('#portfolio')}}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="{{url ('#contact')}}" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
</header>
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>James Adamor Castillo</h1>
      <p>I'm <span class="typed" data-typed-items="Student, Web Developer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <section id="about" class="about">
        <div class="container">
  
          <div class="section-title">
            <h2>About</h2>
            <p>I am James Adamor Castillo, an Information Technology Student currently studying at Saint Louis College of La Union</p>
          </div>
  
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t1.15752-9/440543752_1181375013296925_8955377583172609714_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG-Q-tsNRGNP0Zf0ZnNbpGBcILW6MFrP49wgtbowWs_jxcLYjG6ZyS1uBpH3jRJxsY-FqxGFOhPSS7xZNtTB1OO&_nc_ohc=eUfC2UF82S0Q7kNvgEgj8iy&_nc_ht=scontent.fmnl4-3.fna&oh=03_Q7cD1QHjOwKf7H8Uh3eoMkAJP4U7bl5DD7hn2giI8rH89FdgUg&oe=666A67B9" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>Python Programmer &amp; Web Developer.</h3>
              <p class="fst-italic">
                    Currently skilled in Web Development Technologies like HTML, CSS, Javascript and PHP
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>June 7 2003</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.adamorecastillo.com</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>09084425009</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Tallaoen Luna La Union</span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                    {{-- <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li> --}}
                  </ul>
                </div>
              </div>
              <p>
                This page is made with Laravel Blade Templates  
              </p>
            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->
      <!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
    <div class="container">

      <div class="section-title">
        <h2>Facts</h2>
        <p>As an information technology student, One must excel either in web development, multimedia, application development and UX/UI Design</p>
      </div>

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Happy Client</strong></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Sample Projects</strong> created</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="750" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Hours Of Learning</strong></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Programming Languages</strong>being learned</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Facts Section -->

  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Skills</h2>
        <p>I have skills in programming with web technologies like HTML, CSS, PHP and Javascript. I also dabbled in Python Programming and photo editing</p>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6" data-aos="fade-up">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">85%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

          <div class="progress">
            <span class="skill">PHP <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Python <i class="val">70%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">45%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Skills Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>This is a photo description of the Personal Portfolio which describes a person</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          {{-- <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul> --}}
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="https://www.facebook.com/messenger_media/?attachment_id=836189158369425&message_id=mid.%24cAABa9XC0abiVpZM3vmPdExhucsfP&thread_id=100010204359096" class="img-fluid" alt="">
            {{-- <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="https://www.facebook.com/messenger_media/?attachment_id=836189158369425&message_id=mid.%24cAABa9XC0abiVpZM3vmPdExhucsfP&thread_id=100010204359096" class="img-fluid" alt="">
            {{-- <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="https://www.facebook.com/messenger_media/?attachment_id=836189158369425&message_id=mid.%24cAABa9XC0abiVpZM3vmPdExhucsfP&thread_id=100010204359096" class="img-fluid" alt="">
            {{-- <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="https://scontent.fmnl4-7.fna.fbcdn.net/v/t1.15752-9/373433085_633038298972259_1443283100748939702_n.png?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGfoLV7rrXAxaINk_giNl2U0O2_9vLBHi3Q7b_28sEeLVJdD_E71DV5UzZMn1Ibu83I0eHk0A4CeV3hgIDAUxj4&_nc_ohc=V74Z5N88Jy8Q7kNvgE-5F2m&_nc_ht=scontent.fmnl4-7.fna&oh=03_Q7cD1QEluIo5ct7EWVw4IvWKcipscoZ9fY1G_VXQdsU23cCt2Q&oe=666A68FE" class="img-fluid" alt="">
            {{-- <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="https://scontent.fceb6-1.fna.fbcdn.net/v/t1.15752-9/370197623_1018916099355390_8651008353758059936_n.png?stp=dst-png_s2048x2048&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFWL8hHETbifbqgQc3lsGK-XkDoZ8R-HrJeQOhnxH4esuQK0vF1vZ0w8W74erVjWokRBqXnn-NhplBgDb2nyks6&_nc_ohc=-6Q4Pslap30Q7kNvgFpkilT&_nc_oc=AdglC0P6pMx9eCLiOuYCzUmBrrYsNzmmZz9kMo73V764k_DJJwis7ud7EQLUaqRv2EQ&_nc_ht=scontent.fceb6-1.fna&oh=03_Q7cD1QGA4p1oGp6JP6f5NtA5AHBe_dQgcf_RkLcFygih9XAkIw&oe=666A872E" class="img-fluid" alt="">
            {{-- <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="https://scontent.fceb6-1.fna.fbcdn.net/v/t1.15752-9/370197623_1018916099355390_8651008353758059936_n.png?stp=dst-png_s2048x2048&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFWL8hHETbifbqgQc3lsGK-XkDoZ8R-HrJeQOhnxH4esuQK0vF1vZ0w8W74erVjWokRBqXnn-NhplBgDb2nyks6&_nc_ohc=-6Q4Pslap30Q7kNvgFpkilT&_nc_oc=AdglC0P6pMx9eCLiOuYCzUmBrrYsNzmmZz9kMo73V764k_DJJwis7ud7EQLUaqRv2EQ&_nc_ht=scontent.fceb6-1.fna&oh=03_Q7cD1QGA4p1oGp6JP6f5NtA5AHBe_dQgcf_RkLcFygih9XAkIw&oe=666A872E" class="img-fluid" alt="">
            {{-- <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="https://scontent.fmnl4-5.fna.fbcdn.net/v/t1.15752-9/385541654_273649201957200_6155023318419065192_n.png?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEjiGa3J1hFGicETb9t_AeuoNIyb-K-6o2g0jJv4r7qjXnxxV6xEoFmtXnXP7u6gK8aKdLbsFcf7up9EQSu-8kY&_nc_ohc=Jt7J6e4kYQwQ7kNvgGbUs0R&_nc_ht=scontent.fmnl4-5.fna&oh=03_Q7cD1QETQSokHrbLUheRhi6T77GA4Hnj0hi0se_S1TS8NIOTpQ&oe=666A695A" class="img-fluid" alt="">
            {{-- <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="https://scontent.fmnl4-5.fna.fbcdn.net/v/t1.15752-9/385541654_273649201957200_6155023318419065192_n.png?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEjiGa3J1hFGicETb9t_AeuoNIyb-K-6o2g0jJv4r7qjXnxxV6xEoFmtXnXP7u6gK8aKdLbsFcf7up9EQSu-8kY&_nc_ohc=Jt7J6e4kYQwQ7kNvgGbUs0R&_nc_ht=scontent.fmnl4-5.fna&oh=03_Q7cD1QETQSokHrbLUheRhi6T77GA4Hnj0hi0se_S1TS8NIOTpQ&oe=666A695A" class="img-fluid" alt="">
            {{-- <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            {{-- <div class="portfolio-links">
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div> --}}
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

 

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-in">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Tallaoen, Luna, La Union</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>adamorecastillo@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>09084425009</p>
            </div>

          </div>
        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="/sent">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  </main>
@endsection
