@extends('layouts.app')
@section('content')
    <div class="container col-md-11">
        <div class="row justify-content-center">
            <div class="card col-8">
                <h4>Edit Profile</h4>
                <hr>
                <div class="card-body">
                    <form action="/admin/setting/{{ $admin->id }}" enctype="multipart/form-data" method="POST" autocomplete="off">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="image">Upload profile Picture</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="image">Upload</span>
                                </div>
                            </div>
                            @error('image')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="row form-group">
                            <label for="title">Position Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $admin->title }} ">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        
                        <div class="row">
                            <button type="submit" class="btn col-4 btn-block btn-success">
                            <img src="../../../icons/cursor-fill.svg"> Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
