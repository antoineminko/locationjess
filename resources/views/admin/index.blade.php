<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Dashboard</title>
</head>
<style>
.nav{
    margin-top: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
</style>
<body>
    <h1>Admin Page</h1>
    <div class="nav">
        <p>Hello {{Auth()->user()->nom}} {{Auth()->user()->prenom}}</p>
        <form action="{{route('user.logout')}}" method="POST">
            @csrf
            <button type="submit">Se deconnecter</button>
        </form>
    </div>
</body>
</html>