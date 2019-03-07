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
    <?php include "../partials/header-admin-skupina.php" ?>
    <main role="main">
      <section role="region" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
              <h3>Skupina</h3>
              <div class="display-flex">
                <p><strong>Název:&nbsp</strong></p>
                <p id="groupName"></p>
              </div>
              <div class="display-flex">
                <p><strong>ID:&nbsp</strong></p>
                <p id="groupId"></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section role="region" class="section">
        <div class="container text-center">
          <div class="col-md-8 col-md-offset-2">
            <h3>Nastavení účtu</h3>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/group/updateName.php">
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-skupina.php" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-skupina.php" />
              <label for="new_name">Změna jména</label>
              <input name="new_name" type="text" value="" />
              <input type="submit"  value="Změnit" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/group/updatePassword.php">
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-skupina.php" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-skupina.php" />
              <label for="id_tridy">Změna hesla</label>
              <input name="new_password" type="password" />
            <input type="submit" value="Změnit" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/group/deleteByGroup.php">
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-skupina.php" />
              <label for="id_tridy">Smazat</label>
            <input type="submit" value="Smazat skupinu" />
            </form>
            <label for="id_tridy">ID třídy</label>
            <input id="idTridyComponenta"  type="number" />
            <div class="topic">
          <div class="open">
              
             <h2 class="question"><strong>Náhled - třídy</strong></h2>
             <span class="faq-t" onclick="showClass()"></span>
          </div>
          <div class="answer">
            <table id="teacherstable3">
            </table>
          </div>
            </div>
          </div>
        </div>
        </section>
    </main>
    <?php include "../partials/footer-admin.php" ?>
  </body>
  <script>
const Data = fetch('http://hana.fpe.zcu.cz/routes/group/getGroupInfoByIdForGroup.php', {
    credentials: 'include',
  })
    .then(response => {
      return response.text();
    })
    .then(answerString => {
      return JSON.parse(answerString);
    })
    .then(ans => {
     if (ans.name) {
        document.getElementById('groupName').textContent = ans.name;
      } else {
        document.getElementById('groupName').textContent = 'None';
      }
      if (ans.classroom_id) {
        document.getElementById('groupId').textContent = ans.classroom_id;
      } else {
        document.getElementById('groupId').textContent = 'None';
      }
    });
    function showClass() {
    var x1 = document.getElementById('idTridyComponenta').value;
    const Data = fetch('http://hana.fpe.zcu.cz/routes/group/getGroupsInfoByClassroom.php?page_size=10000&page_number=1&classroom_id='+x1+'', {
        credentials: 'include',
    })
        .then(response => {
            return response.text();
        })
        .then(answerString => {
            return JSON.parse(answerString);
        })
        .then(ans => {
            if (typeof ans !== 'undefined' && ans.length > 0) {
                var table = "<table>";
                table += "<tr><th>ID</th><th>jméno</th><th>popis</th><th>ucitel ID</th><th</th></tr>"
                ans.forEach(function (course) {
                    table += "<tr><td>" + course.name + "</td><td>" + course.classroom_id + "</td><td>";
                });
                table += "</table>";
                document.getElementById('teacherstable').innerHTML = table;
            } else{
              if(ans.error){
                document.getElementById('teacherstable').textContent = ans.error;
                } else{
                  document.getElementById('teacherstable').textContent = "error";
                }
            }
        });
}
</script>
</html>