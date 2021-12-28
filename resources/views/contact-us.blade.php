@extends('includes.app')

@section('content')

<div class="bg-gray-300">
    <div class="container text-center py-4 py-md-5 mt-0" data-aos="fade-up" data-aos-delay="100">
        <h1 class="display-3 mb-0">Contact us</h1>
        <p class="text-black-600 lh-lg big"></p>
    </div>
</div>
<div class="container">

    <section class="muse-section py-4 py-md-5 mt-md-2" data-aos="fade-up" data-aos-delay="100">

        <div class="tab-content">
            <div class="tab-pane fade fade show active" id="pills-three-code-features-example1" role="tabpanel" aria-labelledby="pills-three-code-features-example1-tab">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="rounded-12 overflow-hidden mb-4 mb-md-0">
                            <img src="{{ asset('assets/img/pages/school-google.jpg') }}" class="w-100" alt="Map">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="pt-xl-5 pt-lg-0 pt-md-5 pb-lg-5 px-lg-5">
                            <div class="mb-4">
                                <h6>Location</h6>
                                <p class="lh-lg">Bhatti-Khoula, Jawalamukhi, Kangra, India</p>
                            </div>
                            <div class="mb-4 pt-md-3">
                                <h6>Email</h6>
                                <p class="lh-lg"><a href="#" class="text-secondary"><span class="__cf_email__" data-cfemail="9ae9efeaeaf5e8eedafff7fbf3f6b4f9f5f7">info@jmukhisics.in</span></a></p>
                            </div>
                            <div class="mb-4 pt-md-3">
                                <h6 class="mb-3">Phone</h6>
                                <p class="mb-2"><a href="tel:+918988255242" class="text-secondary">+918988255242
                                </a></p>
                                <p class="mb-0"><a href="tel:+918219626192" class="text-secondary">+918219626192</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <hr class="bg-gray-200 mt-2 mt-md-4">
    <section class="muse-section py-4 py-md-5">
        <div class="row align-items-center">
            <div class="col-md-12 mb-md-4" data-aos="fade-up" data-aos-delay="100">
                <h4 class="mb-1 h1">Send a message</h4>
                <p class="big lh-lg">Get in touch with our highy skilled instructor</p>
            </div>
            <div class="col-md-12">
                <div class="card border-gray-200 rounded-12 shadow-dark-80 p-4 p-md-5" data-aos="fade-up" data-aos-delay="100">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4 mb-md-5">
                                    <label class="form-label form-label-lg">Full Name</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="Full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4 mb-md-5">
                                    <label class="form-label form-label-lg">Email</label>
                                    <input type="text" class="form-control form-control-xl" placeholder="name@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4 mb-md-5">
                                    <label class="form-label form-label-lg">Title</label>
                                    <select class="form-select form-select-xl">
                                        <option>Choose</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4 mb-md-5">
                                    <label class="form-label form-label-lg">Message</label>
                                    <textarea class="form-control form-control-xl" placeholder="Start typing" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="form-check mb-4 mt-md-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label pl-1" for="flexCheckIndeterminate">
                                        Subscribe to our newsletter
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-5 text-md-right">
                                <button type="button" class="btn btn-xl btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
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
Contact Us -
@endsection

