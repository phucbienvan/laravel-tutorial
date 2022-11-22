<table>
  <h1>List Post</h1>
  @foreach($posts as $post)
  <tr>
    <td><a href="{{ route('post.show', {{ $post->id }}) }}">{{ $post->title }}</a></td>
    <td>{{ $post->description }}</td>
  </tr>
  @endforeach
</table>