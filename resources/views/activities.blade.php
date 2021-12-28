@extends('includes.app')

@section('content')

<div class="bg-gray-300"  style="background-image: url('{{ asset('assets/images/landing/slide/5.jpg') }}')  ;   background-repeat: no-repeat; background-position-y: center; background-size: cover; background-blend-mode: multiply;">
    <div class="container text-center py-4 py-md-5 mt-0" data-aos="fade-up" data-aos-delay="100">
        <h3 class="display-5 mb-0 text-white">Activities</h3>
        <p class="text-black-600 lh-md big text-white"></p>
    </div>
</div>
<div class="container">

    <section class="muse-section">
      <div class="row my-4 my-lg-5">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/activities/science.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">School Activities</h2>
            <p class="mb-1 lh-md  text-white">The school lays great emphasis on curricular activities. They form an integral part of the school curriculum. Following are some of the activities that are organised.</p>
            <p class="mb-1 lh-md  text-white">Activity 1: Sahityika</p>
            <p class="mb-1 lh-md  text-white">The Aim of the club is to develop creative writing on Hindi and English. Original writings are selected and read out by the authors themselves before an authience in the Sahityika assembly.</p>
            <p class="mb-1 lh-md  text-white">Activity 2: Science Club</p>
            <p class="mb-1 lh-md  text-white">Activity 3: Debate & Declamations.</p>
            <p class="mb-1 lh-md  text-white">Activity 4: School Band.</p>
            <p class="mb-1 lh-md  text-white">Activity 5: Tours Treks & Visits.</p>
            <p class="mb-1 lh-md  text-white">Activity 6: Festivals.</p>
            <p class="mb-1 lh-md  text-white">Activity 7: Recreation.</p>
            <p class="mb-1 lh-md  text-white">Activity 8: School Council.</p>
          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/activities/art.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Art Education</h2>
            <p class="mb-4 lh-md  text-white">As part of the Art Education, students will study Commercial Art Painting and a number of co-curricular activities.</p>
            
          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/activities/physical.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Physical & Helth Education</h2>
            <p class="mb-4 lh-md  text-white">The scheme of physical education is so planned as to ensure the fullest and manifold development of the indivisuality of the child enabling him to attain mental soundness emotional stability, physical maturity and moral values Games and sports are organized in such a way as to ensure participation by all students at the same time. Students take part in the following games Football, Hockey, Cricket, Basketwall and volleyball according to the season and indoor games like Badminton ete. These games are organized on House basis are invited and our students also go out to play.</p>
           
          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/activities/ptm.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Parent Teacher Meeting</h2>
            <p class="mb-4 lh-md  text-white">The School conducts regular and compulsory Parent Teacher Meetings to keep the parents informed about the progress of the child and also the problems he/she faces while learning. It also helps teachers to understand the child better and help her/him with her/his progress more effectively.</p>
            
          </div>
        </div>
      </div>
    </section>
    <hr>


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
Activities -
@endsection

