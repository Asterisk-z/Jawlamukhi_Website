@extends('includes.app')

@section('content')

<div class="bg-gray-300"  style="background-image: url('{{ asset('assets/images/landing/slide/5.jpg') }}')  ;   background-repeat: no-repeat; background-position-y: center; background-size: cover; background-blend-mode: multiply;">
    <div class="container text-center py-4 py-md-5 mt-0" data-aos="fade-up" data-aos-delay="100">
        <h3 class="display-5 mb-0 text-white">Events and Blog</h3>
        <p class="text-black-600 lh-md big text-white"></p>
    </div>
</div>
<div class="container">

    <section class="muse-section pt-4 pb-0 py-md-5 mt-md-4">
      <div class="row">
        <div class="col-md-6 col-lg-4 my-md-4 my-2 mb-3" data-aos="fade-up" data-aos-delay="100">
          <figure class="card muse-card h-100 transition-3d-hover rounded-12 mb-0">
            <a href="javascript:void(0);" class="muse-animation">
                <img src="{{ asset('assets/images/landing/slide/2.jpg') }}" class="img-fluid w-100 image" alt="Blog" >
            </a>
            <figcaption class="p-4">
              <h5><a href="javascript:void(0);" class="stretched-link">Event</a></h5>
              <p class="mb-0 small lh-lg">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                roots in a piece of classical Latin literature from 4…</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-6 col-lg-4 my-md-4 my-2 mb-3" data-aos="fade-up" data-aos-delay="100">
          <figure class="card muse-card h-100 transition-3d-hover rounded-12 mb-0">
            <a href="javascript:void(0);" class="muse-animation">
              <img src="{{ asset('assets/images/landing/slide/3.jpg') }}" class="img-fluid w-100 image" alt="Blog">
            </a>
            {{-- <span class="badge badge-sm badge-primary rounded badge-absolute py-1 text-uppercase">New</span> --}}
            <figcaption class="p-4">
              <h5><a href="javascript:void(0);" class="stretched-link">Event</a></h5>
              <p class="mb-0 small lh-lg">There are many variations of passages of Lorem Ipsum available, but the
                majority have suffered alteration in some form…</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-6 col-lg-4 my-md-4 my-2 mb-3" data-aos="fade-up" data-aos-delay="100">
          <figure class="card muse-card h-100 transition-3d-hover rounded-12 mb-0">
            <a href="javascript:void(0);" class="muse-animation">
              <img src="{{ asset('assets/images/landing/slide/1.jpg') }}" class="img-fluid w-100 image" alt="Blog">
            </a>
            <figcaption class="p-4">
              <h5><a href="javascript:void(0);" class="stretched-link">Event</a></h5>
              <p class="mb-0 small lh-lg">It uses a dictionary of over 200 Latin words, combined with a handful of model
                sentence structures, to generate Lo…</p>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>
    
    <section class="muse-section">
        <div class="bg-gray-700 rounded-12 py-5 px-4 text-center position-relative" data-aos="fade-up" data-aos-delay="100">
            <h3 class="h1 text-white mt-3">No More Event</h3>
            <p class="big text-white lh-md"></p>
            
        </div>
    </section>
    <hr class="my-0 bg-gray-300">
</div>




@endsection

@section('style')
<style>

  body {
    background: #232323;
  }
  .image {
      max-height: 250px !important;
      min-height: 200px !important;
  }
</style>
@endsection

@section('script')

@endsection

@section('title')
Events -
@endsection

