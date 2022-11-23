@extends('layouts.sidebar')

@section('dashboard_content')
<div class="d-flex justify-content-end">
    <button class="btn btn-primary">Create New Proposal + </button>
</div>

<div class="row"> 
    
        @foreach ($proposals as $key => $proposal)
        <div class="col-lg-2">
        <a href="{{route('proposal.show',$proposal->id)}}">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$proposal->title}}</h5>
                  <h6 id="description" class="card-subtitle mb-2 text-muted d-inline-block text-truncate" style="max-width: 15rem;">
                    {!! $proposal->description !!}
                  </h6>
                  <div class="d-flex justify-content-end">
                    <p><small id="time">{{$proposal->created_at}}</small></p>
                  </div>
                </div>
            </div>
        </a>
      </div>
        @endforeach
</div>

<script>
    var getDateTime = document.getElementById('time').textContent;
    var getDescription = document.getElementById('description').textContent;
    const  splitData = getDateTime.split(" ");
    document.getElementById("time").innerText = splitData[0];
</script>
@endsection