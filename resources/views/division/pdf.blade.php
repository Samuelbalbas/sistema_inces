<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF División</title>
</head>

<body>

<img src="./public/img/ce.png" alt="" width="50px" height="50px">        
        <h1 class="texte-center">División</h1><br>
            <table class="table" style="text-aling: center;font-size: 200px">
                    <thead class="barra">
                        <tr class="text-white">
                            <th style="color: black;">División</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($divisions as $division)
                                <tr>
                                    <td style="color: black;">{{ $division->id}}</td>
                                    <td class="col-10" style="color: black;">{{ $division->nombre_division }}</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table> 
</body>

</html>


                   
