@extends('includes.app')

@section('content')

<div class="bg-gray-300"  style="background-image: url('{{ asset('assets/images/landing/slide/5.jpg') }}')  ;   background-repeat: no-repeat; background-position-y: center; background-size: cover; background-blend-mode: multiply;">
    <div class="container text-center py-4 py-md-5 mt-0" data-aos="fade-up" data-aos-delay="100">
        <h3 class="display-5 mb-0 text-white">Admision</h3>
        <p class="text-black-600 lh-md big text-white"></p>
    </div>
</div>
<div class="container">



    <section class="muse-section text-white">
      <div class="row my-4 my-md-3">
        <div class="col-lg-12">
          <div class="py-3 py-xl-0 px-lg-1  text-white">
            <h2 class="mb-3 mt-3 mt-lg-0  text-white">Admission to Primary Classes</h2>
            <p class="mb-2 lh-md">When a student attains the age of 6 years he/she is eligible for admission class First. The procedure for admission in the school is:</p>
            <ul class="blog-feature-list" data-aos="fade-up" data-aos-delay="100">
            <li>
              <span class="bg-primary circle circle-sm mt-0">1</span>
              <div class="feature-right">
                <p class="lh-1 small med text-white">In a large pot, bring 6 cups of water to a boil.</p>
              </div>
            </li>
            <li>
              <span class="bg-primary circle circle-sm mt-1">2</span>
              <div class="feature-right">
                <p class="lh-1 small med text-white">Into the pan, add remaining 2 tablespoons butter and garlic. Cook until the garlic
                  becomes fragrant, about 1 minute. Whisk in flour and cook until no longer raw.</p>
              </div>
            </li>
            <li>
              <span class="bg-primary circle circle-sm mt-1">3</span>
              <div class="feature-right">
                <p class="lh-1 small med text-white">In a large skillet over medium heat, heat 1 tablespoon butter until melted. Add shrimp,
                  season with salt and pepper and cook until pink and completely opaque.</p>
              </div>
            </li>
            <li>
              <span class="bg-primary circle circle-sm mt-1">4</span>
              <div class="feature-right">
                <p class="lh-1 small med text-white">Drain off the pasta to a colander when done and rinse in cold water.</p>
              </div>
            </li>
            <li>
              <span class="bg-primary circle circle-sm mt-1">5</span>
              <div class="feature-right">
                <p class="lh-1 small med text-white">Cook fettuccine according to the instructions on box, reserving a cup of pasta water to
                  thicken the sauce, if needed.</p>
              </div>
            </li>
            <li>
              <span class="bg-primary circle circle-sm mt-1">6</span>
              <div class="feature-right">
                <p class="lh-1 small med text-white">While the pasta cooks, rinse and chop the veggies.</p>
              </div>
            </li>
            <li>
              <span class="bg-primary circle circle-sm mt-1">7</span>
              <div class="feature-right">
                <p class="lh-1 small med text-white">Cook till al dente on a medium to high flame.</p>
              </div>
            </li>
          </ul>
          </div>
        </div>
      </div>

      <div class="row py-4 py-lg-5">
        <div class="col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/admission/class-x.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-xl-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0  text-white">Admission in Class XI</h2>
            <p class="mb-2 lh-md">A few students may be admitted to class XI of the +2 stage of the Senior School Certificate Examination. Students desirous of getting admission to class XI should get their names registered and then send an attested copy of the marks-list of class X pre-Board/Council Exam within a week of the declaration of the result. No test will be held for them but students will be admitted on merit, on the basis of the marks obtained by them in class X pre-Board /Council Exam are subject to the vacancies available.</p>

            <p class="mb-2 lh-md">It is to be noted that admission to class XI of students who pass their 10th class examination from S.I.C.S. will not be automatically admitted. It will strictly be on the basis of merit, their conduct and behavior in the school so far and the number of vacancies available in different streams. Student wants to continue in class XI must send their fees by 01 ‘April . In case the fees is not recieved by this date, the boys/girl will not be considered for admission and their names will be struck off from the rolls. In case, for some reason, it is not possible to offer admission, the fees will be refunded if paid.</p>

          </div>
        </div>
      </div>


      <div class="row py-4 py-lg-5">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/admission/external-exam.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-xl-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0  text-white">Test For Students Residing Outside India</h2>
            <p class="mb-2 lh-md">students residing outside India, admission test paper can be sent to the Indian Embassy/High Commission in case the Embassy/High Commission agrees to cinduct the test for the candidate and send back the answer scripts. The parents/guardians of such candidates will have to conduct the Embassy/High Commission on their own. The question paper for all such candidates will be sent in the month of Jan-Feb.</p>

          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/admission/exam-fee.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-3 mt-3 mt-lg-0  text-white">Fees</h2>
            <p class="mb-2 lh-md">Schedule of fees is enclosed with the Registration Form as Annexure-one.</p>

            <p class="mb-2 lh-md">A sum of Rs. 1000/- is charged as admission fee at the time of admission only for primary classes.</p>

            <p class="mb-2 lh-md">Personal Account deposit are accountable and a statement of account is sent to all parents quarterly if it is required by the parents.</p>

          </div>
        </div>
      </div>
      <div class="row py-4 py-lg-5">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="muse-animation">
            <img src="{{ asset('assets/images/admission/computer-lab.jpg') }}" alt="img" class="rounded-12 w-100">
          </a>
        </div>
        <div class="col-lg-6">
          <div class="py-1 py-lg-0 px-lg-0">
            <h2 class="mb-1 mt-0 mt-lg-0  text-white">Payments of School Fees</h2>
            <p class="mb-2 lh-md">The fees is realised in four instalments. The first instalment should be paid by 1st of April in respect of all student who want to continue in the school in the next higher classes, and the second instalment by July 3rd instalment 1st October & 4th Instalment 1st january each year. The fees may be accepted from Day scholars with a fine of Rs. 5/- per day till 15 days after the due date. Thereafter, the name of the student will be struck off from the rolls of the school.</p>

            <p class="mb-2 lh-md">In case fees is not paid within one month of due date, the student may be returned to his parents at the latters expense. Separate letters are not sent to parents or guardians to send fees in respect of their wards. Fees once deposited will not be refunded. A fine of Rs. 5/per day is added to every bill(statement of personal deposit) not paid within a fortnight of the posting in case the amount deposited in the personal deposit does not cover it.</p>

           <p class="mb-2 lh-md"> Fees payable at the time of admission will be paid in full. A student may not be allowed expense from his personal account if the same is in debit balance. The examination fees is charged from the student taking the Board examination. It is realized with the Third instalment of the fees. In case of damage to the school property and the loss of library books the recovery will be made from the parent of student concerned.</p>

          <p class="mb-2 lh-md">The following banks are carrying on business in:-</p>

          <p class="mb-2 lh-md">Punjab National Bank, Jawalmukhi</p>

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
.circle-sm {
    width: 24px;
    height: 24px;
    font-size: 11px;
}
.med {;
    font-size: 14px;
}
</style>
@endsection

@section('script')

@endsection

@section('title')
Admision -
@endsection

