<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The World of Art</title>
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
            background-color: #f9f9f9;
            color: #333;
        }
        #google_translate_element{
            position: relative;
            right: 10px;
            top: -1877px;
        }

        header {
            background-color: #060606;
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
            color: black;
            -webkit-text-stroke: 1px;
            -webkit-text-stroke-color: #ff0000;     
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
            background-color: #050505;
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
      <center><h1>The World of Art</h1></center>
        <a id="c" href="project.php">HOME</a>
    </header>

    <section>
        <h2>The Power of Visual Arts</h2>
        <p>Visual arts encompass a wide range of forms, including painting, sculpture, photography, and more. These forms of expression have the power to evoke emotions, provoke thoughts, and inspire change.</p>

        <img src="img/visual_arts.jpg" alt="Visual Arts">

        <p>Whether it's the vivid colors of a painting, the intricate details of a sculpture, or the unique perspective captured in a photograph, visual arts have the ability to communicate complex ideas and capture the essence of the human experience.</p>
    </section>

    <section>
        <h2>Exploring Cultural Diversity</h2>
        <p>Art is a reflection of culture, and different regions of the world have produced diverse and unique forms of artistic expression. From traditional paintings and sculptures to contemporary street art and digital installations, every culture adds its own flavor to the global art scene.</p>

        <img src="img/cultural_diversity.jpg" alt="Cultural Diversity in Art">

        <p>Art serves as a bridge between people, connecting them through shared emotions and experiences. By exploring art from various cultures, we gain a deeper understanding of the rich tapestry of human creativity.</p>
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
        <p>&copy; 2023 Art Exploration Magazine</p>
    </footer>
    <div id="google_translate_element"></div>
</body>
</html>