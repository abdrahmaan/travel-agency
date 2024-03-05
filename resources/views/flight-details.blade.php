@extends('layout.master')

 @php 

               


                function getFormatTime($time){
                  $timeString =  explode('T',$time)[1];
                  $dateTime = new DateTime($timeString);
                  $formattedTime = $dateTime->format('h:i A');
                  return $formattedTime;
               }


               function getFormatDuration($duration){
                    
                // Your duration string => 3H 35M
                $durationString = $duration;

                // Create a DateInterval object from the duration string
                $interval = new DateInterval($durationString);

                // Format the DateInterval object to display the desired format
                $formattedDuration = sprintf('%dH %dM', $interval->h, $interval->i);

                return $formattedDuration;

               }


        @endphp
@section('content')
<div class="bg-primary-5p">
    <div class="container">
      <div class="row {{app()->getLocale() == "ar" ? "flex-row-reverse" : ""}}">
        <div class="col-xl-8">
          <div class="section-space--sm">
            <div class="bg-neutral-0 rounded-4 py-8 px-5">
              <div class="p-6 bg-primary-3p rounded-4 border border-neutral-40 mb-10">
                <div class="d-flex d-none align-items-center justify-content-between gap-4 mb-10">
                  <h2 class="mb-0 d-flex align-items-center flex-wrap gap-4 clr-neutral-700">
                    <span> New York </span>
                    <span class="material-symbols-outlined mat-icon fs-32 fw-500"> sync_alt </span>
                    <span> London </span>
                  </h2>
                  <span class="d-inline-block clr-neutral-600"> 15 March, 2023 </span>
                </div>
                <div class="flight-card bg-neutral-0 border-dashed rounded-4">
                    @foreach($flight->itineraries as $flight_itineraries)
                    @foreach ($flight_itineraries->segments as $segment)
                         {{-- بيانات التوقف  --}}
                         <div class="flight-card__body d-flex flex-column  px-4 px-sm-6  flex-grow-1">
                          <div class="flight-card__schedule mt-4 d-flex  {{app()->getLocale() == "ar" ? "flex-row-reverse" : ""}} gap-6">
                            {{-- من --}}
                            <div class="d-flex flex-column  {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start"}} justify-content-between gap-2 my-6 my-md-0 flex-grow-1">
                                <span class="d-block clr-primary-300"> {{__('strings.flight_from')}} </span>
                                <h4 class="mb-0"> {{getFormatTime($segment->departure->at)}} </h4>
                                <span class="text-primary fw-bold" style="font-size: 13px;"> {{explode("T",$segment->departure->at)[0]}}</span>   
                                <span class="d-block clr-neutral-700"> {{$segment->departure->iataCode}} </span>
                            </div>
                            {{-- عدد الوقفات --}}
                            <div class="d-flex flex-column gap-2 text-center flex-grow-1">
                                <div class="d-grid place-content-center w-12 h-12 box-shadow rounded-circle mx-auto">
                                <div class="d-grid place-content-center w-10 h-10 bg-primary-50 clr-primary-300 rounded-circle">
                                    <span class="material-symbols-outlined mat-icon"> flight_takeoff </span>
                                </div>
                                </div>
                                <span class="d-block clr-neutral-500"> {{getFormatDuration($segment->duration)}} </span>
                            </div>
                            {{-- إلى --}}
                            <div class="d-flex flex-column {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start"}} justify-content-between gap-2 my-6 my-md-0 flex-grow-1">
                                <span class="d-block clr-primary-300"> {{__("strings.flight_to")}} </span>
                                <h4 class="mb-0"> {{getFormatTime($segment->arrival->at) }}  </h4>
                                <span class="text-primary fw-bold" style="font-size: 13px;">{{explode("T",$segment->arrival->at)[0]}} </span>
                                <span class="d-block clr-neutral-700"> {{$segment->arrival->iataCode}} </span>
                            </div>
                        </div>
                          {{-- خط الطيران - نوع الطيارة - درجة الرحلة-  رقم الرحلة  --}}
                          <div class="flight-card__info my-3 d-flex flex-column {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start"}}  p-3" style="background-color: #f7f7fe; border-radius: 0.5rem; min-height: 24px">
                            <p dir="{{app()->getLocale() == "ar" ? "rtl" : ""}}" class="mb-0">{{__("strings.flight_number")}} : <span class="text-danger">{{$segment->number}}</span></p>
                            @php
                                $segmentCarrierCode = $segment->aircraft->code;
                            @endphp
                            <p dir="{{app()->getLocale() == "ar" ? "rtl" : ""}}" class="mb-0 "> {{__("strings.aircraftName")}} : <span class="clr-tertiary-500">{{$Data->dictionaries->aircraft->$segmentCarrierCode}}</span></p>
                            <p dir="{{app()->getLocale() == "ar" ? "rtl" : ""}}" class="mb-0 d-none"> {{__("strings.travelClass")}} : <span class="clr-primary-300">Economy</span>
                            </p>
                          </div>
                          <div class="hr-dashed w-100"></div>
                        </div>
                    @endforeach
                  @endforeach
                </div>
              </div>
              <div class="p-6 bg-primary-3p rounded-4 border border-neutral-40 mb-10">
                <h4 class="mb-0"> Important Information </h4>
                <div class="hr-dashed my-5"></div>
                <h6 class="mb-4"> Passengers traveling </h6>
                <ul class="list list-disc gap-3 mb-8">
                  <li> Travel dates: You will need to select the dates you plan to travel, including your departure </li>
                  <li> Destination: You will also need to select your destination, including the airport you plan to fly into </li>
                  <li> Number of travelers: You will need to specify the number of travelers in your party, including adults </li>
                  <li> Class of travel: You will need to choose the class of travel you prefer, such as eco or first class. </li>
                  <li> Flight times: You will be able to select the flight times that work best for you </li>
                  <li> Price: You will be shown the price of the flight, which may include taxes and fees. </li>
                  <li> Payment: You will need to provide payment information to book your flight </li>
                  <li> Confirmation: Once you have completed your booking, you should receive a confirmation email </li>
                </ul>
                <h6 class="mb-4"> Guidelines </h6>
                <ul class="list list-disc gap-3 mb-8">
                  <li> Bring all necessary documentation, including your passport or ID card, visa (if required) </li>
                  <li> Check the baggage allowance for your flight and pack accordingly. </li>
                  <li> Check in online or at the airport, following the airline's guidelines for check-in times </li>
                  <li> Go through security screening and follow the guidelines for liquids, gels, in your carry-on luggage. </li>
                  <li> Board your flight when your boarding group is called, following the instructions of the airline staff. </li>
                  <li> During the flight, follow the instructions of the flight crew and stay in your seat with your seat belt fastened when the seat belt sign is on. </li>
                </ul>
                <a href="#" class="link d-flex align-items-center gap-2 clr-primary-300">
                  <span class="fw-semibold d-inline-block"> Read More </span>
                  <span class="material-symbols-outlined mat-icon"> arrow_right_alt </span>
                </a>
              </div>
              <div class="p-6 bg-primary-3p rounded-4 border border-neutral-40 mb-10">
                <h4 class="mb-4"> Cancellation Info </h4>
                <p class="mb-0"> To cancel your flight, you will typically need to contact the airline directly. The specific process for cancelling your flight will vary depending on the airline's policies </p>
              </div>
              <div class="p-6 bg-primary-3p rounded-4 border border-neutral-40 mb-10">
                <h4 class="mb-0"> Traveler Details </h4>
                <div class="hr-dashed my-5"></div>
                <form action="#" class="row g-3">
                  <div class="col-md-6">
                    <label class="d-block fw-medium clr-neutral-700 fs-18 mb-3">First Name</label>
                    <input class="form-control form-control-lg fs-16 py-3 px-5 rounded-pill" type="text" placeholder="Enter First Name">
                  </div>
                  <div class="col-md-6">
                    <label class="d-block fw-medium clr-neutral-700 fs-18 mb-3">Last Name</label>
                    <input class="form-control form-control-lg fs-16 py-3 px-5 rounded-pill" type="text" placeholder="Enter Last Name">
                  </div>
                  <div class="col-md-6">
                    <label class="d-block fw-medium clr-neutral-700 fs-18 mb-3">Email</label>
                    <input class="form-control form-control-lg fs-16 py-3 px-5 rounded-pill" type="email" placeholder="Enter Email">
                  </div>
                  <div class="col-md-6">
                    <label class="d-block fw-medium clr-neutral-700 fs-18 mb-3">Phone</label>
                    <input class="form-control form-control-lg fs-16 py-3 px-5 rounded-pill" type="text" placeholder="Enter Phone">
                  </div>
                  <div class="col-md-6">
                    <label class="d-block fw-medium clr-neutral-700 fs-18 mb-3">Date Of Birth</label>
                    <input class="form-control form-control-lg fs-16 py-3 px-5 rounded-pill" type="date" placeholder="Select date of birth">
                  </div>
                  <div class="col-md-6">
                    <label class="d-block fw-medium clr-neutral-700 fs-18 mb-3"> Nationality </label>
                    <div class="property-search__select property-search__col rounded-pill d-flex align-items-center gap-2 px-6 flex-grow-1 bg-neutral-0">
                      <select class="form-select" aria-label="Default select example">
                        <option selected="">Location</option>
                        <option value="1">New York</option>
                        <option value="2">Chicago</option>
                        <option value="3">Atlanta</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <label class="d-block fw-medium clr-neutral-700 fs-18 mb-3">Passport Number</label>
                    <input class="form-control form-control-lg fs-16 py-3 px-5 rounded-pill" type="text" placeholder="Passport Number">
                  </div>
                  <div class="col-md-6">
                    <label class="d-block fw-medium clr-neutral-700 fs-18 mb-3">Issuing Country</label>
                    <input class="form-control form-control-lg fs-16 py-3 px-5 rounded-pill" type="text" placeholder="Country Name">
                  </div>
                  <div class="col-md-6">
                    <label class="d-block fw-medium clr-neutral-700 fs-18 mb-3">Passport Expiry</label>
                    <input class="form-control form-control-lg fs-16 py-3 px-5 rounded-pill" type="text" placeholder="Passport Date">
                  </div>
                  <div class="col-12 d-none">
                    <a href="#" class="link d-flex align-items-center gap-2 clr-primary-300">
                      <span class="fw-semibold d-inline-block"> Add New Adult </span>
                      <span class="material-symbols-outlined mat-icon"> arrow_right_alt </span>
                    </a>
                  </div>
                </form>
              </div>
              <div class="d-flex d-none align-items-center justify-content-between gap-4 flex-wrap">
                <a href="#" class="link d-flex align-items-center clr-neutral-500 :clr-primary-300 gap-1 order-1">
                  <span class="material-symbols-outlined mat-icon"> arrow_back </span>
                  <span class="d-inline-block fw-semibold"> Previous Flight </span>
                </a>
                <ul class="list list-row flex-wrap gap-3 justify-content-center order-3 flex-grow-1 order-md-2">
                  <li>
                    <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle bg-primary-50 clr-primary-300 :bg-primary-300 :clr-neutral-0">
                      <i class="fab fa-dribbble"></i>
                    </a>
                  </li>
                </ul>
                <a href="#" class="link d-flex align-items-center clr-neutral-500 :clr-primary-300 gap-1 order-2">
                  <span class="d-inline-block fw-semibold"> Next Flight </span>
                  <span class="material-symbols-outlined mat-icon"> arrow_forward </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="section-space--sm">
            <div class="bg-neutral-0 rounded-4 py-8 px-6">
              <p class="mb-3 fs-18 fw-medium">Total Price </p>
              <div class="d-flex align-items-start gap-2 mb-6">
                <div class="d-flex gap-3 align-items-center">
                  <h3 class="mb-0"> {{$flight->price->grandTotal}} EGP </h3>
                </div>
              </div>
              <div class="list-group about-tab mb-7">
                <a class="list-group-item active" data-bs-toggle="list" href="#booking-list"> Booking Form </a>
                <a class="list-group-item" data-bs-toggle="list" href="#enquiry-list"> Enquiry Form </a>
              </div>
              <div class="tab-content mb-8">
                <div class="tab-pane fade show active" id="booking-list">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <p class="mb-0 clr-neutral-500"> Base Price </p>
                    <p class="mb-0 fw-medium"> $640 </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <p class="mb-0 clr-neutral-500"> State Tax </p>
                    <p class="mb-0 fw-medium"> $15 </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <p class="mb-0 clr-neutral-500"> Night Charge </p>
                    <p class="mb-0 fw-medium"> $5 </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 clr-neutral-500"> Convenience Fee </p>
                    <p class="mb-0 fw-medium"> $7 </p>
                  </div>
                  <div class="hr-dashed my-4"></div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 clr-neutral-500"> Total </p>
                    <p class="mb-0 fw-medium"> $1025 </p>
                  </div>
                </div>
                <div class="tab-pane fade" id="enquiry-list">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <p class="mb-0 clr-neutral-500"> Base Price </p>
                    <p class="mb-0 fw-medium"> $640 </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <p class="mb-0 clr-neutral-500"> State Tax </p>
                    <p class="mb-0 fw-medium"> $15 </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <p class="mb-0 clr-neutral-500"> Night Charge </p>
                    <p class="mb-0 fw-medium"> $5 </p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 clr-neutral-500"> Convenience Fee </p>
                    <p class="mb-0 fw-medium"> $7 </p>
                  </div>
                  <div class="hr-dashed my-4"></div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 clr-neutral-500"> Total </p>
                    <p class="mb-0 fw-medium"> $1025 </p>
                  </div>
                </div>
              </div>
              <a target="_blank" href="/{{app()->getLocale()}}/flight-pay/{{$flight->price->grandTotal}}" class="link d-inline-flex align-items-center gap-2 py-3 px-6 rounded-pill bg-primary-300 clr-neutral-0 :bg-primary-400 :clr-neutral-0 fw-medium w-100 justify-content-center mb-6">
                <span class="d-inline-block"> Proceed Booking </span>
              </a>
              <ul class="list d-none list-row justify-content-center gap-6">
                <li>
                  <div class="d-flex align-items-center gap-2">
                    <div class="w-7 h-7 rounded-circle bg-primary-50 clr-primary-300 d-grid place-content-center">
                      <span class="material-symbols-outlined mat-icon fs-18"> favorite </span>
                    </div>
                    <span class="d-inline-block fs-14 clr-neutral-500"> Save To Wish List </span>
                  </div>
                </li>
                <li>
                  <div class="d-flex align-items-center gap-2">
                    <div class="w-7 h-7 rounded-circle bg-primary-50 clr-primary-300 d-grid place-content-center">
                      <span class="material-symbols-outlined mat-icon fs-18"> compare_arrows </span>
                    </div>
                    <span class="d-inline-block fs-14 clr-neutral-500"> Compare </span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection 