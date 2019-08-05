<div class="panel panel-default">
    <div class="panel-heading">
        <div class="blog-post">
            <h6 class="flex">
                <a href="{{ route('profile', $reply->owner) }}">
                    {{ $reply->owner->name }}
                </a> said {{ $reply->created_at->diffForHumans() }}...
            </h6>
        </div>
    </div>
    <div class="panel-body">
        {{ $reply->body }}
    </div>
    <br>
</div>