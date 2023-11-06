
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

<h2>Categoly Table</h2>
<a href="{{route('admin.category.add')}}"><button>Thêm mới category</button></a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
    </tr>
    @foreach($categories as $category)
        <tr>
            <td>{{$category["id"]}}</td>
            <td>{{$category["name"]}}</td>
            <td>{{$category["quantity"]}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>

