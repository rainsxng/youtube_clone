@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $channel->name }}</div>

                    <div class="card-body">
                        @if($channel->editable())
                            <form id="update-channel-form" action="{{ route('channels.update', $channel->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                        @endif
                            <div class="form-group row justify-content-center">

                                    <div class="channel-avatar" onclick="document.querySelector('#image').click()">
                                        @if($channel->editable())
                                        <div class="channel-avatar-overlay">

                                        </div>
                                        @endif
                                            <img src="{{ $channel->image() }}" alt="channel avatar">
                                    </div>

                            </div>
                            @if($channel->editable())
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
                            <input onchange="document.querySelector('#update-channel-form').submit()" type="file" id="image" name="image">
                                @if($errors->any())
                                    <ul class="list-group mb-4">
                                        @foreach($errors->all() as $error)
                                            <li class="list-group-item text-danger">
                                                {{ $error }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                <button type="submit" class="btn btn-info">
                                    Update channel info
                                </button>
                            </form>
                            @else
                                <h4 class="text-center">{{ $channel->name }}</h4>
                                <p class="text-center">{{ $channel->description }}</p>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
