<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <title>Danh sách sinh viên</title>
</head>
<body>
<div class="container mt-3">
        <h1 class="alert alert-success pb-4 ">Danh sách sinh viên</h1>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>

        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <th>{{ $item['id'] }}</th>
                <th>{{ $item['name'] }}</th>
                <th>{{ $item['age'] }}</th>
                <th>{{ $item['address'] }}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
