<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Forside</a></li>
            <li><a href="Lommeregner.php">Lommeregner</a></li>
        </ul>
    </nav>
    <form>
        value 1: <input type="text" id="value1">
        value 2: <input type="text" id="value2">
        operator: 
        <select id="operator">
            <option value="add">Add</option>
            <option value="min">Minus</option>
            <option value="div">Divide</option>
            <option value="mul">Multiply</option>
        </select>
        <button type="button">Calculate</button>
    </form>

</body>
</html>