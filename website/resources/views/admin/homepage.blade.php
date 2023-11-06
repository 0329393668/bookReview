<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Xin Chào Admin</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user["id"]}}</td>
            <td>{{$user["name"]}}</td>
            <td>{{$user["position"]}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
