<!-- OOP OOP -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Management</title>
</head>
<body>
<h1>Money Management</h1>
    <form action="controller.php" method="POST">
        <h3>Add:</h3> 
        Rp.
        <input type="number" id="money" name="money">
        <select name="type" id="type">
            <option value="income">Outcome</option>
            <option value="outcome">Income</option>
        </select>  <br> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
