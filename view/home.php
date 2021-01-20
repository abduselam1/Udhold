<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="file-check" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" value="<?=$data['name']?>">
        <input type="text" name="email">
        <input type="password" name="pass">
        <input type="file" name="image" id="">
        <input type="file" name="another" id="">
        
        <button type="submit">submit</button>
    </form>
</body>
</html>