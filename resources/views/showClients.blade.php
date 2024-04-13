
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Clientes Cadastrados</h1>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Número</th>
    </tr>

    <tr>
        @foreach($values as $values)
            <tr>
                <td> {{$values ->full_name}} </td>
                <td> {{$values->phone}} </td> 
            </tr>
        @endforeach
    </tr>

</table>
</body>
</html><!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->

