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
{{--                    @dd('tets')--}}
                    @foreach($flexpools as $data)
                        <tr class="py-5">
                            <td class="px-4 pt-2">{{isset($data->category)  ? $data->category->title : 'Not Found'}} - {{$data->flexpoolname}} <small style="font-size: 10px;"> 0 FreeFlexers</small></td>
                            <td class="text-end d-flex justify-content-end">
                                <a href="{{route('flexpools.edit', base64_encode($data->id))}}" class="btn btnredoutlinetable">
                                    <img src="{{asset('panel/img/icon-edit-2.svg')}}" alt="Edit Icon">
                                </a>
                                <form action="{{route('flexpools.update', $data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger waves-effect">
                                        <img src="{{asset('panel/img/icon-trash.svg')}}" alt="Trash Icon">
                                    </button>
                                </form>

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
