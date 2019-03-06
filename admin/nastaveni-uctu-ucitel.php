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
              <label for="course_id">ID kurzu</label>
              <input name="course_id" type="number" value="" />
              <label for="new_name">Změna jména kurzu</label>
              <input name="new_name" type="text" value="" />
              <input type="submit" value="Změnit jméno kurzu" />
            </form>
          </div>
        </div>
      </section>

      <section role="region" class="section">
        <div class="container">
          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Náhled - učitelé</strong></h2>
              <span class="faq-t" onclick="showTeachers()"></span>
           </div>
           <div class="answer">
             <table>
               <tr>
                 <th width="25%">ID</th>
                 <th width="25%">Jméno</th>
                 <th width="25%">Email</th>
                 <th width="25%">Publisher</th>
               </tr>
               <tr>
                 <td width="25%">1</td>
                 <td width="25%">xxx</td>
                 <td width="25%">xxx</td>
                 <td width="25%">ano</td>
               </tr>
             </table>
           </div>
         </div>


           <div class="topic">
            <div class="open">
               <h2 class="question"><strong>Náhled - třídy</strong></h2>
               <span class="faq-t" onclick="showClasses()"></span>
            </div>
            <div class="answer">
              <table>
                <tr>
                  <th width="25%">ID</th>
                  <th width="25%">Jméno</th>
                  <th width="25%">ID Učitel</th>
                  <th width="25%">ID Kurz</th>
                </tr>
                <tr>
                  <td width="25%">1</td>
                  <td width="25%">xxx</td>
                  <td width="25%">3</td>
                  <td width="25%">10</td>
                </tr>
              </table>
            </div>
          </div>


         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>Náhled - kurz</strong></h2>
             <span class="faq-t" onclick="showCourses()"></span>
          </div>
          <div class="answer">
            <table>
              <tr>
                <th width="25%">ID</th>
                <th width="25%">Jméno</th>
                <th width="25%">Popis</th>
                <th width="25%">ID Učitel</th>
              </tr>
              <tr>
                <td width="25%">16</td>
                <td width="25%">xxx</td>
                <td width="25%">Ovládání závory</td>
                <td width="25%">10</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      </section>
    </main>
    <?php include "../partials/footer-admin.php" ?>
    <script>
    function showTeachers() {
  document.getElementById('teacherstable').textContent = 'Fetching...';
  const Data = fetch('http://hana.fpe.zcu.cz/routes/teacher/getTeachersInfo.php?page_size=10000&page_number=1', {
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
              table += "<tr><th>ID</th><th>jméno</th><th>e-mail</th><th>publisher</th><th</th></tr>"
              ans.forEach(function (teacher) {
                  var publisher = "NE";
                  var publisherbtn = "grant";
                  var url = "http://hana.fpe.zcu.cz/routes/teacher/grantPublisherAccess.php";
                  if (teacher.is_publisher == 1) {
                      publisher = "ANO";
                      url = "http://hana.fpe.zcu.cz/routes/teacher/revokePublisherAccess.php";
                      publisherbtn = "revoke";
                  }

                var form = "<form method=\"POST\" action=\""+url+"\">\
<input name=\"teacher_id\" type=\"hidden\" value=\""+teacher.id+"\" />\
<input type=\"submit\" value=\""+publisherbtn+"\" />\
</form>";
                  table += "<tr><td>" + teacher.id + "</td><td>" + teacher.name + "</td><td>" + teacher.email + "</td><td>" + publisher + "</td><td>"+form+"</td></tr>";
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

function setAccess(id, state) {



fetch(url, {
method: 'post',
headers: {
  "Accept":"application/json",
  'Content-Type': 'application/json'
},
body: JSON.stringify({teacher_id: id})
}).then(res=>res.json())
.then(res => console.log(res));

}

function getGroupInfoByIdForTeacher(x) {
const Data = fetch('http://hana.fpe.zcu.cz//routes/group/getGroupInfoByIdForTeacher.php?group_id='+x, {
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
      document.getElementById('classroomId').textContent = ans.classroom_id;

    } else {
      document.getElementById('classroomId').textContent = 'None';
    }
  });
}







function showClasses() {
  document.getElementById('teacherstable').textContent = 'Fetching...';
  const Data = fetch('http://hana.fpe.zcu.cz/routes/classroom/getAllClassroomInfo.php?page_size=10000&page_number=1', {
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
              table += "<tr><th>ID</th><th>jméno</th><th>ucitel ID</th><th>course ID</th><th</th></tr>"
              ans.forEach(function (clas) {


                  table += "<tr><td>" + clas.id + "</td><td>" + clas.name + "</td><td>" + clas.teacher_id + "</td><td>" +  clas.course_id;
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




function showCourses() {
  document.getElementById('teacherstable').textContent = 'Fetching...';
  const Data = fetch('http://hana.fpe.zcu.cz/routes/course/getCoursesInfo.php?page_size=10000&page_number=1', {
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


                  table += "<tr><td>" + course.id + "</td><td>" + course.name + "</td><td>" + course.description + "</td><td>" +  course.publisher_id;
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
  </body>
</html>
