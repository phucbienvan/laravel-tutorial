<h1>Add New Post</h1>
<form action="{{ route('post.store') }}" method="post">
  @csrf
  <input type="text" name="title" id="title" placeholder="enter title">
  <input type="text" name="description" id="description" placeholder="enter description">
  <input type="submit" value="Add">
</form>