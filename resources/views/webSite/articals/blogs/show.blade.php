@extends('webSite.layouts.homeapp')
@section('content')
    <div class="mainDiv margin-div-top div-padding">
        <div class="container mb-5">
            <div class="row d-flex justify-content-center mt-5 mb-5">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">{{ $post->title }}</h6>
                        <br>
                        <b>{{ $post->body }}
                    </div>
                </div>
                <div>
                  
                        <h6 class="card-title">comments</h6>
                        @forelse ($post->comments as $comment)
                        <div class="comment">
                            <p><strong>{{ $comment->user->name }}:</strong> {{ $comment->content }}</p>
                            <i>Posted on {{ $comment->created_at->format('F d, Y') }}</i>
                        </div>
                    @empty
                        <p>No comments yet.</p>
                    @endforelse
                    
                </div>
                <div>
                    <form action="{{route('comments.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control bg-light" id="ar" name="content"
                                id="email-input" placeholder="write comment">
                        </div>
                        <input type="hidden" name="commentable_id" value="{{ $post->id }}">
                        <input type="hidden" name="commentable_type" value="App\Models\Post">
                        <div class="mainButtonsContainer d-flex justify-content-center mt-4">
                            <button class="mainButton mt-3" type="submit">comment</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
