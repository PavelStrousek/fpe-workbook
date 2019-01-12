<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úkol 7 | ZČU FPE</title>
    <meta name="robots" content="noindex, nofollow">

    <link href="assets/css/style.css" rel="stylesheet">
    <!--<link href="assets/css/style.min.css" rel="stylesheet">-->
  </head>
  <body>
    <?php include "partials/header.php" ?>
    <main role="main">
      <section role="region" class="section">
        <div class="container">
          <div class="text-center">
            <h3>Chytrá závora</h3>
            <p>Naše závora už něco umí, ale měla by být ještě chytřejší.</p>
            <img src="assets/images/ukol7_zavora.png" alt="Chytrá závora" class="img-fullwidth mt-30 mb-30">
            <h3>Úprava modelu</h3>
            <p>K závoře přidej ultrazvukový senzor, který bude detekovat, zda není v prostoru závory nějaké auto. Z Lega a koleček vytvoř velmi jednoduché vozítko, které bude závoru testovat.</p>
          </div>
        </div>
      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
          <h3>Doplň program - vylepši závoru</h3>
          <p>Nyní vylepšíme závoru o další funkce.</p>

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Úkol</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p>Naprogramuj závoru tak, že se na stisknutí tlačítka otevře, chvíli vyčká, aby tam mohlo vjet auto. V okamžiku, kdy vjede do prostoru závory auto, tak ultrazvukový senzor kontroluje prostor tak, aby závora nešla dolů. Po odjetí vozítka (auta) z prostoru se závora zavře. V případě, že se závora otevře a nic do prostoru nevjede, tak se závora sama za 3s zavře. Po připojení senzorů se v pravém dolním rohu všimni, co se nám to tam zobrazuje. Pomůže ti to v nastavování závory.</p>
             <img src="assets/images/ukol7_ukol.png" style="width: 457px;" alt="Chytrá závora" class="img-fullwidth mt-30 mb-30">
           </div>
         </div>

         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>Otázka</strong></h2>
             <span class="faq-t"></span>
          </div>
          <div class="answer">
            <p>Jakým jiným způsobem – signálem, lze závoru otevřít, než stisknutím tlačítka?<br>(Kde se to používá?)</p>
          </div>
        </div>


        </div>
      </section>

      <section role="region" class="section">
        <div class="container text-center">
          <h3>Úkol pro rychlé žáky</h3>
          <p>Pokud máte vše již hotové, doplňte závoru o autentické zvuky.</p>
        </div>
      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
          <h3>Doplň program - rozpoznej auto</h3>
          <p>Nyní vylepšíme závoru o další funkce.</p>

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Úkol</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p>K závoře přidej barevný senzor. Když rozpozná červené auto, automaticky zvedne závoru. Všechny ostatní funkce závory zůstávají.</p>
             <p>Pokud ti toto funguje rozšiř ještě o další možnost.
             Červená vstupní karta - osobní automobil - pozdržení zvednuté závory 3 s.
             Modrá vstupní karta - nákladní automobil - pozdržení zvednuté závory 5 s.
             Nápověda pro rozšiřující část - SWITCH.</p>
             <img src="assets/images/ukol7_auto.png" style="width: 457px;" alt="Chytrá závora" class="img-fullwidth mt-30 mb-30">
           </div>
         </div>

         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>Otázka</strong></h2>
             <span class="faq-t"></span>
          </div>
          <div class="answer">
            <p>Pokud už závora vpouští auta do parkoviště – správně se otevírá a zavírá – vypadá to, že je vše v pořádku. Co bychom ale také potřebovali u takového parkoviště zjišťovat, abychom byli dobří správci. Uveď možnosti, které jsou vhodné do reálného provozu i do LEGO simulace.</p>
          </div>
        </div>

        </div>
      </section>

    </main>
    <footer class="bg-light-green">

    </footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script src='https://isotope.metafizzy.co/v1/jquery.isotope.min.js'></script>
    <script src="assets/js/main.min.js"></script>
  </body>
</html>
