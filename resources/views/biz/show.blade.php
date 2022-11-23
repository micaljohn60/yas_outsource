@extends('layouts.app')

@section('content')
    <div>
        {{ $biz->name }}
        <div class="container-fluid">

        </div>

        @if (Auth::user()->type->value == 'buyer')
            <form method="POST" enctype="multipart/form-data">
                <input type="checkbox" id="isfile" name="isfile" onclick="showHideFile(this)" >
                <input type="hidden" name="biz_id" value={{$biz->id}}>
                <input type="hidden" id="fielValue" name="type" value="my_proposal">
                <input type="file" id="file" name="file" style="display:none;">
                <select class="form-select" name="proposal" id="proposal" style="display:block;">
                    @foreach ($proposals as $proposal)
                        <option value={{ $proposal->id }}>{{ $proposal->title }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Submit">
            </form>
        @endif        
        <script>
            function showHideFile(checkFile) {
            var file = document.getElementById("file");
            file.style.display = checkFile.checked ? "block" : "none";
            document.getElementById("fielValue").value = checkFile.checked ? "file" : "my_proposal";
            document.getElementById("proposal").style.display = checkFile.checked ? "none" : "block";
        }
        </script>
    </>
@endsection
