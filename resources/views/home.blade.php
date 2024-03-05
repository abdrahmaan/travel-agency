@extends('layout.master')

@section('content')
     <!-- Hotel Booking Hero -->
  <div class="flight-hero bg-primary-3p">
    <img src="{{asset('assets/img/flight-hero-el-1.png')}}" alt="image" class="img-fluid flight-hero__el flight-hero__el-1">
    <img src="{{asset('assets/img/flight-hero-el-2.png')}}" alt="image" class="img-fluid flight-hero__el flight-hero__el-2">
    <a href="https://vimeo.com/115041822" class="video-popup link d-grid flight-hero__el flight-hero__el-3">
      <img src="{{asset('assets/img/video-img.png')}}" alt="image" class="img-fluid">
    </a>
    <div class="container">
      <div class="row g-4 justify-content-end">
        <div class="col-lg-8 col-xl-6 col-xxl-5 ps-5" >
          <span class="d-inline-flex align-items-center bg-primary-50 gap-4 rounded-pill py-1 ps-1 pe-5">
            <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
              <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
            </span>
            <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold">{{__("strings.home_first")}}</span>
          </span>
          <h1 class="d2 mt-4 mb-6"> {{__("strings.home_second")}}</h1>
          <p dir="" class="mb-10 fs-18"> {{__("strings.home_third")}} </p>
        </div>
        <div class="">
          <form action="/{{app()->getLocale()}}/flight-search" method="POST">
            @csrf
            <div class="property-search p-6 rounded-3 bg-neutral-0">
              <ul class="list list-row {{app()->getLocale() == "ar" ? "justify-content-end" : "justify-content-start"}} flex-wrap align-items-center gap-6 mb-6">
                <li class="d-flex">
                  <div class="d-flex {{app()->getLocale() == "ar" ? "flex-row-reverse" : ""}} align-items-center gap-2">
                    <input class="custom-radio custom-radio--primary-300" checked type="radio" value="oneWay" name="tripType" id="oneWay">
                    <label class="d-block m-0 fs-18 fw-medium cursor-pointer" for="oneWay"> {{__("strings.oneWay")}} </label>
                    
                  </div>
                 
                </li>
                <li>
                  <div class="d-flex {{app()->getLocale() == "ar" ? "flex-row-reverse" : ""}} align-items-center gap-2">
                    <input class="custom-radio custom-radio--primary-300" value="roundTrip" type="radio" name="tripType" id="roundTrip">
                    <label class="d-inline-block m-0 fs-18 fw-medium cursor-pointer" for="roundTrip"> {{__("strings.roundTrip")}} </label>
                  </div>
                </li>
              </ul>
              <div class="property-search__content d-flex flex-wrap {{app()->getLocale() == "ar" ? "justify-content-start flex-row-reverse" : "justify-content-start" }} align-items-end gap-4">
                <div id="search" class="d-flex flex-column flex-grow-1  {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start" }}">
                  <h5 class="mb-2" style="font-size: 15px">{{__("strings.origin")}}</h5>
                  <div class="property-search__select w-100 property-search__col rounded-pill d-flex {{app()->getLocale() == "ar" ? "flex-row-reverse" : "" }} align-items-center gap-2 px-6">
                    <span class="material-symbols-outlined mat-icon"> distance </span>
                    <select name="originLocation" class="form-select text-center" aria-label="Default select example">
                      <option value="BKK">Bankok</option>
                      <option value="ALR">Alexandra</option>
                      <option value="SYD">Sydney</option>
                      <option value="HBE">Borg El Arab</option>
                      <option value="DXB">Dubi</option>
                    </select>
                  </div>
                </div>
                <div id="search" class="d-flex flex-column flex-grow-1  {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start" }}">
                  <h5 class="mb-2" style="font-size: 15px">{{__("strings.destination")}}</h5>
                  <div class="property-search__select w-100 property-search__col rounded-pill {{app()->getLocale() == "ar" ? "flex-row-reverse" : "" }} d-flex align-items-center gap-2 px-6">
                    <span class="material-symbols-outlined mat-icon"> distance </span>
                    <select name="destination" class="form-select text-center" aria-label="Default select example">
                      <option value="BKK">Bankok</option>
                      <option value="ALR">Alexandra</option>
                      <option value="SYD">Sydney</option>
                      <option value="HBE">Borg El Arab</option>
                      <option value="DXB">Dubi</option>
                    </select>
                  </div>
                </div>
                <div id="search" class="d-flex flex-column flex-grow-1  {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start" }}">
                  <h5 class="mb-2" style="font-size: 15px">{{__("strings.departureDate")}}</h5>
                  <div class="property-search__select w-100 property-search__col rounded-pill {{app()->getLocale() == "ar" ? "flex-row-reverse" : "" }} d-flex align-items-center gap-2 px-6">
                    <span class="material-symbols-outlined mat-icon d-none"> event </span>
                    <input name="departureDate" class="form-control border-0 py-3" type="date" style="background-color: #f9f9fe">
                   
                  </div>
                </div>
                {{-- Return Date --}}
                <div id="search" class="d-flex d-none returnDate flex-column flex-grow-1  {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start" }}">
                  <h5 class="mb-2" style="font-size: 15px">{{__("strings.returnDate")}}</h5>
                  <div class="property-search__select w-100 property-search__col rounded-pill {{app()->getLocale() == "ar" ? "flex-row-reverse" : "" }} d-flex align-items-center gap-2 px-6">
                    <span class="material-symbols-outlined mat-icon d-none"> event </span>
                    <input name="returnDate" class="form-control border-0 py-3" type="date" style="background-color: #f9f9fe">
                   
                  </div>
                </div>
                <div id="search" class="d-flex flex-column flex-grow-1  {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start" }}">
                  <h5 class="mb-2" style="font-size: 15px">{{__("strings.adults")}}</h5>
                  <div class="property-search__select w-100 property-search__col rounded-pill {{app()->getLocale() == "ar" ? "flex-row-reverse" : "" }} d-flex align-items-center gap-2 px-6">
                    <span class="material-symbols-outlined mat-icon"> person </span>
                    <select name="adults" class="form-select text-center" aria-label="Default select example">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  </div>
                </div>
                <div id="search" class="d-flex flex-column flex-grow-1  {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start" }}">
                  <h5 class="mb-2" style="font-size: 15px">{{__("strings.childrens")}}</h5>
                  <div class="property-search__select w-100 property-search__col rounded-pill {{app()->getLocale() == "ar" ? "flex-row-reverse" : "" }} d-flex align-items-center gap-2 px-6">
                    <span class="material-symbols-outlined mat-icon"> <span class="material-symbols-outlined">
                      escalator_warning
                      </span> </span>
                    <select name="childrens" class="form-select text-center" aria-label="Default select example">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  </div>
                </div>
                <div id="search" class="d-flex flex-column flex-grow-1 {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start" }}">
                  <h5 class="mb-2" style="font-size: 15px">{{__("strings.infants")}}</h5>
                  <div class="property-search__select w-100 property-search__col rounded-pill {{app()->getLocale() == "ar" ? "flex-row-reverse" : "" }} d-flex align-items-center gap-2 px-6">
                    <span class="material-symbols-outlined mat-icon">
                       <span class="material-symbols-outlined">
                         breastfeeding
                      </span>
                    </span> 
                    <select name="infants" class="form-select text-center" aria-label="Default select example">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  </div>
                </div>
               
                <div id="search" class="d-flex flex-column flex-grow-1  {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start" }}">
                  <h5 class="mb-2" style="font-size: 15px">{{__("strings.travelClass")}}</h5>
                  <div class="property-search__select w-100 property-search__col rounded-pill {{app()->getLocale() == "ar" ? "flex-row-reverse" : "" }} d-flex align-items-center gap-2 px-6">
                    <span class="material-symbols-outlined mat-icon"> flight </span>
                    <select name="travelClass" class="form-select text-center" aria-label="Default select example">
                      <option value="ECONOMY">ECONOMY</option>
                      <option value="PREMIUM_ECONOMY">PREMIUM_ECONOMY</option>
                      <option value="BUSINESS">BUSINESS</option>
                      <option value="FIRST">FIRST</option>
                    </select>
                  </div>
                </div>
                <div id="search" class="d-flex flex-column  {{app()->getLocale() == "ar" ? "align-items-end" : "align-items-start" }}">
                  <h5 class="mb-2" style="font-size: 15px">{{__("strings.maxPrice")}}</h5>
                  <div class="property-search__price property-search__col rounded-pill {{app()->getLocale() == "ar" ? "flex-row-reverse" : "" }} d-flex align-items-center gap-2 px-6 py-3">
                    <div class="d-flex gap-2 align-items-center">
                      <span class="material-symbols-rounded mat-icon"> add_card </span>
                      <span class="d-inline-block fs-14"> Price </span>
                    </div>
                    <div class="property-search__range d-grid">
                      <input name="maxPrice" type="range" min="1" max="20000" value="5000" class="property-search__range-input" id="myRange" oninput="rangevalue.value=value">
                    </div>
                    <div class="property-search__range-price">
                      <span class="d-inline-block fs-10 clr-primary-300"> $ <output class="property-search__range-value" id="rangevalue">5000</output>
                      </span>
                    </div>
                  </div>
                </div>
               
   
              
                <button class="btn rounded-pill property-search__btn property-search__col pt-3">
                  <span class="material-symbols-rounded mat-icon"> search </span>
                  
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Hotel Booking Hero -->


  <!-- Working Process -->
  <section class="section-space">
    <div class="section-space--sm-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center">
              <span class="d-inline-flex align-items-center bg-neutral-0 gap-4 rounded-pill py-1 ps-1 pe-5">
                <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
                  <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
                </span>
                <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold">{{__("strings.work_head")}}</span>
              </span>
              <h2 class="mt-4 mb-6"> {{__("strings.work_title")}}</h2>
              <p class="mb-0"> {{__("strings.work_desc")}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-4 {{app()->getLocale() == "ar" ? "flex-row-reverse" : "" }}">
        <div class="col-md-6 col-lg-4">
          <div class="border border-neutral-40 rounded-4 p-8 bg-neutral-0 text-center h-100">
            <div class="d-inline-block position-relative">
              <img src="{{asset('assets/img/work-process-icon-1.png')}}" alt="image" class="img-fluid">
              <span class="d-grid place-content-center w-10 h-10 rounded-circle bg-primary-300 clr-neutral-0 position-absolute top-0 left-0">
                <span class="h4 m-0"> 1 </span>
              </span>
            </div>
            <h3 class="mt-8 mb-6"> {{__("strings.work_step1_title")}}</h3>
            <p class="mb-0">  {{__("strings.work_step1_desc")}}</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="border border-neutral-40 rounded-4 p-8 bg-neutral-0 text-center h-100">
            <div class="d-inline-block position-relative">
              <img src="{{asset('assets/img/work-process-icon-2.png')}}" alt="image" class="img-fluid">
              <span class="d-grid place-content-center w-10 h-10 rounded-circle bg-primary-300 clr-neutral-0 position-absolute top-0 left-0">
                <span class="h4 m-0"> 2 </span>
              </span>
            </div>
            <h3 class="mt-8 mb-6">  {{__("strings.work_step2_title")}}</h3>
            <p class="mb-0">  {{__("strings.work_step2_desc")}}</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="border border-neutral-40 rounded-4 p-8 bg-neutral-0 text-center h-100">
            <div class="d-inline-block position-relative">
              <img src="{{asset('assets/img/work-process-icon-3.png')}}" alt="image" class="img-fluid">
              <span class="d-grid place-content-center w-10 h-10 rounded-circle bg-primary-300 clr-neutral-0 position-absolute top-0 left-0">
                <span class="h4 m-0"> 3 </span>
              </span>
            </div>
            <h3 class="mt-8 mb-6">  {{__("strings.work_step3_title")}}</h3>
            <p class="mb-0"> {{__("strings.work_step3_desc")}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Working Process -->

  <!-- Featured -->
  <div class="section-space bg-primary-3p d-none">
    <div class="section-space--sm-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-8 col-xxl-5">
            <div class="text-center">
              <span class="d-inline-flex align-items-center bg-neutral-0 gap-4 rounded-pill py-1 ps-1 pe-5">
                <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
                  <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
                </span>
                <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold"> Popular Destinations </span>
              </span>
              <h2 class="mt-4 mb-6"> Fly to popular destinations around the world </h2>
              <p class="mb-0"> Are you ready to plan your next adventure? Look no further than our list of popular destinations to fly to around the world </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-xl-4">
          <div class="property-card">
            <div class="property-card__head">
              <div class="property-card__img">
                <img src="{{asset('assets/img/featured-flight-1.jpg')}}" alt="image" class="img-fluid w-100">
              </div>
              <div class="listing-card__content">
                <div class="d-flex align-items-center justify-content-end">
                  <span class="d-grid place-content-center w-10 h-10 rounded-circle bg-neutral-0 clr-primary-300">
                    <span class="material-symbols-outlined mat-icon fw-200 property-card__heart"> info </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="property-card__body">
              <div class="d-flex justify-content-between mb-2">
                <a href="flight-details.html" class="link d-block flex-grow-1 clr-neutral-700 :clr-primary-300 fs-20 fw-medium"> Dubai, UAE </a>
                <div class="d-flex align-items-center flex-shrink-0">
                  <span class="material-symbols-outlined mat-icon solid clr-tertiary-300"> star_rate </span>
                  <span class="d-block clr-neutral-700"> 4.5 </span>
                </div>
              </div>
              <p class="mb-0"> This modern city in the desert is a top destination for luxury shopping. </p>
            </div>
            <div class="property-card__body py-0">
              <div class="hr-dashed"></div>
            </div>
            <div class="property-card__body">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <span class="d-flex align-items-center gap-3">
                  <img src="{{asset('assets/img/icon-plane.png')}}" alt="image" class="img-fluid flex-shrink-0">
                  <span class="d-inline-block">Daily 3 Flight</span>
                </span>
                <a href="flight-details.html" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> See All Flight </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="property-card">
            <div class="property-card__head">
              <div class="property-card__img">
                <img src="{{asset('assets/img/featured-flight-2.jpg')}}" alt="image" class="img-fluid w-100">
              </div>
              <div class="listing-card__content">
                <div class="d-flex align-items-center justify-content-end">
                  <span class="d-grid place-content-center w-10 h-10 rounded-circle bg-neutral-0 clr-primary-300">
                    <span class="material-symbols-outlined mat-icon fw-200 property-card__heart"> info </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="property-card__body">
              <div class="d-flex justify-content-between mb-2">
                <a href="flight-details.html" class="link d-block flex-grow-1 clr-neutral-700 :clr-primary-300 fs-20 fw-medium"> Cancun, Mexico </a>
                <div class="d-flex align-items-center flex-shrink-0">
                  <span class="material-symbols-outlined mat-icon solid clr-tertiary-300"> star_rate </span>
                  <span class="d-block clr-neutral-700"> 4.5 </span>
                </div>
              </div>
              <p class="mb-0"> TCancun is a top destination for relaxation and adventure and delicious cuisine. </p>
            </div>
            <div class="property-card__body py-0">
              <div class="hr-dashed"></div>
            </div>
            <div class="property-card__body">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <span class="d-flex align-items-center gap-3">
                  <img src="{{asset('assets/img/icon-plane.png')}}" alt="image" class="img-fluid flex-shrink-0">
                  <span class="d-inline-block">Daily 2 Flight</span>
                </span>
                <a href="flight-details.html" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> See All Flight </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="property-card">
            <div class="property-card__head">
              <div class="property-card__img">
                <img src="{{asset('assets/img/featured-flight-3.jpg')}}" alt="image" class="img-fluid w-100">
              </div>
              <div class="listing-card__content">
                <div class="d-flex align-items-center justify-content-end">
                  <span class="d-grid place-content-center w-10 h-10 rounded-circle bg-neutral-0 clr-primary-300">
                    <span class="material-symbols-outlined mat-icon fw-200 property-card__heart"> info </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="property-card__body">
              <div class="d-flex justify-content-between mb-2">
                <a href="flight-details.html" class="link d-block flex-grow-1 clr-neutral-700 :clr-primary-300 fs-20 fw-medium"> London, England </a>
                <div class="d-flex align-items-center flex-shrink-0">
                  <span class="material-symbols-outlined mat-icon solid clr-tertiary-300"> star_rate </span>
                  <span class="d-block clr-neutral-700"> 4.8 </span>
                </div>
              </div>
              <p class="mb-0"> This historic city is a perennial favorite among travelers with its iconic landmarks </p>
            </div>
            <div class="property-card__body py-0">
              <div class="hr-dashed"></div>
            </div>
            <div class="property-card__body">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <span class="d-flex align-items-center gap-3">
                  <img src="{{asset('assets/img/icon-plane.png')}}" alt="image" class="img-fluid flex-shrink-0">
                  <span class="d-inline-block">Daily 3 Flight</span>
                </span>
                <a href="flight-details.html" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> See All Flight </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="property-card">
            <div class="property-card__head">
              <div class="property-card__img">
                <img src="{{asset('assets/img/featured-flight-4.jpg')}}" alt="image" class="img-fluid w-100">
              </div>
              <div class="listing-card__content">
                <div class="d-flex align-items-center justify-content-end">
                  <span class="d-grid place-content-center w-10 h-10 rounded-circle bg-neutral-0 clr-primary-300">
                    <span class="material-symbols-outlined mat-icon fw-200 property-card__heart"> info </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="property-card__body">
              <div class="d-flex justify-content-between mb-2">
                <a href="flight-details.html" class="link d-block flex-grow-1 clr-neutral-700 :clr-primary-300 fs-20 fw-medium"> Bangkok, Thailand </a>
                <div class="d-flex align-items-center flex-shrink-0">
                  <span class="material-symbols-outlined mat-icon solid clr-tertiary-300"> star_rate </span>
                  <span class="d-block clr-neutral-700"> 4.5 </span>
                </div>
              </div>
              <p class="mb-0"> Bangkok offers a unique travel experience that is not to be missed </p>
            </div>
            <div class="property-card__body py-0">
              <div class="hr-dashed"></div>
            </div>
            <div class="property-card__body">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <span class="d-flex align-items-center gap-3">
                  <img src="{{asset('assets/img/icon-plane.png')}}" alt="image" class="img-fluid flex-shrink-0">
                  <span class="d-inline-block">Daily 3 Flight</span>
                </span>
                <a href="flight-details.html" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> See All Flight </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="property-card">
            <div class="property-card__head">
              <div class="property-card__img">
                <img src="{{asset('assets/img/featured-flight-5.jpg')}}" alt="image" class="img-fluid w-100">
              </div>
              <div class="listing-card__content">
                <div class="d-flex align-items-center justify-content-end">
                  <span class="d-grid place-content-center w-10 h-10 rounded-circle bg-neutral-0 clr-primary-300">
                    <span class="material-symbols-outlined mat-icon fw-200 property-card__heart"> info </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="property-card__body">
              <div class="d-flex justify-content-between mb-2">
                <a href="flight-details.html" class="link d-block flex-grow-1 clr-neutral-700 :clr-primary-300 fs-20 fw-medium"> Sydney, Australia </a>
                <div class="d-flex align-items-center flex-shrink-0">
                  <span class="material-symbols-outlined mat-icon solid clr-tertiary-300"> star_rate </span>
                  <span class="d-block clr-neutral-700"> 4.8 </span>
                </div>
              </div>
              <p class="mb-0"> Sydney is a top destination for travelers seeking sun, sand, and surf. </p>
            </div>
            <div class="property-card__body py-0">
              <div class="hr-dashed"></div>
            </div>
            <div class="property-card__body">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <span class="d-flex align-items-center gap-3">
                  <img src="{{asset('assets/img/icon-plane.png')}}" alt="image" class="img-fluid flex-shrink-0">
                  <span class="d-inline-block">Daily 3 Flight</span>
                </span>
                <a href="flight-details.html" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> See All Flight </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="property-card">
            <div class="property-card__head">
              <div class="property-card__img">
                <img src="{{asset('assets/img/featured-flight-6.jpg')}}" alt="image" class="img-fluid w-100">
              </div>
              <div class="listing-card__content">
                <div class="d-flex align-items-center justify-content-end">
                  <span class="d-grid place-content-center w-10 h-10 rounded-circle bg-neutral-0 clr-primary-300">
                    <span class="material-symbols-outlined mat-icon fw-200 property-card__heart"> info </span>
                  </span>
                </div>
              </div>
            </div>
            <div class="property-card__body">
              <div class="d-flex justify-content-between mb-2">
                <a href="flight-details.html" class="link d-block flex-grow-1 clr-neutral-700 :clr-primary-300 fs-20 fw-medium"> Paris, France </a>
                <div class="d-flex align-items-center flex-shrink-0">
                  <span class="material-symbols-outlined mat-icon solid clr-tertiary-300"> star_rate </span>
                  <span class="d-block clr-neutral-700"> 4.5 </span>
                </div>
              </div>
              <p class="mb-0"> The City of Lights is a perennial favorite among travelers with its charming cafes </p>
            </div>
            <div class="property-card__body py-0">
              <div class="hr-dashed"></div>
            </div>
            <div class="property-card__body">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <span class="d-flex align-items-center gap-3">
                  <img src="{{asset('assets/img/icon-plane.png')}}" alt="image" class="img-fluid flex-shrink-0">
                  <span class="d-inline-block">Daily 3 Flight</span>
                </span>
                <a href="flight-details.html" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> See All Flight </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-space--sm-top text-center">
      <a href="flight-list.html" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> See All Destinations </a>
    </div>
  </div>
  <!-- /Featured -->

  <!-- Flight Facilities -->
  <div class="section-space">
    <div class="section-space--sm-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-xl-6 col-xxl-5">
            <div class="text-center">
              <span class="d-inline-flex align-items-center bg-primary-50 gap-4 rounded-pill py-1 ps-1 pe-5">
                <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
                  <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
                </span>
                <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold"> {{__("strings.flight_facilities_head")}}</span>
              </span>
              <h2 class="mt-4 mb-6">  {{__("strings.flight_facilities_title")}}</h2>
              <p class="mb-0"> {{__("strings.flight_facilities_desc")}} </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4 col-xl-3">
          <div class="rounded-4 p-6 p-xl-8 text-center :box-shadow">
            <img src="{{asset('assets/img/duotone-breakfast.png')}}" alt="image" class="img-fluid mx-auto mb-6">
            <h4 class="mb-4">  {{__("strings.flight_facilities4_title")}} </h4>
            <p class="mb-0"> {{__("strings.flight_facilities_card_desc")}}</p>
          </div>
        </div>
        <div class="col-md-4 col-xl-3">
          <div class="rounded-4 p-6 p-xl-8 text-center :box-shadow">
            <img src="{{asset('assets/img/duotone-seat.png')}}" alt="image" class="img-fluid mx-auto mb-6">
            <h4 class="mb-4"> {{__("strings.flight_facilities3_title")}}</h4>
            <p class="mb-0"> {{__("strings.flight_facilities_card_desc")}}</p>
          </div>
        </div>
        <div class="col-md-4 col-xl-3">
          <div class="rounded-4 p-6 p-xl-8 text-center :box-shadow">
            <img src="{{asset('assets/img/duotone-wifi.png')}}" alt="image" class="img-fluid mx-auto mb-6">
            <h4 class="mb-4"> {{__("strings.flight_facilities2_title")}}</h4>
            <p class="mb-0">{{__("strings.flight_facilities_card_desc")}}</p>
          </div>
        </div>
        <div class="col-md-4 col-xl-3">
          <div class="rounded-4 p-6 p-xl-8 text-center :box-shadow">
            <img src="{{asset('assets/img/duotone-drinks.png')}}" alt="image" class="img-fluid mx-auto mb-6">
            <h4 class="mb-4"> {{__("strings.flight_facilities1_title")}}</h4>
            <p class="mb-0"> {{__("strings.flight_facilities_card_desc")}}</p>
          </div>
        </div>
        <div class="col-md-4 col-xl-3">
          <div class="rounded-4 p-6 p-xl-8 text-center :box-shadow">
            <img src="{{asset('assets/img/duotone-coffee.png')}}" alt="image" class="img-fluid mx-auto mb-6">
            <h4 class="mb-4"> {{__("strings.flight_facilities8_title")}}</h4>
            <p class="mb-0"> {{__("strings.flight_facilities_card_desc")}}</p>
          </div>
        </div>
        <div class="col-md-4 col-xl-3">
          <div class="rounded-4 p-6 p-xl-8 text-center :box-shadow">
            <img src="{{asset('assets/img/duotone-pray.png')}}" alt="image" class="img-fluid mx-auto mb-6">
            <h4 class="mb-4">{{__("strings.flight_facilities7_title")}}</h4>
            <p class="mb-0"> {{__("strings.flight_facilities_card_desc")}}</p>
          </div>
        </div>
        <div class="col-md-4 col-xl-3">
          <div class="rounded-4 p-6 p-xl-8 text-center :box-shadow">
            <img src="{{asset('assets/img/duotone-medicine.png')}}" alt="image" class="img-fluid mx-auto mb-6">
            <h4 class="mb-4"> {{__("strings.flight_facilities6_title")}} </h4>
            <p class="mb-0">{{__("strings.flight_facilities_card_desc")}} </p>
          </div>
        </div>
        <div class="col-md-4 col-xl-3">
          <div class="rounded-4 p-6 p-xl-8 text-center :box-shadow">
            <img src="{{asset('assets/img/duotone-support.png')}}" alt="image" class="img-fluid mx-auto mb-6">
            <h4 class="mb-4"> {{__("strings.flight_facilities5_title")}} </h4>
            <p class="mb-0">{{__("strings.flight_facilities_card_desc")}} </p>
          </div>
        </div>
      </div>
    </div>
    <div class="section-space--sm-top text-center d-none">
      <a href="flight-list.html" class="btn btn-outline-primary py-3 px-6 rounded-pill d-inline-flex align-items-center gap-1 fw-semibold"> See All Facilities </a>
    </div>
  </div>
  <!-- /Flight Facilities -->

  <!-- Discount Card -->
  <div class="discount-section mb-5 d-none ">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="swiper discount-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="discount-card p-6 p-lg-8 p-xl-10 rounded-4 overflow-hidden position-relative z-1">
                  <img src="{{asset('assets/img/discount-img-5.jpg')}}" alt="image" class="h-100 w-100 discount-card__img">
                  <div class="discount-card__content d-flex flex-column align-items-start ms-lg-auto">
                    <span class="d4 fw-semibold d-block clr-neutral-0"> 50% OFF </span>
                    <p class="mb-10 clr-neutral-0 fs-24 max-text-20"> Fly to the Glitz and Glamour of Dubai </p>
                    <a href="flight-list.html" class="link d-inline-block py-3 px-6 fw-semibold clr-primary-300 bg-neutral-0 rounded"> Book Now </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="discount-card p-6 p-lg-8 p-xl-10 rounded-4 overflow-hidden position-relative z-1">
                  <img src="{{asset('assets/img/discount-img-6.jpg')}}" alt="image" class="h-100 w-100 discount-card__img">
                  <span class="d4 fw-semibold d-block clr-neutral-0"> 35% OFF </span>
                  <p class="mb-10 clr-neutral-0 fs-24 max-text-20"> Fly to the Iconic City of Sydney, Australia </p>
                  <a href="flight-list.html" class="link d-inline-block py-3 px-6 fw-semibold clr-secondary-400 bg-neutral-0 rounded"> Book Now </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Discount Card -->

  <!-- Info  -->
  <div class="section-space bg-primary-5p d-none">
    <div class="container">
      <div class="row g-4 justify-content-between">
        <div class="col-lg-6">
          <span class="d-inline-flex align-items-center bg-primary-50 gap-4 rounded-pill py-1 ps-1 pe-5">
            <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
              <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
            </span>
            <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold"> Air, sleep, dream </span>
          </span>
          <h2 class="mt-4 mb-6"> Whatever you can get from us </h2>
          <p class="mb-15"> If you're looking to book a flight, there are many online travel agencies and airline websites that offer flight booking services. </p>
          <ul class="list">
            <li class="d-sm-flex gap-6">
              <div class="d-grid place-content-center w-12 h-12 rounded-circle bg-primary-300 clr-neutral-0 mb-6 fs-18 fw-semibold flex-shrink-0"> 01 </div>
              <div class="flex-grow-1">
                <h4 class="mb-3"> Find flight bookings that suit a flexible itinerary </h4>
                <p class="mb-0"> Our airline offers a variety of flights with flexible scheduling options, making it easy for you to plan your trip around your schedule </p>
              </div>
            </li>
            <li>
              <div class="hr-dashed my-8"></div>
            </li>
            <li class="d-sm-flex gap-6">
              <div class="d-grid place-content-center w-12 h-12 rounded-circle bg-secondary-300 clr-neutral-0 mb-6 fs-18 fw-semibold flex-shrink-0"> 02 </div>
              <div class="flex-grow-1">
                <h4 class="mb-3"> Flight Booking with more confidence </h4>
                <p class="mb-0"> When it comes to booking your next flight, it's important to feel confident in your decision. </p>
              </div>
            </li>
            <li>
              <div class="hr-dashed my-8"></div>
            </li>
            <li class="d-sm-flex gap-6">
              <div class="d-grid place-content-center w-12 h-12 rounded-circle bg-tertiary-300 clr-neutral-0 mb-6 fs-18 fw-semibold flex-shrink-0"> 03 </div>
              <div class="flex-grow-1">
                <h4 class="mb-3"> See what are the benefits of flight booking </h4>
                <p class="mb-0"> Booking your flights in advance has many benefits that can make your travel experience smoother and more enjoyable. </p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 col-xxl-5">
          <img src="{{asset('assets/img/info-img.png')}}" alt="image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <!-- /Info  -->

  <!-- CTA  -->
  <section class="discount-section-start my-3 d-none overflow-hidden w-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cta-section section-space--sm">
            <div class="row">
              <div class="col-md-8 col-lg-7 col-xxl-6">
                <span class="d-inline-flex align-items-center bg-neutral-0 gap-4 rounded-pill py-1 ps-1 pe-5">
                  <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
                    <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
                  </span>
                  <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold"> Call To Action </span>
                </span>
                <h2 class="mt-4 mb-10"> Find your dream property with our expert help </h2>
                <a href="contact.html" class="link d-inline-flex align-items-center gap-2 py-3 px-6 rounded-pill bg-primary-300 clr-neutral-0 :bg-primary-400 :clr-neutral-0 fw-semibold">
                  <span class="d-inline-block"> Contact Us </span>
                  <span class="material-symbols-outlined mat-icon fw-200"> trending_flat </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /CTA  -->

  <!-- Testimonial -->
  <div class="section-space d-none">
    <div class="section-space--sm-bottom">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <span class="d-inline-flex align-items-center bg-primary-50 gap-4 rounded-pill py-1 ps-1 pe-5">
              <span class="w-9 h-9 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-0">
                <span class="material-symbols-outlined mat-icon fw-200"> arrow_right_alt </span>
              </span>
              <span class="h5 lh-1 m-0 clr-primary-400 fw-semibold"> Testimonial </span>
            </span>
            <h2 class="mt-4 mb-0"> Our Satisfied Customers Says </h2>
          </div>
          <div class="col-md-4 col-lg-5 col-xl-6">
            <div class="text-md-end d-flex gap-3 justify-content-md-end">
              <div class="swiper-button-prev testimonial-slider-two__btn testimonial-slider-two__btn-prev">
              </div>
              <div class="swiper-button-next testimonial-slider-two__btn testimonial-slider-two__btn-next">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="swiper testimonial-slider-two">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="p-5 rounded-4 border border-neutral-50 bg-">
                  <div class="bg-primary-3p rounded-4 p-8">
                    <ul class="list list-row align-items-center flex-wrap mb-2">
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_half </span>
                      </li>
                    </ul>
                    <p class="fs-20 mb-0"> I had an excellent experience working with [real estate agent/agency name] to buy/sell my property. From start to finish, their professionalism and expertise </p>
                    <div class="hr-dashed my-8"></div>
                    <div class="d-inline-flex align-items-center gap-5">
                      <div class="w-15 h-15 rounded-circle overflow-hidden flex-shrink-0">
                        <img src="{{asset('assets/img/testimonial-img.jpg')}}" alt="img" class="img-fluid w-100 h-100 objec-fit-cover">
                      </div>
                      <div class="flex-grow-1">
                        <span class="d-block fs-20 fw-semibold mb-1 text-start"> Jenny Wilson </span>
                        <div class="d-flex align-items-center gap-1">
                          <span class="material-symbols-outlined mat-icon clr-tertiary-400"> distance </span>
                          <span class="d-inline-block"> Canada </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="p-5 rounded-4 border border-neutral-50 bg-">
                  <div class="bg-primary-3p rounded-4 p-8">
                    <ul class="list list-row align-items-center flex-wrap mb-2">
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_rate </span>
                      </li>
                      <li>
                        <span class="material-symbols-outlined mat-icon solid fs-32 clr-tertiary-300"> star_half </span>
                      </li>
                    </ul>
                    <p class="fs-20 mb-0"> I had an excellent experience working with [real estate agent/agency name] to buy/sell my property. From start to finish, their professionalism and expertise </p>
                    <div class="hr-dashed my-8"></div>
                    <div class="d-inline-flex align-items-center gap-5">
                      <div class="w-15 h-15 rounded-circle overflow-hidden flex-shrink-0">
                        <img src="{{asset('assets/img/testimonial-img-2.jpg')}}" alt="img" class="img-fluid w-100 h-100 objec-fit-cover">
                      </div>
                      <div class="flex-grow-1">
                        <span class="d-block fs-20 fw-semibold mb-1 text-start"> Fatiha Jara </span>
                        <div class="d-flex align-items-center gap-1">
                          <span class="material-symbols-outlined mat-icon clr-tertiary-400"> distance </span>
                          <span class="d-inline-block"> Dubai </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Testimonial -->
@endsection 


@section('css')

  <style>

    @media (max-width: 768px){
      #search{
        width: 100% !important;
      }
    }

  </style>
    
@endsection


@section('script')
    <script> 
    
        let radioRoundTrip = document.querySelector("input#roundTrip");
        let radioOneWay = document.querySelector("input#oneWay");

        let returnDateInput = document.querySelector("div.returnDate");

        radioRoundTrip.addEventListener("click",(e)=>{
          if (e.target.checked == true) {
            returnDateInput.classList.contains("d-none") ? returnDateInput.classList.remove("d-none") : null;
          } 
        });

        radioOneWay.addEventListener("click",(e)=>{
          console.log(e.target.value);
          if (e.target.checked == true) {
            returnDateInput.classList.contains("d-none") ? null : returnDateInput.classList.add("d-none");
          } 
        });

    
    </script>
@endsection