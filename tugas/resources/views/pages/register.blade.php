<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/form" method="post">
        @csrf
        <label for="fname">First name:</label><br><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label><br><br>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="gender">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label for="nationality">Nationality:</label><br><br>
        <select id="nationality" name="nationality"><br><br>
          <option value="indonesia" selected>Indonesian</option>
          <option value="singapore">Singaporean</option>
          <option value="malaysia">Malaysian</option>
          <option value="australia">Australian</option>
      </select><br><br>
        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" id="indonesia" name="language" value="indonesia">
        <label for="indonesian">Bahasa Indonesia</label><br>
        <input type="checkbox" id="arab" name="language" value="arab">
        <label for="arab">Arab</label><br>
        <input type="checkbox" id="english" name="language" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" id="other" name="language" value="other">
        <label for="other">Other</label><br><br>
        <label for="bio">Bio:</label><br><br>
        <textarea id="bio" name="bio" rows="10" cols="30"></textarea><br>
        <input type="submit" value="Sign Up">
</body>
</html>
