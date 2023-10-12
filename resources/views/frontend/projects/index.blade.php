@extends('frontend.layouts.main')
@section('main-container')

    <!-- Projects -->
  <div class="container my-5" style="height: 80vh">
    <div class="row">
      <div class="col-md-6 ">
        <h1>Projects</h1>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <a href="{{route('projects.create')}}" class="btn btn-red mx-1">Create new project</a>
        <a href="#" class="btn btn-red-outline mx-1">View Archive</a>
      </div>
    </div>

    <div class="row my-4 mt-5">
      <div class="col-md-12">
        <table class="table bg-danger showtabledata">
          <tbody>
          @foreach($projects as $data)
            <tr>
              <td class="px-4 pt-2">
                  <a href="{{route('projects.show', $data->id)}}" style="color: #0b0b0b; text-decoration: none">
                    {{$data->projectname}} / {{$data->companies->companiesname}}
                  </a>
              </td>
              <td>1 Job</td>
              <td class="text-end">
                <a href="#" class="btn btnredoutlinetable">archiveer project</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
  <!-- End Of Projects -->
@endsection
