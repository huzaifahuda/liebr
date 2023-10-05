@extends('frontend.layouts.main')
@section('main-container')

    <!-- Fixpools -->
    <div class="container my-5" style="height: 90vh">
        <div class="row">
            <div class="col-md-6 ">
                <h1>Flexpools van Liebr Holding B.V.</h1>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{route('flexpools.create')}}" class="btn btn-red mx-1 ">Add new Flexpools</a>
            </div>
        </div>

        <div class="row my-4 mt-5">
            <div class="col-md-12">
                <table class="table bg-danger showtabledata">
                    <tbody>
                    @foreach($flexpools as $data)
                        <tr class="py-5">
                            <td class="px-4 pt-2">{{$data->}} <small style="font-size: 10px;"> 0 FreeFlexers</small></td>
                            <td class="text-end">
                                <a href="#" class="btn btnredoutlinetable">
                                    <img src="{{asset('panel/img/icon-edit-2.svg')}}" alt="Edit Icon">
                                </a>
                                <a href="#" class="btn btnredoutlinetable">
                                    <img src="{{asset('panel/img/icon-trash.svg')}}" alt="Trash Icon">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- End Of Fixpools -->

@endsection
