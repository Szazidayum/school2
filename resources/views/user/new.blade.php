<form action="/api/user/new" method="post">
    {{csrf_field()}}

    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="submit" value="submit">
</form>