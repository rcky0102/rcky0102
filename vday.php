<?php
session_start();

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $college = $_POST['college'];
    $country = $_POST['country'];
    $dreamsize = $_POST['dream-size'];
    $studyfrequency = $_POST['study-frequency'];
    $favoriteproduct = $_POST['favorite-product'];
    $consumptionfrequency = $_POST['consumption-frequency'];

    // Store data in session
    $_SESSION['vday_data'] = [
        'fullname' => $fullname,
        'college' => $college,
        'country' => $country,
        'dreamsize' => $dreamsize,
        'studyfrequency' => $studyfrequency,
        'favoriteproduct' => $favoriteproduct,
        'consumptionfrequency' => $consumptionfrequency
    ];

    // Redirect to show.php
    echo "<script>alert('Data saved successfully!'); window.location.href='show.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Form Cheatsheet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="image-removebg-preview (1).png" alt="Image">
    <div class="custom-container">
        <form method="POST">
            <h2 class="container-title">Please fill up the form</h2>    

            <label class="form-label">Full Name:</label>
            <input type="text" name="fullname" class="input-field" placeholder="Enter your name" required> 
                
            <label class="form-label">Are you in college?</label>
            <select name="college" class="combo-box">
                <option value="" disabled selected>Select an option</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>

            <label class="form-label">Which country do you badly want to travel to?</label>
            <input type="text" name="country" class="input-field" required> 

            <label class="form-label">How big is your dream?</label>
            <select name="dream-size" class="combo-box">
                <option value="" disabled selected>Select an option</option>
                <option value="large">Large</option>
                <option value="huge">Huge</option>
                <option value="gigantic">Gigantic</option>
            </select>

            <label class="form-label">How many times a week do you study?</label>
            <input type="number" name="study-frequency" class="input-field" required>
            
            <label class="form-label">If you achieve your dreams and can afford anything, which of the following will you buy often?</label>
            <select name="favorite-product" class="combo-box">
                <option value="" disabled selected>Select an option</option>
                <option value="milk">Milk</option>
                <option value="chocolate">Chocolate</option>
            </select>
            
            <label class="form-label">How many times a day will you consume the selected product?</label>
            <input type="number" name="consumption-frequency" class="input-field" required>
            
            <button type="submit" name="submit" class="submit-button">Submit</button>
        </form>
    </div>
</body>
</html>
