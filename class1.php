<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--google fonts cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"

    <script src="https://kit.fontawesome.com/2f200a75c7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
     <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    
</head>
<body>
<!--HEADER SECTION -->
    <nav>
        <img src="Imagesweb\logo1.jpg" alt="">
        <div class="navigation">
            <ul>
                <!--<i id="close-button" class="fa-solid fa-circle-xmark"></i>-->
                <li><a href="home1.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="teachers.html">Teachers</a></li>
                <li><a href="Course.html">Courses</a></li>
                <li><a href="Blog.html">Blog</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a class="active" href="class1.php">Class of students</a></li>
            </ul>   
            <img id="menu" src="Imagesweb\menu2b.jpg"alt="">
        </div>
    </nav>
    <body>
      <h1>List of Names</h1>
      
      <table>
        <thead>
          <tr>
            <?php require 'class.php'?>
          </tr>
        </thead>
      </table>
    
      </body>
      </html>
      