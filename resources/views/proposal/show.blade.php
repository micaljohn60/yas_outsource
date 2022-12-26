@extends('layouts.sidebar')

@section('dashboard_content')

<div class="container">
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-outline-primary m-2">Accept</button>
        <button type="button" class="btn btn-outline-danger m-2">Decline</button>
    </div>
    {!!$proposal->description!!}
</div>


@endsection