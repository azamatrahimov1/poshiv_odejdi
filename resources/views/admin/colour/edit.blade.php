@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8 grid-margin stretch-card mt-5">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('colour.index')}}" class="btn btn-primary mb-1">Назад</a>
                    <div class="bg-white white:bg-group-800 overflow-hidden shadow-sm:rounded-lg m-1">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('colour.update',$colour->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Названия:</strong>
                                            <input type="text" name="name" class="form-control" placeholder="Имя" value="{{$colour->name}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-left mt-2">
                                        <button type="submit" class="btn btn-success">Сохронить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
