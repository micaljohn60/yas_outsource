@extends('layouts.sidebar')

@section('dashboard_content')
    <div class="d-flex justify-content-end">
        <button class="btn btn-primary">Create New Proposal + </button>
    </div>

    <div class="p-4 sm:ml-64 px-16 py-6 md:col-span-5 lg:col-span-7 bg-gray-100 h-screen">




        <div class="flex gap-2">
            @foreach ($proposals as $key => $proposal)
                <a href="{{route('proposal.edit',$proposal->id)}}"
                    class="grid-cols-2  block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{ $proposal->title }}</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400 bg-white">{!! Str::limit($proposal->description, 200)  !!}</p>
                    <p class="font-normal text-xs mt-3 text-gray-700 dark:text-gray-400 bg-white">{{$proposal->created_at}}</p>
                </a>

            @endforeach
        </div>

    </div>

    <script>
        var getDateTime = document.getElementById('time').textContent;
        var getDescription = document.getElementById('description').textContent;
        const splitData = getDateTime.split(" ");
        document.getElementById("time").innerText = splitData[0];
    </script>
@endsection
