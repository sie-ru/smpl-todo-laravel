@extends('layouts.default')

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
                        <div class="card-body py-4 px-4 px-md-5">

                            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                                <i class="fas fa-check-square me-1"></i>
                                <u>Simple ToDo App</u>
                            </p>

                            <div class="pb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/add" method="POST" class="d-flex flex-row align-items-center">
                                            @csrf
                                            <input name="task" type="text" class="mr-2 form-control form-control-lg"
                                                id="exampleFormControlInput1" placeholder="Add task...">
                                            <div>
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">
                            @foreach ($tasks as $task)
                                <ul class="list-group list-group-horizontal rounded-0 mb-2">
                                    <li
                                        class="list-group-item ps-0 pe-0 py-1 rounded-0 border-0 bg-transparent d-flex align-items-center">
                                        <div class="text-end text-muted">
                                            <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                                                <p class="small mb-0"><i
                                                        class="fas fa-info-circle me-2"></i>{{ $task->created_at->format('d.m.Y') }}
                                                </p>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                                        <p class="lead fw-normal mb-0 bg-light w-100 ms-n2 ps-1 py-1 rounded">
                                            {{ $task->task }}</p>
                                    </li>
                                    <li
                                        class="list-group-item d-flex align-items-center ps-0 pe-1 py-1 rounded-0 border-0 bg-transparent">
                                        <div class="form-check">
                                            <form action="/remove" method="post">
                                                @csrf
                                                <input type="hidden" value="{{$task->id}}" name="id">
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </li>
                                    <li
                                    class="list-group-item d-flex align-items-center ps-0 pe-1 py-1 rounded-0 border-0 bg-transparent">
                                    <div class="form-check">
                                        <a href="/task/{{$task->id}}" class="btn btn-success">Edit</a>
                                    </div>
                                </li>
                                </ul>
                            @endforeach


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
