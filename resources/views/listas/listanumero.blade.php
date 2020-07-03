<!doctype html>
<html lang="en">
  <head>
    <title>Lista de numero</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <h1>Lista de Numeros</h1>

          <table class="table table-striped table-inverse table-responsive">
              <thead class="thead-inverse">
                  <tr>
                      <th>Numero</th>
                      <th>Multiplicacion</th>
                      <th>Suma</th>
                      <th>Resta</th>
                      <th>Division</th>
                  </tr>
                  </thead>
                  <tbody>
                  @for($x=0;$x<=12;$x++)
                      <tr>
                          <td scope="row">{{ $x }}</td>
                          <td><a href="{{ route('multiplicar',['id'=> $x])}}"><h4>X</h4></a></td>
                          <td><a href="{{ route('operacion', ['id'=> $x, 'estado' => 1])}}"><h4>+</h4></a></td>
                          <td><a href="{{ route('operacion', ['id' => $x, 'estado' => '2' ])}}">--</a> </td>
                          <td><a href="{{ route('operacion', ['id' => $x, 'estado' => '3' ])}}">/</a> </td>
                      </tr>
                  @endfor
                  </tbody>
                        
          </table>
                          
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>