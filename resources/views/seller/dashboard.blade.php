@extends('layouts.sidebar')

@section('dashboard_content')
    <div class="container">
        @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                {{-- <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div> --}}
            @endif
        <div class="row">
            <div class="col-lg-3">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title ">Total Biz</h2>
                        <p class="card-text text-white display-6">{{count($bizs)}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title ">Total Proposal</h2>
                        <p class="card-text text-white display-6">{{count($proposalsToMyBizs)}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title">Success Sell</h2>
                        <p class="card-text text-white display-6">0</p>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="font-weight-bold mt-3">My Bizs</h3>
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
            @endforeach

            </tbody>

        </table>

        <h3 class="font-weight-bold mt-5">Proposals</h3>
        <table id="proposal" class="table table-striped" style="width:100%">
            <thead>
            <tr>
                <th>No</th>
                <th>Biz ID</th>
                <th>Biz Name</th>
                <th>Proposal</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($proposalsToMyBizs as $key => $proposalsToMyBiz)
                <tr>
                    <td>
                        {{$key+1}}
                    </td>
                    <td>
                        {{$proposalsToMyBiz->biz->id}}
                    </td>
                    <td>
                        {{$proposalsToMyBiz->biz->name}}
                    </td>
                    <td>
                        <a href="">{{empty($proposalsToMyBiz->proposal_id) ? "Download Proposal" : "Go To Proposal"}}</a>
                    </td>

                    <td class="d-flex ">
                        @if(isset($proposalsToMyBiz->status)&&$proposalsToMyBiz->status!=="accept")
                            <form method="POST" action=
                                {{route("proposal.biz.accept",["proposal"=>$proposalsToMyBiz->proposal_id,"biz_id"=>$proposalsToMyBiz->biz->id])}}>
                                @csrf
                                <input type="submit" class="btn btn-outline-primary m-1" value="Accept">
                            </form>

                            <button type="button" class="btn btn-outline-danger m-1">Decline</button>
                        @else
                            <p>{{$proposalsToMyBiz->status}}</p>
                        @endif

                    </td>
                </tr>
            @endforeach

            </tbody>

        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
                crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


        <script>
            $(document).ready(function () {
                $('#example').DataTable();
                $('#proposal').DataTable();
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });


        </script>
    </div>
@endsection
