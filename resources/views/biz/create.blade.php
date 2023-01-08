@extends('layouts.sidebar')

@section('dashboard_content')
    <form action="{{ route('biz.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
            <div class="d-flex justify-content-between">
                <h3>Please Complete the following information to sell</h3>
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>


            <div class="col-lg-6">
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <h4>Company Information </h4>
                    </div>
                </div>

                <div class="row mt-3 custom-input">
                    <div class="col-lg-6">
                        <input type="hidden" name="status" value="onsale" />
                        {{-- @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror --}}
                        <input class="" type="text" placeholder="Company Name*" name="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <input class="" type="text" placeholder="Year Establishment*" name="years_est">
                        @error('years_est')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01" name="file_path">
                            @error('file_path')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <textarea placeholder="Company Information" id="" cols="30" rows="10" name="biz_detail"></textarea>
                        @error('biz_detail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Position of Owner*" name="position_of_owner">
                        @error('position_of_owner')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Phone Number*" name="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Register Number*" name="register_number">
                        @error('register_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Total Number of Shareholders*"
                            name="share_holder">
                        @error('share_holder')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Address *" name="address">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Country *" name="country">
                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            <select class="form-select" id="inputGroupSelect01" name="language">
                                <option selected>Preferred language</option>
                                <option value="en">English</option>
                                <option value="jp">Japanese</option>
                            </select>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="row mt-4">
                    <div class="col-lg-12">

                        <h4>Reason For Sale </h4>
                    </div>
                </div>
                <div class="row mt-3 custom-input">

                    <div class="col-lg-12">
                        <textarea name="reason_sale" id="" cols="30" rows="10"></textarea>
                        @error('reason_sale')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <h4>Wished Sale Period</h4>
                    <div class="col-lg-6 mt-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Start Date</label>
                            <input type="date" class="form-control" id="inputGroupFile01" name="start_date">
                            @error('start_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">End Date</label>
                            <input type="date" class="form-control" id="inputGroupFile01" name="end_date">
                            @error('end_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <h4 class="mt-3">Wished Sale Price</h4>
                    <div class="col-lg-12 mt-3">
                        <input class="" type="text" placeholder="Wish Sale Price *" name="wish_sale_price">
                        @error('wish_sale_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <h4 class="mt-3">Actual Sale Price</h4>
                    <div class="col-lg-12 mt-3">
                        <input class="" type="text" placeholder="Actual Sale Price *" name="actual_sale_price">
                        @error('actual_sale_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
@endsection
