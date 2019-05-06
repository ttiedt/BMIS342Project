<!DOCTYPE html>
<html lang="en">

<head>
  <title>Atticus</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
  <div class="nav_div">
    <nav>
      <a href="../index.html">HOME</a> &nbsp | &nbsp
      <a href="menu.html">MENU</a> &nbsp | &nbsp
      <a href="gift_shop.html">GIFT SHOP</a> &nbsp | &nbsp
      <a href="photo_gallery.html">PHOTO GALLERY</a> &nbsp | &nbsp
      <a href="contact_us.html">CONTACT US</a>
    </nav>
  </div>
  <div id="container">
    <main>
      <div>
        <a href="../index.html"><img src="../images/logo_text.png" alt="Atticus Logo" class="img_center" /></a><br/>
      </div>
      <?php
        echo "<form action='receipt.php' method='POST'>
          <div class='formheader'>
            <h2>Online Order</h2>
          </div>
          <div class='textbox'>
            <i class='far fa-user'></i>
            <input name='name' type='text' placeholder='Name'>
          </div>
          <div class='textbox'>
            <i class='far fa-envelope'></i>
            <input name='email' type='email' placeholder='Email'>
          </div>
          <div class='textbox'>
            <i class='fas fa-phone'></i>
            <input name='phone' type='tel' placeholder='Phone'>
          </div>
          <div class='textbox'>
            <i class='fas fa-mug-hot'></i>
            <select name='order'>
              <option value='coffee1'>Coffee1</option>
              <option value='coffee2'>Coffee2</option>
            </select>
          </div>
          <div class='radiodiv'>
            <input name='size' type='radio' value='s'><lable>S</lable><br/>
            <input name='size' type='radio' value='m'>M<br/>
            <input name='size' type='radio' value='l'>L<br/>
          </div>
          <input type='submit' value='Submit' class='subbnt'>
          <input type='reset' value='Cancel' class='subbnt'>
        </form>";
      ?>
    </main>
  </div>
</body>

</html>