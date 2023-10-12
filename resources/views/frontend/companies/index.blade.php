@extends('frontend.layouts.main')
@section('main-container')

    <!-- companies -->
    <div class="container my-5" style="height: 90vh">
        <div class="row">
            <div class="col-md-6 ">
                <h4>My Companies</h4>
            </div>

        </div>

        <div class="row my-4 mt-5">
            <div class="col-md-12">
                <table class="table showtabledata">

                    <thead>
                        <tr>
                            <th class="px-4">Company name</th>
                            <th>On invoice</th>
                            <th class="px-4">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <a href="{{route('companies.create')}}" class="mx-1 " style="font-weight: 600; color: #e61c1c;">Add new Flexpools</a>
                                </div>
                            </th>
                        </tr>

                    </thead>

                    <tbody>
                    @foreach($company as $data)
                        <tr class="py-5">
                            <td class="px-4 pt-2"> {{$data->companiesname}}</td>
                            <td> {{$data->companiesname}}</td>
                            <td class="px-4">
                                <a href="#" class="btn d-flex justify-content-end btnredoutlinetable">
                                    <img src="{{asset('panel/img/icon-edit-2.svg')}}" alt="Edit Icon">
                                </a>
{{--                                <form action="" method="post">--}}

{{--                                    <button type="submit" class="btn btn-danger waves-effect">--}}
{{--                                        <img src="{{asset('panel/img/icon-trash.svg')}}" alt="Trash Icon">--}}
{{--                                    </button>--}}
{{--                                </form>--}}

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Of companies -->

@endsection
