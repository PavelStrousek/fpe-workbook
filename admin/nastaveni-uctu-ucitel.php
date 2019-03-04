<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nastavení účtu učitel | ZČU FPE</title>
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
              <h3>Učitel</h3>
              <p>Jméno</p>
              <p>Email</p>
              <p>ID</p>
              <p>Publisher</p>
            </div>
          </div>
        </div>
      </section>
      <section role="region" class="section">
        <div class="container text-center">
          <div class="col-md-8 col-md-offset-2">
            <h3>Nastavení group</h3>
            <form action="/login" method="post">
              <label for="frm-registration-name">Najít group</label>
              <input name="group_id" id="groupID" type="number" />
<input type="submit" onclick="getGroupInfoByIdForTeacher(document.getElementById('groupID').value)" name="najit" value="Najít">
            </form>

              <form method="POST" action="http://hana.fpe.zcu.cz/routes/group/deleteByTeacher.php">
                <label for="group_id">Group ID</label>
              <input name="group_id" type="number" />
                <input type="submit" value="Odstranit" />
              </form>

          </div>
        </div>
      </section>
      <section role="region" class="section">
        <div class="container">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Nastavení účtu</h3>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/teacher/updateName.php">
            <label for="new_name">Změna jména</label>
            <input name="new_name" type="text" />
              <input type="submit" value="Změnit" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/teacher/updateEmail.php">
              <label for="new_email">Změna emailu</label>
              <input name="new_email" type="email" />
              <input type="submit" value="Změnit" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/teacher/updatePassword.php.php">
            <label for="new_password">Změna emailu</label>
            <input name="new_password" type="password" />
            <input type="submit" value="Změnit" />
            </form>
          </div>
        </div>
      </section>
      <section role="region" class="section">
        <div class="container">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Nastavení kurzu</h3>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/course/create.php">
              <label for="name">Název kurzu</label>
              <input name="name" type="text" value="" />
              <input type="submit" value="Vytvořit kurz" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/course/delete.php">
              <label for="course_id">ID kurzu</label>
              <input name="course_id" type="number" value="" />
              <input type="submit" value="Smazat kurz" />
            </form>

            <form method="POST" action="http://hana.fpe.zcu.cz/routes/course/updateDescription.php">
              <label for="course_id">ID kurzu</label>
              <input name="course_id" type="number" value="" />
              <label for="new_description">Popis kurzu</label>
              <input name="new_description" type="text" value="" />
              <input type="submit" value="Změnit popis kurzu" />
            </form>
<form method="POST" action="http://hana.fpe.zcu.cz/routes/course/updateName.php">
  id course: <input name="course_id" type="number" value="" />
  zmena jmena course: <input name="new_name" type="text" value="" />
  <input type="submit" value="zmenit" />
</form>
          </div>
        </div>
      </section>
    </main>
    <?php include "../partials/footer-admin.php" ?>
  </body>
</html>
