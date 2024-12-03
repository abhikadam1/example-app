@include('load_CDN');
<body>
    <div class="container mt-3">
        <!-- @if ($errors->any())
            @foreach ($errors->all() as $err)
                <div class="alert alert-danger" role="alert">
                    {{ $err }}
                </div>
            @endforeach
        @endif -->
        <form method="post" action="handleFile" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="fileUpload" class="form-label">Choose File</label>
                <input type="file" name="abc" class="form-control" id="fileUpload">
                <span style="color: red;">@error('fileUpload'){{$message}}@enderror</span>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="checkMeOut" class="form-check-input" id="exampleCheck1"  >
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

