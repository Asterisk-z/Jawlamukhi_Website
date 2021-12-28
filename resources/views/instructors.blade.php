@extends('includes.app')

@section('content')

<div class="bg-gray-300"  style="background-image: url('{{ asset('assets/images/landing/slide/5.jpg') }}')  ;   background-repeat: no-repeat; background-position-y: center; background-size: cover; background-blend-mode: multiply;">
    <div class="container text-center py-4 py-md-5 mt-0" data-aos="fade-up" data-aos-delay="100">
        <h3 class="display-5 mb-0 text-white">Instructors</h3>
        <p class="text-black-600 lh-md big text-white">Those Who Deserve all the credit</p>
    </div>
</div>
<div class="container">

    @php
        $range = range(1,27)
    @endphp
    <section class="muse-section pt-4 pb-0 py-md-5 mt-md-4">
      <div class="row">
        @foreach ($range as $single)
            <div class="col-md-4 col-lg-3 my-md-4 my-2 mb-3" data-aos="fade-up" data-aos-delay="100">
            <figure class="card muse-card h-100 transition-3d-hover rounded-12 mb-0">
                <a href="javascript:void(0);" class="muse-animation">
                <img src="{{ asset('assets/images/instructors/'.$single.'.jpg') }}" class="img-fluid w-100 image" alt="Blog">
                </a>
                <figcaption class="p-4">
                <h5><a href="javascript:void(0);" class="stretched-link">Instructor</a></h5>
                <p class="mb-0 small lh-lg">Designation..</p>
                </figcaption>
            </figure>
            </div>
        @endforeach

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

