@extends('layouts.default')

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
                        <div class="card-body py-4 px-4 px-md-5">

                            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary d-flex flex-row align-items-center justify-content-between">
                                <a href="/" class="btn btn-primary">Back</a>
                                <u>Edit</u>
                            </p>

                            <div class="pb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/edit" method="POST" class="d-flex flex-row align-items-center">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$tasks->id}}">
                                            <input name="task" type="text" class="mr-2 form-control form-control-lg"
                                                id="exampleFormControlInput1" value="{{$tasks->task}}">
                                            <div>
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        
                        


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <style>
        #list1 .form-control {
            border-color: transparent;
        }

        #list1 .form-control:focus {
            border-color: transparent;
            box-shadow: none;
        }

        #list1 .select-input.form-control[readonly]:not([disabled]) {
            background-color: #fbfbfb;
        }

    </style>
@endsection
