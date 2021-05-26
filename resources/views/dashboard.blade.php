

@extends('layouts.main')


@push('after-styles')
  <style>
  </style>
@endpush

@section('content')

    <div class="page-holder w-100 d-flex flex-wrap">

      <div class="container-fluid px-xl-5">
        <section class="py-5">
          <div class="row">
            <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex align-items-center">
                  <div class="dot mr-3 bg-violet"></div>
                  <div class="text">
                    <h6 class="mb-0">Venues' details</h6><span class="text-gray">145,14 GB</span>
                  </div>
                </div>
                <div class="icon text-white bg-violet"><i class="fas fa-server"></i></div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex align-items-center">
                  <div class="dot mr-3 bg-green"></div>
                  <div class="text">
                    <h6 class="mb-0">Book Venue</h6><span class="text-gray">32</span>
                  </div>
                </div>
                <div class="icon text-white bg-green"><i class="far fa-clipboard"></i></div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex align-items-center">
                  <div class="dot mr-3 bg-blue"></div>
                  <div class="text">
                    <h6 class="mb-0">Event News</h6><span class="text-gray">400</span>
                  </div>
                </div>
                <div class="icon text-white bg-blue"><i class="fa fa-dolly-flatbed"></i></div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
              <div class="bg-white shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex align-items-center">
                  <div class="dot mr-3 bg-red"></div>
                  <div class="text">
                    <h6 class="mb-0">Comment</h6><span class="text-gray">123</span>
                  </div>
                </div>
                <div class="icon text-white bg-red"><i class="fas fa-receipt"></i></div>
              </div>
            </div>
          </div>
        </section>


        <!--Here we present the comments from users-->
{{--        <section class="py-5">--}}
{{--          <div class="row">--}}
{{--            <div class="col-lg-12"><a href="#" class="message card px-5 py-3 mb-4 bg-hover-gradient-primary no-anchor-style">--}}
{{--                <div class="row">--}}
{{--                  <div class="col-lg-3 d-flex align-items-center flex-column flex-lg-row text-center text-md-left"><strong class="h5 mb-0">24<sup class="smaller text-gray font-weight-normal">Apr</sup></strong><img src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/img/avatar-1.jpg" alt="..." style="max-width: 3rem" class="rounded-circle mx-3 my-2 my-lg-0">--}}
{{--                    <h6 class="mb-0">Jason Maxwell</h6>--}}
{{--                  </div>--}}
{{--                  <div class="col-lg-9 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">--}}
{{--                    <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">User testing</div>--}}
{{--                    <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>--}}
{{--                  </div>--}}
{{--                </div></a></div>--}}
{{--            <div class="col-lg-12"><a href="#" class="message card px-5 py-3 mb-4 bg-hover-gradient-primary no-anchor-style">--}}
{{--                <div class="row">--}}
{{--                  <div class="col-lg-3 d-flex align-items-center flex-column flex-lg-row text-center text-md-left"><strong class="h5 mb-0">24<sup class="smaller text-gray font-weight-normal">Nov</sup></strong><img src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/img/avatar-2.jpg" alt="..." style="max-width: 3rem" class="rounded-circle mx-3 my-2 my-lg-0">--}}
{{--                    <h6 class="mb-0">Sam Andy</h6>--}}
{{--                  </div>--}}
{{--                  <div class="col-lg-9 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">--}}
{{--                    <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">Web Developer</div>--}}
{{--                    <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>--}}
{{--                  </div>--}}
{{--                </div></a></div>--}}
{{--            <div class="col-lg-12"><a href="#" class="message card px-5 py-3 mb-4 bg-hover-gradient-primary no-anchor-style">--}}
{{--                <div class="row">--}}
{{--                  <div class="col-lg-3 d-flex align-items-center flex-column flex-lg-row text-center text-md-left"><strong class="h5 mb-0">17<sup class="smaller text-gray font-weight-normal">Aug</sup></strong><img src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/img/avatar-3.jpg" alt="..." style="max-width: 3rem" class="rounded-circle mx-3 my-2 my-lg-0">--}}
{{--                    <h6 class="mb-0">Margret Peter</h6>--}}
{{--                  </div>--}}
{{--                  <div class="col-lg-9 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">--}}
{{--                    <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">Analysis Agent</div>--}}
{{--                    <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>--}}
{{--                  </div>--}}
{{--                </div></a></div>--}}
{{--            <div class="col-lg-12"><a href="#" class="message card px-5 py-3 mb-4 bg-hover-gradient-primary no-anchor-style">--}}
{{--                <div class="row">--}}
{{--                  <div class="col-lg-3 d-flex align-items-center flex-column flex-lg-row text-center text-md-left"><strong class="h5 mb-0">15<sup class="smaller text-gray font-weight-normal">Sep</sup></strong><img src="https://d19m59y37dris4.cloudfront.net/bubbly-dashboard/1-0/img/avatar-4.jpg" alt="..." style="max-width: 3rem" class="rounded-circle mx-3 my-2 my-lg-0">--}}
{{--                    <h6 class="mb-0">Jason Doe</h6>--}}
{{--                  </div>--}}
{{--                  <div class="col-lg-9 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">--}}
{{--                    <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0 text-dark exclode">User testing</div>--}}
{{--                    <p class="mb-0 mt-3 mt-lg-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>--}}
{{--                  </div>--}}
{{--                </div></a></div>--}}
{{--          </div>--}}
{{--        </section>--}}
      </div>


    </div>
@endsection

@push('after-scripts')
  <script>

  </script>
@endpush


