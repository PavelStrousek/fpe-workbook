<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nastavení účtu skupina | ZČU FPE</title>
    <meta name="robots" content="noindex, nofollow">

    <link href="../assets/css/style.css" rel="stylesheet">
    <!--<link href="assets/css/style.min.css" rel="stylesheet">-->
  </head>
  <body>
    <?php include "../partials/header-admin.php" ?>
    <main role="main">
      <section role="region" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
              <h3>Skupina</h3>
              <p>Název</p>
              <p>ID</p>
            </div>
          </div>
        </div>
      </section>
      <section role="region" class="section">
        <div class="container text-center">
          <div class="col-md-8 col-md-offset-2">
            <h3>Nastavení účtu</h3>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/group/updateName.php">
              <label for="new_name">Změna jména</label>
              <input name="new_name" type="text" value="" />
              <input type="submit"  value="Změnit" />
            </form>
<!-- Tady dole sem to nenašel!!!!!-->
              <form method="POST" action="">
                <label for="group_id">Najít skupinu</label>
              <input name="group_id" type="number" />
                <input type="submit" value="Najít" />
                <button class="button">Smazat</button>
              </form>

          </div>
        </div>
      </section>
      <section role="region" class="section">
        <div class="container">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Vytvoření třídy</h3>
            <form method="POST" action="">
            <label for="name">Název třídy</label>
            <input name="name" type="text" />
            <label for="id_tridy">ID třídy</label>
            <input name="id_tridy" type="number" />
              <input type="submit" value="Vytvořit" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/teacher/updateEmail.php">
              <label for="name">Název třídy</label>
              <input name="name" type="text" />
              <label for="id_tridy">ID třídy</label>
              <input name="id_tridy" type="number" />
              <input type="submit" value="Změnit" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/teacher/updatePassword.php.php">
              <label for="id_tridy">ID třídy</label>
              <input name="id_tridy" type="number" />
            <input type="submit" value="Odstranit" />
            </form>
          </div>
        </div>
      </section>

    </main>
    <?php include "../partials/footer-admin.php" ?>
  </body>
</html>
