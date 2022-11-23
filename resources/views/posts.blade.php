<table>
    <h1>List Post</h1>
    @if(\Illuminate\Support\Facades\Session::has('message'))
        <p>{{\Illuminate\Support\Facades\Session::get('message')}}</p>
    @endif
    @foreach($posts as $post)
        <tr>
            <td><a href="{{ route('post.show', $post) }}">{{ $post->title }}</a></td>
            <td>{{ $post->description }}</td>
        </tr>
    @endforeach
</table>
<a href="{{route('post.create')}}">Create Page</a>
