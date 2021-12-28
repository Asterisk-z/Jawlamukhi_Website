@extends('includes.app')

@section('content')


<div class="bg-gray-300" style="background-image: url('{{ asset('assets/images/landing/slide/3.jpg') }}')  ;   background-repeat: no-repeat; background-position-y: center; background-size: cover; background-blend-mode: multiply;">
    <div class="container text-center py-4 py-md-5 mt-0" data-aos="fade-up" data-aos-delay="100">
        <h1 class="display-3 mb-0 text-white">Public Disclosure</h1>
        <p class="text-black-600 lh-lg big text-white">These are Information for public consumption</p>
    </div>
</div>

<div class="container">
    <section class="muse-section py-4 py-md-5">
        <div class="row align-items-center">
            <div class="col-md-12">

                <div class="card border-gray-200 rounded-12 shadow-dark-80 p-4 p-md-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-title">
                        <h5 class="mb-1 h1 text-uppercase">General Information</h5>
                    </div>
                    <table class="table table-striped table-inverse table-responsive table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Sl.No.</th>
                                <th>Information</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>NAME OF SCHOOL</td>
                                    <td>SHIVALIK INTERNATIONAL CONVENT SCHOOL BHATTI-KHOULA</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>AFFILIATION NUMBER</td>
                                    <td>CBSE/Aff/SL-01307-1516/630203</td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>School Code (If Applicable)</td>
                                    <td>43193</td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>Complete Address With Pin Code	</td>
                                    <td>VILL BHATTI-KHOULA, P.O & TEH JAWALAMUKHI, DISTT KANGRA HIMACHAL PRADESH PIN 176031</td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>Principal Name & Qualification</td>
                                    <td>Munish Rana (M.A, B.Ed)</td>
                                </tr>
                                <tr>
                                    <td scope="row">6</td>
                                    <td>School Email Id.</td>
                                    <td>admin@jmukhisics.in, jawala.sics@gmail.com</td>
                                </tr>
                                <tr>
                                    <td scope="row">7</td>
                                    <td>Contact Details</td>
                                    <td>8988255242, 01970292173</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
                <div class="card border-gray-200 rounded-12 shadow-dark-80 p-4 p-md-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-title">
                        <h5 class="mb-1 h1 text-uppercase">Documents and Information</h5>
                    </div>
                    <table class="table table-striped table-inverse table-responsive table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Sl.No.</th>
                                <th>Documents and Information</th>
                                <th Documents</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION IF ANY</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/038.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE AS PER APPLICABLE</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/society.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED IF APPLICABLE BY THE STATE GOVT./UT</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/state_noc.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT. 2009 AND ITS RENEWAL IF APPLICABLE</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/rte.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/BUILDING.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">6</td>
                                    <td>COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY COMPETENT AUTHORITY</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/NOC.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">7</td>
                                    <td>COPY OF DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATION OR SELF CERTIFICATION BY SCHOOL</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/DEO.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">8</td>
                                    <td>COPIES OF VALID WATER HEALTH AND SANITATION CERTIFICATES</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/health.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                </div>
                <div class="card border-gray-200 rounded-12 shadow-dark-80 p-4 p-md-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-title">
                        <h5 class="mb-1 h1 text-uppercase">Result & Academics</h5>
                    </div>
                    <table class="table table-striped table-inverse table-responsive table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Sl.No.</th>
                                <th>Documents/Information</th>
                                <th>Download Documents</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>FEE STRUCTURE OF THE SCHOOL</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/fee.jpg') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>ANNUAL ACADEMIC CALENDER</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/091091.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/MEMBER.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/MEMBER.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>LAST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABLE</td>
                                    <td>
                                        <a href="{{ asset('assets/mandatory/img098.pdf') }}" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                </div>
                <div class="card border-gray-200 rounded-12 shadow-dark-80 p-4 p-md-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-title">
                        <h5 class="mb-1 h1 text-uppercase">Result Class X</h5>
                    </div>
                    <table class="table table-striped table-inverse table-responsive table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Sl.No.</th>
                                <th>Year</th>
                                <th>No. Of Registered Students</th>
                                <th>No. Of Students Passed</th>
                                <th>Pass Percentage</th>
                                <th>Remarks</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>2018-19</td>
                                    <td>
                                        22
                                    </td>
                                    <td>
                                        22
                                    </td>
                                    <td>
                                        100%
                                    </td>
                                    <td>
                                        NA
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>2019-20</td>
                                    <td>
                                        29
                                    </td>
                                    <td>
                                        29
                                    </td>
                                    <td>
                                        100%
                                    </td>
                                    <td>
                                        NA
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>2020-21</td>
                                    <td>
                                        39
                                    </td>
                                    <td>
                                        39
                                    </td>
                                    <td>
                                        100%
                                    </td>
                                    <td>
                                        NA
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                </div>
                <div class="card border-gray-200 rounded-12 shadow-dark-80 p-4 p-md-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-title">
                        <h5 class="mb-1 h1 text-uppercase">Staff(Teaching)</h5>
                    </div>
                    <table class="table table-striped table-inverse table-responsive table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Sl.No.</th>
                                <th>Information</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Principal</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>Total Number Of Teachers</td>
                                    <td><a href="{{ asset('assets/mandatory/img092.pdf') }}" class="btn btn-sm btn-success">LINK</a></td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>PGT</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>TGT</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>PRT</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>Teacher Section Ratio</td>
                                    <td>1:1</td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>Details Of Special Educator</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>Details Of Counsellor & Wellness Teacher</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
                <div class="card border-gray-200 rounded-12 shadow-dark-80 p-4 p-md-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-title">
                        <h5 class="mb-1 h1 text-uppercase">SCHOOL INFRASTRUCTURE</h5>
                    </div>
                    <table class="table table-striped table-inverse table-responsive table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Sl.No.</th>
                                <th>Information</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>TOTAL CAMPUS AREA OF THE SCHOOL (IN SQ. MTRS.)</td>
                                    <td>
                                        15189Sq. Mtrs.
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>NUMBER AND SIZE OF THE CLASS ROOMS (IN SQ. FT/MTRS)</td>
                                    <td>
                                        6.20 x 6.01 Sq. Mtrs.
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>NUMBER AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ. MTRS.)</td>
                                    <td>
                                        13.3 x 6.01 Sq. Mtrs.
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>INTERNET FACILITY (Y/N)	</td>
                                    <td>
                                       Yes
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>NUMBER OF GIRLS TOILETS</td>
                                    <td>
                                        12
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">6</td>
                                    <td>NUMBER OF BOYS TOILETS</td>
                                    <td>
                                        12
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">7</td>
                                    <td>LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL</td>
                                    <td>
                                        <a href="https://www.youtube.com/watch?v=D_7KO9Bhn7M&t=73s" class="btn btn-sm btn-success">LINK</a>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
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
Mandatory Public Disclosure -
@endsection

