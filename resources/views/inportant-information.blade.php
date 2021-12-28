@extends('includes.app')

@section('content')

<div class="bg-gray-300"  style="background-image: url('{{ asset('assets/images/landing/slide/5.jpg') }}')  ;   background-repeat: no-repeat; background-position-y: center; background-size: cover; background-blend-mode: multiply;">
    <div class="container text-center py-4 py-md-5 mt-0" data-aos="fade-up" data-aos-delay="100">
        <h3 class="display-5 mb-0 text-white">Important information</h3>
        <p class="text-black-600 lh-lg big text-white"></p>
    </div>
</div>
<div class="container">

    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="item">
                <div class="item-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link p-3" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                School Information
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="t-p">
                        <table class="table table-bordered table-responsive text-white text-uppercase">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Information</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Name of the school, address with pin code no.</td>
                                    <td>Shivalik International Convent School, Viilage Bhatti-Khoula, P.O & Teh. Jawalamukhi, Distt. Kangra, H.P 176031</td>
                                </tr>
                                <tr>
                                    <td scope="row">E-mail</td>
                                    <td>info@sicschool.in</td>
                                </tr>
                                <tr>
                                    <td scope="row">Contact</td>
                                    <td>+918219626192, +916284440750, +918988255242</td>
                                </tr>
                                <tr>
                                    <td scope="row">Year of establishment of school</td>
                                    <td>2014</td>
                                </tr>
                                <tr>
                                    <td scope="row">Whether NOC from state/UT or recommendation of Embassy of India obtained?</td>
                                    <td>HP Govt</td>
                                </tr>
                                <tr>
                                    <td scope="row">Is the school is recognised, if yes by which Authority</td>
                                    <td>Yes By C.B.S.E.- New Delhi</td>
                                </tr>
                                <tr>
                                    <td scope="row">Society Name</td>
                                    <td>Shivalik International Convent School Society, Nangal Chowk</td>
                                </tr>
                                <tr>
                                    <td scope="row">Period upto Which Registration of Trust/Society is valid</td>
                                    <td>Forever</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-responsive text-white text-uppercase">
                            <thead class="thead-inverse">
                                <tr>
                                    <th colspan="2">List Of Members Of School Managing Committee With Their Address/tenureand post held</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Name and Official Address of The Manager/President/Chairman/ Correspondent</td>
                                    <td>Malkiat Singh Rana, Vill. Nagal Chowk, P.O. & Teh Dada Siba, Distt. Kangra (H.P.) - 177106</td>
                                </tr>
                                <tr>
                                    <td scope="row">Name of the Grievance/redressal officer with E-mail, Ph.No, Fax No.</td>
                                    <td>Mrs. Rajesh Rana</td>
                                </tr>
                                <tr>
                                    <td scope="row">Head of Sexual Harassment committee</td>
                                    <td>Mr. Munish Rana</td>
                                </tr>
                                <tr>
                                    <td scope="row">Academic session period</td>
                                    <td>April to March</td>
                                </tr>
                                <tr>
                                    <td scope="row">Vacation Period</td>
                                    <td>26th June to 31st of July</td>
                                </tr>
                                <tr>
                                    <td scope="row">Admission Period</td>
                                    <td>1st April to 15th April</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-header" id="headingManaging">
                    <h2 class="mb-0">
                        <button class="btn btn-link p-3" type="button" data-toggle="collapse"
                            data-target="#collapseManaging" aria-expanded="true" aria-controls="collapseManaging">
                                Managing Commettiee
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseManaging" class="collapse" aria-labelledby="headingManaging"
                    data-parent="#accordionExample">
                    <div class="t-p">
                            <table class="table table-bordered table-responsive text-white text-uppercase">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>S.No</th>
                                    <th>NAME OF MEMBER</th>
                                    <th>DESIGNATION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>SH.MALKIT SINGH RANA S/O SH.HARI SINGH</td>
                                    <td>CHAIRMAN</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>SH.NASIB SINGH S/O SH.AMI CHAND</td>
                                    <td>VICE PRESIDENT</td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>SAMRITI THAKUR D/O SH.ASHOK KUMAR</td>
                                    <td>SECRETARY</td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>USHA DEVI W/O SH.TARSEM SINGH</td>
                                    <td>MEMBER</td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>NIRMAL KANTA W/O TRIBHAWAN CHAND</td>
                                    <td>MEMBER</td>
                                </tr>
                                <tr>
                                    <td scope="row">6</td>
                                    <td>MONIKA SHARMA W/O MANOJ KUMAR</td>
                                    <td>MEMBER</td>
                                </tr>
                                <tr>
                                    <td scope="row">7</td>
                                    <td>MEENA MINHAS W/O SAMPURAN SINGH</td>
                                    <td>MEMBER</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-header" id="headingStatus">
                    <h2 class="mb-0">
                        <button class="btn btn-link p-3" type="button" data-toggle="collapse"
                            data-target="#collapseStatus" aria-expanded="true" aria-controls="collapseStatus">
                                Status Of Affiliation
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseStatus" class="collapse" aria-labelledby="headingStatus"
                    data-parent="#accordionExample">
                    <div class="t-p">
                        <table class="table table-bordered table-responsive text-white text-uppercase">
                            <thead class="thead-inverse">
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Permanent/Regular/Provisional</td>
                                    <td>Provisional</td>
                                </tr>
                                <tr>
                                    <td scope="row">Affilation No</td>
                                    <td>	CBSE/AFF/630203/EX-00421-1819/2017/1294534</td>
                                </tr>
                                <tr>
                                    <td scope="row">Affilation With</td>
                                    <td>The Board Since 2015</td>
                                </tr>
                                <tr>
                                    <td scope="row">Extension Of Affilation Upto</td>
                                    <td>01-04-2018 TO 31-03-2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-header" id="headingArea">
                    <h2 class="mb-0">
                        <button class="btn btn-link p-3" type="button" data-toggle="collapse"
                            data-target="#collapseArea" aria-expanded="true" aria-controls="collapseArea">
                                Area Of the School
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseArea" class="collapse" aria-labelledby="headingArea"
                    data-parent="#accordionExample">
                    <div class="t-p">
                        <table class="table table-bordered table-responsive text-white text-uppercase">
                            
                            <tbody>
                                <tr>
                                    <td scope="row">In Acres</td>
                                    <td>1-59-89 hect</td>
                                </tr>
                                <tr>
                                    <td scope="row">Built up area (sq.mtrs)</td>
                                    <td>1350 sq.mtrs</td>
                                </tr>
                                <tr>
                                    <td scope="row">Area of playground in sq.mtrs</td>
                                    <td>1200 sq.mtrs</td>
                                </tr>
                                <tr>
                                    <td scope="row">Swimming Pool</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td scope="row">Indoor Games</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td scope="row">Dance Rooms</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td scope="row">Gymnasium</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td scope="row">Music Room</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td scope="row">Hostels</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td scope="row">Health & Medical Check Ups</td>
                                    <td>Yes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-header" id="headingFee">
                    <h2 class="mb-0">
                        <button class="btn btn-link p-3" type="button" data-toggle="collapse"
                            data-target="#collapseFee" aria-expanded="true" aria-controls="collapseFee">
                                Fee Structure
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseFee" class="collapse" aria-labelledby="headingFee"
                    data-parent="#accordionExample">
                    <div class="t-p">
                        <table class="table table-bordered table-responsive text-white text-uppercase">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Class</th>
                                    <th>Details</th>
                                    <th>Old Student Charges</th>
                                    <th>New Student Charges(Admission)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">NURSERY</td>
                                    <td>Annual Fee</td>
                                    <td>NIL</td>
                                    <td>4070</td>
                                </tr>
                                <tr>
                                    <td scope="row">K.G</td>
                                    <td>Annual Charges</td>
                                    <td>3070</td>
                                    <td>4070</td>
                                </tr>
                                <tr>
                                    <td scope="row">1st To 5th</td>
                                    <td>Annual Charges</td>
                                    <td>3670</td>
                                    <td>4670</td>
                                </tr>
                                <tr>
                                    <td scope="row">6th To 8th</td>
                                    <td>Annual Charges</td>
                                    <td>4870</td>
                                    <td>5870</td>
                                </tr>
                                <tr>
                                    <td scope="row">9th & 10th</td>
                                    <td>Annual Charges</td>
                                    <td>5470</td>
                                    <td>6470</td>
                                </tr>
                                <tr>
                                    <td scope="row">+1 Med & Non Med</td>
                                    <td>Admission Charges</td>
                                    <td>NIL</td>
                                    <td>5770</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered table-responsive text-white text-uppercase">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Monthly Fee</th>
                                    <th>Class</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row"></td>
                                    <td>Nursery & K.G</td>
                                    <td>1000</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>1st & 2nd</td>
                                    <td>1450</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>3rd To 5th</td>
                                    <td>1500</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>6th</td>
                                    <td>1650</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>7th</td>
                                    <td>1700</td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td>8th To 10th</td>
                                    <td>1750</td>
                                </tr>
                                <tr>
                                    <td scope="row">Medical</td>
                                    <td>+1 & +2</td>
                                    <td>2200</td>
                                </tr>
                                <tr>
                                    <td scope="row">Non Medical</td>
                                    <td>+1 & +2</td>
                                    <td>2000</td>
                                </tr>
                                <tr>
                                    <td scope="row">Medical + Non Medical</td>
                                    <td>+1 & +2</td>
                                    <td>3000</td>
                                </tr>
                                <tr>
                                    <td scope="row">Computer Fee</td>
                                    <td>+1 & +2</td>
                                    <td>500 p.m</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-header" id="headingFacility">
                    <h2 class="mb-0">
                        <button class="btn btn-link p-3" type="button" data-toggle="collapse"
                            data-target="#collapseFacility" aria-expanded="true" aria-controls="collapseFacility">
                            Transport Facility 
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapseFacility" class="collapse" aria-labelledby="headingFacility"
                    data-parent="#accordionExample">
                    <div class="t-p">
                        <table class="table table-bordered table-responsive text-white text-uppercase">
                            
                            <tbody>
                                <tr>
                                    <td scope="row">Own buses</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td scope="row">Buses hired or contract basis</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td scope="row">Details of transport charges</td>
                                    <td>0.2 km-250/- per month, 3 to 5km-300/-, 6 to 15km-450/-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-header" id="headingTwo">
                    <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Teaching Staff & Salary Details
                    <i class="fa fa-angle-down"></i>
                    </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionExample">
                    <div class="t-p">
                        <table class="table table-bordered text-uppercase text-white table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Qualification</th>
                                    <th>Experience</th>
                                    <th>Pay Grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Munish Rana</td>
                                        <td>Principal</td>
                                        <td>M.A, B.Ed</td>
                                        <td>12 years</td>
                                        <td>22200</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>ANURADHA</td>
                                        <td>TGT</td>
                                        <td>M.A, B.Ed</td>
                                        <td>4 years</td>
                                        <td>15300</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>MINAKSHI AWASTHI</td>
                                        <td>TGT</td>
                                        <td>M.A, B.Ed</td>
                                        <td>3 years</td>
                                        <td>15300</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>SUNITA DEVI</td>
                                        <td>TGT</td>
                                        <td>M.A, B.Ed</td>
                                        <td>1 years</td>
                                        <td>15300</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5</td>
                                        <td>VIJAY KUMAR</td>
                                        <td>ART & CRAFT</td>
                                        <td>DIP</td>
                                        <td>4 years</td>
                                        <td>14900</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">6</td>
                                        <td>ANITA RANI</td>
                                        <td>TGT</td>
                                        <td>M.Sc, B.Ed</td>
                                        <td>1 years</td>
                                        <td>8910</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">7</td>
                                        <td>VANDANA</td>
                                        <td>PRT</td>
                                        <td>M.A, B.Ed</td>
                                        <td>1 years</td>
                                        <td>8910</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">8</td>
                                        <td>NEHA SHARMA</td>
                                        <td>PRT</td>
                                        <td>B.A. M.Ed</td>
                                        <td>4 years</td>
                                        <td>8910</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">9</td>
                                        <td>SAPNA KUMARI</td>
                                        <td>PRT</td>
                                        <td>M.A, B.Ed</td>
                                        <td>3 years</td>
                                        <td>8910</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">10</td>
                                        <td>BINDU SHARMA</td>
                                        <td>PRT</td>
                                        <td>M.Com</td>
                                        <td>2 years</td>
                                        <td>8910</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">11</td>
                                        <td>SUMIDHA</td>
                                        <td>PRT</td>
                                        <td>M.A, B.Ed</td>
                                        <td>3 years</td>
                                        <td>8910</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">12</td>
                                        <td>SUNITA SHARMA</td>
                                        <td>PRT</td>
                                        <td>M.A. D.EL.Ed</td>
                                        <td>3 years</td>
                                        <td>8910</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">13</td>
                                        <td>LATA KUMARI</td>
                                        <td>PRT</td>
                                        <td>M.A, B.Ed</td>
                                        <td>2 years</td>
                                        <td>8910</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">14</td>
                                        <td>KRITIKA PATHANIA</td>
                                        <td>PRT</td>
                                        <td>M.Sc</td>
                                        <td>NIL</td>
                                        <td>8910</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">15</td>
                                        <td>SUNITA DEVI</td>
                                        <td>PRT</td>
                                        <td>M.Sc, B.Ed</td>
                                        <td>NIL</td>
                                        <td>8910</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">16</td>
                                        <td>NIDHI</td>
                                        <td>LIBRARY</td>
                                        <td>M.COM</td>
                                        <td>2 years</td>
                                        <td>14900</td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-header" id="headingThree">
                    <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                            Salary Details
                    <i class="fa fa-angle-down"></i>
                    </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="t-p">
                        <table class="table table-bordered text-white text-uppercase table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Designation</th>
                                    <th>Scale of pay</th>
                                    <th>Grade Pay</th>
                                    <th>% of D.A</th>
                                    <th>HRA	</th>
                                    <th>EPF</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Principal</td>
                                    <td>15600</td>
                                    <td>6600</td>
                                    <td>N.A.</td>
                                    <td>N.A.</td>
                                    <td>13.61%</td>
                                </tr>
                                <tr>
                                    <td>PGT</td>
                                    <td>10300</td>
                                    <td>5400</td>
                                    <td>N.A.</td>
                                    <td>N.A.</td>
                                    <td>13.61%</td>
                                </tr>
                                <tr>
                                    <td>TGT</td>
                                    <td>10300</td>
                                    <td>5000</td>
                                    <td>N.A.</td>
                                    <td>N.A.</td>
                                    <td>13.61%</td>
                                </tr>
                                <tr>
                                    <td>C&B PTI</td>
                                    <td>10300</td>
                                    <td>4600</td>
                                    <td>N.A.</td>
                                    <td>N.A.</td>
                                    <td>13.61%</td>
                                </tr>
                                <tr>
                                    <td>Clerk</td>
                                    <td>5910</td>
                                    <td>1900</td>
                                    <td>N.A.</td>
                                    <td>N.A.</td>
                                    <td>13.61%</td>
                                </tr>
                                <tr>
                                    <td>Peon & Driver</td>
                                    <td>4900</td>
                                    <td>1300</td>
                                    <td>N.A.</td>
                                    <td>N.A.</td>
                                    <td>13.61%</td>
                                </tr>
                                <tr>
                                    <td>PRT</td>
                                    <td>5910</td>
                                    <td>3000</td>
                                    <td>N.A.</td>
                                    <td>N.A.</td>
                                    <td>13.61%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-header" id="headingFour">
                    <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour">
                        Salary Payment
                    <i class="fa fa-angle-down"></i>
                    </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                    data-parent="#accordionExample">
                    <div class="t-p">
                        <table class="table table-bordered table-responsive text-white text-uppercase">
                            <thead class="thead-inverse">
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Name of the Bank through which salary is drawing</td>
                                    <td>Punjab National Bank, Jawalamukhi</td>
                                </tr>
                                <tr>
                                    <td scope="row">Through single cheque transfer advice</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td scope="row">Individual Cheque</td>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <td scope="row">Cash</td>
                                    <td>No</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



 

</div>



@endsection

@section('style')
<style>

body {
  background: #232323;
}
.accordion{
  margin: 40px 0;
}
.accordion .item {
    border: none;
    margin-bottom: 50px;
    background: none;
}
.t-p{
  color: rgb(193 206 216);
  padding: 40px 30px 0px 30px;
}
.accordion .item .item-header h2 button.btn.btn-link {
    background: #333435;
    color: white;
    border-radius: 0px;
    font-family: 'Poppins';
    font-size: 16px;
    font-weight: 400;
    line-height: 2.5;
    text-decoration: none;
}
.accordion .item .item-header {
    border-bottom: none;
    background: transparent;
    padding: 0px;
    margin: 2px;
}

.accordion .item .item-header h2 button {
    color: white;
    font-size: 20px;
    padding: 15px;
    display: block;
    width: 100%;
    text-align: left;
    padding: 10px !important;
    text-transform: uppercase;
}

.accordion .item .item-header h2 i {
    float: right;
    font-size: 30px;
    color: #eca300;
    background-color: black;
    width: 60px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
}

button.btn.btn-link.collapsed i {
    transform: rotate(0deg);
}

button.btn.btn-link i {
    transform: rotate(180deg);
    transition: 0.5s;
}


</style>
@endsection

@section('script')

@endsection

@section('title')
Inportant Information -
@endsection

