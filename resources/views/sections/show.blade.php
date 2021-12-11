@extends('layouts.crm')

@section('content')
<!-- ======= Cliens Section ======= -->
<section id="cliens" class="cliens section-bg">
  <div class="container">

    <div class="row" data-aos="zoom-in">

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="/home/assets/img/clients/client-1.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="/home/assets/img/clients/client-2.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="/home/assets/img/clients/client-3.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="/home/assets/img/clients/client-4.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="/home/assets/img/clients/client-5.png" class="img-fluid" alt="">
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="/home/assets/img/clients/client-6.png" class="img-fluid" alt="">
      </div>

    </div>

  </div>
</section><!-- End Cliens Section -->
<section id="why-us" class="why-us section-bg2">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="content">
          <h3>Lightning fast, distributed <strong>AI and ML solutions</strong> via one simple API</h3>
          <p>
            Developing AI/ML solutions that work across distributed systems is expensive and requries huge man hours and that few companies have have the resources for.
          </p>
        </div>

        <div class="accordion-list">
          <ul>
            <li>
              <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> AI/ML Global demand growth <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                <p>
                  In recent years more and more companies have decided to rely on the power of AI/ML to improve the accuracy of their enterprise decision making apps.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> Access to resources <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                <p>
                  AI/ML solutions require vast amounts of compute power, usually across multiple clusters of powerful computers and the human resources needed to design, impliment and maintain them  can be staggering.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Barrier to entry <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                <p>
                  AI/ML has typically been the domain of huge corperate megaliaths. But all that is changing. Koobli exists to fill the need of startups who need access to AI/ML rescources across distributed systems at a fraction  of the cost.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("/home/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
    </div>

  </div>
</section><!-- End Why Us Section -->
<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Services</h2>
      <p>We have assembled an array of data scientists, software developers, app developers AI/ML solutions architects with a combined 187 years exmperience and we build offer bespoke AI/ML solutions to fit your companies needs.</p>
    </div>

    <div class="row">
      <div class="content col-xl-5 d-flex flex-column justify-content-center">
        <img src="/home/assets/img/hero-img2.png" class="img-fluid" alt="">
      </div>
      <div class="col-xl-7">
        <div class="icon-boxes d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-lg-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                  </svg>
                  <i class="bx bxl-dribbble"></i>
                </div>
                <h4><a href="">AI/ML Solutions</a></h4>
                <p>We can work with you to create applications that make decisions and learn from their mistakes.</p>
              </div>
            </div>

            <div class="col-lg-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange ">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                  </svg>
                  <i class="bx bx-file"></i>
                </div>
                <h4><a href="">Distributed Computations</a></h4>
                <p>We can set up and manage your AI/ML across cloud based servers that grow a you do</p>
              </div>
            </div>

            <div class="col-lg-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box iconbox-pink">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                  </svg>
                  <i class="bx bx-tachometer"></i>
                </div>
                <h4><a href="">Micro Services</a></h4>
                <p>We can apply simple easy to use Restful APIs to your AI/ML solutions so your developers can simply get results.</p>
              </div>
            </div>

            <div class="col-lg-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-teal">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                  </svg>
                  <i class="bx bx-layer"></i>
                </div>
                <h4><a href="">RAISE</a></h4>
                <p>Real-time Artificial Intelligence Service Evaluator is out out of the box decision making and learning software, designed to determine negative or positive outcomes.</p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Companies we work with</h2>
      <p>Currently we are working with Age care companies to give care givers peace of mind, mental healh providers and smart cars learn from collisions and notify people when incidents have occured.</p>
    </div>
    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">AI/ML</li>
          <li data-filter=".filter-card">APPs</li>
          <li data-filter=".filter-web">Distributed Systems</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="/home/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Cloud and edge systems design</h4>
            <p>App</p>
            <div class="portfolio-links">
              <a href="/home/assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="/home/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Distributed AI Systems</h4>
            <p>Web</p>
            <div class="portfolio-links">
              <a href="/home/assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="/home/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Object recognition</h4>
            <p>App</p>
            <div class="portfolio-links">
              <a href="/home/assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="/home/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>CarebBubble</h4>
            <p>Monitor your vulnerable loved ones at home.</p>
            <div class="portfolio-links">
              <a href="/home/assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="https://carebubble.co/" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="/home/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>App</p>
            <div class="portfolio-links">
              <a href="/home/assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="/home/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Face Recognition</h4>
            <p>Employee time tracking when they arrive at wotk.</p>
            <div class="portfolio-links">
              <a href="/home/assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="/home/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Estonia GovTech</h4>
            <p>Card</p>
            <div class="portfolio-links">
              <a href="/home/assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="https://e-estonia.com/solutions/interoperability-services/x-road/"  target="_blank"  title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="https://i.postimg.cc/cCYkH3ff/nigeria.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Nigeria GPS Tracking</h4>
            <p>Web</p>
            <div class="portfolio-links">
              <a href="/home/assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <h2>The Koobli Management Team</h2>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="/home/assets/img/team/team-1.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href="https://www.linkedin.com/in/ofei-sakyi-387472bb/"><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Ofei Sakyi</h4>
            <span>Chief Executive Officer</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="/home/assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href="https://www.facebook.com/Jamesvincero/"><i class="icofont-facebook"></i></a>
              <a href="http://instagram.com/remotesuumo"><i class="icofont-instagram"></i></a>
              <a href="https://www.linkedin.com/in/james0vince/"><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>James Vincero</h4>
            <span>Chief Technology Officer</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="/home/assets/img/team/team-3.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Mike Coats</h4>
            <span>Chairman</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
            <img src="/home/assets/img/team/team-4.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Amanda Jepson</h4>
            <span>Distributed Systems Architect</span>
          </div>
        </div>
      </div>

    </div>

  </div>
  <div class="section-title">
    <br /><br />
    <p><a href="/jobs.html">We Are Hiring!</a></p>
  </div>
</section><!-- End Team Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <div class="container">

    <div class="section-title">
      <h2>Pricing</h2>
      <p>Pricing greatly depends on what you need from us. We have worked with clients before with an equity/cash arrangement and that is an option available to all clients. All developer accounts will always remain free.</p>
    </div>

    <div class="row no-gutters">

      <div class="col-lg-4 box">
        <h3>Developer</h3>
        <h4>$0<span>per month</span></h4>
        <ul>
          <li><i class="bx bx-check"></i> One Safe Mode API key</li>
          <li><i class="bx bx-check"></i> 1GB of sandbox</li>
          <li><i class="bx bx-check"></i> Unlimited API calls</li>
          <li class="na"><i class="bx bx-x"></i> <span>Free setup and 24/7 support</span></li>
          <li class="na"><i class="bx bx-x"></i> <span>Access to Kooblib</span></li>
        </ul>
        <a href="#" class="btn-buy">Get Started</a>
      </div>

      <div class="col-lg-4 box featured">
        <h3>Business</h3>
        <h4>$199<span>per month</span></h4>
        <ul>
          <li><i class="bx bx-check"></i> 2 Live API keys</li>
          <li><i class="bx bx-check"></i> 10GB of storage</li>
          <li><i class="bx bx-check"></i> 10,000 API calls per month</li>
          <li><i class="bx bx-check"></i> Free setup and 24/7 support</li>
          <li><i class="bx bx-check"></i> Access to Kooblib</li>
        </ul>
        <a href="#" class="btn-buy">Get Started</a>
      </div>

      <div class="col-lg-4 box">
        <h3>Corporate</h3>
        <h4>Contact US<span>Get in touch</span></h4>
        <ul>
          <li><i class="bx bx-check"></i> Custom Live API keys</li>
          <li><i class="bx bx-check"></i> Custom elastic storage</li>
          <li><i class="bx bx-check"></i> Unlimited API calls*</li>
          <li><i class="bx bx-check"></i> Personalized support</li>
          <li><i class="bx bx-check"></i> Person liason manager assigned</li>
        </ul>
        <a href="#" class="btn-buy">Get Started</a>
      </div>

    </div>

  </div>
</section><!-- End Pricing Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq">
  <div class="container">

    <div class="section-title">
      <h2>Frequently Asked Questions</h2>
    </div>

    <ul class="faq-list">

      <li>
        <a data-toggle="collapse" class="" href="#faq1">Do Koobli's DAMS solutions grow as we do? <i class="icofont-simple-up"></i></a>
        <div id="faq1" class="collapse show" data-parent=".faq-list">
          <p>
            Yes! Koobli works with stratigic cloud partnets to provide reliable, redunant and scalable solitions that will contiue with your company.
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq2" class="collapsed">Do we have to use AWS? <i class="icofont-simple-up"></i></a>
        <div id="faq2" class="collapse" data-parent=".faq-list">
          <p>
            We have a strong partnership with AWS, they provide a lot of our resources and we collaborate with them a lot on educational content. That said our enginners are well versed in distributed systems of all kinds. If you want to use GCP, Open Stack or another provider we can arrange that.
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq3" class="collapsed">What is available in the developer package? <i class="icofont-simple-up"></i></a>
        <div id="faq3" class="collapse" data-parent=".faq-list">
          <p>
            Individual developers will always have free developer access to our sandbox tools.  They have access to many or our developer libraries (not including kooblib) and they can interface with RISE AI via their API keys.
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="icofont-simple-up"></i></a>
        <div id="faq4" class="collapse" data-parent=".faq-list">
          <p>
            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="icofont-simple-up"></i></a>
        <div id="faq5" class="collapse" data-parent=".faq-list">
          <p>
            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
        <div id="faq6" class="collapse" data-parent=".faq-list">
          <p>
            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
          </p>
        </div>
      </li>

    </ul>

  </div>
</section><!-- End Frequently Asked Questions Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Location:</h4>
            <p>Level 39, One Canada Square, Canary Wharf</p>
          </div>

          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p>hello@koobli.co</p>
          </div>

          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Call:</h4>
            <p>+44 (0) 207 819 9172</p>
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>

      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
@endsection
