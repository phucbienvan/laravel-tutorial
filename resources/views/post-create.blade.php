<h1>Create post</h1>
<form action="{{route('post.store')}}" method="post">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </div>
    <br>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>
    <br>
    <button>Save</button>
</form>
