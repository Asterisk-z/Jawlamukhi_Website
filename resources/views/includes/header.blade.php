@if(Request::is('/'))
    <header class="muse-header py-sm-2 bg-white ">
@else
    <header class="muse-header py-sm-2 bg-gray-300 ">
@endif

  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('assets/logo.png') }}" alt="logo" style="max-width: 50px;">
      </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav7" aria-controls="navbarNav7" aria-expanded="false" aria-label="Toggle navigation">
        <img src="{{ asset('assets/images/svg/menu.svg') }}" class="menu-icon" alt="Menu">
        <img src="{{ asset('assets/images/svg/close.svg') }}" class="menu-close" alt="Menu Close">
    </button>

      <div class="collapse navbar-collapse" id="navbarNav7">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown horizontal-menu">
            <a class="nav-link active" href="{{ url('/') }}" role="button" id="landing26" data-toggle="dropdown" aria-expanded="false">
                Home
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" style="color: blue;" href="{{ url('public-disclosure') }}" role="button" id="landing27">
                Public Disclosure
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" id="dashboard30" data-toggle="dropdown" aria-expanded="false">About
                <svg class="ml-1" data-name="icons/tabler/chevron " xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 16 16">
                    <rect data-name="Icons/Tabler/Chevron  background" width="16" height="16" fill="none"></rect>
                    <path d="M.264.26A.909.909,0,0,1,1.435.174l.1.086,7.2,7.111a.881.881,0,0,1,.087,1.157l-.087.1-7.2,7.111a.908.908,0,0,1-1.273,0,.881.881,0,0,1-.087-1.157l.087-.1L6.827,8,.264,1.517A.881.881,0,0,1,.176.36Z" transform="translate(16 4) rotate(90)" fill="#1e1e1e"></path>
                </svg>
            </a>
            <ul class="dropdown-menu shadow-lg bg-gray-200" aria-labelledby="dashboard30">
              <li><a class="dropdown-item" href="{{ url('about-school') }}">The School</a></li>
              <li><a class="dropdown-item" href="{{ url('executive-welcome') }}">Executive Welcome</a></li>
              <li><a class="dropdown-item" href="{{ url('school-history') }}">School History</a></li>
              <li><a class="dropdown-item" href="{{ url('school-decorum') }}">School Decorum</a></li>
              <li><a class="dropdown-item" href="{{ url('rules-and-regulatioons') }}">Rules And Regulation</a></li>
              <li><a class="dropdown-item" href="{{ url('inportant-infomatin') }}">Extra Information</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" id="dashboard301" data-toggle="dropdown" aria-expanded="false">Portal <svg class="ml-1" data-name="icons/tabler/chevron down" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 16 16">
              <rect data-name="Icons/Tabler/Chevron Down background" width="16" height="16" fill="none"></rect>
              <path d="M.264.26A.909.909,0,0,1,1.435.174l.1.086,7.2,7.111a.881.881,0,0,1,.087,1.157l-.087.1-7.2,7.111a.908.908,0,0,1-1.273,0,.881.881,0,0,1-.087-1.157l.087-.1L6.827,8,.264,1.517A.881.881,0,0,1,.176.36Z" transform="translate(16 4) rotate(90)" fill="#1e1e1e"></path>
            </svg></a>
            <ul class="dropdown-menu shadow-lg bg-gray-200" aria-labelledby="dashboard301">
              <li><a class="dropdown-item" href="#">Academics</a></li>
              <li><a class="dropdown-item" href="#">Admission</a></li>
              <li><a class="dropdown-item" href="#">Facilities</a></li>
              <li><a class="dropdown-item" href="#">Activities</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" id="docs31" data-toggle="dropdown" aria-expanded="false">Extra
                <svg class="ml-1" data-name="icons/tabler/chevron down" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 16 16">
                <rect data-name="Icons/Tabler/Chevron Down background" width="16" height="16" fill="none"></rect>
                <path d="M.264.26A.909.909,0,0,1,1.435.174l.1.086,7.2,7.111a.881.881,0,0,1,.087,1.157l-.087.1-7.2,7.111a.908.908,0,0,1-1.273,0,.881.881,0,0,1-.087-1.157l.087-.1L6.827,8,.264,1.517A.881.881,0,0,1,.176.36Z" transform="translate(16 4) rotate(90)" fill="#1e1e1e"></path>
                </svg>
            </a>
            <ul class="dropdown-menu shadow-lg bg-gray-200" aria-labelledby="docs31">
              <li><a class="dropdown-item" href="#l">Events</a></li>
              <li><a class="dropdown-item" href="#l">Gallery</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{ url('/contact-us') }}" role="button" id=""  aria-expanded="false">
                Contact
            </a>
          </li>
        </ul>
        <a href="javascript:void(0);" class="btn btn-lg btn-secondary my-3 my-lg-0">Login</a>
      </div>
    </nav>
  </div>
</header>
