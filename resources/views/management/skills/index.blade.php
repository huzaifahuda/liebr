@extends('management.layouts.master')
@section('title')
    Category: {{$category->title}}
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Category: {{$category->title}}</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <form action method="POST" id="skill-create">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{$category->id}}">
                                    <div class="row my-1">
                                        <div class="col-12">
                                            <input type="text" id="erp_question_text" class="form-control" name="title" placeholder="Enter Skills Title" required>
                                            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header loop"></div>
                        </div>
                    </div>
                </div>

                <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
                <script src="//cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
                <script>

                    function get(route) {
                        // Make an AJAX request
                        $.ajax({
                            url: route, // Replace with your Laravel route
                            method: 'GET', // or 'POST' depending on your route setup
                            success: function(data) {
                                $('.loop').html(data);
                                // console.log(data);
                            },
                            error: function() {
                                alert('An error occurred');
                            }
                        });
                    }

                    get('skills/'+{{$category->id}})


                    // $('body').on('click','.updated', function(){
                        function updateDelete() {
                            $(this).html(`Update <div class="spinner-css text-light  spinner-border " role="status">
                            <span class="visually-hidden"></span>
                            </div>`)

                            var formAction = $(this).parents('form').prop("action");
                            // console.log("Form action property value: " + formAction);

                            var formData = $(this).parents('form').serialize();

                            $.ajax({
                                url: formAction, // Replace with your Laravel route
                                method: 'POST', // or 'POST' depending on your route setup
                                data: formData, // or 'POST' depending on your route setup
                                success: function (data) {
                                    get('skills/' + {{$category->id}});
                                    // console.log(data);
                                },
                                error: function () {
                                    alert('An error occurred');
                                }
                            });
                        }
                    // });





                    // create
                    var $form = $("#skill-create"),
                        $successMsg = $(".alert");
                    $.validator.addMethod("letters", function(value, element) {
                        return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
                    });
                    $form.validate({
                        rules: {
                            title: {
                                required: true,
                                minlength: 3,
                            },
                        },
                        // messages: {
                        //     title: "Please specify your name (only letters and spaces are allowed)",
                        // },
                        submitHandler: function (form) {

                            $('.btn.btn-primary').html(`Submit <div class="spinner-css text-light  spinner-border " role="status">
                            <span class="visually-hidden"></span>
                            </div>`)
                            var varform = $("#skill-create").serialize();

                            const url = 'skills'; // Aapki API endpoint URL
                            $.ajax({
                                type: 'POST',
                                url: url,
                                data: varform,
                                success: function(response) {
                                    $('.btn.btn-primary').html('Submit');
                                    // Handle success response here
                                    get('skills/'+{{$category->id}});
                                    $('#erp_question_text').val('');
                                    console.log('API Response:', response);
                                },
                                error: function(error) {
                                    // Handle error here
                                    console.error('Error:', error);
                                }
                            });
                        }


                    //     updated



                    });
                </script>


@endsection

