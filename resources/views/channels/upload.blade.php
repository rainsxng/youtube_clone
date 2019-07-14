@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <channel-uploads :channel="{{ $channel }}" inline-template>
            <div class="col-md-8">
                <div @change="upload" class="card p-3 d-flex justify-content-center align-items-center" v-if="!selected">

                    <input type="file" ref="videos" id="video-upload" style="display: none" multiple>

                    <img onclick="document.getElementById('video-upload').click()" src="https://cdn4.iconfinder.com/data/icons/social-media-2259/124/youtube-512.png" alt="audio, film, media, music, social, video, youtube icon" class="d-block mx-auto" height="100px" width="100px">

                    <div class="text-center">
                        Upload video
                    </div>
                </div>
                <div class="card p3" v-else>
                    <div class="my-4">
                        <div class="progress mb-3">
                            <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="d-flex justify-content-center align-items-center" style="height: 180px; color: white; font-size: 18px; background: #808080;">
                                    Loading thumbnail ...
                                </div>
                            </div>

                            <div class="col-md-4">
                                <h4 class="text-center">
                                    My Awesome video
                                </h4>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </channel-uploads>
        </div>
    </div>
@endsection
