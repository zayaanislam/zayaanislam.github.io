<!doctype html>
<html lang="en">
  <head>
    <title> Zayaan Islam </title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div id='sidebar'>

      <ul>
        <li><a href='index.html'>HOME</a></li>
        <li><a href='#'>ABOUT</a></li>
        <li><a href='#'>RESUME</a></li>
        <li><a href='#'>CONTACT</a></li>
      </ul>
      <div id='sidebar-button'>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $('#sidebar-button').click(function(){
      $('#sidebar').toggleClass('visible');
    });
  });

  </script>
    <main>
      <p> SEND E-MAIL</p>
      <form class="contact.form" action="contactform.php" method="post"
        <input type="text" name="name" placeholder="FULL NAME">
        <input type="text" name="email" placeholder="EMAIL">
        <input type="text" name="subject" placeholder="SUBJECT">
        <textarea name="message" placeholder="MESSAGE"></textarea>
      </form>
    </main>
  </body>
</html>
