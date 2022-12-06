@extends('layouts.sidebar')

@section('dashboard_content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="card text-white primary-bg mb-3" style="max-width: 18rem;">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <h2 class="card-title ">Find Bizs</h2>
                </div>
            </div>
        </div>

    </div>
    <h3 class="font-weight-bold">My Bits</h3>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Biz ID</th>
                <th>Proposal Name</th>
                <th>Go To Porposal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($myBizProposals as $key => $myBizProposal)
                <tr>
                    <td>
                        {{$key+1}}
                    </td>
                    <td>
                        {{$myBizProposal->biz->id}}
                    </td>
                    <td>
                        {{$myBizProposal->proposal->title ?? "File"}}
                    </td>
                    <td>
                        <a href="
                        {{
                        empty($myBizProposal->proposal_id)
                        ?                  
                        url('/').'/storage/'.$myBizProposal->proposal_file_path                        
                        : 
                        route('proposal.show',$myBizProposal->proposal->id ?? "")
                        }}"

                        {{empty($myBizProposal->proposal_id) ? "download" : ""}}>
                        {{empty($myBizProposal->proposal_id) ? "download" : "Go to Proposal"}}
                    </a>
                        
                    </td>

                    {{-- <td >
                       <p ><small id="time"> {{$biz->created_at}}</small> </p>
                    </td> --}}
                    <td>
                        <button type="button" class="btn btn-link text-decoration-none">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button type="button" class="btn btn-link text-decoration-none">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            
        </tbody>

    </table>

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
