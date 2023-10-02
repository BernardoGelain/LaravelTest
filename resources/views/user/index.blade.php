<!-- resources/views/user/index.blade.php -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Users</title>
</head>

<body>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <div class="container">
        <h1>Lista de Usuários</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Links de Paginação -->
        <div class="d-flex justify-content-center">
            {{ $users->links() }}
        </div>
    </div>

</body>

</html>
