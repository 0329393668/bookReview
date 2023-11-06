

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            table-layout: fixed;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th:first-child {
            width: 4%; /* Đặt độ rộng cho ô STT */
        }

        th:last-child,
        td:last-child,
        img {
            width: 32%; /* Đặt độ rộng cho 3 ô cuối */
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        img {
            width: 20%;
        }
    </style>
</head>
<body>

<h2>Danh Sách Books</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Category</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{$book["id"]}}</td>
            <td>{{$book["name"]}}</td>
            <td><img src="{{$book["img"]}}" alt="ảnh"></td>
            <td>{{$book["category"]}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>

