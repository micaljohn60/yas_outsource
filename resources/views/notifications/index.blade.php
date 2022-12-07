@extends('layouts.sidebar')

@section('dashboard_content')

    @if (count($notifications) <= 0)
        <h1>No new notification</h1>
        <div class="notification">
            <div class="body">
                <div class="">
                    <div class="row">
                        <div class="col-lg-9">
                            <h4 class="mt-3 ms-3">Notification Title</h4>
                            <p class="fs-6 ms-3">Notification Description</p>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center justify-content-center">

                            <p class="fs-6 ms-3 mt-3"><a href="#" class="text-decoration-none">See Detail</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @foreach ($notifications as $notification)
            <div class="notification">
                <div class="body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-9">
                                <h5 class="mt-3 ms-3">{{ $notification->data['title']}}</h5>
                                <p class="fs-6 ms-3">Notification Description</p>
                            </div>
                            <div class="col-lg-3 d-flex align-items-center justify-content-center">

                                <p class="fs-6 ms-3 mt-3"><a href="#" class="text-decoration-none">See Detail</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

@endsection