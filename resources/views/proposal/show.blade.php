@extends('layouts.sidebar')

@section('dashboard_content')
    <div class="container">
        <form method="POST"
            action="{{ route('proposal.biz.accept', ['proposal' => $proposal->id, 'biz_id' => $biz->id]) }}">
            @csrf
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary m-2">Accept</button>
                <button type="button" class="btn btn-outline-danger m-2">Decline</button>
            </div>

        </form>

        {!! $proposal->description !!}
    </div>
@endsection
