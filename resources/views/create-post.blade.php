<h1>Create post</h1>
<form action="{{route('post.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enter title">
    <input type="text" name="description" placeholder="Enter description">
    <br><br>
    <button type="submit">Create</button>
</form>
