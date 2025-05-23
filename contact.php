<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
<!-- ---------------------(Translation)----------------------------- -->
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element'); 
    } 
  </script> 
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- --------------------------------------------------------------- -->
    <style>
       body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
#google_translate_element{
    position: relative;
    right: -480px;
    top: -300px;
}
.container {
    max-width: 400px;
    width: 100%;
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    position: absolute;
    top: 15px;
    font-size: 70px;
    color: #333;
    font-family: 'Algerian,Helvetica,sans-serif';
    text-decoration: underline;
    color: #3498db;
    margin-bottom: 20px;
}
form {
    position: relative;
    left: 55px;
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input,
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    background-color: #3498db;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #2980b9;
}

.message {
    background-color: #2ecc71;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 20px;
    border-radius: 4px;
}

.btn {
    background-color: #3498db;
    color: white;
    padding: 12px;
    text-decoration: none;
    display: inline-block;
    border-radius: 4px;
}

.btn:hover {
    background-color: #2980b9;
}


</style>
</head>
<body>

<?php
    include("local/config.php");
    
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $stmt = mysqli_prepare($con, "INSERT INTO contact (Name, Email, Message) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
        mysqli_stmt_execute($stmt);

        if(mysqli_stmt_affected_rows($stmt) > 0) {
            echo "<div class='message'>
                  Your response has been sent!
                  </div>";
            echo "<a href='project.php'><button class='btn'>Go Back</button></a>";
        } else {
            echo "Error: " . mysqli_error($con);
        }

        mysqli_stmt_close($stmt);
    }
?>

<h1>Contact Us</h1>

<form method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit" name="submit">Submit</button>
</form>
    <div id="google_translate_element"></div>
</body>
</html>
