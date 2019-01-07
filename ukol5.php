<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úkol 5 | ZČU FPE</title>
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
            <h3>Pracujeme s motorem</h3>
            <p>V dnešní hodině si vytvoříme a naprogramujete prvního robota s pohybem, který bude mít podobu malého kuchyňského mixéru. Základem jeho pohybu bude motor.</p>
            <p>Robota si musíme nejprve sestavit. Jednoduchý návod naleznete o něco níže.</p>
            <img src="assets/images/ukol5_motor.png" alt="Lego robot" class="img-fullwidth mt-30 mb-30">
          </div>
        </div>
      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
          <h3>Připojení mixéru</h3>
          <p>Máte mixér sestavený? Pokud ano, můžeme se dát do práce. Nejprve jej ovšem musíme připojit k řídící jednotce.</p>
          <p class="text-grey">TIP: Pro připojení všech motorů k řídící jednotce slouží výstupní porty označené písmenky A - D. </p>
        </div>
      </section>

      <section role="region" class="section">
        <div class="container text-center">
          <img src="assets/images/vstupni_porty.png" alt="Vstupní porty robota" class="img-fullwidth">
        </div>
      </section>
      <!--
      <section role="region" class="section bg-light-yellow text-center">
        <div class="container text-center">
          <h3>Učíme robota jezdit</h3>
          <p>Otevřete programovací prostředí EV3 a řešte jednotlivé úkoly uvedené v záložkách níže.</p>
          <div class="row">
            <div class="col-md-3">1. Úkol</div>
            <div class="col-md-3">2. Úkol</div>
            <div class="col-md-3">3. Úkol</div>
            <div class="col-md-3">Hádanka</div>
          </div>
          <div>
            <img src="assets/images/idea.png" alt="žárovka - nápad">
            <p>Co se stane, pokud motory připojíte k daným portům dle obrázku, program nahrajete do řídící jednotky a spustíte?</p>
            <img src="assets/images/idea.png" alt="žárovka - nápad">
            <p>Poznamenejte si, co si myslíte a následně program otestujte. Uhádli jste správné řešení?</p>
            <img src="assets/images/ukol2_1.png" alt="Programovatelný bloky">
            <p>TIP: Pro řízení robotů, kteří jsou poháněni dvěma motory se používá blok s názvem "Move Steering". - Naleznete ho v zelené záložce programových bloků.</p>
            <p>
              Upozornění: Nezapomeňte při programování zvolit správné výstupní porty řídící jednotky, ke kterým jsou motory připojeny (A - D).
            </p>
          </div>
        </div>
      </section>
-->
      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
          <h3>Učíme robota jezdit</h3>
          <p>Otevřete programovací prostředí EV3 a řešte jednotlivé úkoly uvedené v záložkách níže.</p>
          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Objevování</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p>Vytvořte program, který spustí mixér.</p>
             <p class="text-grey">TIP: Blok pro ovládání motoru nalezneš v zelené paletě programových bloků. Jmenuje se "<strong>Medium Motor</strong>".</p>
             <img src="assets/images/ukol5_objevovani.png" alt="Programovatelný bloky" class="mt-30 mb-30">
             <p>Při vytváření programu si vždy zkontroluj, že ovládáš motor, který potřebuješ. Výběr připojeného motoru provedeš výběrem písmenka (označení výstupního portu) v pravém horním rohu bloku. Na obrázku vybrán port A.</p>
           </div>
         </div>

         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>Problém</strong></h2>
             <span class="faq-t"></span>
          </div>

          <div class="answer">
            <p>Z jakého důvodu se mixér otočil jen velmi málo a poté se zastavil?
            Podívej se na parametry programového bloku a zjisti, jak dlouho tvůj program trvá.</p>
            <p>Zkus měnit hodnoty a zjisti, co který parametr dělá.</p>
          </div>
        </div>

        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>Úkol</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <p>Vytvořte program, díky kterému se mixér roztočí na 5 vteřin.</p>
           <p class="text-grey">Tip: Dobu otáčení motoru můžete přesně řídit dalšími režimy programového bloku (viz obrázek). Otáčení je možné provést po určitou dobu, o určitý počet úhlových stupňů nebo o určitý počet otáček motoru.</p>
           <img src="assets/images/ukol5_5.png" alt="Programovatelný bloky" class="mt-30 mb-30">
         </div>
       </div>

       <div class="topic">
        <div class="open">
           <h2 class="question"><strong>Otázka</strong></h2>
           <span class="faq-t"></span>
        </div>
        <div class="answer">
          <p>Povedlo se vám roztočit mixér na 5 vteřin? Jak se od vašeho řešení liší program na obrázku? Dokážete zjistit, jak funguje?</p>
          <img src="assets/images/ukol5_otazka.png" alt="Programovatelný bloky" class="mt-30 mb-30">
          <p class="text-grey">TIP: Blok s přesýpacíma hodinama se nazývá "Wait". Naleznete ho v oranžové záložce a jeho úkolem je oddálit o určitou dobu vykonávání další části programu.</p>
        </div>
      </div>

        </div>
      </section>

      <section role="region">
        <div class="container section text-center">
          <h3>Mixér s tlačítkem</h3>
          <p>Mixér, se kterým jsme nyní pracovali je velmi nepraktický. Nedá se nijak ovládat, ani zastavit.</p>
          <p>Přidejte k němu tedy tlačítko. I to musí být propojeno s řídicí jednotkou.</p>
          <p>TIP: Všechny vstupní moduly se k řídící jednotce připojují pomocí portů označených 1 - 4.</p>
          <img src="assets/images/ukol5_mixer_btn.png" alt="Programovatelný bloky" class="mt-30 mb-30">
        </div>
      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <h3>Ovládáme mixér tlačítkem</h3>
        <p>Nyní náš mixér vylepšíme o řízení pomocí tlačítka.</p>
        <div class="container">
        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>Tip</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <p class="text-grey">TIP: Blok Wait nemusí být řízený jenom časem, ale umí reagovat i na změnu stisku tlačítka. Tuto volbu naleznete mezi jeho režimy u dotykového senzoru (Touch senzor).</p>
           <img src="assets/images/ukol5_tip.png" alt="">
         </div>
       </div>

       <div class="topic">
        <div class="open">
           <h2 class="question"><strong>Úkol</strong></h2>
           <span class="faq-t"></span>
        </div>
        <div class="answer">
          <p>Zajistěte, aby se mixér spustil až po stisku tlačítka.</p>
        </div>
      </div>

      <div class="topic">
       <div class="open">
          <h2 class="question"><strong>Rozšíření</strong></h2>
          <span class="faq-t"></span>
       </div>
       <div class="answer">
         <p> Jak musíte program rozšířit, aby se mixér po stisknutí tlačítka spustil a po dalším stisknutí tlačítka znovu vypnul?</p>
       </div>
     </div>

       </div>
      </section>

      <section role="region" class="section text-center">
        <div class="container">
          <h3>Dokážete opravit program?</h3>
          <p>Následující program k ovládání mixéru obsahuje chybu. Dokážete ji najít? Pokuste se ji opravit.</p>
          <img src="assets/images/ukol5_oprava_programu.png" alt="">
          <p>Co dělá blok ve kterém jsou umístěny všechny ostatní příkazy?</p>
        <p>Jak by se program choval bez něj?</p>
        <p>Přidejte do programu volbu pro zrychlení na 75 %.</p>
        </div>
      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <h3>Závěrečný úkol</h3>
        <p>Bylo vydáno nové nařízení regulačního úřadu, díky nemuž může mixér běžet pouze v případě, že je stisknuto tlačítko. Při jeho uvolnění se vypne.</p>
        <div class="container">
        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>Tip</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <p class="text-grey">TIP: Pro rozlišení dvou různých stavů se využívá podmínka, kterou znázorňuje blok Switch, který nalezenete v oranžové záložce.<br>
          Ta může být stejně jako blok Wait řízena tlačítkem. Pokud je tlačítko stisknuto, vykonává se kód umístěný v sekci označení fajfkou, pokud není stisknuto, tak kód v sekci označené křížkem.</p>
           <img src="assets/images/ukol5_tip2.png" alt="">
         </div>
       </div>

       <div class="topic">
        <div class="open">
           <h2 class="question"><strong>Úkol</strong></h2>
           <span class="faq-t"></span>
        </div>
        <div class="answer">
          <p> Zařiďte, aby mixér běžel jen v případě, že je tlačítko stisknuto. Při uvolnění tlačítka se vypne.</p>
        </div>
      </div>

       </div>
      </section>

      <section role="region" class="section text-center bg-light-green">
        <div class="container">
          <img src="assets/images/idea.png" alt="žárovka - nápad">
          <h3>Úkol pro rychlé žáky</h3>
          <p>Máte již všechny úkoly vyřešené a vaši spolužáci stále pracují? Vylepšete svůj mixér. Vymyslete a naprogramujte, jak by mixér mohl fungovat v režimu, který nazveme kvedlačka.</p>

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
