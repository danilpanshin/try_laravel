<h1>Create new project</h1>
<form method="POST" action="/projects">
    {{ csrf_field() }}
    <div>
        <input type="text" name="title" placeholder="title">
    </div>
    <div>
        <textarea name="description" placeholder="description"></textarea>
    </div>
    <div>
        <button type="submit">Create!</button>
    </div>
</form>
