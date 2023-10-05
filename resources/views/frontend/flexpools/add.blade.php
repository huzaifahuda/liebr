@extends('frontend.layouts.main')
@section('main-container')

    <style>
        .col-form-label{
            font-weight: 600;
        }
        .btn-custom{
            background: #e61c1c;
            color: #fff;
            padding: 10px 15px;
        }
        .btn-custom:hover{
            background: #c40808;
            color: #fff;
        }
    </style>

    <div class="container m-5" style="height: 90vh;">
        <div class="row" style="margin: 0 164px">
            <div class="col-md-12 ">
                <h3 style="font-weight: 600">Add flexpool</h3>
            </div>
        </div>

        <div class="row py-5 px-5" style="background: #fff;  margin: 20px 164px">
            <div class="col-md-12 px-5">

                <form action="{{route('flexpools.store')}}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Client</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="client_id" aria-label="Default select example">
                                <option selected value="1">Liebr</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="category_id" aria-label="Default select example">
                                <option selected></option>
                                @foreach($category as $data)
                                <option value="{{$data->id}}">{{$data->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="flexpoolname" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-custom" type="submit">Add Flexpool</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

@endsection
