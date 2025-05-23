<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Website</title>
    <style>
body {
    margin: 0;
    padding: 0;
    background-color: white;
    font-family: Arial, sans-serif;
    overflow-x: hidden;
}

#google_translate_element{
    position: relative;
    right: 210px;
    top: -783px;
}

header {
    background-image: url("img/shadow.jpg");
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#logo {
    position: relative;
    left: 25px;
    font-style: italic;
    font-weight: bold;
    -webkit-text-stroke: 2px;
    -webkit-text-stroke-color: black;
    font-size: 55px;
}

#nav {
    display: flex;
    align-items: center;
}

#nav a {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin-right: 10px;
    margin-top: -40px;
    text-decoration: none;
    color: black;
}

#navbar {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-color: black;
    padding: 10px;
    text-align: left;
}

#navbar a {
    color: white;
    padding: 10px;
    text-decoration: none;
}

#admin{
    position: relative;
    left: 790px;
    -webkit-text-stroke: 1px;
    -webkit-text-stroke-color: #b71c1c;
}

#article {
    text-align: center;
    font-size: 20px;
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

#latest-news{
    position: relative;
    top: -35px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    flex: 1;
    background-color: #e0e0e0;
    padding: 10px;
    margin-right: 20px;
    border: 2px solid black;
    border-radius: 13px;
}

#latest-news {
    flex: 2;
}

section{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

section img{
    width: 350px;
    height: 200px;
    border: 2px solid black;
    border-radius: 13px;
    box-shadow: 4px 7px 7px 1px black;
    cursor: pointer;
    margin: 10px;
    transition: 400ms;
}

section img:hover{
    filter: grayscale(1);
    transform: scale(1.5);
}



#a1{
    position: relative;
    top: 30px;
    left: 500px;
}

#a2{
    position: relative;
    top: 220px;
    left: 500px;
}

#a3{
    position: relative;
    top: 410px;
    left: 500px;
}

hr{
    position: relative;
    top: 130PX;
}

#hr1{
    position: relative;
    top: 320PX;
}

#img1{
    position: absolute;
    top: 300px;
    left: 95px;
}


#img2{
    position: absolute;
    top: 625px;
    left: 95px;
}

#img3{
    position: absolute;
    top: 955px;
    left: 95px;
}

footer {
    position: relative;
    top: 550px;
    text-align: center;
    padding: 10px;
    background-color: #050505;
    color: #fff;
}

#search-container {
    position: relative;
    left: 1070px;
    top: -82px;
    display: flex;
    align-items: center;
}

#searchbox {
    padding: 10px;
    border: 1px solid #000000;
    border-radius: 5px;
    margin-right: 5px;
    color: #000;
    background-color: #fff;
}

#search-button {
    padding: 10px;
    background-color: #000;
    font-style: italic;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#search-button:hover {
    background-color: #333;
}

#s {
    display: none;
}
    </style>
</head>
<body>

    <header>
    <div id="logo">News</div>
        <div id="nav">
            <a href="login.php" >LOGIN</a>
            <a href="Sign Up.php">SIGN UP<a>
            <a href="https://www.facebook.com"><img src="img/o2.png" width="20" alt="Facebook"></a>
            <a href="https://twitter.com"><img src="img/OIP (4).png" width="20" alt="Twitter"></a>
        </div>
    </header>
    <div id="navbar">
        <a href="sports.php">SPORTS</a>
        <a href="cars.php">CARS</a>
        <a href="Arts.php">ARTS</a>
        <a href="contact.php">CONTACTS</a>
        <a href="about.php">ABOUT</a>
        <a id="admin" href="Administration.php">ADMINISTRATION</a>
    </div>
<!-- ---------------(search)------------------ -->
    <div id="s">
        <a href="Arts.php">Arts</a>
        <a href="cars.php">Cars</a>
        <a href="sports.php">Sports</a>
        <a href="contact.php">CONTACTS</a>
        <a href="about.php">ABOUT</a>
    </div>

    <div id="search-container">
        <input type="search" id="searchbox" placeholder="Search">
        <button type="button" id="search-button" onclick="search()"><b>Search</b></button>
    </div>
<!-- ----------------------------------------- -->

    <div id="article">
        <div id="latest-news">
            <h2>Latest News</h2>
        </div>
    </div>

    <div id="a1">
    <h2><i>History of the World Cup</i></h2>
        <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae urna ac augue tincidunt bibendum.<br>
        Duis efficitur metus at metus eleifend, ac laoreet dolor eleifend. Nulla facilisi. Sed vel hendrerit libero.
        <br> Proin eu ligula ut purus hendrerit scelerisque id at ligula. <a href="sports.php">More!</a>
        </b></p>
    </div>

    <div>
        <section id="img1">
            <a href="sports.php"><img src="img/World Cup.gif"></a>
        </section>
    </div>
    <hr>

    <div id="a2">
    <h2><i>The Evolution of Cars</i></h2>
        <b><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae urna ac augue tincidunt bibendum.<br>
        Duis efficitur metus at metus eleifend, ac laoreet dolor eleifend. Nulla facilisi. Sed vel hendrerit libero.<br>
        Proin eu ligula ut purus hendrerit scelerisque id at ligula. <a href="cars.php">More!</a>
        </p></b>
    </div>
    <div>
        <section id="img2">
            <a href="cars.php"><img src="img/Modern car.gif"></a>
        </section>
    </div>
    <hr id="hr1">

    <div id="a3">
    <h2><i>The Power of Visual Arts</i></h2>
        <b><p>Visual arts encompass a wide range of forms, including painting, sculpture, photography, and more.<br>
         These forms of expression have the power to evoke emotions, provoke thoughts,<br>
          and inspire change. <a href="Arts.php">More!</a>
        </p></b>
    </div>
    <div>
        <section id="img3">
            <a href="Arts.php"><img src="img/Arts.gif"></a>
        </section>
    </div>

    <footer>
        <p>&copy; Developed by team 3la allah</p>
    </footer>

    <script>
        function search() {
            var searchTerm = document.getElementById("searchbox").value;
            var pages = document.getElementById("s").getElementsByTagName("a");

            for (var i = 0; i < pages.length; i++) {
                if (searchTerm.toLowerCase() === pages[i].innerText.toLowerCase()) {
                    window.location.href = pages[i].href;
                    return;
                }
            }

            alert("No search results found for: " + searchTerm);
        }
    </script>
    <!-- ---------------------(Translation)------------------------------- -->
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element'); 
    } 
  </script> 
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <!-- --------------------------------------------------------------- -->
    <div id="google_translate_element"></div>
</body>
</html>
