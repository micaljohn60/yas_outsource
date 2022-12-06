@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach ($bizs as $biz)
    <div class="col-lg-3">
        <div class="custom-card">
            <div class="mini">
                {{$biz->created_at}}
            </div>
            <h5 class="title">{{$biz->name}}</h5>
            <p class="body">{{$biz->biz_detail}}</p>
            <div class="d-flex justify-content-evenly">
                <a href="{{route("biz.show",$biz->id)}}" class="btn btn-outline-primary">See Detail</a>
                <button type="button" class="btn btn-outline-secondary">More Like This</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
    
</div>
@endsection