<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new client</title>
</head>
<body>


<form method="POST" action="{{route('add-client')}}" enctype="multipart/form-data">
@csrf
<input type="text" name="name" placeholder="name">
<input type="text" name="surname" placeholder="surname">
<input type="email" name="email" placeholder="email">
<input type="file" name="file" placeholder="profile photo">
<button type="submit">ADD</button>
</form>
     
</body>
</html>