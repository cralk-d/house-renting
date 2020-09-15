@extends('layouts.app')
@section('content')
    <div class="container col-md-11">
        <div class="row justify-content-center">
            <div class="card col-8">
                <h4>Edit Profile</h4>
                <hr>
                <div class="card-body">
                    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST" autocomplete="off">
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
                            <label for="phone">Mobile phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $user->profile->phone }} " autofocus>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="row form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') ?? $user->profile->address }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="row form-group">
                          <!-- radio -->
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                  <input class="custom-control-input" type="radio" id="customRadio1" name="sex" value="female">
                                  <label for="customRadio1" class="custom-control-label">Male</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input class="custom-control-input" type="radio" id="customRadio2" name="sex" value="female">
                                  <label for="customRadio2" class="custom-control-label">Female</label>
                                </div>
                                <div class="custom-control custom-radio">
                                  <input class="custom-control-input" type="radio" id="customRadio3" name="sex" value="other">
                                  <label for="customRadio3" class="custom-control-label">Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" >
                
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <button type="submit" class="btn col-4 btn-block btn-success">
                            <img src="../../icons/cursor-fill.svg"> Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
