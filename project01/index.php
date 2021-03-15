<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>

    <form action="functions.php" method="get">
    <input type="text" name="num01" placeholder="number 1">
    <select name="oper">
    <label>Choose operation!</label>
    <option value="add">Add</option>
    <option value="sub">Subtract</option>
    <option value="multiply">multiply</option>
    <option value="divide">divide</option>
    </select>
    <input type="text" name="num02" placeholder="Number 2">
    <button type="submit">Calculate!</button>
    </form>

</body>
</html>