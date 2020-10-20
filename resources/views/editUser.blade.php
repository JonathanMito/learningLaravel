<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="{{ route('user.edit', ['user' => $user->id]) }}">
    	@csrf
        @method('PUT')
    	<label>Nome</label>
    	<input type="text" name="name" value="{{ $user->name }}">

    	<label>Email</label>
    	<input type="text" name="email" value="{{ $user->email }}">

    	<label>Senha</label>
    	<input type="password" name="password">

    	<input type="submit" value="Editar" name="">
    </form>
    
</body>
</html>