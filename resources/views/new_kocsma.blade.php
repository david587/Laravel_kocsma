@if(session()->has("sucess"))
    <h3>{{ session("success") }}</h3>
@endif

<form action="submit-kocsma" method="post">
    @csrf
    <p>
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="name">
    </p>
    <p>
        <label for="">Price:</label>
        <input type="text" name="price" placeholder="price">
    </p>
    <p>
        <label for="">Type:</label>
        <input type="text" name="type" placeholder="type">
    </p>
    <button type="submit">Submit</button>
</form>

