<h1>Edit Post</h1>
@if (Session::has('success'))
    <p>{{ Session::get('success') }}</p>
@endif
@if (Session::has('fail'))
    <p>{{ Session::get('fail') }}</p>
@endif
<form action="{{ route('post.update', $post->id) }}" method="post">
  @csrf
  <input type="text" name="title" id="title" placeholder="enter title" value="{{ $post->title }}">
  @error('title')
    <p> {{ $message }} </p>
  @enderror
  <input type="text" name="description" id="description" placeholder="enter description" value="{{ $post->description }}">
    @error('description')
    <p> {{ $message }} </p>
    @enderror
  <input type="submit" value="Update">
</form>
<a href="{{ route('post.index') }}">Back</a>
