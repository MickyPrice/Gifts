<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>MLP | Gifts</title>
    <script type='text/javascript'>
    eval(unescape('%66%75%6e%63%74%69%6f%6e%20%6a%32%35%65%32%31%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%32%32%34%35%33%34%37%38%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%38%33%30%33%36%30%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%32%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
    eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%6a%32%35%65%32%31%28%27') + '%3d%6a%69%77%6f%21%70%6f%6d%3f%27%73%76%78%6a%65%72%68%64%63%7e%27%22%69%72%67%6b%3b%26%6e%69%6b%72%7d%33%65%76%73%24%4322453478%33%34%32%37%32%33%34' + unescape('%27%29%29%3b'));
    </script>
  </head>
  <body>
    <nav id="nav"></nav>

    <div class='container'>

      <h1>Gifts</h1>
      <h2>by <a target='_blank' href='http://michael-leon-price.com'>Michael Leon Price</a></h2>
      <hr>


      <?php
        $d = $_GET['d'];
        $name1 = $_GET['name1'];
        $name2 = $_GET['name2'];
        $pm = $_GET['pm'];
        $image = $_GET['image'];
        $bg = $_GET['bg'];
        $link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (isset($name1)) {
          echo "<div class='output'><h1>To <font color='red'>$name2</font></h1> <br /> <div class='pm'><h1>$pm</h1></div> <br /> <h1>From <font color='red'>$name1</font></h1>";
          if (empty($bg)) {
            # code...
          }else {
            echo "<style>body{background-color: $bg</style>";
          }
          if (empty($image)) {
            # code...
          }else {
              echo "<br /><img src='$image' alt='Personalised Image' onerror='src=\"flower.jpg\"'/>";
          }
          echo "<br /><br /><br /><h2 style='margin:0px;'>Link to share</h2><br /><input style='width:50%' type='text' id='copyTarget' value='$link'><button style='padding:20px;' id='copyButton'>Click to copy link</button></div>
          <br /><a href='.'>Make your own message</a>";
        }else {
          echo "
          <form action='' method='get'>
            <input type='text' name='name1' placeholder='Your Name (Required)' required>
            <input type='text' name='name2' placeholder='Recievers Name (Required)' required>
            <textarea name='pm' placeholder='Personalised Message (Required)' required></textarea>
            <input type='text' name='image' placeholder='Enter Image URL (Optional)'>
            <input type='text' name='bg' placeholder='Background color (Colour Name or Hex) (Optional)'>
            <a href='http://www.w3schools.com/colors/colors_picker.asp' style='text-align:left;float:left;margin-left:35px;' target='_blank'>Hexadecimal Colour Picker</a>
            <input type='submit' name='submit' value='Sumbit'>
          </form>
          ";
        }
      ?>

    </div>
    <script src="gifts.js" charset="utf-8"></script>
    <script src="/assets/b.js" charset="utf-8"></script>

  </body>
</html>
