@extends('layouts.app')

@section('content')
    <div>

        <div class="container">
            <div class="row">

                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                    {{-- <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div> --}}
                @endif

                <div class="col-lg-9 card m-1">
                    
                   <h3 class="mt-3"> {{ $biz->name }}</h3>
                   <hr>
                   <div class="mt-3">
                    <p>Sale Period - </p>
                    <p>Status - </p>
                </div>
                   <h3>Biz Detail</h3>
                   {{$biz->biz_detail}}
                   <hr>
                   <h3>Reason for Sale</h3>
                   {{$biz->reason_sale}}
                </div>

                
                @if(Auth::check())
                <div class="col-lg-3 card m-1">
                    @if (Auth::user()->type->value == 'buyer')
                        <form method="POST" enctype="multipart/form-data" action="/proposals/upload-to-biz">
                            @csrf
                            {{-- <input type="checkbox" id="isfile" name="isfile" onclick="showHideFile(this)" > --}}

                            <div class="d-flex justify-content-center align-items-center">
                                <label>My Proposal</label>
                                <label class="switch m-3">
                                    <input type="checkbox" id="isfile" name="isfile" onclick="showHideFile(this)">
                                    <span class="slider round"></span>
                                </label>
                                <label>Select File</label>
                            </div>

                            <input type="hidden" name="biz_id" value={{ $biz->id }}>
                            <input type="hidden" id="fielValue" name="type" value="my_proposal">
                            <input type="file" id="file" name="file" style="display:none;">
                            <select class="form-select" name="proposal_id" id="proposal" style="display:block;">
                                @foreach ($proposals as $proposal)
                                    <option value={{ $proposal->id }}>{{ $proposal->title }}</option>
                                @endforeach
                            </select>
                            <input class="btn btn-primary d-block m-3" type="submit" value="Sent Proposal">
                        </form>
                    @endif
                </div>

                @else
                
                

                @endif
            </>

        </div>


        <script>
            function showHideFile(checkFile) {
                var file = document.getElementById("file");
                file.style.display = checkFile.checked ? "block" : "none";
                document.getElementById("fielValue").value = checkFile.checked ? "select_file" : "my_proposal";
                document.getElementById("proposal").style.display = checkFile.checked ? "none" : "block";
            }
        </script>
        </>
    @endsection
