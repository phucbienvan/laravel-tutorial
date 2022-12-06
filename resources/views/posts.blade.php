<table>
    <h1>List Post</h1>
    <a href="{{route('post.create')}}">Add new post</a>
    @foreach($posts as $post)
    <tr>
        <td><a href="{{ route('post.show', $post) }}">{{ $post->title }}</a></td>
        <td>{{ $post->description }}</td>
    </tr>
    @endforeach
</table>
