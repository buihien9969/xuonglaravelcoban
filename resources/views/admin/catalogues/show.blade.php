@php use Illuminate\Support\Facades\Storage;use Psy\Util\Str; @endphp
@extends('admin.layouts.master')
@section('title')
    Xem chi tiet {{$model->name}}
@endsection


@section('content')
    <table>
        <tr>
            <th>Truong</th>
            <th>Gia tri</th>
        </tr>
        @foreach($model->toArray() as $key => $value)
            <tr>
                <td>{{$key}}</td>
                <td>
                    @php
                        if ($key == 'cover') {
                            $url = Storage::url($value);
                            echo "<img src='$url' width='100px' >";
                        } elseif (\Illuminate\Support\Str::contains($key, 'is_')) {
                            echo $value == 0 ? 'Khong' : 'Co';
                        } else {
                            echo $value;
                        }

                    @endphp

                </td>
            </tr>
        @endforeach
    </table>
@endsection
