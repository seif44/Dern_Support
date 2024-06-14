<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Service Request</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Show Service Request</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>Service ID:</th>
                    <td>{{ $request->id }}</td>
                </tr>
                <tr>
                    <th>User ID:</th>
                    <td>{{ $request->user_id }}</td>
                </tr>
                <tr>
                    <th>Description:</th>
                    <td>{{ $request->description }}</td>
                </tr>
                <tr>
                    <th>Request Status:</th>
                    <td>{{ $request->request_status }}</td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('requests.index') }}">Back</a>
    </div>
</body>

</html>
