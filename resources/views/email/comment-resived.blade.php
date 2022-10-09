<p>Hello {{ $post->user->name }}</p>

<p>You hav new commnet <a href="{{ url('posts/' . $post->id) }}">{{ $post->title }}</a></p>