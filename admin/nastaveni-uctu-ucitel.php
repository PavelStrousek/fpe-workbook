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
    <?php include "../partials/header-admin-ucitel.php" ?>
    <main role="main">
      <section role="region" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
              <h3>Učitel</h3>
              <div class="display-flex">
                <p><strong>Jméno:&nbsp</strong></p>
                <p id="teacherName"></p>
              </div>
              <div class="display-flex">
                <p><strong>Email:&nbsp</strong></p>
                <p id="teacherEmail"></p>
              </div>
              <div class="display-flex">
                <p><strong>ID:&nbsp</strong></p>
                <p id="teacherID"></p>
              </div>
              <div class="display-flex">
                <p><strong>Publisher:&nbsp</strong></p>
                <p id="teacherPublisher"></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section role="region" class="section">
        <div class="container text-center">
          <div class="col-md-8 col-md-offset-2">
            <h3 class="mt-20">Nastavení skupiny</h3>

            <div class="display-flex">
              <p><strong>Skupina jméno:&nbsp</strong></p>
              <div id="groupName"><p></p></div>
            </div>
            <div class="display-flex mb-20">
              <p><strong>ID třídy:&nbsp</strong></p>
              <div id="classroomId"><p></p></div>
            </div>


              <label for="frm-registration-name">Najít skupinu</label>
              <input name="group_id" id="groupID" type="number" />
              <input type="button" onclick="getGroupInfoByIdForTeacher(document.getElementById('groupID').value)" value="Najít">


              <form method="POST" action="http://hana.fpe.zcu.cz/routes/group/deleteByTeacher.php">
                <label for="group_id">skupina ID</label>
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
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-ucitel.php" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/" />
              <label for="new_name">Změna jména</label>
              <input name="new_name" type="text" />
              <input type="submit" value="Změnit" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/teacher/updateEmail.php">
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-ucitel.php" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/" />
              <label for="new_email">Změna emailu</label>
              <input name="new_email" type="email" />
              <input type="submit" value="Změnit" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/teacher/updatePassword.php">
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-ucitel.php" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/" />
              <label for="new_password">Změna hesla</label>
              <input name="new_password" type="password" />
              <input type="submit" value="Změnit" />
            </form>
          </div>
        </div>
      </section>
      <section role="region" class="section">
        <div class="container" id="grandTecher0">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Nastavení kurzu</h3>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/course/create.php">
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-ucitel.php" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/" />
              <label for="name">Název kurzu</label>
              <input name="name" type="text" value="" />
              <label for="description">Popis kurzu</label>
              <input name="description" type="text" value="" />
              <input type="submit" value="Vytvořit kurz" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/course/delete.php">
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-ucitel.php" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/" />
              <label for="course_id">ID kurzu</label>
              <input name="course_id" type="number" value="" />
              <input type="submit" value="Smazat kurz" />
            </form>

            <form method="POST" action="http://hana.fpe.zcu.cz/routes/course/updateDescription.php">
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-ucitel.php" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/" />
              <label for="course_i">ID kurzu</label>
              <input name="course_id" type="number" value="" />
              <label for="new_descriptio">Popis kurzu</label>
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
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>Nastavení tříd</h3>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/classroom/create.php">
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-ucitel.php" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/" />
              <label for="name">ID kurzu</label>
              <input name="course_id" type="number" value="" />
              <label for="name">Název třídy</label>
              <input name="name" type="text" value="" />
              <input type="submit" value="Vytvořit třídu" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/classroom/updateName.php">
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-ucitel.php" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/" />
              <label for="classroom_id">ID třídy</label>
              <input name="classroom_id" type="number" value="" />
              <label for="name">Název třídy</label>
              <input name="name" type="text" value="" />
              <input type="submit" value="Změnit jméno třídy" />
            </form>
            <form method="POST" action="http://hana.fpe.zcu.cz/routes/classroom/deleteClassroom.php">
              <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-ucitel.php" />
              <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/" />
              <label for="classroom_id">ID třídy</label>
              <input name="classroom_id" type="number" value="" />
              <input type="submit" value="Smazat třídu" />
              </form>

              <div class="display-flex mt-20">
                <p><strong>Třída jméno:&nbsp</strong></p>
              <div id="className"><p></p></div>
              </div>
              <div class="display-flex" >
                <p><strong>ID učitele:&nbsp</strong></p>
                <div id="classTeacherId"><p></p></div>
              </div>
              <div class="display-flex mb-20">
                <p><strong>ID kurzu:&nbsp</strong></p>
                <div id="courseId"><p></p></div>
              </div>

              <form action="">
                <label for="frm-registration-name">Najít třídu</label>
                  <input name="classroom_id" id="idTridyFind" type="number" />
                <input type="button" onclick="getClassroomInfoById(document.getElementById('idTridyFind').value);" value="Najít">
              </form>
          </div>
        </div>
      </section>

      <section role="region" class="section" id="grandTecher1">
        <div class="container">
          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Náhled - učitelé</strong></h2>
              <span class="faq-t" onclick="showTeachers();"></span>
           </div>
           <div class="answer">
             <table id="teacherstable">
             </table>
           </div>
         </div>


           <div class="topic">
            <div class="open">
               <h2 class="question"><strong>Náhled - třídy</strong></h2>
               <span class="faq-t" onclick="showClasses()"></span>
            </div>
            <div class="answer">
              <table id="teacherstable2">
              </table>
            </div>
          </div>


         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>Náhled - kurz</strong></h2>
             <span class="faq-t" onclick="showCourses()"></span>
          </div>
          <div class="answer">
            <table id="teacherstable3">
            </table>
          </div>
        </div>
      </div>
      </section>
    </main>
    <?php include "../partials/footer-admin.php" ?>

    <script>


const Data = fetch('http://hana.fpe.zcu.cz/routes/teacher/getMyInfo.php', {
    credentials: 'include',
  })
    .then(response => {
      return response.text();
    })
    .then(answerString => {
      return JSON.parse(answerString);
    })
    .then(ans => {
     if (ans.id) {
        document.getElementById('teacherID').textContent = ans.id;
      } else {
        document.getElementById('teacherID').textContent = 'None';
      }
      if (ans.name) {
        document.getElementById('teacherName').textContent = ans.name;
      } else {
        document.getElementById('teacherName').textContent = 'None';
      }
      if (ans.email) {
        document.getElementById('teacherEmail').textContent = ans.email;
      } else {
        document.getElementById('teacherEmail').textContent = 'None';
      }
      if (ans.is_publisher==1) {
        document.getElementById('teacherPublisher').textContent = 'Ano';
        document.getElementById("grandTecher0").style.display = "block";
        document.getElementById("grandTecher1").style.display = "block";
      } else {
        document.getElementById('teacherPublisher').textContent = 'Ne';
        document.getElementById("grandTecher0").style.display = "none";
        document.getElementById("grandTecher1").style.display = "none";
      }
    });
    function showCourses() {
}
function showTeachers() {
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
                  var form =  "<form method=\"POST\" action=\""+url+"\">\
  <input name=\"teacher_id\" type=\"hidden\" value=\""+teacher.id+"\" />\
<input name=\"success_url\" type=\"hidden\" value=\"http://localhost/fpe-workbook-master/admin/nastaveni-uctu-ucitel.php\" />\
<input name=\"error_url\" type=\"hidden\" value=\"http://localhost/fpe-workbook-master/admin/nastaveni-uctu-ucitel.php\" />\
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
function showClasses() {
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
                document.getElementById('teacherstable2').innerHTML = table;
            } else{
              if(ans.error){
                document.getElementById('teacherstable2').textContent = ans.error;
                } else{
                  document.getElementById('teacherstable2').textContent = "error";
                }
            }
        });
}
function showCourses() {
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
                document.getElementById('teacherstable3').innerHTML = table;
            } else{
              if(ans.error){
                document.getElementById('teacherstable3').textContent = ans.error;
                } else{
                  document.getElementById('teacherstable3').textContent = "error";
                }
            }
        });
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
function getClassroomInfoById(x) {
const Data = fetch('http://hana.fpe.zcu.cz/routes/classroom/getClassroomInfoById.php?classroom_id='+x, {
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
        document.getElementById('className').textContent = ans.name;

      } else {
        document.getElementById('className').textContent = 'None';
      }
      if (ans.teacher_id) {
        document.getElementById('classTeacherId').textContent = ans.teacher_id;

      } else {
        document.getElementById('classTeacherId').textContent = 'None';
      }
      if (ans.course_id) {
        document.getElementById('courseId').textContent = ans.course_id;

      } else {
        document.getElementById('courseId').textContent = 'None';
      }
    });
}
</script>
  </body>
</html>
