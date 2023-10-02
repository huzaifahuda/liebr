@extends('frontend.layouts.main')
@section('main-container')

    <!-- Checkouts -->
  <div class="container my-5" style="height: 90vh">
    <div class="row">
      <div class="col-md-12">
        <h3>Checkouts</h3>
      </div>
    </div>

    <div class="row my-3 checkoutsection p-3">
      <div class="col-md-12">
        <div class="img-sec d-flex align-items-center">
          <img src="{{asset('panel/img/sent-1.png')}}" alt="" class="img-responsive bgicon">
          <div class="childcontent mx-3">
            <div class="heading">
              <h3>It's still quiet now...</h3>
            </div>
            <div class="paragraphtext">
              <p>Once a FreeFlexer has checked out, you can check the time registration here.</p>
            </div>
          </div>
        </div>
        <div class="contect-sec">

        </div>
      </div>
    </div>

  </div>
  <!-- End Of Checkouts -->

@endsection
