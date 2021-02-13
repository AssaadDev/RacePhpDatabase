<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>My db project</title>
</head>

<body>
    <div class="tire">


        <h1>Hello Friend</h1>
        <p>You are probably here to set your car for the race?</p>
        <form action="myphp.php" method="POST">
            <label for="carBrand">Brand</label>
            <input type="text" name="Brand" id="carBrand">
            <label for="carModel">Model</label>
            <input type="text" name="Model" id="carModel">
            <label for="carType">Type</label>
            <input type="text" name="Type" id="carType">
            <label for="carYear">Year of manufacture</label>
            <input type="number" name="Year" id="carYear" max="2021">
            <label for="carEngine">Engine</label>
            <input type="number_format" name="Engine" id="carEngine">
            <label for="carHP">Horse Power</label>
            <input type="number" name="HP" id="carHP">
            <input type="submit" class="xSub" name="submit" value="Lets race">
        </form>
    </div>
</body>

</html>