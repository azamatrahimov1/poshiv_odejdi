@extends('admin.layouts.app')
@section('content')
    <div class="container">
    <div class="col-md-8 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <div class="bg-white white:bg-group-800 overflow-hidden shadow-sm:rounded-lg m-1">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table class="table table-hover m-2">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Рост</th>
                                <th scope="col">Плечо</th>
                                <th scope="col">Рука</th>
                                <th scope="col">Таз</th>
                                <th scope="col">Ног</th>
                                <th scope="col">Цвет</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($measurements as $measurement)
                                <tr>
                                    <td>{{$measurement->id}}</td>
                                    <td>{{$measurement->name}}</td>
                                    <td>{{$measurement->growing}}</td>
                                    <td>{{$measurement->shoulder}}</td>
                                    <td>{{$measurement->hand}}</td>
                                    <td>{{$measurement->basin}}</td>
                                    <td>{{$measurement->legs}}</td>
                                    <td>{{$measurement->color}}</td>
                                    <td>
                                        <form  id="form-delete" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger "  onclick="delete_button({{$measurement->id}})">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                     height="16" fill="currentColor"
                                                     class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                </svg>
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
        </div>
    </div>
    </div>
    <script>
        form = document.getElementById('form-delete');
        function delete_button(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.action = '/measurements/' + id;
                    form.submit()
                }
            })
        }
    </script>

@endsection
