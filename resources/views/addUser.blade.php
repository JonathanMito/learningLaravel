<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="{{ route('user.store') }}">
    	@csrf
    	<label>Nome</label>
    	<input type="text" name="name">

    	<label>Email</label>
    	<input type="text" name="email">

    	<label>Senha</label>
    	<input type="password" name="password">

    	<input type="submit" value="Cadastrar" name="">
    </form>
    
</body>
</html>