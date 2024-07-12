<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Smart Consulting Services</title>
< <link rel="icon" href="{{ asset('thumbnail.png') }}" type="image/x-icon">


    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-page.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
      <div class="rectangle-parent58">
        <div class="frame-child43"></div>
        <div class="frame-wrapper18">
          <div class="vector-parent5">
            <img
              class="vector-icon10"
              loading="lazy"
              alt=""
              src="{{ asset('vector1.svg') }}" />

            <div class="needhelpcompanycom3">needhelp@company.com</div>
          </div>
        </div>
        <div class="vector-parent6">
          <img class="vector-icon11" alt="" src="{{ asset('vector2.svg') }}"
          />
          <div class="elgin-st-celina-10299-container">
            <div class="elgin-st-celina3">6391 Elgin St. Celina, 10299</div>
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
      <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">User Feedbacks</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($feedbacks as $feedback)
                            <tr>
                                <td>{{ $feedback->id }}</td>
                                <td>{{ $feedback->name }}</td>
                                <td>{{ $feedback->email }}</td>
                                <td>{{ $feedback->phone }}</td>
                                <td>{{ $feedback->message }}</td>
                                <td>{{ $feedback->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
  </body>
</html>
