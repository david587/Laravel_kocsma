<a href="/uj-kocsma"><button>Új</button></a>
<form action="keres-kocsma" method="get">
    <input type="text" name="name">
    <button type="submit">keresés</button>
</form>

<form action="show-update-drink" method="get">
    <input type="text" name="name">
    <button type="submit">Frissit</button>
</form>

<form action="delete-student" method="get">
    <input type="text" name="name">
    <button type="submit">Töröl</button>
</form>


<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Név</th>
        <th>Ár</th>
        <th>Type</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $drinks as $drink )
         <tr>
           <td>{{ $drink->id }}</td>
           <td>{{ $drink->name }}</td>
           <td>{{ $drink->price }}</td>
           <td>{{ $drink->type->name}}</td>
         </tr>
      @endforeach
    </tbody>
  </table>