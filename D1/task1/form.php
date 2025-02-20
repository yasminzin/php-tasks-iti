<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input, textarea, select {
        display: block;
        margin: 10px;
    }
    input[type="checkbox"] {
        display: inline;
        margin: 10px;
    }
    input[type="radio"] {
        display: inline;
        margin: 10px;
    }
    button {
        margin: 10px;
    }
</style>
<body>
    
<form action="server.php" method="POST">
    <input type="text" name="first-name" placeholder="Enter your first name">
    <input type="text" name="last-name" placeholder="Enter your last name">
    <textarea name="address" placeholder="Enter your address"></textarea>
    <select name="country">
        <option value="egypt">Egypt</option>
        <option value="ksa">Saudi Arabia</option>
        <option value="uae">United Arab Emirates</option>
    </select>
    <div>
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male" required>Male
    </div>
    <div>
        <input type="checkbox" name="skills[]" value="php">PHP
        <input type="checkbox" name="skills[]" value="mysql">MYSQL
        <input type="checkbox" name="skills[]" value="js">JS
        <input type="checkbox" name="skills[]" value="java">Java
    </div>
    <input type="text" name="username" placeholder="Enter your username">
    <input type="password" name="password" placeholder="Enter your password">
    <input type="text" name="department" placeholder="Enter your department">

    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</form>

</body>
</html>