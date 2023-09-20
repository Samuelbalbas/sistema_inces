<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Periférico</title>
</head>

{{-- Estilo al PDF --}}

<style>

body{
    margin: 0;
	padding: 0;
    background: url(../img/fondo_inces.jpg);
	background-size: cover;
	font-family: sans-serif;
    
}

.header{
    background-color: rgb(15, 15, 15);
    color: rgb(231, 227, 225);
}

h1{
    color: rgb(0, 0, 0);
    text-align: center;
    font-family: sans-serif;
}

.table{
    font-size: 22px;
    text-align: center;
    width: 100%;

}
tbody. tr. td{
    border: 2px solid black;
}

img {
  margin-left: 17.5%;
  width: 60%;
  height: 22%;
}

/* .left{
  width: 10%;
  height: 5%;
  margin-left: 1%;
  border: 2px solid black;
  border-radius: 8% 
} */

</style>
{{-- Estilo al PDF --}}

{{-- Index del PDF --}}
    <body>
        {{-- <img class="left" src="../public/img/yaracuy.png" alt=""> --}}
        <img src="../public/img/ce.png" alt="">
        <h1>Listado del Periférico</h1><br>
            <table class="table" >
            <thead class="header">
                <tr>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Serial</th>
                    <th>Serial Activo</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($perifericos as $periferico)
                <tr>
                    <td>{{ $periferico->tipo_periferico->tipo }}</td>
                    <td>{{ $periferico->marca->nombre_marca }}</td>
                    <td>{{ $periferico->modelo->nombre_modelo }}</td>
                    <td>{{ $periferico->serial}}</td>
                    <td>{{ $periferico->serialA }}</td>
                </tr>
        @endforeach
            </tbody>
        </table>
    </body>
{{-- Index del PDF --}}

</html>