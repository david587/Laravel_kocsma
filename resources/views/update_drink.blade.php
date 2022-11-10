<form action="update-drink" method="post">
    @csrf
    <p>
        <label for="">Név:</label>
        <input type="text" name="name" 
        value="{{$drink->name}}" >
    </p>
    <p>
        <label for="">Ár</label>
        <input type="text" name="price"
        value="{{$drink->price}}">
    </p>
    <p>
        <label for="">Tipus</label>
        <input type="text" name="type"
         value="{{$drink->type->name}}">
    </p>
    <p>
    <button type="submit">Frissités</button>
    </p>
</form>