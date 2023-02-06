@extends('layouts.admin_sidebar')

@section('admin_content')
    <h3 class="font-weight-bold mt-3">Incoming Pending Bizs</h3>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Status</th>
            <th>Register Number</th>
            <th>Biz Detail</th>
            <th>Created at</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bizs as $key => $biz)
            <tr>
                <td>
                    {{$key+1}}
                </td>
                <td>
                    {{$biz->name}}
                </td>
                <td>
                    {{$biz->status}}
                </td>
                <td>
                    {{$biz->register_number}}
                </td>
                <td class="text-truncate" style="max-width: 150px;">
                    {{$biz->biz_detail}}
                </td>
                <td>
                    <p><small id="time"> {{$biz->created_at}}</small></p>
                </td>
                <td>
                    <form action="{{ route('biz.published', $biz->id) }}" method="POST" id="biz-{{$biz->id}}">
                        @method('post')
                        @csrf
                        <button type="submit" class="btn btn-link text-decoration-none">
                            <i class="fa-solid fa-upload"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
