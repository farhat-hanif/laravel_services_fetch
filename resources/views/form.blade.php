<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/xyz" method="post">
    @csrf
        <label for="services">SERVICES:</label>
		<input type="text" class="form-control" id="services" name="services" required><br> 
        <button name="login_btn" type="submit" class="btn" >POST</button>   
        </form>
</body>
</html>