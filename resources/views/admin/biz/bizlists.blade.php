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
            {{-- @foreach ($bizs as $key => $biz)
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

                        <a href="{{route('biz.edit',$biz->id)}}">
                            <button type="button" class="btn btn-link text-decoration-none">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </a>

                        <form action="{{ route('biz.delete', $biz->id) }}" method="POST" id="biz-{{$biz->id}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-link text-decoration-none">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach --}}

            </tbody>

        </table>
@endsection