<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football World Cup Article</title>
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
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        #google_translate_element{
            position: relative;
            right: 10px;
            top: -1981px;
        }

        header {
            background-color:black;
            color: #fff;
            padding: 1em;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #f0e7e7;
            -webkit-text-stroke: 1px;
            -webkit-text-stroke-color: #FFDF00;
        }

        #c{
            text-decoration: none;
            text-align: left;
            color: #ccc;
            font: size 10px;;
            font-weight: bolder;
            background-color: #222222;
        }

        p {
            line-height: 1.6;
            font-weight: bold;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        footer {
            position: relative;
            top: 30px;
            text-align: center;
            padding: 10px;
            background-color:black;
            color: #fff;
        }
        .comment {
            margin-bottom: 10px;
            padding: 5px;
            border: 2px solid #030000;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        #commentForm {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        .comment {
            background-color: #fff;
            margin-bottom: 15px;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .comment p {
            margin: 0 0 10px;
        }

        button.commentBtn {
            background-color: #3498db;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        button.commentBtn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <header>
        <center><h1>The Football World Cup: A Global Spectacle</h1></center>
        <a id="c" href="project.php">HOME</a>
    </header>

    <section>
        <h2>History of the World Cup</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae urna ac augue tincidunt bibendum. Duis efficitur metus at metus eleifend, ac laoreet dolor eleifend. Nulla facilisi. Sed vel hendrerit libero. Proin eu ligula ut purus hendrerit scelerisque id at ligula.</p>

        <img src="img/world_cup_history.jpg" alt="World Cup History">

        <p>Curabitur non elit nec sem consequat feugiat vel eget leo. Integer ut ultricies purus. Praesent vel felis at neque tincidunt tristique vel at velit. Suspendisse potenti.</p>
    </section>

    <section>
        <h2>Memorable Moments</h2>
        <p>Quisque vestibulum ac augue vel pellentesque. Nullam at volutpat felis, id consequat quam. Vestibulum eget elit eu ipsum condimentum vehicula a vitae odio. Fusce ut odio at ex posuere aliquam vel sit amet metus.</p>

        <img src="img/world_cup_moments.jpg" alt="Memorable World Cup Moments">

        <p>Nam dapibus ex eget nisi iaculis, nec aliquet ligula efficitur. Aenean cursus eros ut lectus eleifend, id hendrerit enim tincidunt. Nullam scelerisque quam eu nunc ullamcorper fringilla.</p>
    </section>
    <hr>
    <section>
        <form id="commentForm">
            <label for="commentText">Add comment:</label>
            <textarea id="commentText" name="commentText" required></textarea>
            <button type="button" onclick="addComment()">Send</button>
        </form>

        <div id="commentsContainer"></div>
    </section>

    <script>
        const comments = [];

        function addComment() {
            const commentText = document.getElementById('commentText').value.trim();
            
            if (commentText === "") {
                alert("Please add a comment before submitting.");
            } else {
                comments.push(commentText);
                displayComments();
                document.getElementById('commentForm').reset();
            }
        }

        function displayComments() {
            const commentsContainer = document.getElementById('commentsContainer');
            commentsContainer.innerHTML = '';

            comments.forEach((comment, index) => {
                const commentDiv = document.createElement('div');
                commentDiv.classList.add('comment');
                commentDiv.innerHTML = `
                    <p>${comment}</p>
                    <button onclick="editComment(${index})">Edit</button>
                    <button onclick="deleteComment(${index})">Delete</button>
                `;
                commentsContainer.appendChild(commentDiv);
            });
        }

        function editComment(index) {
            const updatedComment = prompt('Edit Comment', comments[index]);
            if (updatedComment !== null) {
                comments[index] = updatedComment.trim();
                displayComments();
            }
        }

        function deleteComment(index) {
            if (confirm('Are you sure you want to delete this comment?')) {
                comments.splice(index, 1);
                displayComments();
            }
        }

        displayComments();
    </script>

    <footer>
        <p>&copy; 2023 Football World Cup Magazine</p>
    </footer>
    <div id="google_translate_element"></div>
</body>
</html>