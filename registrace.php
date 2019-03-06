<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrace do učebnice | ZČU FPE</title>
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
            <div class="col-md-4 col-md-offset-4">
              <h3>Registrace - učitel</h3>
              <form action="/login" method="post" action="http://hana.fpe.zcu.cz/routes/teacher/registrate.php">
                <label for="frm-login-name" class="text-left">Uživatelské jméno</label>
                <input type="text" name="name" id="frm-login-name" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
                <label for="frm-registration-email">Email</label>
                <input type="text" name="email" id="frm-registration-email" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
                <input type="submit" name="login" value="Registrovat">
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
            <h3>Registrace - skupina</h3>
            <form action="/login" method="post">
              <label for="frm-login-name" class="text-left">Uživatelské jméno</label>
              <input type="text" name="email" id="frm-login-name2" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
              <label for="frm-registration-email">Email</label>
              <input type="text" name="email" id="frm-registration-email2" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
              <label for="frm-login-name" class="text-left">ID třídy</label>
              <input type="number" name="id_tridy" id="frm-login-name2" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;}]">
              <input type="submit" name="login" value="Registrovat">
            </form>
          </div>
        </div>
      </section>
    </main>
    <?php include "partials/footer.php" ?>
  </body>
</html>
