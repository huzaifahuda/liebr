@extends('frontend.layouts.main')
@section('main-container')

    <!-- dashboard -->
    <div class="hero-banner d-flex align-items-center">
        <div class="container px-2">
            <h1 class="text-white fw-bold mb-5 text-center" style="margin-top: -100px">Hi El, vind alle mensen die je nodig hebt!</h1>
        </div>
  </div>
  <div class="container" style="margin-top: -160px;">
    <div class="row">
      <div class="col-md-12 px-4">
        <div class="sec-01">
          <p class="top-para text-white mb-1 mx-1 fw-bold">Mijn shifts</p>
        </div>
        <div class="row checkoutsection p-3 mx-1">
          <div class="col-md-6">
            <div class="img-sec d-flex align-items-center">
              <img src="{{asset('panel/img/sent-1.png')}}" alt="" class="img-responsive dash-icon">
              <div class="childcontent mx-3">
                <div class="heading">
                  <h3 style="font-size: 20px; font-weight: 600;">Plan je shifts </h3>
                </div>

              </div>
            </div>
            <div class="paragraphtext">
              <p>Creëer nieuwe shifts en maak ze aantrekkelijk voor FreeFlexers om te solliciteren. Bekijk de profielen
                van de FreeFlexers die gereageerd hebben en accepteer de beste fit.</p>
            </div>
          </div>
          <div class="col-md-6 text-end">
            <a href="#" class="anchortext">
              <i class="fas fa-less-than">></i>
            </a>
          </div>
          <div class="row py-3">
            <!-- col -->
            <div class="col-md-4">
              <div class="img-sec d-flex align-items-center">
                {{-- <img src="{{asset('panel/img/sent-1.png')}}" alt="" class="img-responsive dash-icon"> --}}
                <div class="icon-box-icon" style="background: #00ff86;"></div>
                <div class="childcontent mx-3">
                  <div class="heading">
                    <p class="dash-head"><span>Bekijk vervulde shifts</span> </p>
                  </div>

                </div>
              </div>
              <div class="paragraphtext">
                <p>Shifts met een groene status zijn vervuld. Bekijk ze om te zien welke FreeFlexers komen.</p>
              </div>
            </div>

            <!-- col -->
            <div class="col-md-4">
              <div class="img-sec d-flex align-items-center">
                {{-- <img src="{{asset('panel/img/sent-1.png')}}" alt="" class="img-responsive dash-icon"> --}}
                <div class="icon-box-icon" style="background: #ff8700;"></div>

                <div class="childcontent mx-3">
                  <div class="heading">
                    <p class="dash-head"><span>Bekijk vervulde shifts</span> </p>
                  </div>

                </div>
              </div>
              <div class="paragraphtext">
                <p>Shifts met een groene status zijn vervuld. Bekijk ze om te zien welke FreeFlexers komen.</p>
              </div>
            </div>

            <!-- col -->
            <div class="col-md-4">
              <div class="img-sec d-flex align-items-center">
                {{-- <img src="{{asset('panel/img/sent-1.png')}}" alt="" class="img-responsive dash-icon"> --}}
                <div class="icon-box-icon" style="background: #ef142d;"></div>

                <div class="childcontent mx-3">
                  <div class="heading">
                    <p class="dash-head"><span>Bekijk vervulde shifts</span> </p>
                  </div>

                </div>
              </div>
              <div class="paragraphtext">
                <p>Shifts met een groene status zijn vervuld. Bekijk ze om te zien welke FreeFlexers komen.</p>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- second section -->
  <div class="container my-4">
    <div class="row">
      <div class="col-md-12 px-4">
        <div class="sec-01">
          <p class="top-para">Mijn checkouts</p>
        </div>
        <div class="row checkoutsection p-3">
          <div class="col-md-6">
            <div class="img-sec d-flex align-items-center">
              <img src="{{asset('panel/img/sent-1.png')}}" alt="" class="img-responsive dash-icon">
              <div class="childcontent mx-3">
                <div class="heading">
                  <h3>Plan je shifts </h3>
                </div>

              </div>
            </div>
            <div class="paragraphtext">
              <p>Creëer nieuwe shifts en maak ze aantrekkelijk voor FreeFlexers om te solliciteren. Bekijk de profielen
                van de FreeFlexers die gereageerd hebben en accepteer de beste fit.</p>
            </div>
          </div>
          <div class="col-md-6 text-end">
            <a href="#" class="anchortext">
              <i class="fas fa-less-than">></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Third section -->
   <div class="container">
    <div class="row d-flex justify-content-end">
      <div class="col-md-6 px-4">
        <div class="sec-01">
          <p class="top-para">Mijn financiën</p>
        </div>
        <div class="row checkoutsection p-3">
          <div class="col-md-10">
            <div class="img-sec d-flex align-items-center">
              <img src="{{asset('panel/img/sent-1.png')}}" alt="" class="img-responsive dash-icon">
              <div class="childcontent mx-3">
                <div class="heading">
                  <h3>Plan je shifts </h3>
                </div>

              </div>
            </div>
            <div class="paragraphtext">
              <p>Creëer nieuwe shifts en maak ze aantrekkelijk voor FreeFlexers om te solliciteren. Bekijk de profielen
                van de FreeFlexers die gereageerd hebben en accepteer de beste fit.</p>
            </div>
          </div>
          <div class="col-md-2 text-end">
            <a href="#" class="anchortext">
              <i class="fas fa-less-than">></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 px-4">
        <div class="sec-01">
          <p class="top-para">Mijn shifts</p>
        </div>
        <div class="row checkoutsection p-3">
          <div class="col-md-10">
            <div class="img-sec d-flex align-items-center">
              <img src="{{asset('panel/img/sent-1.png')}}" alt="" class="img-responsive dash-icon">
              <div class="childcontent mx-3">
                <div class="heading">
                  <h3>Plan je shifts </h3>
                </div>

              </div>
            </div>
            <div class="paragraphtext">
              <p>Creëer nieuwe shifts en maak ze aantrekkelijk voor FreeFlexers om te solliciteren. Bekijk de profielen
                van de FreeFlexers die gereageerd hebben en accepteer de beste fit.</p>
            </div>
          </div>
          <div class="col-md-2 text-end">
            <a href="#" class="anchortext">
              <i class="fas fa-less-than">></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- fourth section --}}

  <!-- second section -->
  <div class="container my-4">
    <div class="row">
      <div class="col-md-12 px-4">
        <div class="sec-01">
          <p class="top-para">Mijn flexpools</p>
        </div>
        <div class="row checkoutsection p-3">
          <div class="col-md-6">
            <div class="img-sec d-flex align-items-center">
              <img src="{{asset('panel/img/sent-1.png')}}" alt="" class="img-responsive dash-icon">
              <div class="childcontent mx-3">
                <div class="heading">
                  <h3>Plan je shifts </h3>
                </div>

              </div>
            </div>
            <div class="paragraphtext">
              <p>Creëer nieuwe shifts en maak ze aantrekkelijk voor FreeFlexers om te solliciteren. Bekijk de profielen
                van de FreeFlexers die gereageerd hebben en accepteer de beste fit.</p>
            </div>
          </div>
          <div class="col-md-6 text-end">
            <a href="#" class="anchortext">
              <i class="fas fa-less-than">></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end of dashboard -->
  
@endsection
