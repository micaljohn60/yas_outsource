@extends('layouts.app')

@section('content')
<div class="container-fluid homepage-inverse-header">
    <div class="container">
        <h1 class="homepage-inverse-header__title">
            Welcome to Outsource
        </h1>
        <p class="homepage-inverse-header__intro">
            The best place to find business services and information
        </p>
        <p class="homepage-inverse-header__intro homepage-inverse-header__intro--bold">
            Simpler, Clearer & Faster
        </p>
    </div>
    
</div>
<div class="container mt-3">
    <div class="row">
    @foreach ($bizs as $biz)
    <div class="col-lg-3">
        <div class="custom-card">
            <div class="mini">
                {{$biz->created_at}}
            </div>
            <h5 class="d-flex justify-content-between title">{{$biz->name}} 
            <div class="icon">
                <i class="fa-solid fa-angle-right"></i>
            </div>
            </h5>
            <p class="body text-truncate">{{$biz->biz_detail}}</p>
            <div class="d-flex justify-content-start  py-3">
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