<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Přihlášení do učebnice | ZČU FPE</title>
    <meta name="robots" content="noindex, nofollow">

    <link href="assets/css/style.css" rel="stylesheet">
    <!--<link href="assets/css/style.min.css" rel="stylesheet">-->
  </head>
  <body>
    <?php include "partials/header.php" ?>
    <main role="main">
      <section role="region" class="section">
        <div class="container">
          <div class="col-md-4 col-md-offset-4">
            <h3>Přihlášení</h3>
            <form action="/login" method="post">
              <input type="text" name="email" id="frm-login-name" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
              <label for="frm-login-name">Uživatelské jm.</label>
              <input type="password" name="password" id="frm-login-password" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
              <label for="frm-login-password">Heslo</label>
              <input type="submit" name="login" value="Přihlásit">
            </form>
            <hr class="mt-50">
          </div>
        </div>
      </section>
      <section role="region" class="section">
        <div class="container">
          <div class="col-md-4 col-md-offset-4">
            <h3>Registrace</h3>
            <form action="/login" method="post">
              <input type="text" name="email2" id="frm-registration-name" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
              <label for="frm-registration-name">Uživatelské jm.</label>
              <input type="text" name="email" id="frm-registration-email" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
              <label for="frm-registration-email">Email</label>
              <input type="password" name="password2" id="frm-registration-password" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
              <label for="frm-registration-password">Heslo</label>
              <input type="password" name="password2b" id="frm-registration-password2" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
              <label for="frm-registration-password">Heslo znovu</label>
              <input type="submit" name="login" value="Registrovat">
            </form>
          </div>
        </div>
      </section>
    </main>
    <?php include "partials/footer.php" ?>
  </body>
</html>
