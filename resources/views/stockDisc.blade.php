<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Discos disponíveis para venda</h1>
<table border="1">
    <tr>
        <th>Banda</th>
        <th>Nome do album</th>
        <th>Quantidade no estoque</th>
    </tr>

    <tr>
        @foreach($values as $values)
            <tr>
            <td> {{$values->author}}</td> 
                <td> {{$values ->album_name}} </td>
                <td> {{$values->amount}}</td> 
            </tr>
        @endforeach
    </tr>
</body>
</html>
