@extends('admin.layouts.master')
@section('title')
    Cap nhat danh muc {{$model->name}}
@endsection


@section('content')
    <form action="{{ route('admin.catalogue.update', $model->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                           placeholder="Enter email" value="{{$model->name}}">


                </div>
                <div class="form-group">
                    <label for="cover">File</label>
                    <input type="file" class="form-control" id="cover" aria-describedby="file" name="cover"
                           value="{{$model->cover}}">
                    <img src="{{Storage::url($model->cover)}}" alt="" width="100">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active"
                           @if($model->is_active)
                               checked
                        @endif
                    >Is active

                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
