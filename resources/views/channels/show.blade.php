@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $channel->name }}</div>

                    <div class="card-body">
                        <form id="update-channel-form" action="{{ route('channels.update', $channel->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row justify-content-center">
                                <div class="channel-avatar" onclick="document.querySelector('#image').click()">
                                    <div class="channel-avatar-overlay">

                                    </div>

                                    <img src="{{ $channel->image() }}" alt="channel avatar">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">
                                    Name
                                </label>
                                <input type="text" name="name" value="{{ $channel->name }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="description" class="form-control-label">
                                    Description
                                </label>
                                <textarea  name="description" class="form-control"> {{ $channel->description }} </textarea>
                            </div>
                            <button type="submit" class="btn btn-info">
                                Update channel info
                            </button>

                            <input onchange="document.querySelector('#update-channel-form').submit()" type="file" id="image" name="image">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
