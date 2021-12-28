@extends('includes.app')

@section('content')

<div class="bg-gray-300"  style="background-image: url('{{ asset('assets/images/landing/slide/5.jpg') }}')  ;   background-repeat: no-repeat; background-position-y: center; background-size: cover; background-blend-mode: multiply;">
    <div class="container text-center py-4 py-md-5 mt-0" data-aos="fade-up" data-aos-delay="100">
        <h3 class="display-5 mb-0 text-white">Academics</h3>
        <p class="text-black-600 lh-md big text-white"></p>
    </div>
</div>
<div class="container">



    <section class="muse-section">
      <div class="row my-4 my-lg-5">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/academies/landscape.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Affiliation</h2>
            <p class="mb-4 lh-md text-white">The school is affiliated to the Central Board of Secondary Education New Delhi.</p>
            <table class="table  table-inverse table-responsive table-bordered text-white text-uppercase">
                <thead class="thead-inverse">
                    <tr>
                        <th colspan='2' >Status of Affiliation</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Permanent/Regular/Provisional</td>
                            <td>Provisional</td>
                        </tr>
                        <tr>
                            <td scope="row">Affilation No</td>
                            <td>CBSE/AFF/630203/EX-00421-1819/2017/1294534</td>
                        </tr>
                        <tr>
                            <td scope="row">Affilation With</td>
                            <td>The Board Since 2015</td>
                        </tr>
                        <tr>
                            <td scope="row">Extension Of Affiliation Upto</td>
                            <td>01-04-2018 TO 31-03-2023</td>
                        </tr>
                    </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/academies/examination.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Examination</h2>
            <p class="mb-4 lh-md text-white">The school has a system of continuous evaluation. There are class tests, Unit Tests and Terminal Tests and promotion to next class depends on the cumulative academic achievements of the students at the end of the year. Progress reports of the students are sent to the parents twice during the year. <br>
            1st term examinations held in the month of September and Final term in month of March.</p>

          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/academies/withdraw.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Withdrawals</h2>
            <p class="mb-4 lh-md text-white">A student can be withdrawn from the school at the end of an academic year. For this purpose the guardian should give a notice in writing to the Principal before 31’ March. If a student is withdrawn during the session, the fee paid is not refunded to the guardian. Students are accepted for admission on the understanding that they will remain in the school for the entire year.</p>

          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/academies/remedia.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Remedials Classes</h2>
            <p class="mb-4 lh-md text-white">Though academically proficient students recieve encouragement to achieve the highest, the school recognizes the importance of paying special attention to students who are academically not very bright Extra study periods are provided for such students whenever considered necessary.</p>

          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/academies/awards.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0 text-white">Awards</h2>
            <p class="mb-4 lh-md text-white">Shivalik International Convent School is an integral part one of the finest centre of learning in Himachal Pradesh. It is one of the best Schools in Himachal Pradesh. S.I.C.S. is the Winners of Excellent Educationist Award, Bharat Vidya Shiromani Award & Rajiv Gandhi Vidya Gold Medal Award and also the Winners of Indira Gandhi Shiksha Shiromani Award 2012-13.These awards are being presented by the International Institute of Education & Management (I.I.E.M.) and Indian Solidarity Council (I.S.C.) at New Delhi. Shivalik International Convent School is awarded with the Certificate of Education Excellence for the outstanding achievements of the school and remarkable role in the field of Education.S.I.C.S. offers its students all the advantages of a modern educational system without the distractions of modern city life Situated at a distance of 3 kms from MATA Jwalamukhi, it is where rural India meets the modern west, giving the student the benefit of what is best in the two.</p>

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
Academics -
@endsection

