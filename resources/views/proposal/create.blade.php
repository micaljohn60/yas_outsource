@extends('layouts.sidebar')

@section('dashboard_content')

    <div class="p-4 sm:ml-64 px-16 py-6 md:col-span-5 lg:col-span-7 bg-gray-100 h-screen">
        <div class="">
            <form method="POST" action="{{ route('proposal.store') }}">
                @csrf
                <div class="flex justify-between mt-10">
                    <h1 class="text-gray-600 text-2xl font-bold">Create New Preposal</h1>
                    <input type="submit" value="Create +" class="bg-main p-3 text-white font-bold rounded-md hover:cursor-pointer checked:bg-secondary-400 hover:bg-secondary-200"/>
                </div>
    
                <div class="form-group">
                    <input type="text" class="rounded-md focus:border-main focus:ring-main" id="proposalName" placeholder="Enter Proposal Name" name="title">
                    
                </div>
                <div id="toolbar" class="mt-3 ">
                    {{-- <button class="ql-bold">Bold</button>
                    <button class="ql-italic">Italic</button> --}}
                  </div>
                  
                  <!-- Create the editor container -->
                  <div id="editor" class="h-screen">
                    <p id="p">Hello World!</p>
                  </div>
    
                  <input type="hidden" name="description" id="proposal_text">
    
                
    
            </form>
        </div>
    </div>

    {{-- <button id="click">Click Me</button> --}}

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