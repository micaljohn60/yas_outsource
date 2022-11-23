@extends('layouts.sidebar')

@section('dashboard_content')
    <form action="{{ route('biz.store') }}" method="POST">
        @csrf
        <div class="row">
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
                    </div>
                    <div class="col-lg-6">
                        <input class="" type="text" placeholder="Year Establishment*" name="year_estlibshemnt">
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <textarea placeholder="Company Information" id="" cols="30" rows="10" name="biz_detail"></textarea>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Position of Owner*" name="value">
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Phone Number*" name="phone">
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Register Number*" name="register_number">
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Total Number of Shareholders*" name="size">
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Address *" name="address">
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Country *" name="country">
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            <select class="form-select" id="inputGroupSelect01">
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
                        <textarea name="reason_sale" id="" cols="30" rows="10" ></textarea>
                    </div>
                    <h4>Wished Sale Period</h4>
                    <div class="col-lg-6 mt-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Start Date</label>
                            <input type="date" class="form-control" id="inputGroupFile01">
                        </div>


                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">End Date</label>
                            <input type="date" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                    <h4 class="mt-3">Wished Sale Price</h4>
                    <div class="col-lg-12 mt-3">
                        <input class="" type="text" placeholder="Wish Sale Price *">
                    </div>
                    <h4 class="mt-3">Actual Sale Price</h4>
                    <div class="col-lg-12 mt-3">
                        <input class="" type="text" placeholder="Year Establishment*">
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
