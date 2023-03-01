<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact admin</title>
</head>
<body>
    <h1>Contact admin</h1>
    <form action="{{route("contact")}}" method="post">
        {{csrf_token()}}
        <label for="user-name">User name</label>
        <input type="text" name="user_name" id="user-name" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
