<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>My Todo-s</title>
        <style>
            body {
                font-family: "Open Sans", sans-serif;
                line-height: 1.6;
            }

            .add-todo-input,
            .edit-todo-input {
                outline: none;
            }

            .add-todo-input:focus,
            .edit-todo-input:focus {
                border: none !important;
                box-shadow: none !important;
            }

            .view-opt-label,
            .date-label {
                font-size: 0.8rem;
            }

            .edit-todo-input {
                font-size: 1.7rem !important;
            }
        </style>
    </head>
    <body>
        <div class="container m-5 p-2 rounded mx-auto bg-light shadow">
            <!-- App title section -->
            <div class="row m-1 p-4">
                <div class="col">
                    <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                        <i class="fa fa-check bg-primary text-white rounded p-2"></i>
                        <u>My Todo-s</u>
                    </div>
                </div>
            </div>
            <!-- Create todo section -->
            <div class="row m-1 p-3">
                <div class="col col-11 mx-auto">
                    @if($task)
                        <form action="/update-task/{{ $task->id }}" method="post">
                            @csrf
{{--                            <input type="hidden" name="id" value="{{ $task->id }}">--}}
                            <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
                                <div class="col">
                                    <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" type="text" placeholder="Add new task.."
                                           name="content" value="{{ $task->content }}">
                                </div>
                                <div class="col-auto px-0 mx-0 mr-2">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <form action="/save-task" method="post">
                            @csrf
                            <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
                                <div class="col">
                                    <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" type="text" placeholder="Add new task.."
                                           name="content">
                                </div>
                                <div class="col-auto px-0 mx-0 mr-2">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
            <div class="p-2 mx-4 border-black-25 border-bottom"></div>
            <!-- Todo list section -->
            <div class="row mx-1 px-5 pb-3 w-80">
                <div class="col mx-auto">
                    <!-- Todo Item 1 -->
                    @foreach($tasks as $task)
                        <div class="row px-3 align-items-center todo-item rounded">
                        <div class="col px-1 m-1 d-flex align-items-center">
                            <input type="text" class="form-control form-control-lg border-0 edit-todo-input bg-transparent rounded px-3" readonly value="{{ $task->content }}"/>
                            <span class="col-auto align-items-center pr-">
                                <i class="fa fa-info-circle my-2 px-2 text-black-50 btn"></i>
                                <label class="date-label my-2 text-black-50 btn">{{ $task->created_at }}</label>
                            </span>
                        </div>
                        <div class="col-auto m-1 p-0 px-3 d-none">
                        </div>
                        <div class="col-auto m-1 p-0 todo-actions">
                            <div class="row align-items-center justify-content-end">
                                <div class="col">
                                    <a href="/{{ $task->id  }}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit btn m-0 p-0 text-white" data-placement="bottom"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="/delete-task/{{ $task->id  }}" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash btn m-0 p-0 text-white" data-placement="bottom"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
