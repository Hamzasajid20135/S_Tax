<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Consulting Services</title>
    <link rel="icon" href="{{ asset('thumbnail.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/contact-us.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-page.css') }}">

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Open Sans:wght@400;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Work Sans:wght@400;500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Sen:wght@700&display=swap"
    />

  
  </head>
  <body>
  <div class="about-page">
     
    <div class="contact-us8">
      <div class="rectangle-parent60">
        <div class="frame-child48"></div>
        <div class="social-links-container1">
          <div class="social-link-wrapper">
            <img
              class="youtube-icon"
              loading="lazy"
              alt=""
              src="vector.svg"
            />
          </div>
          <img
            class="mdiyoutube-icon1"
            loading="lazy"
            alt=""
            src="mdiyoutube.svg"
          />

          <img
            class="bxllinkedin-icon1"
            loading="lazy"
            alt=""
            src="bxllinkedin.svg"
          />
        </div>
        <div class="contact-details-wrapper">
          <div class="contact-details">
            <div class="email-details">
              <div class="email-wrapper">
                <img class="email-icon" alt="" src="vector1.svg" />

                <div class="needhelpcompanycom4">needhelp@company.com</div>
              </div>
            </div>
            <div class="address-details">
              <img class="location-icon" alt="" src="vector2.svg" />

              <div class="address-wrapper">
                <div class="elgin-st-celina4">6391 Elgin St. Celina, 10299</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <header class="header">
        <div class="navigation">
          <div class="nav-links">
            <div class="logo-container">
              <img
                class="water-mark-icon8"
                loading="lazy"
                alt=""
                src="watermark1.svg"
              />
            </div>
            <img
              class="purple-logo-cap-icon8"
              loading="lazy"
              alt=""
              src="purplelogocap1.svg"
            />
          </div>
          <nav class="navigation-bar-wrapper">
  <nav class="navigation-bar">
    <a class="home3"href="{{ asset('/') }}">HOME</a>
    <a class="about3" href="{{ asset('/about') }}">ABOUT</a>
    <a class="blogs2" href="{{ asset('/blog-listing') }}">BLOGS</a>
    <a class="contact3" href="{{ asset('/contact-us') }}">CONTACT</a>
  </nav>
</nav>

          <div class="quote-button-wrapper1">
            <button class="quote-button-container">
            <a class="request-a-quote9" href="{{ asset('/quotation') }}">REQUEST A QUOTE</a>
            </button>
          </div>
        </div>
      </header>
      <div class="mdilocation4"></div>
      <div class="icbaseline-email4"></div>
      <img class="image-10-icon4" alt="" src="image-10@2x.png" />

      <section class="hero-container">
        <div class="hero-content">
          <img
            class="hero-section-icon3"
            loading="lazy"
            alt=""
            src="hero-section1@2x.png"
          />

          <div class="hero-subtitle">
            <h1 class="get-in-touch">Get in touch for any query</h1>
            <h1 class="contact-us9">Contact Us</h1>
          </div>
        </div>
      </section>
      <section class="form-content-wrapper">
        <div class="form-content">
          <div class="form-title-container">
            <div class="form-title-wrapper">
              <h1 class="feel-free-to">Feel free to contact us anytime</h1>
              <div class="form-divider"></div>
            </div>
          </div>
          
          <div class="form-fields">
            
          <div class="input-fields">
    <div class="all-input-fields">
        <form action="{{ url('feedback') }}" method="POST">
            @csrf
            <div class="input-field">
                <input class="input" name="name" placeholder="Name" type="text" required />
            </div>
            <div class="input-field1">
                <input class="input1" name="email" placeholder="Email" type="text" required />
            </div>
            <div class="input-field2">
                <input class="input2" name="phone" placeholder="Phone#" type="text" required />
            </div>
            <textarea
                class="input-field3"
                name="message"
                placeholder="Message"
                rows="8"
                cols="27"
                required
            ></textarea>
            <button class="button8" type="submit">
                <div class="base-button">
                    <b class="button-base">Submit</b>
                </div>
            </button>
        </form>
    </div>
</div>
<div id="map">
        @yield('content')
    </div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    
    <!-- Custom JS -->
    @yield('scripts')

      </section>
      <section class="stats-cards-wrapper">
        <div class="stats-cards">
          <div class="stats-cards-child"></div>
          <div class="frame-parent94">
            <div class="k-parent">
              <b class="k">200k</b>
              <div class="students">Students</div>
            </div>
            <div class="frame-child49"></div>
            <div class="container">
              <b class="b8">100+</b>
              <div class="courses">Courses</div>
            </div>
            <div class="frame-child50"></div>
            <div class="k-group">
              <b class="k1">150k</b>
              <div class="lessons">Lessons</div>
            </div>
            <div class="frame-child51"></div>
            <div class="parent1">
              <b class="b9">500</b>
              <div class="video-duration">Video Duration</div>
            </div>
          </div>
          <div class="frame-parent95">
            <div class="k-container">
              <b class="k2">200k</b>
              <div class="quizzes">Quizzes</div>
            </div>
            <div class="frame-child52"></div>
            <div class="parent2">
              <b class="b10">100+</b>
              <div class="questions">Questions</div>
            </div>
            <div class="frame-child53"></div>
            <div class="k-parent1">
              <b class="k3">150k</b>
              <div class="flashcards">Flashcards</div>
            </div>
            <div class="frame-child54"></div>
            <div class="parent3">
              <b class="b11">500</b>
              <div class="video-duration1">Video Duration</div>
            </div>
          </div>
          <div class="connect-title-wrapper">
            <h1 class="connect-with-us">Connect With Us</h1>
          </div>
          <div class="social-icons">
            <div class="social-platform-containers">
              <div class="social-platform-icons">
              <a id="whatsapp-link" href="https://wa.me/923445006089" target="_blank">
    <img
        class="graphic-elements-icon"
        loading="lazy"
        alt=""
        src="whatsapp_logo.png"
    />
</a>
              </div>
              <div class="line-chat-ilovejapanth-container">
                <p class="line-chat">LINE Chat</p>
                <p class="ilovejapanth">@ilovejapanth</p>
              </div>
            </div>
            <div class="social-platform-containers1">
              <div class="facebook-original-wrapper">
                <img
                  class="facebook-original"
                  loading="lazy"
                  alt=""
                  src="facebook--original.svg"
                />
              </div>
              <div class="chat-support-ilovejapanth-container">
                <p class="chat-support">Chat Support</p>
                <p class="ilovejapanth1">@ilovejapanth</p>
              </div>
            </div>
            <div class="social-platform-containers2">
              <div class="vector-frame">
                <img class="vector-icon13" alt="" src="vector4.svg" />
              </div>
              <div class="online-chat-ilovejapanth-container">
                <p class="online-chat">Online Chat</p>
                <p class="ilovejapanth2">ilovejapanth</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="contact-info">
        <div class="info-containers">
          <div class="rectangle-parent61">
            <div class="frame-child55"></div>
            <div class="icon-containers">
              <div class="info-rows">
                <div class="info-elements">
                  <div class="rectangle-parent62">
                    <div class="frame-child56"></div>
                    <img
                      class="contact-type-icons"
                      alt=""
                      src="vector5.svg"
                    />
                  </div>
                </div>
                <h3 class="email-us">Email Us</h3>
              </div>
            </div>
            <h3 class="adminexamplecom4">admin@example.com</h3>
          </div>
          <div class="rectangle-parent63">
            <div class="frame-child57"></div>
            <div class="frame-wrapper24">
              <div class="frame-parent96">
                <div class="frame-wrapper25">
                  <div class="rectangle-parent64">
                    <div class="frame-child58"></div>
                    <img
                      class="vector-icon14"
                      alt=""
                      src="vector6.svg"
                    />
                  </div>
                </div>
                <h3 class="contact-us10">Contact Us</h3>
              </div>
            </div>
            <div class="div2">367-8642 / 389-6592</div>
          </div>
          <div class="rectangle-parent65">
            <div class="frame-child59"></div>
            <div class="frame-wrapper26">
              <div class="frame-parent97">
                <div class="frame-wrapper27">
                  <div class="rectangle-parent66">
                    <div class="frame-child60"></div>
                    <img
                      class="vector-icon15"
                      alt=""
                      src="vector7.svg"
                    />
                  </div>
                </div>
                <h3 class="address">Address</h3>
              </div>
            </div>
            <h3 class="level-2-invaders4">
              Level 2, Invaders Bay, off Audrey Jeffers Highway, Port of Spain
            </h3>
          </div>
        </div>
      </section>
      <section class="need-help-frame">
        <div class="need-help4">
          <div class="help-title-wrapper">
            <h1 class="still-need-help4">Still Need Help?</h1>
          </div>
          <div class="lorem-ipsum-dolor17">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
            tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
          </div>
          <div class="help-button-container">
            <button class="main-button4">
              <div class="fluentcall-48-regular-parent1">
                <div class="fluentcall-48-regular4">
                  <img
                    class="vector-icon16"
                    alt=""
                    src="vector3.svg"
                  />
                </div>
                <div class="contact-us11">Contact Us</div>
              </div>
            </button>
          </div>
        </div>
      </section>
      <section class="footer-container">
        <div class="footer-content">
          <div class="footer6">
            <div class="footer-top">
              <div class="footer-logo">
                <img
                  class="water-mark-icon9"
                  alt=""
                  src="watermark.svg"
                />
              </div>
              <img
                class="purple-logo-cap-icon9"
                alt=""
                src="purplelogocap.svg"
              />

              <div class="youll-find-your4">
                You’ll find your distribution at one click.
              </div>
            </div>
            <div class="footer-location">
              <h2 class="location4">Location</h2>
              <div class="level-2-invaders5">
                Level 2, Invaders Bay, off Audrey Jeffers Highway, Port of Spain
              </div>
            </div>
            <div class="footer-contact">
              <h2 class="contact-us12">Contact Us</h2>
              <div class="footer-email-wrapper">
                <div class="footer-email1">367-8642 / 389-6592</div>
                <div class="adminexamplecom5">admin@example.com</div>
              </div>
            </div>
            <div class="footer-social1">
              <h2 class="follow-us4">Follow us</h2>
              <div class="footer-social-links">
                <img
                  class="social-links-icon12"
                  loading="lazy"
                  alt=""
                  src="social-links.svg"
                />

                <img
                  class="social-links-icon13"
                  alt=""
                  src="social-links1.svg"
                />

                <img
                  class="social-links-icon14"
                  alt=""
                  src="social-links2.svg"
                />
              </div>
            </div>
          </div>
          <div class="copyright-separator-parent">
            <div class="copyright-separator"></div>
            <div class="all-rights-reserved-frame">
              <div class="all-rights-reserved4">
                Trucker.com © 2024, All Rights Reserved
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  
  </body>
</html>
