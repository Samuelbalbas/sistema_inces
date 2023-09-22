<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../public/img/inces.jpg" rel="icon">
    <title>PDF Cargo</title>
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
    text-align: left;
    font-size: 22px;
    width: 95%;

}
tbody. tr. td{
    border: 1px solid black;
}

img {
  margin-left: 17.5%;
  width: 60%;
  height: 22%;
}

.left{
  width: 17%;
  height: 15%;
  margin-left: 1%;
  border-radius: 8% 
}

</style>
{{-- Estilo al PDF --}}

{{-- Index del PDF --}}
    <body>
        <img class="left" src="../public/img/logo_pdf.jpg" alt="">
        <br><br>
        <img src="../public/img/ce.png" alt="">
        <h1>Listado del Cargo</h1><br>
            <table class="table" >
            <thead class="header">
                <tr>
                    <th>Cargo</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($cargos as $cargo)
                <tr>
                    <td>{{ $cargo->nombre_cargo }}</td>
                </tr>
        @endforeach
            </tbody>
        </table>
    </body>
{{-- Index del PDF --}}

</html>