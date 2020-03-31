<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey</title>
    <meta name="author" content="Zeynep Barut">
    <meta name="description" content="Lab 3 - CS 008 A Website about making the world a better place featuring meal plans and diet options.">
    <link type="text/css" rel="stylesheet" href="css/custom.css?version=1.0">
</head>
<body>

    <nav>
        <ol>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="diet-options.php">Diets Options</a>
            </li>
            <li>
                <a href="meal-plan.php">Meal Plans</a>
            </li>
            <li>
                <a href="form.php">Form</a>
            </li>
            <li>
                <a href="../index.php">Site Map</a>
            </li>
        </ol>
    </nav>
    <header>
        <?php
        print '<p>Post Array:</p><pre>';
        print_r($_POST);
        print '</pre>';
        ?>
    </header>
    <main>
        <section>
            <form action="#"
                  method="POST">
                <fieldset>
                    <legend>Introduction</legend>
                    <p>
                        <label for="txtFirstName">First Name:</label>
                        <input type="text" name="txtFirstName" id="txtFirstName">
                    </p>
                    <p>
                        <label for="txtLastName">Last Name:</label>
                        <input type="text" name="txtLastName" id="txtLastName">
                    </p>
                </fieldset>

                <fieldset>
                    <legend>Gender</legend>
                    <p>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                    </p>
                    <p>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                    </p>
                    <p>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label>
                    </p>
                </fieldset>

                <fieldset>
                    <legend>Will you commit to a diet today?</legend>
                    <p>
                        <input type="checkbox" name="ProteinDiet" id="Yes" value="1">
                        <label for="Yes">YES!</label>
                    </p>
                    <p>
                        <input type="checkbox" name="KetoDiet" id="No" value="1">
                        <label for="No">...no</label>
                    </p>
                    <p>
                        <input type="checkbox" name="VeganDiet" id="CantDecide" value="1">
                        <label for="CantDecide">Can't decide :(</label>
                    </p>
                </fieldset>

                <fieldset>
                    <legend>What Diet Are You Interesting In?</legend>
                    <p>
                        <label for="SelectOptions">Choose your diet: </label>
                        <select name="Levels" id="SelectOptions">
                            <option value="1">Protein Diet</option>
                            <option value="1">Keto Diet</option>
                            <option value="1">Vegan Diet</option>
                            <option value="">None of the options</option>
                        </select>
                    </p>
                </fieldset>

                <fieldset>
                    <input type="submit" value="Submit">
                </fieldset>
            </form>
        </section>



    </main>
    <footer>
        <h4>Quick links:</h4>
        <ul>
            <li class="footerBtn" >
                <a href="index.php">Home</a>
            </li>
            <li class="footerBtn" >
                <a href="diet-options.php">Diets Options</a>
            </li>
            <li class="footerBtn" >
                <a  href="meal-plan.php">Meal Plans</a>
            </li>
            <li class="footerBtn" >
                <a href="form.php">Form</a>
            </li>
            <li class="footerBtn" >
                <a href="../index.php">Site Map</a>
            </li>
        </ul>
    </footer>
</body>
</html>
