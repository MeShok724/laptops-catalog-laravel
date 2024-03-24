<form method="post" action="/text">
    @csrf
    <textarea name="text" rows="10" cols="50"></textarea><br>
    <button type="submit">Process Text</button>
</form>
