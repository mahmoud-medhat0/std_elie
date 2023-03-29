<!DOCTYPE html>
<html>
<head>
    <title>Bar Code</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>This is your data information.</p>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Barcode</th>
            <th>username</th>
        </tr>
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    {!! DNS1D::getBarcodeHTML(''.$user['id'].'', 'C128') !!}
                </td>
                <td>{{ $user->username }}</td>
            </tr>
    </table>
</body>
</html>
