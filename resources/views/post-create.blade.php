<h1>Add New Post</h1>
@if (Session::has('success'))
    <p>{{ Session::get('success') }}</p>
@endif
@if (Session::has('fail'))
    <p>{{ Session::get('fail') }}</p>
@endif
<form action="{{ route('post.store') }}" method="post">
  @csrf
  <input type="text" name="title" id="title" placeholder="enter title">
  @error('title')
    <p> {{ $message }} </p>
  @enderror
  <input type="text" name="description" id="description" placeholder="enter description">
    @error('description')
    <p> {{ $message }} </p>
    @enderror
  <input type="submit" value="Add">
</form>
