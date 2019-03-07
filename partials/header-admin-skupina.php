<header role="banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-5 col-md-3">
        <a href="../" class="logo" title="Lego učebnice"><img src="../assets/images/robot_icon.png" alt="Logo"></a>
      </div>
      <div class="col-md-9 text-right">
        <form method="POST" action="http://hana.fpe.zcu.cz/routes/group/unauthorise.php">
          <input name="success_url" type="hidden" value="http://localhost/fpe-workbook-master/" />
          <input name="error_url" type="hidden" value="http://localhost/fpe-workbook-master/admin/nastaveni-uctu-skupina.php" />
          <input type="submit"  value="Odhlášení" class="button mr-65 b_registration prihlaseni" style="width: 143px;"/>
        </form>
        <div class="menu-box" aria-label="Menu">
          <div class="menu-box__item" aria-hidden="true"></div>
        </div>
      </div>
      <nav class="text-center" role="navigation">
        <ul>
          <span>
          <div class="menu-close"><img src="../assets/images/close.png" alt=""></div>
          <a href="nastaveni-uctu-ucitel.php" class="text-white"><strong>Profil</strong></a>
          <p style="height: 72px"><strong>LEKCE</strong></p>
          </span>
          <li><a href="../ukol1.php" class="text-black">1. Stavíme pojízdného robota</a></li>
          <li><a href="../ukol2.php" class="text-black">2. Oživení robota</a></li>
          <li><a href="../ukol3.php" class="text-black">3. Robot ve městě</a></li>
          <li><a href="../ukol4.php" class="text-black">4. Zvuk a display</a></li>
          <li><a href="../ukol5.php" class="text-black">5. Mixér</a></li>
          <li><a href="../ukol6.php" class="text-black">6. Závora</a></li>
          <li><a href="../ukol7.php" class="text-black">7. Automatická závora</a></li>
          <li><a href="../ukol8.php" class="text-black">8. Detekce překážky - tempomat</a></li>
          <li><a href="../ukol9.php" class="text-black">9. Inteligentní robot</a></li>
          <li><a href="../ukol10.php" class="text-black">10. Parkovací asistent</a></li>
          <li><a href="../ukol11.php" class="text-black">11. Hra</a></li>
          <a href="../login.php" class="button mt-15 prihlaseni2">Přihlášení</a>
          <a href="../registrace.php" class="button mt-15 prihlaseni2">Registrace</a>
        </ul>
      </nav>
    </div>
  </div>

</header>
