@php use Illuminate\Support\Facades\Storage; @endphp
@extends('admin.layouts.master')
@section('title')
    Danh sach danh muc san pham
@endsection


@section('content')
    <a href="{{ route('admin.catalogue.create') }}" class="btn btn-primary mb-3">Create</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Cover</th>
            <th>Is active</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>
        @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <img src="{{Storage::url($item->cover)}}" alt="" width="100">
                </td>
                <td>{{$item->is_active ? 'Y' : 'N' }}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td>
                    <a href="{{ route('admin.catalogue.show', $item->id) }}" class="btn btn-primary mb-3">Xem</a>
                    <a href="{{ route('admin.catalogue.edit', $item->id) }}" class="btn btn-primary mb-3">Sua</a>
                    <a href="{{ route('admin.catalogue.destroy', $item->id) }}" class="btn btn-primary mb-3">Xoa</a>

                </td>
            </tr>
        @endforeach
    </table>
    {{ $data->links() }}
@endsection
