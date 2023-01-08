@extends('layouts.app')

@section('content')
    <div>

        <div class="container-fluid homepage-inverse-header">
            <div class="container">
                <h1 class="homepage-inverse-header__title">
                    {{ $biz->name }}
                </h1>
                <div class="row">
                    <div class="col-9">
                        <p class="homepage-inverse-header__intro">
                            {{ $biz->biz_detail }}
                        </p>
                    </div>
                    <div class="col-3">
                        @if (Auth::check())
                            <div class="col-lg-12  m-1 ">
                                @if (Auth::user()->type->value == 'buyer')
                                    <form  method="POST" enctype="multipart/form-data"
                                        action="/proposals/upload-to-biz">
                                        @csrf
                                        {{-- <input type="checkbox" id="isfile" name="isfile" onclick="showHideFile(this)" > --}}

                                        <div class="proposal-card">
                                            <div class="d-flex justify-content-center align-items-center" style="color:#000;">
                                                <label class="fw-bold fs-5" >My Proposal</label>
                                                <label class="switch m-3">
                                                    <input type="checkbox" id="isfile" name="isfile"
                                                        onclick="showHideFile(this)">
                                                    <span class="slider round"></span>
                                                </label>
                                                <label class="fw-bold fs-5">Select File</label>
                                            </div>

                                            <input type="hidden" name="biz_id" value={{ $biz->id }}>
                                            <input type="hidden" id="fielValue" name="type" value="my_proposal">
                                            <input type="file" id="file" name="file" style="display:none;">
                                            <select class="form-select" name="proposal_id" id="proposal"
                                                style="display:block;">
                                                @foreach ($proposals as $proposal)
                                                    <option value={{ $proposal->id }}>{{ $proposal->title }}</option>
                                                @endforeach
                                            </select>
                                            <div class="d-flex justify-content-center">
                                                <input class="btn btn-primary d-block m-3" type="submit" value="Sent Proposal">
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        @else
                        @endif
                    </div>
                </div>

            </div>

        </div>

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

                <div class="col-lg-9 price-card p-4 m-2">

                    <div class="row">
                        <div class="col-lg-6 " style="color:#000;">
                            <h3 class="fw-bold" >Price</h3>
                            <p>{{ $biz->actual_sale_price ?? "NA" }}</p>
                        </div>
                        <div class="col-lg-6 " style="color:#000;">
                            <h3 class="fw-bold"  >Wish Sale Price</h3>
                           <p> {{ $biz->wish_sale_price ?? "ND" }} </p> 
                        </div>
                    </div>



                </div>

                <div class="col-lg-9 card p-4 m-2">

                    <h3>Reason for Sale</h3>
                    {{ $biz->reason_sale }}
                </div>



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
