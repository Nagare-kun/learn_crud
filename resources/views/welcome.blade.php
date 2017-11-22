<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>

    <body>
        <div>
        <a href="/tambah">
            <button>Tambah Data</button>
        </a>
        </div>
        <hr><br>
        <div>
            <table border="1">
            <thead>
                <tr>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $item)
                    <tr>
                        <td>{{$item->username}}</td>
                        <td>{{$item->password}}</td>
                        <td><a href="/ubah/{{$item->id}}">Edit</a></td>
                        <td><a href="/hapus/{{$item->id}}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </body>
</html>
