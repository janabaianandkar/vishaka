@extends('header')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Images </h3>
        </div>
        <form class="forms-sample" action="{{ route('upload.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="img">Upload New Images (You can select multiple files)</label><br>
                <input type="file" name="img[]"  multiple>
            </div>

            <div class="form-group">
                <label>Current Images:</label><br>
                @foreach($imgnames as $imgname)
                    <img src="{{ asset('admin/img/' . $imgname) }}" alt="Current Image" width="100">
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Update Images</button>
        </form>
    </div>
</div>

@endsection
