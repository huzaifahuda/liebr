@extends('frontend.layouts.main')
@section('main-container')

    <!-- Projects -->
    <div class="container my-5" style="height: 80vh">
        <div class="row">
            <div class="col-md-6 ">
{{--                @dd($projects->companies->companiesname)--}}
                <h3><b>{{$projects->companies->companiesname}}</b> / {{$projects->projectname}}</h3>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{route('projects.edit', $projects->id)}}" class="btn btn-red mx-1">Edit project</a>
                <a href="#" class="btn btn-red mx-1">New Job</a>
                <a href="#" class="btn btn-red-outline mx-1">View Archive</a>
            </div>
        </div>

        <div class="row my-4 mt-5">
            <div class="col-md-12">
                <table class="table bg-danger showtabledata">
                    <tbody>

                        <tr>
                            <td class="px-4 pt-2">
                                <h5>Project Name</h5>
                                <small>Cleaning</small>
                            </td>
                            <td>{{$projects->companies->companiesname}}</td>
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
