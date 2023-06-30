<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>что</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<h2>Вы здесь впервые?</h2>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Войти</button>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Зарегистрироваться</button>
</center>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="reg_user.php" method="POST">
    <div class="container">
      <h1>Регистрация</h1>
      <p>Заполните все поля для регистрации.</p>
      <hr>
      <label for="email"><b>Логин</b></label>
      <input type="text" placeholder="Логин" name="regusername" required pattern="[а-я]{1,15}" title="только буквы или цифры, макс. длина = 15" id="regusername">

      <label for="psw"><b>Пароль</b></label>
      <input type="password" placeholder="Пароль" name="regpsw" required id="regpsw" class="regpsw">

      <label for="psw-repeat"><b>Повторите пароль</b></label>
      <input type="password" placeholder="Повторите пароль" name="regpsw-repeat" required id="regpsw-repeat" class="regpsw-repeat">
      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>



<div id="id02" class="modal">

    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
  <form action="auth.php" method="POST" class="modal-content">
    <div class="container">
      <h1>Авторизация</h1>
      <hr>
      <label for="email"><b>Логин</b></label>
      <input type="text" placeholder="Логин" name="authusername" required pattern="[а-я]{1,15}" title="только буквы или цифры, макс. длина = 15" id="authusername">

      <label for="psw"><b>Пароль</b></label>
      <input type="password" placeholder="Пароль" name="authpsw" required id="authpsw" class="authpsw">

      <label for="psw-repeat"><b>Повторите пароль</b></label>
      <input type="password" placeholder="Повторите пароль" name="authpsw-repeat" required id="authpsw-repeat" class="authpsw-repeat">
      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="signin">Sign In</button>

      </div>
    </div>
  </form>

</div>

</body>

<script>

document.addEventListener('DOMContentLoaded', function () 
{
                
  var pass1 = document.querySelector('#authpsw'),
  pass2 = document.querySelector('#authpsw-repeat'),
  pass3 = document.querySelector('#regpsw'),
  pass4 = document.querySelector('#regpsw-repeat')
          
  pass1.addEventListener('input', function () {
    this.value != pass2.value ? pass2.setCustomValidity('Пароли не совпадают') : pass2.setCustomValidity('')
  })

  pass2.addEventListener('input', function (e) 
  {
    this.value != pass1.value ? this.setCustomValidity('Пароли не совпадают') : this.setCustomValidity('')
  })

  pass3.addEventListener('input', function () 
  {
    this.value != pass4.value ? pass4.setCustomValidity('Пароли не совпадают') : pass4.setCustomValidity('')
  })

  pass4.addEventListener('input', function (e) 
  {
    this.value != pass3.value ? this.setCustomValidity('Пароли не совпадают') : this.setCustomValidity('')
  })
})

// Get the modal
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

// Get the modal
var modal1 = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>

</body>
</html>