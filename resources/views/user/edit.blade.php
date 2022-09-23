<form action="/api/user/update/{{$user->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="name" placeholder="{{$user->name}}">
    <input type="text" name="email" placeholder="{{$user->email}}">
        <input type="submit" value="submit">
</form>