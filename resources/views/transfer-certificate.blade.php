@extends('includes.app')

@section('content')

<div class="bg-gray-300"  style="background-image: url('{{ asset('assets/images/landing/slide/5.jpg') }}')  ;   background-repeat: no-repeat; background-position-y: center; background-size: cover; background-blend-mode: multiply;">
    <div class="container text-center py-4 py-md-5 mt-0" data-aos="fade-up" data-aos-delay="100">
        <h3 class="display-5 mb-0 text-white">Transfer Certificate</h3>
        <p class="text-black-600 lh-md big text-white"></p>
    </div>
</div>
<div class="container">



    <section class="muse-section">
        <div class="bg-gray-700 rounded-12 py-5 px-4 text-center position-relative" data-aos="fade-up" data-aos-delay="100">
            <h3 class="h1 text-white mt-3">No Transfer Certificate yet</h3>
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

</style>
@endsection

@section('script')

@endsection

@section('title')
Transfer Certificate -
@endsection

