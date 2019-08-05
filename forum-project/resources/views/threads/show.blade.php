@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row" style="display:flex; justify-content: space-between; ">
        <hr>
        <div class="blog-post">
            <h2 class="blog-post-title">{{$thread->title}}</h2>
            <p class="blog-post-meta text-right">Posted by {{ $thread->creator->name }}</p>
            <div class="panel panel-default">
                <hr>
                <div class="panel-body">
                    {{ $thread->body }}
                </div>
            </div>
            <hr>
            <h4>Replies from this thread:</h4>
            @foreach ($replies as $reply)
                @include ('threads.reply')
            @endforeach

            {{ $replies->links() }}
            <hr>
            @if (auth()->check())
            <form method="POST" action="{{ $thread->path() . '/replies' }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" id="body" class="form-control" placeholder="Have something to say?" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Post</button>
            </form>
            @else
            <p class="text-center">Please <a href="{{ route('login') }}">sign in</a> to participate in this
                discussion.</p>
            @endif
        </div>
        <div class="level">
                        @if (Auth::check())
                        <form action="{{ $thread->path() }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-link">Delete Thread</button>
                        </form>
                        @endif
                    </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>
                        This thread was published {{ $thread->created_at->diffForHumans() }} by
                        <a href="#">{{ $thread->creator->name }}</a>, and currently
                        has {{ $thread->replies_count }} {{ str_plural('comment', $thread->replies_count) }}.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection