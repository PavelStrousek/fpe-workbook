<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úkol 6 | ZČU FPE</title>
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
            <p>Řady obchodních domů, firem nebo skladů reguluje příjezd vozidel závorou či branou. Ačkoli je to relativně jednoduché zařízení, pomůže zabezpečit objekt před nežádoucím vjezdem cizích automobilů či např. zabránit přeplnění parkoviště.</p>
            <p>Pokud se nejedná jen o obyčejné mechanické ručně ovládané zařízení, bude s velkou pravděpodobností řízena elektronicky. To může být řešení buďto jednoúčelovou elektronikou, nebo pomocí univerzálnějšího mikropočítače obsahující řídicí program.</p>
            <p>Nejprve se zamyslíme, jak by závora mohla vypadat a pak si jí sestavíme. Zde máme malou ukázku.</p>
            <img src="assets/images/ukol6.png" alt="Chytrá závora" class="img-fullwidth mt-30 mb-30">
          </div>
        </div>
      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
          <h3>Programování</h3>
          <p>1. Vymysli a napiš, proč by měla být závora programována?</p>
          <p>2. Co bude závora umět? Jak bude fungovat? Napiš si, v jakých stavech se závora může nacházet a co je ovlivňuje.</p>
          <p>3. Nyní vymyslíme konstrukci. Napiš, jaké součástky LEGA budeš pro konstrukci potřebovat.</p>
        </div>
      </section>

      <section role="region" class="section">
        <div class="container text-center">
          <h3>Sestavení a otevření závor</h3>
          <p>Otázka: Jak se závora ve většině obchodních center otevírá? <br>Co určuje, že se závora otevře a co že se zavře?</p>
          <img src="assets/images/ukol6_robot.png" alt="Vstupní porty robota" class="img-fullwidth">
        </div>
      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
          <h3>Sestavíme a programujeme</h3>
          <p>Otevřete programovací prostředí EV3 a řešte jednotlivé úkoly.</p>
          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>1. Úkol</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p> Sestav závoru buďto dle svého či níže uvedeného návrhu. Potřebovat budeš určitě motor, řidicí jednotku EV3, propojovací kabely, dílky pro konstrukci závory.</p>
             <p class="text-grey">TIP: pokud by závora byla moc těžká, můžeš na jejím kratším konci vytvořit protizávaží.</p>
           </div>
         </div>

         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>Rozfázování</strong></h2>
             <span class="faq-t"></span>
          </div>

          <div class="answer">
            <h3>Naprogramuj závoru.</h3>
            <p>Zdá se ti úloha složitá? Nevíš, kde začít?
            To je normální. Řada úloh se zdá být složitých do doby, než zjistíš, že se skládají z malých drobných propojených úloh. Tyto úlohy pak můžeš řešit a testovat samostatně a poté z nich opět skládat další složitější řešení.</p>
            <p>Čím ale začít?
            Když nevíš, zkus něco jednoduchého. V našem případě např. zvednout závoru. Až ti to bude fungovat, zkus jí dát zase na své původní místo. Postupně přidávej další a další funkce, např. v horní poloze chvíli počkej, aby mohlo auto projet.</p>
            <p>Druhý ze způsobů je si zkusit napsat, jaké vlastnosti bude robot mít a jaké činnosti bude vykonávat. Zkus být konkrétní. Vymysli a napiš je, ať víš, na čem pracovat. </p>
          </div>
        </div>

        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>Bloky</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <p>Budeme tvořit program, který bude ovládat motor a další části.
Který z uvedených bloků motorů použiješ?</p>
           <img src="assets/images/ukol6_bloky.png" alt="Programovatelný bloky" class="mt-30 mb-30">
           <p>Při vytváření programu si vždy zkontroluj, zda využíváš správný blok pro tvůj motor a že je je nastaven správný port. Na obrázku je vybrán port A, A+B a B. Rovněž překontroluj zda je síla motoru nastavena na vhodnou hodnotu. Velký výkon značně "škube", malý zase není dostatečně silný k otevření závory.</p>
           <p class="text-grey">TIP: Vložením bloku Wait do programu oddálíte vykonávání dalšího příkazu na zvolenou dobu.</p>
         </div>
       </div>

       <div class="topic">
        <div class="open">
           <h2 class="question"><strong>2. Úkol</strong></h2>
           <span class="faq-t"></span>
        </div>
        <div class="answer">
          <p>Vymysli, jak budeš bránu ovládat. K závoře např. přidej tlačítko, které závoru otevře. Závora zůstane 4 sekundy otevřená a pak se zavře. </p>
          <p>Nebaví tě již program neustále spouštět? Pomocí čeho byste mohli zařídit, aby se program automaticky pořád opakoval a vy tak tlačítkem mohli donekonečna závoru otevírat.</p>
          <p>Na obrázku vidíte řešení předchozího úkolu. </p>
          <img src="assets/images/ukol6_2.png" alt="2. úkol" class="mt-30 mb-30">
          <p class="text-grey">TIP: Využijte cyklů.</p>
        </div>
      </div>

      <div class="topic">
       <div class="open">
          <h2 class="question"><strong>Otázka</strong></h2>
          <span class="faq-t"></span>
       </div>
       <div class="answer">
         <p>Závora je již otevřená. Nyní proběhne její zavření po průjezdu autem. Napište kdy závoru zavřeme a co nebo kdo v reálné situaci určí, že se může zavřít. Co se může stát?</p>
         <p>Jak bys problémům předešel? Napadá tě, jaký senzor bys mohl použít?</p>
       </div>
     </div>

        </div>
      </section>

      <section role="region">
        <div class="container section text-center">
          <img src="assets/images/ukol6_slider2_1.png" alt="Programovatelný bloky" class="mt-30 mb-30">
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
