<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Project</title>
</head>
<body>
    

        <h2>Simple PHP Project</h2>

        <div class="container">
            <?php
            // post method: used for sensitive data 
            // click button to  pass the input inside the url (show url in address
            // bar {name attribute} {value attribute the user gave us})
            // functionpage - graps the data from the url and uses it inside our code.


            ?>
            <form action="functions.php" method="GET">

                <input type="number" name="num01" placeholder="Enter first number">
                <select name="operation" id="">
                    <option value="add">Add</option>
                    <option value="sub">Subtract</option>
                </select>
                <input type="number" name="num02" placeholder="Enter second number">
                <button type="submit">Calculate</button>

            </form>
        </div>


</body>
</html>