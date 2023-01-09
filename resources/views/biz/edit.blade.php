@extends('layouts.sidebar')

@section('dashboard_content')
    <form action="{{ route('biz.update',$biz) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <input type="hidden" value="{{$biz->id}}" name="biz_id">
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
                <h3>You are now Editing - {{$biz->name}} </h3>
                <input type="submit" class="btn btn-primary" value="Update">
            </div>


            <div class="col-lg-6">
                <input type="hidden" name="status" value="onsale" />
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <h4>Company Information  </h4>
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
                        <input class="" type="text" placeholder="Company Name*" name="name" value="{{$biz->name}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-6">
                        <input class="" type="text" placeholder="Year Establishment*" name="years_est" value="{{$biz->years_est}}">
                        @error('years_est')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01" >
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <textarea placeholder="Company Information" id="" cols="30" rows="10" name="biz_detail">{{$biz->biz_detail}}</textarea>
                        @error('biz_detail')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Position of Owner*" name="position_of_owner" value="{{$biz->position_of_owner}}">
                        @error('position_of_owner')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Phone Number*" name="phone" value="{{$biz->phone}}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Register Number*" name="register_number" value="{{$biz->register_number}}">
                        @error('register_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Total Number of Shareholders*" name="share_holder" value={{$biz->share_holder}}>
                        @error('share_holder')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Address *" name="address" value="{{$biz->address}}">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="" type="text" placeholder="Country *" name="country" value="{{$biz->country}}">
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            <select class="form-select" id="inputGroupSelect01" value="{{$biz->language}}">
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
                        <textarea name="reason_sale" id="" cols="30" rows="10" >{{$biz->reason_sale}}</textarea>
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
                            <input type="date" class="form-control" name="start_date" id="inputGroupFile01" value="{{$biz->start_date}}">
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
                            <input type="date" class="form-control" name="end_date" id="inputGroupFile01" value="{{$biz->end_date}}">
                            @error('end_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        </div>
                    </div>
                    <h4 class="mt-3">Wished Sale Price</h4>
                    <div class="col-lg-12 mt-3">
                        <input class="" type="text" name="wish_sale_price" placeholder="Wish Sale Price *" value="{{$biz->wish_sale_price}}">
                        @error('wish_sale_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <h4 class="mt-3">Actual Sale Price</h4>
                    <div class="col-lg-12 mt-3">
                        <input class="" type="text" name="actual_sale_price" placeholder="Actual Sale Price*" value="{{$biz->actual_sale_price}}">
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
