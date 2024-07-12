<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('thumbnail.png') }}" type="image/x-icon">
    <title>Blog Details</title>

    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <link href="{{asset('css/blog-detail.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/about-page.css') }}">
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
      href="https://fonts.googleapis.com/css2?family=Work Sans:wght@400;500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Sen:wght@700&display=swap"
    />
  </head>
  <body>

  <div class="about-page">
  <div class="rectangle-parent">
          <div class="frame-child"></div>
          <div class="frame-group">
            <div class="vector-wrapper">
              <img class="vector-icon" alt="" src="http://127.0.0.1:8000/vector.svg">
            </div>
            <img class="mdiyoutube-icon" alt="" src="http://127.0.0.1:8000/mdiyoutube.svg">

            <img class="bxllinkedin-icon" alt="" src="http://127.0.0.1:8000/bxllinkedin.svg">
          </div>
          <div class="frame-wrapper">
            <div class="copyright-parent">
              <div class="copyright">
                <div class="vector-parent">
                  <img class="vector-icon1" alt="" src="http://127.0.0.1:8000/vector1.svg">

                  <div class="needhelpcompanycom">needhelp@company.com</div>
                </div>
              </div>
              <div class="vector-group">
                <img class="vector-icon2" alt="" src="http://127.0.0.1:8000/vector2.svg">

                <div class="elgin-st-celina-10299-wrapper">
                  <div class="elgin-st-celina">
                    6391 Elgin St. Celina, 10299
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <header class="about-page-inner">
        <div class="frame-parent82">
          <div class="frame-parent83">
            <div class="water-mark-frame">
              <img
                class="water-mark-icon6"
                loading="lazy"
                alt=""
                src="{{ asset('watermark1.svg') }}" 
              />
            </div>
            <img
              class="purple-logo-cap-icon6"
              loading="lazy"
              alt=""
              src="{{ asset('purplelogocap1.svg') }}" />
          </div>
          <nav class="navigation-bar-wrapper">
  <nav class="navigation-bar">
    <a class="home3"href="{{ asset('/') }}">HOME</a>
    <a class="about3" href="{{ asset('/about') }}">ABOUT</a>
    <a class="blogs2" href="{{ asset('/blog-listing') }}">BLOGS</a>
    <a class="contact3" href="{{ asset('/contact-us') }}">CONTACT</a>
  </nav>
</nav>

          <div class="frame-wrapper19">
            <button class="frame-button">
            <a class="request-a-quote9" href="{{ asset('/quotation') }}">REQUEST A QUOTE</a>
            </button>
          </div>
        </div>
      </header> 

    <div class="blog-detail">
      <div class="blog-detail-child"></div>
      <div class="whats-new-group">
        <div class="whats-new1">What’s New</div>
        <div class="our-blogs1">Our Blogs</div>
      </div>
      <div class="vector-parent10">
        <img class="vector-icon19" alt="" src="{{ asset('vector.svg')}}" />

        <img class="mdiyoutube-icon3" alt="" src="{{ asset('mdiyoutube.svg')}}" />

        <img class="bxllinkedin-icon3" alt="" src="{{ asset('bxllinkedin.svg')}}" />
      </div>
      <div class="frame-parent17">
        <div class="vector-parent11">
          <img class="vector-icon20" alt="" src="{{asset('vector1.svg')}}" />

          <div class="whats-new1">needhelp@company.com</div>
        </div>
        <div class="vector-parent11">
          <img class="vector-icon21" alt="" src="{{asset('vector2.svg')}}" />

          <div class="whats-new1"> 6391 Elgin St. Celina, 10299 </div>
        </div>
      </div>
      <div class="mdilocation4"></div>
      <div class="icbaseline-email4"></div>
      <div class="footer8">
        <img class="image-10-icon4" alt="" src="{{asset('image-10@2x.png')}}" />

        <div class="footer9">
          <div class="footer-link4">
            <div class="water-mark-parent6">
              <img
                class="water-mark-icon8"
                alt=""
                src="{{asset('watermark.svg')}}" />

              <img
                class="purple-logo-cap-icon8"
                alt=""
                src="{{asset('purplelogocap.svg')}}" />
              
            </div>
            <div class="youll-find-your-distribution-wrapper2">
              <div class="youll-find-your4">
                You’ll find your distribution at one click.
              </div>
            </div>
          </div>
          <div class="location-parent2">
            <b class="whats-new1">Location</b>
            <div class="level-2-invaders5">
              Level 2, Invaders Bay, off Audrey Jeffers Highway, Port of Spain
            </div>
          </div>
          <div class="location-parent2">
            <b class="whats-new1">Contact Us</b>
            <div class="parent6">
              <div class="div5">367-8642 / 389-6592</div>
              <div class="div5">admin@example.com</div>
            </div>
          </div>
          <div class="follow-us-parent2">
            <b class="whats-new1">Follow us</b>
            <div class="social-links-parent2">
              <img
                class="social-links-icon12"
                alt=""
                src="{{asset('social-links.svg')}}" />
             

              <img
                class="social-links-icon12"
                alt=""
                src="{{asset('social-links1.svg')}}" />
              

              <img
                class="social-links-icon12"
                alt=""
                src="{{asset('social-links2.svg')}}" />
              
            </div>
          </div>
        </div>
        <div class="footer-child2"></div>
        <div class="all-rights-reserved4">
          Trucker.com © 2024, All Rights Reserved
        </div>
      </div>
      <div class="need-help4">
        <div class="need-help-inner3">
          <div class="still-need-help-wrapper2">
            <b class="still-need-help4">Still Need Help?</b>
          </div>
        </div>
        <div class="lorem-ipsum-dolor9">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
          tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
        </div>
        <div class="main-button4">
          <div class="vector-parent11">
            <div class="fluentcall-48-regular4">
              <img class="vector-icon22" alt="" src="{{ asset('vector3.svg')}}" />
            </div>
            <div class="contact-us12">Contact Us</div>
          </div>
        </div>
      </div>

        <div class="request-a-quote-wrapper2">
          <div class="request-a-quote6">REQUEST A QUOTE</div>
        </div>
        <div class="water-mark-parent7">
          <img class="water-mark-icon9" alt="" src="{{asset('watermark1.svg')}}" />

          <img
            class="purple-logo-cap-icon9"
            alt=""
            src="{{asset('purplelogocap1.svg')}}" />
        </div>
      </div>
      <div class="blog-body-content">
        <b class="lorem-ipsum-dolor10"
          >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod.</b
        >
        <b class="lorem-ipsum-dolor11"
          >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod.</b
        >
        <b class="lorem-ipsum-dolor12"
          >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod.</b
        >
        <div class="lorem-ipsum-dolor13">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Non
          blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At
          risus viverra adipiscing at in tellus. Sociis natoque penatibus et
          magnis dis parturient montes. Ridiculus mus mauris vitae ultricies
          leo. Neque egestas congue quisque egestas diam. Risus in hendrerit
          gravida rutrum quisque non.
        </div>
        <div class="lorem-ipsum-dolor14">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Non
          blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At
          risus viverra adipiscing at in tellus. Sociis natoque penatibus et
          magnis dis parturient montes. Ridiculus mus mauris vitae ultricies
          leo. Neque egestas congue quisque egestas diam. Risus in hendrerit
          gravida rutrum quisque non.
        </div>
        <div class="lorem-ipsum-dolor15">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Non
          blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At
          risus viverra adipiscing at in tellus. Sociis natoque penatibus et
          magnis dis parturient montes. Ridiculus mus mauris vitae ultricies
          leo. Neque egestas congue quisque egestas diam. Risus in hendrerit
          gravida rutrum quisque non.
        </div>
        <div class="list">
          <b class="neque-egestas-congue">Lorem ipsum dolor sit amet</b>
          <div class="pointer"></div>
        </div>
        <div class="list1">
          <b class="non-blandit-massa"
            >Non blandit massa enim nec scelerisque</b
          >
          <div class="pointer1"></div>
        </div>
        <div class="list2">
          <b class="neque-egestas-congue"
            >Neque egestas congue quisque egestas</b
          >
          <div class="pointer2"></div>
        </div>
        <div class="lorem-ipsum-dolor17">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Non
          blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At
          risus viverra adipiscing at in tellus. Sociis natoque penatibus et
          magnis dis parturient montes. Ridiculus mus mauris vitae ultricies
          leo. Neque egestas congue quisque egestas diam. Risus in hendrerit
          gravida rutrum quisque non.
        </div>
        <div class="lorem-ipsum-dolor18">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Non
          blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At
          risus viverra adipiscing at in tellus. Sociis natoque penatibus et
          magnis dis parturient montes. Ridiculus mus mauris vitae ultricies
          leo. Neque egestas congue quisque egestas diam. Risus in hendrerit
          gravida rutrum quisque non.
        </div>
      </div>
      <div class="blog-info">
        <div class="heading5">
          <div class="title">
            The Impact of Technology on the Workplace: How Technology is
            Changing
          </div>
        </div>
        <div class="short-info">
          <div class="a-author">
            <img class="image-icon" alt="" src="{{asset('image@2x.png')}}" />

            <div class="author">Tracey Wilson</div>
          </div>
          <div class="date">August 20, 2022</div>
        </div>
      </div>
      <img class="image-icon1" alt="" src="{{asset('image@2x.png')}}" />
    </div>
  </body>
</html>
