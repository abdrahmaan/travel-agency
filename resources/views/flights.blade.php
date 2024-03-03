@extends('layout.master')

@section('content')
<!-- Flight List -->
<div class="section-space--sm">
    <div class="container-xl">
      <div class="row g-4">
        <div class="col-lg-4 order-2 order-lg-1 d-none">
          <div class="py-6 px-8 bg-neutral-0 rounded-4 box-shadow">
            <h4 class="mb-0"> Filter </h4>
            <div class="hr-dashed my-6 opacity-50"></div>
            <div class="d-flex align-items-center justify-content-between rounded-pill border border-neutral-40 bg-primary-3p px-5 py-2">
              <input type="text" class="form-control bg-transparent border-0 focus-outline-0" placeholder="Search by flight name">
              <button type="button" class="border-0 bg-transparent p-0 lh-1">
                <span class="material-symbols-outlined mat-icon clr-neutral-600"> search </span>
              </button>
            </div>
            <div class="hr-dashed my-6 opacity-50"></div>
            <p class="mb-4 clr-neutral-700 fs-20 fw-medium"> Category </p>
            <ul class="list list-row flex-wrap align-items-center gap-3">
              <li>
                <div class="d-flex align-items-center gap-2">
                  <input class="custom-radio custom-radio--primary-300" type="radio" name="property-type" id="rent-category">
                  <label class="d-inline-block fs-18 fw-medium cursor-pointer" for="rent-category"> One Way </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-2">
                  <input class="custom-radio custom-radio--primary-300" type="radio" name="property-type" id="buy-category">
                  <label class="d-inline-block fs-18 fw-medium cursor-pointer" for="buy-category"> Round Trip </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-2">
                  <input class="custom-radio custom-radio--primary-300" type="radio" name="property-type" id="sell-category">
                  <label class="d-inline-block fs-18 fw-medium cursor-pointer" for="sell-category"> Multi City </label>
                </div>
              </li>
            </ul>
            <div class="hr-dashed my-6 opacity-50"></div>
            <p class="mb-4 clr-neutral-700 fs-20 fw-medium"> No. of Stops </p>
            <ul class="list gap-2">
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="non-stop">
                  <label class="clr-neutral-500" for="non-stop">Non Stop</label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="one-stop">
                  <label class="clr-neutral-500" for="one-stop">1 Stop</label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="two-stop">
                  <label class="clr-neutral-500" for="two-stop">2+ Stop</label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="three-stop">
                  <label class="clr-neutral-500" for="three-stop">3+ Stop</label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="four-stop">
                  <label class="clr-neutral-500" for="four-stop">4+ Stop</label>
                </div>
              </li>
            </ul>
            <div class="hr-dashed my-6 opacity-50"></div>
            <p class="mb-4 clr-neutral-700 fs-20 fw-medium"> Departure Time </p>
            <ul class="list gap-3">
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="early-morning">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="early-morning">
                    <span class="d-inline-block"> Early Morning </span>
                    <span class="d-inline-block fw-medium">12am - 8am</span>
                  </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="morning">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="morning">
                    <span class="d-inline-block"> Morning </span>
                    <span class="d-inline-block fw-medium">8am - 12pm</span>
                  </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="mid-day">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="mid-day">
                    <span class="d-inline-block"> Mid Day </span>
                    <span class="d-inline-block fw-medium">12pm - 4pm</span>
                  </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="evening">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="evening">
                    <span class="d-inline-block"> Evening </span>
                    <span class="d-inline-block fw-medium">4pm - 8pm</span>
                  </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="night">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="night">
                    <span class="d-inline-block"> Night </span>
                    <span class="d-inline-block fw-medium">8pm - 12am</span>
                  </label>
                </div>
              </li>
            </ul>
            <div class="hr-dashed my-6 opacity-50"></div>
            <p class="mb-4 clr-neutral-700 fs-20 fw-medium"> Pricing scale </p>
            <div class="range-slider">
              <div class="range-slider__progress"></div>
              <span class="range-min-wrapper">
                <input class="range-slider__input range-slider__min" type="range" min="0" max="100" value="25">
              </span>
              <span class="range-max-wrapper">
                <input class="range-slider__input range-slider__max" type="range" min="0" max="100" value="100">
              </span>
            </div>
            <div class="d-flex align-items-center justify-content-center gap-2 mt-3">
              <div class="min-value range-slider__value"> $ <input type="number" min="0" max="100" value="25" disabled>
              </div>
              <span>-</span>
              <div class="max-value range-slider__value"> $ <input type="number" min="0" max="100" value="100" disabled>
              </div>
            </div>
            <div class="hr-dashed my-6 opacity-50"></div>
            <p class="mb-4 clr-neutral-700 fs-20 fw-medium"> Types of Airlines </p>
            <ul class="list gap-3">
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="one-to-two-bag">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="one-to-two-bag">
                    <span class="d-inline-block"> Asia Pacific Airlines </span>
                    <span class="d-inline-block fw-medium">523</span>
                  </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="three-to-four-bags">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="three-to-four-bags">
                    <span class="d-inline-block"> American Airlines </span>
                    <span class="d-inline-block fw-medium">152</span>
                  </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="five-or-more">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="five-or-more">
                    <span class="d-inline-block"> Europe Airlines </span>
                    <span class="d-inline-block fw-medium">14</span>
                  </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="europe-airline">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="europe-airline">
                    <span class="d-inline-block"> Europe Airlines </span>
                    <span class="d-inline-block fw-medium">14</span>
                  </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="middle-east">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="middle-east">
                    <span class="d-inline-block"> Middle East Airlines </span>
                    <span class="d-inline-block fw-medium">453</span>
                  </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="african-airline">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="african-airline">
                    <span class="d-inline-block"> African Airlines </span>
                    <span class="d-inline-block fw-medium">324</span>
                  </label>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-3">
                  <input class="custom-checkbox custom-checkbox--rounded flex-shrink-0" type="checkbox" id="autralian-airline">
                  <label class="clr-neutral-500 flex-grow-1 d-flex align-items-center justify-content-between" for="autralian-airline">
                    <span class="d-inline-block"> Australian Airlines </span>
                    <span class="d-inline-block fw-medium">286</span>
                  </label>
                </div>
              </li>
            </ul>
            <div class="hr-dashed my-6 opacity-50"></div>
            <a href="#" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center justify-content-center gap-2 fw-semibold w-100 text-center">
              <span class="material-symbols-outlined mat-icon fw-300"> rotate_right </span> Read More </a>
          </div>
        </div>

        @foreach ($Data->data as $flight)
            @php
                $carrierCode = $flight->validatingAirlineCodes[0];
                $carrierName = $Data->dictionaries->carriers->$carrierCode;


                $aircraftCode = $flight->itineraries[0]->segments[0]->aircraft->code;
                $aircraftName = $Data->dictionaries->aircraft->$aircraftCode;

                ////// Filter Travel Duration
                
                // Your duration string => 3H 35M
                $durationString = $flight->itineraries[0]->duration;

                // Create a DateInterval object from the duration string
                $interval = new DateInterval($durationString);

                // Format the DateInterval object to display the desired format
                $formattedDuration = sprintf('%dH %dM', $interval->h, $interval->i);


                ////// Filter Travel Start Time => 10:45 PM

                  // Your time string
                
                $timeString =  explode('T',$flight->itineraries[0]->segments[0]->departure->at)[1];
                $DateStringStart =  explode('T',$flight->itineraries[0]->segments[0]->departure->at)[0];
                $dateTime = new DateTime($timeString);
                $formattedTimeStart = $dateTime->format('h:i A');

                ////// Filter Travel End Time => 10:45 PM

                $timeString =  explode('T',$flight->itineraries[0]->segments[count($flight->itineraries[0]->segments) - 1]->arrival->at)[1];
                $DateStringEnd =  explode('T',$flight->itineraries[0]->segments[count($flight->itineraries[0]->segments) - 1]->arrival->at)[0];
                $dateTime = new DateTime($timeString);
                $formattedTimeEnd = $dateTime->format('h:i A');
            @endphp
            <div class="col-lg-12 order-1 order-lg-2">
                <div class="row g-4">
                  <div class="col-12">
                    <div class="flight-card d-md-flex {{app()->getLocale() == "ar" ? "flex-md-row-reverse" : ""}}  bg-neutral-0 border border-neutral-40 rounded-4">
                        {{-- بيانات الرحلة الأساسية --}}
                      <div class="flight-card__body d-flex flex-column gap-6 px-4 px-sm-6 py-6 flex-grow-1">
                          {{-- خط الطيران  --}}
                        <div class="d-flex flex-column align-items-center gap-3 gap-md-7 text-center text-md-start flex-grow-1">
                              <div class="d-grid d-none place-content-center w-15 h-15 rounded-circle bg-neutral-0 box-shadow mx-auto ms-md-0">
                                <img src="assets/img/brand-11.png" alt="image" class="img-fluid object-fit-contain">
                              </div>
                              <p class="mb-0 fw-medium"> {{$carrierName}} </p>
                        </div>
                        {{-- من - عدد الوقفات - إلى --}}
                        <div class="flight-card__schedule d-md-flex  {{app()->getLocale() == "ar" ? "flex-md-row-reverse" : ""}} gap-6">
                            {{-- من --}}
                            <div class="d-flex flex-md-column  {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start"}} justify-content-between gap-2 my-6 my-md-0 flex-grow-1">
                                <span class="d-block clr-primary-300"> {{__('strings.flight_from')}} </span>
                                <h4 class="mb-0"> {{$formattedTimeStart}} </h4>
                                <span class="text-primary fw-bold" style="font-size: 13px;"> {{$DateStringStart}}</span>   
                                <span class="d-block clr-neutral-700"> {{$flight->itineraries[0]->segments[0]->departure->iataCode}} </span>
                            </div>
                            {{-- عدد الوقفات --}}
                            <div class="d-flex flex-column gap-2 text-center flex-grow-1">
                                <div class="d-grid place-content-center w-12 h-12 box-shadow rounded-circle mx-auto">
                                <div class="d-grid place-content-center w-10 h-10 bg-primary-50 clr-primary-300 rounded-circle">
                                    <span class="material-symbols-outlined mat-icon"> flight_takeoff </span>
                                </div>
                                </div>
                                <span class="d-block fw-medium"> {{count($flight->itineraries[0]->segments) > 1  ? count($flight->itineraries[0]->segments) . __('strings.stops') : __('strings.non_stops') }} </span>
                                <span class="d-block clr-neutral-500"> {{$formattedDuration}} </span>
                            </div>
                            {{-- إلى --}}
                            <div class="d-flex flex-md-column {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start"}} justify-content-between gap-2 my-6 my-md-0 flex-grow-1">
                                <span class="d-block clr-primary-300"> {{__("strings.flight_to")}} </span>
                                <h4 class="mb-0"> {{$formattedTimeEnd}}  </h4>
                                <span class="text-primary fw-bold" style="font-size: 13px;">{{$DateStringEnd}} </span>
                                <span class="d-block clr-neutral-700"> {{$flight->itineraries[0]->segments[count($flight->itineraries[0]->segments) - 1]->arrival->iataCode}} </span>
                            </div>
                        </div>
                        {{-- درجة الطيران - نوع الطيارة --}}
                        <div class="flight-card__info text-center">
                          <p dir="rtl" class="mb-0"> {{__("strings.aircraftName")}} : <span class="clr-tertiary-500">{{$aircraftName}}</span>
                          </p>
                          <p dir="rtl" class="mb-0">{{__("strings.travelClass")}} : <span class="clr-primary-300">{{$flight->travelerPricings[0]->fareDetailsBySegment[0]->cabin}}</span>
                          </p>
                        </div>
                        {{--  نسبة الإرتجاع - عدد المقاعد--}}
                        <div class="flight-card__price d-md-flex  {{app()->getLocale() == "ar" ? "" : "flex-md-row-reverse"}} justify-content-between text-center">
                          <p class="mb-0"> Refundable <span class="clr-primary-500">$5 eCash</span>
                          </p>
                          <p class="mb-0 text-danger"> {{__("strings.seats", ["number" => $flight->numberOfBookableSeats])}} </p>
                          <button  class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample-{{$flight->id}}" aria-expanded="false" aria-controls="collapseExample-{{$flight->id}}" class="mb-0"> {{__("strings.flight_btn")}} </button>
                        </div>

                        <div class="flight-card collapse border-dashed rounded-4" id="collapseExample-{{$flight->id}}" style="background: #f4f5fe">
                          <div class="hr-dashed my-5"></div>
                            @foreach($flight->itineraries[0]->segments as $segment)
                              {{-- بيانات التوقف  --}}
                                  <div class="flight-card__body d-flex flex-column gap-6 px-4 px-sm-6 py-6 flex-grow-1">
                                    <div class="flight-card__schedule d-md-flex gap-6">
                                      <div class="d-none flex-column gap-3 gap-md-7 text-center text-md-start flex-grow-1">
                                        <div class="d-grid place-content-center w-15 h-15 rounded-circle bg-neutral-0 box-shadow mx-auto ms-md-0">
                                          <img src="assets/img/brand-11.png" alt="image" class="img-fluid object-fit-contain">
                                        </div>
                                        <p class="mb-0 fw-medium"> Delta Air Lines </p>
                                      </div>
                                      {{-- موعد الوصول  --}}
                                      <div class="d-flex flex-md-column justify-content-between  gap-2 my-6 my-md-0 flex-grow-1">
                                        <span class="d-block clr-primary-300"> From </span>
                                        <h4 class="mb-0"> 12:40 PM <br> <span class="text-primary" style="font-size: 13px;"> 30-1-2024 </span> </h4>
                                        <span class="d-block clr-neutral-700"> New York </span>
                                        <span class="d-block clr-neutral-700"> Terminal: 5 </span>
                                      </div>
                                      {{-- بيانات التوقف و وقت الرحلة  --}}
                                      <div class="d-flex flex-column gap-2 text-center flex-grow-1">
                                        <div class="d-grid place-content-center w-12 h-12 box-shadow rounded-circle mx-auto">
                                          <div class="d-grid place-content-center w-10 h-10 bg-primary-50 clr-primary-300 rounded-circle">
                                            <span class="material-symbols-outlined mat-icon"> flight_takeoff </span>
                                          </div>
                                        </div>
                                        <span class="d-block clr-neutral-500"> 02h 15 min </span>
                                      </div>
                                      {{-- موعد البداية  --}}
                                      <div class="d-flex flex-md-column  gap-2 my-6 my-md-0 flex-grow-1">
                                        <span class="d-block clr-primary-300"> To </span>
                                        <h4 class="mb-0"> 12:40 PM <br> <span class="text-primary" style="font-size: 13px;"> 30-1-2024 </span> </h4>
                                        <span class="d-block clr-neutral-700"> London </span>
                                      </div>
                                    </div>
                                    {{-- خط الطيران - نوع الطيارة - درجة الرحلة-  رقم الرحلة  --}}
                                    <div class="flight-card__info d-flex justify-content-center text-center p-3" style="background-color: #f7f7fe; border-radius: 0.5rem; min-height: 24px">
                                      <p class="mb-0 mx-2">Flight Number: <span class="text-danger">787</span></p>
                                      <p class="mb-0 mx-2">- </p>
                                      <p class="mb-0 mx-2"> Airplane : <span class="clr-tertiary-500">Boeing 787</span>
                                      </p>
                                      <p class="mb-0 mx-2">- </p>
                                      
                                      <p class="mb-0"> Travel Class: <span class="clr-primary-300">Economy</span>
                                      </p>
                                    </div>
                                    <div class="hr-dashed my-5"></div>
                                  </div>
                            @endforeach
                        </div>
                        {{-- بيانات التوقف  --}}
                        <div class="flight-card d-none bg-neutral-0 border-dashed rounded-4">
                            <div class="flight-card__body d-flex flex-column gap-6 px-4 px-sm-6 py-6 flex-grow-1">
                              <div class="flight-card__schedule d-md-flex gap-6">
                                <div class="d-none flex-column gap-3 gap-md-7 text-center text-md-start flex-grow-1">
                                  <div class="d-grid place-content-center w-15 h-15 rounded-circle bg-neutral-0 box-shadow mx-auto ms-md-0">
                                    <img src="assets/img/brand-11.png" alt="image" class="img-fluid object-fit-contain">
                                  </div>
                                  <p class="mb-0 fw-medium"> Delta Air Lines </p>
                                </div>
                                <div class="d-flex flex-md-column justify-content-between  gap-2 my-6 my-md-0 flex-grow-1">
                                  <span class="d-block clr-primary-300"> From </span>
                                  <h4 class="mb-0"> 12:40 PM <br> <span class="text-primary" style="font-size: 13px;"> 30-1-2024 </span> </h4>
                                  <span class="d-block clr-neutral-700"> New York </span>
                                  <span class="d-block clr-neutral-700"> Terminal: 5 </span>
                                </div>
                                <div class="d-flex flex-column gap-2 text-center flex-grow-1">
                                  <div class="d-grid place-content-center w-12 h-12 box-shadow rounded-circle mx-auto">
                                    <div class="d-grid place-content-center w-10 h-10 bg-primary-50 clr-primary-300 rounded-circle">
                                      <span class="material-symbols-outlined mat-icon"> flight_takeoff </span>
                                    </div>
                                  </div>
                                  <span class="d-block fw-medium"> Non-stop </span>
                                  <span class="d-block clr-neutral-500"> 02h 15 min </span>
                                </div>
                                <div class="d-flex flex-md-column  gap-2 my-6 my-md-0 flex-grow-1">
                                  <span class="d-block clr-primary-300"> To </span>
                                  <h4 class="mb-0"> 12:40 PM <br> <span class="text-primary" style="font-size: 13px;"> 30-1-2024 </span> </h4>
                                  <span class="d-block clr-neutral-700"> London </span>
                                </div>
                              </div>
                              <div class="flight-card__info d-flex justify-content-center text-center p-3" style="background-color: #f7f7fe; border-radius: 0.5rem; min-height: 24px">
                                <p class="mb-0 mx-2">Flight Number: <span class="text-danger">787</span></p>
                                <p class="mb-0 mx-2">- </p>
                                <p class="mb-0 mx-2"> Airplane : <span class="clr-tertiary-500">Boeing 787</span>
                                </p>
                                <p class="mb-0 mx-2">- </p>
                                
                                <p class="mb-0"> Travel Class: <span class="clr-primary-300">Economy</span>
                                </p>
                              </div>
                              <div class="hr-dashed my-5"></div>

                            </div>
                            <div class="flight-card__body d-none d-flex flex-column gap-6 px-4 px-sm-6 py-6 flex-grow-1">
                              <div class="flight-card__schedule d-md-flex gap-6">
                                <div class="d-none  ">
                                  <div class="d-none place-content-center w-15 h-15 rounded-circle bg-neutral-0 box-shadow mx-auto ms-md-0">
                                    <img src="assets/img/brand-11.png" alt="image" class="img-fluid object-fit-contain">
                                  </div>
                                  <p class="mb-0 fw-medium"> Delta Air Lines </p>
                                </div>
                                <div class="d-flex flex-md-column justify-content-between gap-2 my-6 my-md-0 flex-grow-1">
                                  <span class="d-block clr-primary-300"> From </span>
                                  <h4 class="mb-0"> 12:10 am </h4>
                                  <span class="d-block clr-neutral-700"> New York </span>
                                </div>
                                <div class="d-flex flex-column gap-2 text-center flex-grow-1">
                                  <div class="d-grid place-content-center w-12 h-12 box-shadow rounded-circle mx-auto">
                                    <div class="d-grid place-content-center w-10 h-10 bg-primary-50 clr-primary-300 rounded-circle">
                                      <span class="material-symbols-outlined mat-icon"> flight_takeoff </span>
                                    </div>
                                  </div>
                                  <span class="d-block fw-medium"> Non-stop </span>
                                  <span class="d-block clr-neutral-500"> 02h 15 min </span>
                                </div>
                                <div class="d-flex flex-md-column justify-content-between gap-2 my-6 my-md-0 flex-grow-1">
                                  <span class="d-block clr-primary-300"> To </span>
                                  <h4 class="mb-0"> 07:20 am </h4>
                                  <span class="d-block clr-neutral-700"> London </span>
                                </div>
                              </div>
                              <div class="flight-card__info text-center">
                                <p class="mb-0"> Airplane : <span class="clr-tertiary-500">Boeing 787</span>
                                </p>
                                <p class="mb-0"> Travel Class: <span class="clr-primary-300">Economy</span>
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                        {{--سعر الرحلة  --}}
                      <div class="flight-card__footer d-md-flex flex-column justify-content-center bg-primary-5p px-4 px-sm-6 py-6 text-center text-md-start">
                        <p class="clr-neutral-200 text-decoration-line-through"> EGP {{$flight->price->grandTotal * 1.2}} </p>
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-2 mb-6">
                          <h2 class="mb-0 clr-neutral-700"> EGP {{$flight->price->grandTotal}} </h2>
                          <span class="d-inline-block fs-14 clr-primary-300"> 20% خصم </span>
                        </div>
                        <a target="_blank" href="/{{app()->getLocale()}}/flight-book/{{$flight->price->grandTotal}}" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold justify-content-center"> {{__("strings.flight_book_btn")}} </a>
                      </div>
                    </div>
                  </div>
                
                </div>
            </div>
        @endforeach
       
      </div>
    </div>
  </div>
  <!-- /Flight List -->
@endsection 