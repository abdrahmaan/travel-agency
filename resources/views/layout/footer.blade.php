<!-- Footer -->
<div class="bg-neutral-900">
    <div class="section-space">
      <div class="container">
        <div class="row gy-5 {{app()->getLocale() == "ar" ? "flex-row-reverse" : ""}}">
          <div dir="{{app()->getLocale() == "ar" ? "rtl" : ""}}" class="col-md-4 col-xl-4 align-items-center">
            <a href="index.html" class="link d-flex justify-content-start mb-6 w-100">
              <img src="{{asset('assets/img/logo.png')}}" width="100px" alt="image" class="img-fluid">
            </a>
            <p class="clr-neutral-30 mb-6"> {{__("strings.footer_desc")}}
            </p>
            <ul class="list list-row gap-3 flex-wrap">
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle border border-primary clr-neutral-0 :bg-primary-300 :clr-neutral-0">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle border border-primary clr-neutral-0 :bg-primary-300 :clr-neutral-0">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle border border-primary clr-neutral-0 :bg-primary-300 :clr-neutral-0">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle border border-primary clr-neutral-0 :bg-primary-300 :clr-neutral-0">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#" class="link d-grid place-content-center w-9 h-9 rounded-circle border border-primary clr-neutral-0 :bg-primary-300 :clr-neutral-0">
                  <i class="fab fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div dir="{{app()->getLocale() == "ar" ? "rtl" : ""}}" class="col-md-4 col-xl-4">
            <h4 class="clr-neutral-0 mb-6"> {{__("strings.quick_links")}}</h4>
            <ul class="list gap-2">
              <li>
                <a href="#" class="link d-inline-block clr-neutral-30 :clr-secondary-300"> {{__("strings.contact_us")}}</a>
              </li>
              <li>
                <a href="#" class="link d-inline-block clr-neutral-30 :clr-secondary-300"> {{__("strings.travel_religon")}} </a>
              </li>
              <li>
                <a href="#" class="link d-inline-block clr-neutral-30 :clr-secondary-300"> {{__("strings.travel_out")}}</a>
              </li>
              

            </ul>
          </div>
          <div dir="{{app()->getLocale() == "ar" ? "rtl" : ""}}" class="col-md-4 col-xl-4">
            <h4 class="clr-neutral-0 mb-6"> {{__("strings.contact_us")}} </h4>
            <ul class="list gap-4">
              <li>
                <div class="d-flex align-items-center gap-4">
                  <div class="w-8 h-8 rounded-circle d-grid place-content-center bg-primary-300 clr-neutral-0 flex-shrink-00">
                    <span class="material-symbols-outlined mat-icon fw-200"> phone_in_talk </span>
                  </div>
                  <p class="mb-0 clr-neutral-30"> (+20)1211110310 </p>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-4">
                  <div class="w-8 h-8 rounded-circle d-grid place-content-center bg-secondary-300 clr-neutral-0 flex-shrink-00">
                    <span class="material-symbols-outlined mat-icon fw-200"> mark_as_unread </span>
                  </div>
                  <p class="mb-0 clr-neutral-30"> example@mail.com </p>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center gap-4">
                  <div class="w-8 h-8 rounded-circle d-grid place-content-center bg-tertiary-300 clr-neutral-0 flex-shrink-00">
                    <span class="material-symbols-outlined mat-icon fw-200"> distance </span>
                  </div>
                  <p class="mb-0 clr-neutral-30"> {{__("strings.address_real")}} </p>
                </div>
              </li>
            </ul>
          </div>
          <div dir="{{app()->getLocale() == "ar" ? "rtl" : ""}}" class="col-md-6 col-xl-3 d-none">
            <h4 class="clr-neutral-0 mb-6"> Newsletter </h4>
            <p class="mb-6 clr-neutral-30"> Subscribe our newsletter to get our latest update & news </p>
            <div class="p-2 rounded-pill border border-neutral-200">
              <form action="#" class="d-flex align-items-center">
                <input type="text" placeholder="Email address" class="w-100 border-0 bg-transparent clr-neutral-30 px-3 py-2 ::placeholder-neutral-30 :focus-outline-0">
                <button type="button" class="d-grid place-content-center px-6 py-3 rounded-pill bg-tertiary-300 clr-neutral-0 border-0">
                  <span class="material-symbols-outlined mat-icon fw-300"> send </span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="py-8 border-top border-primary-500">
            <div class="row g-4 align-items-center">
              <div class="col-lg-6">
                <p class="m-0 clr-neutral-0 text-center text-lg-start"> Copyright &copy; 2024 <span class="clr-tertiary-300">Mallem Travels</span>. Designed By <a href="#" class="link clr-secondary-300">Eng. Abdulrahman Hamdy</a>
                </p>
              </div>
              <div class="col-lg-6">
                <ul class="list list-row align-items-center flex-wrap gap-6 justify-content-center justify-content-lg-end">
                  <li>
                    <a href="#" class="link clr-neutral-0 :clr-secondary-300"> تسجيل دخول </a>
                  </li>
                  <li>
                    <a href="#" class="link clr-neutral-0 :clr-secondary-300"> تسجيل حساب </a>
                  </li>
                  <li>
                    <a href="#" class="link clr-neutral-0 :clr-secondary-300"> الشروط والأحكام </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Footer -->