@if(Request::is('/'))
    <header class="muse-header py-sm-2 bg-white  sticky-top">
@else
    <header class="muse-header py-sm-2 bg-gray-300   sticky-top">
@endif
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/logo.png') }}" alt="logo" style="max-width: 50px;">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{ asset('assets/images/menu.png') }}" class="menu-icon" alt="Menu" width='25'>
                <img src="{{ asset('assets/images/cancel.png') }}" class="menu-close" alt="Menu Close" width='25'>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}" >
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ url('/disclosure') }}" >
                            Mandatory Public Disclosure
                        </a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link" href="#" role="button" id="landing" data-toggle="dropdown" aria-expanded="false">About
                            <svg class="ml-1" data-name="icons/tabler/chevron down" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 16 16">
                                <rect data-name="Icons/Tabler/Chevron Down background" width="16" height="16" fill="none" />
                                <path d="M.264.26A.909.909,0,0,1,1.435.174l.1.086,7.2,7.111a.881.881,0,0,1,.087,1.157l-.087.1-7.2,7.111a.908.908,0,0,1-1.273,0,.881.881,0,0,1-.087-1.157l.087-.1L6.827,8,.264,1.517A.881.881,0,0,1,.176.36Z" transform="translate(16 4) rotate(90)" fill="#1e1e1e" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu shadow-lg  bg-gray-200" aria-labelledby="single">

                            <li><a class="dropdown-item" href="{{ url('about-school') }}">The School</a></li>
                            <li><a class="dropdown-item" href="{{ url('executive-welcome') }}">Executive Welcome</a></li>
                            <li><a class="dropdown-item" href="{{ url('school-history') }}">School History</a></li>
                            <li><a class="dropdown-item" href="{{ url('school-decorum') }}">School Decorum</a></li>
                            <li><a class="dropdown-item" href="{{ url('rules-and-regulations') }}">Rules And Regulation</a></li>
                            <li><a class="dropdown-item" href="{{ url('inportant-infomation') }}">Extra Information</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link" href="#" role="button" id="single" data-toggle="dropdown" aria-expanded="false">
                            Portal
                            <svg class="ml-1" data-name="icons/tabler/chevron down" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 16 16">
                                <rect data-name="Icons/Tabler/Chevron Down background" width="16" height="16" fill="none" />
                                <path d="M.264.26A.909.909,0,0,1,1.435.174l.1.086,7.2,7.111a.881.881,0,0,1,.087,1.157l-.087.1-7.2,7.111a.908.908,0,0,1-1.273,0,.881.881,0,0,1-.087-1.157l.087-.1L6.827,8,.264,1.517A.881.881,0,0,1,.176.36Z" transform="translate(16 4) rotate(90)" fill="#1e1e1e" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu shadow-lg  bg-gray-200" aria-labelledby="single">
                            <li><a class="dropdown-item" href="{{ url('academics') }}">Academics</a></li>
                            <li><a class="dropdown-item" href="{{ url('admission') }}">Admission</a></li>
                            <li><a class="dropdown-item" href="{{ url('facilities') }}">Facilities</a></li>
                            <li><a class="dropdown-item" href="{{ url('activities') }}">Activities</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="dashboard" data-toggle="dropdown" aria-expanded="false">
                            Extra
                            <svg class="ml-1" data-name="icons/tabler/chevron down" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 16 16">
                                <rect data-name="Icons/Tabler/Chevron Down background" width="16" height="16" fill="none" />
                                <path d="M.264.26A.909.909,0,0,1,1.435.174l.1.086,7.2,7.111a.881.881,0,0,1,.087,1.157l-.087.1-7.2,7.111a.908.908,0,0,1-1.273,0,.881.881,0,0,1-.087-1.157l.087-.1L6.827,8,.264,1.517A.881.881,0,0,1,.176.36Z" transform="translate(16 4) rotate(90)" fill="#1e1e1e" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu shadow-lg  bg-gray-200" aria-labelledby="dashboard">
                            <li><a class="dropdown-item" href="{{ url('events-and-blog') }}">Events and Blog</a></li>
                            <li><a class="dropdown-item" href="{{ url('gallery') }}">Gallery</a></li>
                            <li><a class="dropdown-item" href="{{ url('transfer-certificate') }}">Transfer Certificate</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link"  href="{{ url('/contact-us') }}">
                            Contact
                        </a>
                    </li>
                </ul>
                <a href="javascript:void(0);" class="btn btn-md btn-secondary my-3 my-lg-0">Login</a>
            </div>
        </nav>
    </div>
</header>
