<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nameErr = $emailErr = $websiteErr = $genderErr = " ";
    ?>

    <form action="welcome.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name." required>
        <span>* <?php echo $nameErr; ?></span>


        <pre></pre>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email." required>
        <span class="error">* <?php echo $emailErr; ?></span>



        <pre></pre>
        <label for="website">Website:</label>
        <input type="website" id="website" name="website" placeholder="Enter your website." required>
        <span>* <?php echo $websiteErr; ?></span>

        <pre></pre>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>


        <pre></pre>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Female" required>Female
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Other" required>Other
        <span class="error">* <?php echo $genderErr; ?></span>

        <pre></pre>
        <button type="submit">Submit</button>
    </form>
</body>

</html>