@extends('layouts.sidebar')

@section('dashboard_content')

    <div class="container-fluid">
        <form method="POST" action="{{ route('proposal.store') }}">
            @csrf
            <div class="d-flex justify-content-between">
                <h3>Edit Proposal - {{$proposal->title}}</h3>
                <input type="submit" value="Create +" class="btn btn-primary"/>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="proposalName" placeholder="Enter Proposal Name" name="title" value={{$proposal->title}}>
                
            </div>
            <div id="toolbar">
                {{-- <button class="ql-bold">Bold</button>
                <button class="ql-italic">Italic</button> --}}
              </div>
              
              <!-- Create the editor container -->
              <div id="editor">
                {!!$proposal->description!!}
              </div>

              <input type="hidden" name="description" id="proposal_text">

            

        </form>
    </div>

    <button id="click">Click Me</button>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <script>
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block', 'image'],
            

            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],                         // text direction

            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],

            ['clean']                                         // remove formatting button
            ];
  var editor = new Quill('#editor', {
          modules: { toolbar: toolbarOptions },
          theme: 'snow',
        });
        
        var delta = editor.getContents();
        var dat = editor.root.innerHtml;
        $(document).ready(function() {
            editor.on('text-change', function() {
                $('#proposal_text').val(document.getElementsByClassName("ql-editor")[0].innerHTML);
                console.log(document.getElementsByClassName("ql-editor")[0].innerHTML);
            })
            $('#proposal_text').val(document.getElementsByClassName("ql-editor")[0].innerHTML);
            $("#click").click(function(){
                var inputString = $("#proposal_text").val();
                alert(inputString);
            console.log(
                document.getElementsByClassName("ql-editor")[0].innerHTML

            )
            });

        });
    </script>

@endsection