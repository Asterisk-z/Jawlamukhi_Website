@extends('includes.app')

@section('content')

<div class="bg-gray-300"  style="background-image: url('{{ asset('assets/images/landing/slide/5.jpg') }}')  ;   background-repeat: no-repeat; background-position-y: center; background-size: cover; background-blend-mode: multiply;">
    <div class="container text-center py-4 py-md-5 mt-0" data-aos="fade-up" data-aos-delay="100">
        <h3 class="display-5 mb-0 text-white">Facilities</h3>
        <p class="text-black-600 lh-md big text-white"></p>
    </div>
</div>
<div class="container">

    <section class="muse-section">
      <div class="row my-4 my-lg-5">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/facilities/books.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">School Library</h2>
            <table class="table table-inverse table-responsive table-bordered text-white">
                <thead class="thead-inverse">
                    <tr>
                        <th colspan='2'>Library Facilities</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Size of the Library in sq. feet</td>
                            <td>	900 sq feet</td>
                        </tr>
                        <tr>
                            <td scope="row">No. of periodicals</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td scope="row">No. of Dailies</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td scope="row">No. of reference books class-wise</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td scope="row">No. of magazine</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td scope="row">Others</td>
                            <td></td>
                        </tr>
                    </tbody>
            </table>
            <p class="mb-4 lh-md  text-white">The school Library is the most up-to-date. It has mor than 6000 volumes on varied subject. It is also well equipped with reference books appart from encyclopedias, year books manuals, directions atlases, educations video cassettes. There is provision of Library periods in the school time table and students are trained in making an sffevtive use of library. Students are required to submit a synopsis of the books read by them to the librarian.</p>
          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/facilities/medical.svg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Medical Care</h2>
            <p class="mb-4 lh-md  text-white">A well qualified doctors visits the school eveyday to look after the health and hygiene of the students Routine medical checkup of all students is carried out every year. Medical leave is only granted if the school authorities in consultation with RMO for that the requisite facilities are not available at Dada Siba. Parents of their own can not come and seek the medical leave of the child studying in the school.</p>

          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/facilities/computer-lab.svg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Computer Education</h2>
            <p class="mb-4 lh-md  text-white">In order to help students keep pace with the astonishing changer and progress in the new century and to enable them to lead life in the fast lane, computer literacy and competency are ineluctable and exigent. With a view to providing students with proper foundation for their computer expertise, compute education and Informatics Practices are part of the curriculum. The School two well-equipped computer labs to achieve this end.</p>

          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/facilities/pathway.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Guests</h2>
            <p class="mb-4 lh-md  text-white">The Principal and staff welcome opportunities to meet parents and guardians of students. Parents and guardians are welcome to have their meals in the school dining Hall. They are requested to inform their arrival in advance. Guests are expected to abide by school rules.</p>

          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/facilities/canteen.svg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Canteen</h2>
            <p class="mb-4 lh-md  text-white">For catering to the need of the students for refreshment between meals a canteen is opened in the school campus. The canteen will provide items like soft drinks, Ice Cream & Snacks to the students.</p>

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
Facilities -
@endsection

