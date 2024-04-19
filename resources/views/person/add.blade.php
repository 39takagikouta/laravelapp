<div>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    <form action="/person/add" method="post">
        @csrf
        <input type="text" name="name" value="{{old('name')}}">
        <input type="text" name="mail" value="{{old('mail')}}">
        <input type="number" name="age" value="{{old('age')}}">
        <input type="submit" value="send">
    </form>
</div>
