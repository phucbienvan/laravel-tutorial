<table>
    <h1>List Post</h1>
    @foreach($posts as $post)
    <tr>
        <td><a href="{{ route('post.show', $post) }}">{{ $post->title }}</a></td>
        <td>{{ $post->description }}</td>
    </tr>
    @endforeach
</table>


<div>
    <h1>Create</h1>
    <a href="{{route('post.create')}}">create new post</a>
</div>
