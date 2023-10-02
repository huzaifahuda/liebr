@extends('frontend.layouts.main')
@section('main-container')

    <!-- Projects -->
  <div class="container my-5" style="height: 80vh">
    <div class="row">
      <div class="col-md-6 ">
        <h1>Projects</h1>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <a href="#" class="btn btn-red mx-1">Create new project</a>
        <a href="#" class="btn btn-red-outline mx-1">View Archive</a>
      </div>
    </div>

    <div class="row my-4 mt-5">
      <div class="col-md-12">
        <table class="table bg-danger showtabledata">
          <tbody>
            <tr>
              <td class="px-4 pt-2">Liebr Holding BV / General</td>
              <td>1 function</td>
              <td class="text-end">
                <a href="#" class="btn btnredoutlinetable">archiveer project</a>
              </td>
            </tr>
            <tr>
              <td class="px-4 pt-2">Liebr Holding BV / General</td>
              <td>10 function</td>
              <td class="text-end">
                <a href="#" class="btn btnredoutlinetable">archiveer project</a>
              </td>
            </tr>
            <tr>
              <td class="px-4 pt-2">Liebr Holding BV / General</td>
              <td>21 function</td>
              <td class="text-end">
                <a href="#" class="btn btnredoutlinetable">archiveer project</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

  </div>
  <!-- End Of Projects -->

@endsection
