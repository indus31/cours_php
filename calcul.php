<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="resultat.php" method="post">
        <input type="number" name="nombre1" step = "0.01">
        <input type="number" name="nombre2" step = "0.01">
        <select name="selection">
            <option value="">choisir opérateur</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="ok">
    </form>
</body>
</html>