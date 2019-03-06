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
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <h3>Přihlášení - učitel</h3>
              <form action="http://hana.fpe.zcu.cz/routes/teacher/authorise.php" method="post">
                <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/login.php" />
                <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/login.php" />
                <label for="frm-login-name" class="text-left">Email</label>
                <input type="text" name="email" id="frm-login-name" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
                <label for="frm-login-password" class="text-left">Heslo</label>
                <input type="password" name="password" id="frm-login-password" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
                <input type="submit" name="login" value="Přihlásit">
              </form>
            </div>
            <div class="col-md-4">
              <h3>Přihlášení - skupina</h3>
              <form action="http://hana.fpe.zcu.cz/routes/group/authorise.php" method="post">
                <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-skupina.php" />
                <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/login.php" />
                <label for="frm-login-name" class="text-left">Uživatelské jméno</label>
                <input type="text" name="name" id="frm-login-name2" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
                <label for="frm-login-password" class="text-left">Heslo</label>
                <input type="password" name="password" id="frm-login-password2" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
                <input type="submit" name="login" value="Přihlásit">
              </form>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container" id="registration">
          <hr class="login-hr center-block">
        </div>
      </section>
      <section role="region" class="section">
        <div class="container">
          <div class="col-md-4 col-md-offset-4">
            <h3>Zapomenuté heslo</h3>
            <form action="http://hana.fpe.zcu.cz/routes/teacher/resetPassword.php" method="post">
              <label for="frm-registration-name">Uživatelské jméno</label>
              <input type="text" name="name" id="frm-registration-name" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
              <label for="frm-registration-email">Email</label>
              <input type="text" name="email" id="frm-registration-email" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
              <input type="submit" name="login" value="Odeslat">
            </form>
          </div>
        </div>
      </section>
    </main>
    <?php include "partials/footer.php" ?>
  </body>
</html>
