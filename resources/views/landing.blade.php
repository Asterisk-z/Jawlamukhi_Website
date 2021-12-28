@extends('includes.app')

@section('content')
<section class="muse-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="display-4">Welcome to SICS JWALAMUKHI</h1>
        <p class="big mt-md-4 mt-3 pb-md-2 text-black-600 lh-lg">
            The Roots of Education are Bitter, But the Fruit is Sweet
        </p>
        <div class="my-4">
          <a href="{{ url('about-school') }}" class="btn btn-lg btn-link link-success">Learn More
        <svg class="ml-1" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 18">
            <path d="M.293.293a1,1,0,0,1,1.3-.1l.112.1,8,8a1,1,0,0,1,.1,1.3l-.1.112-8,8A1,1,0,0,1,.2,16.405l.1-.112L7.585,9,.293,1.707A1,1,0,0,1,.2.405Z" transform="translate(0 0)" fill="#20c997"></path>
          </svg></a>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="{{ asset('assets/images/svg/book_lover.svg') }}" class="img-fluid" alt="Banner">
      </div>
    </div>
    <hr class="bg-gray-300">
    <div class="row pt-4">
        <div class="col-md-12">
            <h4 class="mb-3">Brief of SICS JWALAMUKHI</h4>
        </div>
        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <p class="lh-md mb-4 pr-md-2">This school got recommendation from CBSE New Delhi. It was due to the magnificent, munificene and vision that this Nursery School gradually developed in to a full fledged public school in 2014. It is Sh. M.S. Rana & Mrs. Rajesh Rana Golden dream to establish a unique system in the foot steps of Shivalik Hills having a Pleasent atmosphere. The school that started in April 2014 with 200 students has now 800 students from classes I to XII. The school is divided into two sections Junior section and Senior Section. Boys who are 5 year old on 1st April of the year joining are admitted to class...</p>
            <a href="{{ url('about-school') }}" class="btn btn-md btn-secondary">Know More
                <svg class="ml-1" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 10 18">
            <path d="M.293.293a1,1,0,0,1,1.3-.1l.112.1,8,8a1,1,0,0,1,.1,1.3l-.1.112-8,8A1,1,0,0,1,.2,16.405l.1-.112L7.585,9,.293,1.707A1,1,0,0,1,.2.405Z" transform="translate(0 0)" fill="#fff"></path>
          </svg>
            </a>
            {{-- Students who are overage for their class shall not be admitted. The fees includes payment for all activities available to the students and cover payment for tution, boarding, lodging laundry hair cut and ordinary medical attention. This however does not include expenses of personal nature such as toilet articles, books and stationery, charges for special medical aid, Travelling expenses, clothing etc --}}
        </div>
        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
            <div class="rounded-6 shadow-dark-80">
                <img src="{{ asset('assets/images/landing/landing-2.jpg') }}" class="rounded-6 w-100" alt="Working" style="height: 338.25px; width: 451px;">
            </div>
        </div>
    </div>
  </div>
</section>

<div class="container">
    <section class="muse-section py-5 mt-0 mt-md-0">
        <h3 class="pt-5 mt-4 mb-sm-4 mb-3">News And Events</h3>
        <div class="row">
            <div class="col-lg-8">
                <figure class="card muse-card overlay-remove rounded-12 mb-4 mb-md-5 position-relative transition-3d-hover" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="muse-animation">
                        <img src="{{ asset('assets/images/landing/award.jpg') }}" class="rounded-12 w-100" alt="Blog">
                    </a>
                    <figcaption class="position-absolute bottom-0 py-3 py-md-4 px-3 px-md-5 bg-white-90 right-0 left-0">
                        <h4>
                            <a href="#" class="stretched-link">Presentation of Awards</a>
                        </h4>
                    </figcaption>
                </figure>
                <div class="row align-items-center mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-md-5">
                        <div class="rounded-12 shadow-dark-80 muse-animation">
                            <img src="{{ asset('assets/images/landing/hiv.jpg') }}" class="rounded-12 w-100" alt="Blog">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="pr-0 pr-lg-5 my-md-4 my-3">
                            <h5>
                                <a href="#" class="text-black-600">We stand Against STDs</a>
                            </h5>
                        <p class="small lh-lg text-gray-600">
                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain a…
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-4 mb-md-5" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-5">
                    <div class="rounded-12 shadow-dark-80 muse-animation">
                        <img src="{{ asset('assets/images/landing/blog1.jpg') }}" class="rounded-12 w-100" alt="Blog">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="pr-0 pr-lg-5 my-md-4 my-3">
                        <h5>
                            <a href="#" class="text-black-600">The Science Exhibition Begin</a>
                        </h5>
                            <p class="small lh-lg text-gray-600">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain a…</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-0 mt-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">

                <figure class="card muse-card h-100 transition-3d-hover rounded-12 m-0">
                    <a href="javascript:void(0);" class="muse-animation">
                        <img src="{{ asset('assets/images/landing/blog.jpg') }}" class="img-fluid w-100" alt="Blog">
                    </a>
                    <figcaption class="p-4">

                        <h5>
                            <a href="javascript:void(0);" class="stretched-link">Get Ready to be blown away</a>
                        </h5>
                    </figcaption>
                </figure>

            </div>
        </div>
    </section>
</div>

<div class="container about-template">
  <section class="muse-section">
    <div class="bg-gray-400 rounded-12 py-5 px-4 text-center position-relative"  style="background-image: url('{{ asset('assets/images/landing/banner.jpg') }}')  ;   background-repeat: no-repeat; background-position-y: center; background-size: cover; background-blend-mode: multiply;">
      <h3 class="h1 text-white text-uppercase mt-3">Enroll your children today</h3>
      <p class="big text-white text-uppercase lh-lg">And join the fast growing community</p>
      <a href="#" class="btn btn-lg btn-blue-50 mt-1 mb-4 text-uppercase">Enroll Now</a>
    </div>
  </section>
</div>

<div class="container">
  <section class="muse-section pb-0">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2 class="h1 pr-lg-5 lh-sm">Get to know our able instructors!</h2>
      </div>
      <div class="col-md-6">
        <a href="{{ url('instructors') }}" class="btn btn-primary btn-md float-right">See All Instructor</a>
      </div>
    </div>
    <div class="row pt-3 pt-md-5">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <figure class="text-center card team-card mb-0 mb-md-3 mb-lg-5">
          <div class="muse-animation rounded-12">
            <img src="{{ asset('assets/images/svg/educator.svg') }}" class="w-50 rounded-12" alt="img">
            <div class="team-overlay">
              <a href="#" class="btn btn-light btn-icon m-2"><svg data-name="icons/tabler/facebook" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
              <rect data-name="Icons/Tabler/Facebook background" width="16" height="16" fill="none"></rect>
              <path d="M6.359,16H3.077a.618.618,0,0,1-.61-.532l-.005-.084V10.256H.616a.618.618,0,0,1-.61-.532L0,9.641V6.359a.617.617,0,0,1,.532-.61l.084-.005H2.462V4.718A4.7,4.7,0,0,1,7,0l.181,0H9.641a.618.618,0,0,1,.61.532l.005.084V3.9a.617.617,0,0,1-.532.61l-.084.005H7.179a.2.2,0,0,0-.2.158l-.005.047V5.744H9.641a.615.615,0,0,1,.611.687l-.013.077L9.418,9.79a.614.614,0,0,1-.5.459l-.092.007H6.974v5.128a.618.618,0,0,1-.532.61ZM1.231,6.974V9.025H3.077a.617.617,0,0,1,.609.532l.006.084v5.128H5.744V9.641a.616.616,0,0,1,.532-.609l.084-.006h1.98l.513-2.051H6.359a.617.617,0,0,1-.61-.532l-.005-.083V4.718A1.443,1.443,0,0,1,7.061,3.287l.118,0H9.025V1.231H7.179A3.481,3.481,0,0,0,3.7,4.549l0,.169V6.359a.617.617,0,0,1-.532.609l-.084.005Z" transform="translate(3)" fill="#1e1e1e"></path>
            </svg></a>
              <a href="#" class="btn btn-light btn-icon m-2"><svg data-name="icons/tabler/dribbble" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                <rect data-name="Icons/Tabler/Dribbble background" width="16" height="16" fill="none"></rect>
                <path d="M0,8a8,8,0,1,1,12.071,6.885.613.613,0,0,1-.148.086A8,8,0,0,1,0,8Zm8,6.769a6.729,6.729,0,0,0,3.04-.722A18.964,18.964,0,0,0,10.085,9.7a11.826,11.826,0,0,0-4.847,3.087l-.385.379-.522.524A6.728,6.728,0,0,0,8,14.769Zm4.193-1.458a6.774,6.774,0,0,0,2.486-4.2,18.649,18.649,0,0,0-3.393.293A19.879,19.879,0,0,1,12.193,13.311ZM1.231,8a6.751,6.751,0,0,0,2.126,4.921l.814-.815A13.357,13.357,0,0,1,9.638,8.547a20.668,20.668,0,0,0-1.049-2.1,20.8,20.8,0,0,1-7.345,1.14Q1.231,7.792,1.231,8Zm9.611.234a19.647,19.647,0,0,1,3.926-.359A6.737,6.737,0,0,0,13.224,3.7a18.084,18.084,0,0,1-3.5,2.258A21.639,21.639,0,0,1,10.842,8.234ZM1.434,6.354A19.65,19.65,0,0,0,7.94,5.372,37.065,37.065,0,0,0,5.305,1.791,6.8,6.8,0,0,0,1.434,6.354ZM9.093,4.893a16.545,16.545,0,0,0,3.261-2.073A6.767,6.767,0,0,0,6.562,1.385,36.568,36.568,0,0,1,9.093,4.893Z" fill="#1e1e1e"></path>
              </svg></a>
            </div>
          </div>
          <figcaption class="p-3">
            <h5 class="mb-md-2 mb-1"><a href="#">Alan Bailey</a></h5>
            <p>Math instructor</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <figure class="text-center card team-card mb-0 mb-md-3 mb-lg-5">
          <div class="muse-animation rounded-12">
            <img src="{{ asset('assets/images/svg/educator.svg') }}" class="w-50 rounded-12" alt="img">
            <div class="team-overlay">
              <a href="#" class="btn btn-light btn-icon m-2"><svg data-name="icons/tabler/facebook" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                <rect data-name="Icons/Tabler/Facebook background" width="16" height="16" fill="none"></rect>
                <path d="M6.359,16H3.077a.618.618,0,0,1-.61-.532l-.005-.084V10.256H.616a.618.618,0,0,1-.61-.532L0,9.641V6.359a.617.617,0,0,1,.532-.61l.084-.005H2.462V4.718A4.7,4.7,0,0,1,7,0l.181,0H9.641a.618.618,0,0,1,.61.532l.005.084V3.9a.617.617,0,0,1-.532.61l-.084.005H7.179a.2.2,0,0,0-.2.158l-.005.047V5.744H9.641a.615.615,0,0,1,.611.687l-.013.077L9.418,9.79a.614.614,0,0,1-.5.459l-.092.007H6.974v5.128a.618.618,0,0,1-.532.61ZM1.231,6.974V9.025H3.077a.617.617,0,0,1,.609.532l.006.084v5.128H5.744V9.641a.616.616,0,0,1,.532-.609l.084-.006h1.98l.513-2.051H6.359a.617.617,0,0,1-.61-.532l-.005-.083V4.718A1.443,1.443,0,0,1,7.061,3.287l.118,0H9.025V1.231H7.179A3.481,3.481,0,0,0,3.7,4.549l0,.169V6.359a.617.617,0,0,1-.532.609l-.084.005Z" transform="translate(3)" fill="#1e1e1e"></path>
              </svg></a>
              <a href="#" class="btn btn-light btn-icon m-2"><svg data-name="icons/tabler/dribbble" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                <rect data-name="Icons/Tabler/Dribbble background" width="16" height="16" fill="none"></rect>
                <path d="M0,8a8,8,0,1,1,12.071,6.885.613.613,0,0,1-.148.086A8,8,0,0,1,0,8Zm8,6.769a6.729,6.729,0,0,0,3.04-.722A18.964,18.964,0,0,0,10.085,9.7a11.826,11.826,0,0,0-4.847,3.087l-.385.379-.522.524A6.728,6.728,0,0,0,8,14.769Zm4.193-1.458a6.774,6.774,0,0,0,2.486-4.2,18.649,18.649,0,0,0-3.393.293A19.879,19.879,0,0,1,12.193,13.311ZM1.231,8a6.751,6.751,0,0,0,2.126,4.921l.814-.815A13.357,13.357,0,0,1,9.638,8.547a20.668,20.668,0,0,0-1.049-2.1,20.8,20.8,0,0,1-7.345,1.14Q1.231,7.792,1.231,8Zm9.611.234a19.647,19.647,0,0,1,3.926-.359A6.737,6.737,0,0,0,13.224,3.7a18.084,18.084,0,0,1-3.5,2.258A21.639,21.639,0,0,1,10.842,8.234ZM1.434,6.354A19.65,19.65,0,0,0,7.94,5.372,37.065,37.065,0,0,0,5.305,1.791,6.8,6.8,0,0,0,1.434,6.354ZM9.093,4.893a16.545,16.545,0,0,0,3.261-2.073A6.767,6.767,0,0,0,6.562,1.385,36.568,36.568,0,0,1,9.093,4.893Z" fill="#1e1e1e"></path>
              </svg></a>
            </div>
          </div>
          <figcaption class="p-3">
            <h5 class="mb-md-2 mb-1"><a href="#">Beth Murphy</a></h5>
            <p>Physics Instructor</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <figure class="text-center card team-card mb-0 mb-md-3 mb-lg-5">
          <div class="muse-animation rounded-12">
            <img src="{{ asset('assets/images/svg/educator.svg') }}" class="w-50 rounded-12" alt="img">
            <div class="team-overlay">
              <a href="#" class="btn btn-light btn-icon m-2"><svg data-name="icons/tabler/facebook" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                <rect data-name="Icons/Tabler/Facebook background" width="16" height="16" fill="none"></rect>
                <path d="M6.359,16H3.077a.618.618,0,0,1-.61-.532l-.005-.084V10.256H.616a.618.618,0,0,1-.61-.532L0,9.641V6.359a.617.617,0,0,1,.532-.61l.084-.005H2.462V4.718A4.7,4.7,0,0,1,7,0l.181,0H9.641a.618.618,0,0,1,.61.532l.005.084V3.9a.617.617,0,0,1-.532.61l-.084.005H7.179a.2.2,0,0,0-.2.158l-.005.047V5.744H9.641a.615.615,0,0,1,.611.687l-.013.077L9.418,9.79a.614.614,0,0,1-.5.459l-.092.007H6.974v5.128a.618.618,0,0,1-.532.61ZM1.231,6.974V9.025H3.077a.617.617,0,0,1,.609.532l.006.084v5.128H5.744V9.641a.616.616,0,0,1,.532-.609l.084-.006h1.98l.513-2.051H6.359a.617.617,0,0,1-.61-.532l-.005-.083V4.718A1.443,1.443,0,0,1,7.061,3.287l.118,0H9.025V1.231H7.179A3.481,3.481,0,0,0,3.7,4.549l0,.169V6.359a.617.617,0,0,1-.532.609l-.084.005Z" transform="translate(3)" fill="#1e1e1e"></path>
              </svg></a>
              <a href="#" class="btn btn-light btn-icon m-2"><svg data-name="icons/tabler/dribbble" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                <rect data-name="Icons/Tabler/Dribbble background" width="16" height="16" fill="none"></rect>
                <path d="M0,8a8,8,0,1,1,12.071,6.885.613.613,0,0,1-.148.086A8,8,0,0,1,0,8Zm8,6.769a6.729,6.729,0,0,0,3.04-.722A18.964,18.964,0,0,0,10.085,9.7a11.826,11.826,0,0,0-4.847,3.087l-.385.379-.522.524A6.728,6.728,0,0,0,8,14.769Zm4.193-1.458a6.774,6.774,0,0,0,2.486-4.2,18.649,18.649,0,0,0-3.393.293A19.879,19.879,0,0,1,12.193,13.311ZM1.231,8a6.751,6.751,0,0,0,2.126,4.921l.814-.815A13.357,13.357,0,0,1,9.638,8.547a20.668,20.668,0,0,0-1.049-2.1,20.8,20.8,0,0,1-7.345,1.14Q1.231,7.792,1.231,8Zm9.611.234a19.647,19.647,0,0,1,3.926-.359A6.737,6.737,0,0,0,13.224,3.7a18.084,18.084,0,0,1-3.5,2.258A21.639,21.639,0,0,1,10.842,8.234ZM1.434,6.354A19.65,19.65,0,0,0,7.94,5.372,37.065,37.065,0,0,0,5.305,1.791,6.8,6.8,0,0,0,1.434,6.354ZM9.093,4.893a16.545,16.545,0,0,0,3.261-2.073A6.767,6.767,0,0,0,6.562,1.385,36.568,36.568,0,0,1,9.093,4.893Z" fill="#1e1e1e"></path>
              </svg></a>
            </div>
          </div>
          <figcaption class="p-3">
            <h5 class="mb-md-2 mb-1"><a href="#">Tyler Webb</a></h5>
            <p>Chemistry Instructor</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <figure class="text-center card team-card mb-0 mb-md-3 mb-lg-5">
          <div class="muse-animation rounded-12">
            <img src="{{ asset('assets/images/svg/educator.svg') }}" class="w-50 rounded-12" alt="img">
            <div class="team-overlay">
              <a href="#" class="btn btn-light btn-icon m-2"><svg data-name="icons/tabler/facebook" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                <rect data-name="Icons/Tabler/Facebook background" width="16" height="16" fill="none"></rect>
                <path d="M6.359,16H3.077a.618.618,0,0,1-.61-.532l-.005-.084V10.256H.616a.618.618,0,0,1-.61-.532L0,9.641V6.359a.617.617,0,0,1,.532-.61l.084-.005H2.462V4.718A4.7,4.7,0,0,1,7,0l.181,0H9.641a.618.618,0,0,1,.61.532l.005.084V3.9a.617.617,0,0,1-.532.61l-.084.005H7.179a.2.2,0,0,0-.2.158l-.005.047V5.744H9.641a.615.615,0,0,1,.611.687l-.013.077L9.418,9.79a.614.614,0,0,1-.5.459l-.092.007H6.974v5.128a.618.618,0,0,1-.532.61ZM1.231,6.974V9.025H3.077a.617.617,0,0,1,.609.532l.006.084v5.128H5.744V9.641a.616.616,0,0,1,.532-.609l.084-.006h1.98l.513-2.051H6.359a.617.617,0,0,1-.61-.532l-.005-.083V4.718A1.443,1.443,0,0,1,7.061,3.287l.118,0H9.025V1.231H7.179A3.481,3.481,0,0,0,3.7,4.549l0,.169V6.359a.617.617,0,0,1-.532.609l-.084.005Z" transform="translate(3)" fill="#1e1e1e"></path>
              </svg></a>
              <a href="#" class="btn btn-light btn-icon m-2"><svg data-name="icons/tabler/dribbble" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                <rect data-name="Icons/Tabler/Dribbble background" width="16" height="16" fill="none"></rect>
                <path d="M0,8a8,8,0,1,1,12.071,6.885.613.613,0,0,1-.148.086A8,8,0,0,1,0,8Zm8,6.769a6.729,6.729,0,0,0,3.04-.722A18.964,18.964,0,0,0,10.085,9.7a11.826,11.826,0,0,0-4.847,3.087l-.385.379-.522.524A6.728,6.728,0,0,0,8,14.769Zm4.193-1.458a6.774,6.774,0,0,0,2.486-4.2,18.649,18.649,0,0,0-3.393.293A19.879,19.879,0,0,1,12.193,13.311ZM1.231,8a6.751,6.751,0,0,0,2.126,4.921l.814-.815A13.357,13.357,0,0,1,9.638,8.547a20.668,20.668,0,0,0-1.049-2.1,20.8,20.8,0,0,1-7.345,1.14Q1.231,7.792,1.231,8Zm9.611.234a19.647,19.647,0,0,1,3.926-.359A6.737,6.737,0,0,0,13.224,3.7a18.084,18.084,0,0,1-3.5,2.258A21.639,21.639,0,0,1,10.842,8.234ZM1.434,6.354A19.65,19.65,0,0,0,7.94,5.372,37.065,37.065,0,0,0,5.305,1.791,6.8,6.8,0,0,0,1.434,6.354ZM9.093,4.893a16.545,16.545,0,0,0,3.261-2.073A6.767,6.767,0,0,0,6.562,1.385,36.568,36.568,0,0,1,9.093,4.893Z" fill="#1e1e1e"></path>
              </svg></a>
            </div>
          </div>
          <figcaption class="p-3">
            <h5 class="mb-md-2 mb-1"><a href="#">Christian Owens</a></h5>
            <p>Economies Instructor</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </section>
</div>

@endsection

@section('style')

@endsection

@section('script')

@endsection

@section('title')
Home -
@endsection

