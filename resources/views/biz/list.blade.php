@extends('layouts.user_side_bar')

@section('user_content')
<div class="container">
    <div class="row">
    @foreach ($bizs as $biz)
    <div class="col-lg-3">
        <div class="custom-card">
            <div class="mini">
                {{$biz->created_at}}
            </div>
            <h5 class="title">{{$biz->name}}</h5>
            <p class="body text-truncate" style="max-width: 200px;">{{$biz->biz_detail}}</p>
            <div class="d-flex justify-content-start mt-3 mb-2">
                <a href="{{route("biz.show",$biz->id)}}" class=" mx-3 font-weight-bold text-decoration-none text-dark">
                    See Detail
                </a>

            </div>
        </div>
    </div>
    @endforeach
</div>

</div>

@endsection
