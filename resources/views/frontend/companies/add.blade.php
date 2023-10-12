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
                <h3 style="font-weight: 600">Add Company</h3>
            </div>
        </div>

        <div class="row py-5 px-5" style="background: #fff;  margin: 20px 164px">
            <div class="col-md-12 px-5">

                <form action="{{route('companies.store')}}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-12 col-form-label">Company name or CoC-number</label>
                        <div class="col-sm-12">
                            <input type="text" name="companiesname" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-custom" type="submit">Add Company</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

@endsection
