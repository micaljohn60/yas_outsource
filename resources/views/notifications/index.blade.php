@extends('layouts.sidebar')

@section('dashboard_content')

    @if (count($notifications) <= 0)
        <h1>No new notification</h1>
    @else
        @foreach ($notifications as $notification)
            <div class="notification">
                <div class="body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-9">
                                <h5 class="mt-3 ms-3">Some sent you a proposal to your biz</h5>
                                {{-- <h5 class="mt-3 ms-3">{{ $notification->data['title'] ?? "File upload"}}</h5> --}}
                                <p class="fs-6 ms-3">Notification Description</p>
                            </div>
                            <div class="col-lg-3 d-flex align-items-center justify-content-center">

                                <p class="fs-6 ms-3 mt-3"><a href="{{ route('notification.proposal.show', ['proposal' => $notification->data["id"],
                                    'biz_id' => $notification->data["biz_id"]]) }}"
                                                             class="text-decoration-none">See Detail</a></p>
{{--                                <p class="fs-6 ms-3 mt-3"><a href="{{route("proposal.show",$notification->data["id"],$notification->data["biz_id"])}}"--}}
{{--                                                             class="text-decoration-none">{{$notification->data["biz_id"]}}</a>--}}
{{--                                </p>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

@endsection
