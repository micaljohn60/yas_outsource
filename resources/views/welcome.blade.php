@extends('layouts.app')

@section('content')
<div class="container mt-3 mb-3">

    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
        </div>
    </div>
    
    <div class="d-flex justify-content-center align-items-center">
        <form>
            <input type="text" name="Search Here" placeholder="Search Here"/>
            <select name="search_options">            
                <option value="seller">Seller</option>
                <option value="buyer">Buyer</option>
                <option value="experts">Experts</option>
            </select>
        </form>
    </div>
</div>
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