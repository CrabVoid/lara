<h1>New Books</h1>

<form action="/Books" method="post">
    @csrf
    <input type="text" name="title" placeholder="Title goes here">
    <input type="text" name="author" placeholder="Author goes here">
    <input type="date" name="released_at" placeholder="Released_at goes here">
    <input type="submit" value="create">
</form>