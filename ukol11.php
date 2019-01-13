<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úkol 11 | ZČU FPE</title>
    <meta name="robots" content="noindex, nofollow">

    <link href="assets/css/style.css" rel="stylesheet">
    <!--<link href="assets/css/style.min.css" rel="stylesheet">-->
  </head>
  <body>
    <?php include "partials/header.php" ?>
    <main role="main">
      <section role="region" class="section text-center">
        <div class="container">
          <h3>Postřehová hra</h3>
          <p class="mt-15">
            Už nebudeme dělat jen vozítka, ale zkusíme si vytvořit i nějakou jednoduchou hru, ve které pak mezi sebou můžete soutěžit.
          </p>
          <p>
            Nejen, že se zlepšíš v programování, ale pak protrénuješ i svůj postřeh.
          </p>
          <div class="row mt-30">
            <div class="col-md-4 col-md-offset-1">
              <img src="assets/images/ukol11_model.png" alt="Stavba modelu">
            </div>
            <div class="col-md-7">
              <div class="text-left">
              <h3>Stavba modelu</h3>
              <p>Model pro hru je velmi jednoduchý.<br>
                Skládá se pouze z hlavní kostky EV3 a dvou tlačítek (touch sensor).<br>
                Pro přenášení je můžeme připojit k hlavní kostce. <br>
               Až to budete mít naprogramové, můžete svůj model ale vylepšit.<br>
 Třeba vytvořit ergonomické joysticky, které dobře padnou do ruky.</p>
              </div>
            </div>
          </div>
        </div>

      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <h3>Zadání programu: Postřehová hra</h3>
        <p>
          Postřehová hra cílí na co nejrychlejší stisknutí v případě dvou stejných čísel na obrazovce.<br>
          Hra začíná náhodným losováním čísel v určitém časovém intervalu. Aby se čísla vůbec sešly, můžeš zkusit menší rozsah.<br>
          Na obrazovce se tak postupně objevují vždy dvě čísla. Pokud jsou čísla stejné, musí hráč zmáčknout tlačítko.<br>
          V případě, že se strefil správně, dostane +1 bod. Pokud se spletl nebo to nestihl včas, bude mu bod odebrán (-1 bod.)<br>
          Před každým losováním můžeme zobrazit aktuální bodový stav obou hráčů.<br>
          Hra je určená pro 2 hráče. Později je to možné předělat až pro 4 hráče.
        </p>
        <div class="container">
        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>Úkol</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <p>Zadání je poměrně rozsáhlejší. Rozmyslete si strukturu programu a jak budete postupovat.</p>
           <img src="assets/images/ukol11_ukol.png" alt="Úkol">
         </div>
       </div>

       <div class="topic">
        <div class="open">
           <h2 class="question"><strong>Nápověda</strong></h2>
           <span class="faq-t"></span>
        </div>
        <div class="answer">
          <p>Program bude potřeba rozdělit na několik částí. </p>
          <p>1. Losování čísel a zobrazení</p>
          <p>2. Kontrola vstupu - stisknutí tlačítka 1</p>
          <p>3. Kontrola vstupu - stisknutí tlačítka 2</p>
          <p>4. Vyhodnocení po stisknutí</p>
        </div>
      </div>

      <h3 class="mt-50 mb-30">Losování</h3>

      <div class="topic">
       <div class="open">
          <h2 class="question"><strong>Úkol</strong></h2>
          <span class="faq-t"></span>
       </div>
       <div class="answer">
         <p>Vytvoř losování dvou čísel a zobrazuj je na displej s vhodným odstupem např. 2 s.<br>
            Čísla budou zobrazena kousek od sebe. Nad nimi zobrazte text "Hra". </p>
         <img src="assets/images/ukol11_ukol2.png" alt="Úkol">
       </div>
     </div>

     <div class="topic">
      <div class="open">
         <h2 class="question"><strong>Nápověda</strong></h2>
         <span class="faq-t"></span>
      </div>
      <div class="answer">
        <p>Pro náhodná čísla využij bloku "Random". Pro testování použij rozsah 1-7, aby byla občas<br>
           čísla shodná. Později to můžeš změnit.<br>
           Pro čísla využij ukládání do proměnných, protože s tím budeš dále pracovat.</p>
      </div>
    </div>

    <h3 class="mt-50 mb-30">Kdo to vlastně stisknul?</h3>

    <div class="topic">
     <div class="open">
        <h2 class="question"><strong>Úkol</strong></h2>
        <span class="faq-t"></span>
     </div>
     <div class="answer">
       <p>Nyní musíme vyřešit stisknutí tlačítek, tedy zjistit, kdo stiskl tlačítko. Nesmíme zapomenout, že potřebujeme zjišťovat ve stejný čas obě tlačítka. Vytvořte část programu, kde budete ověřovat, kdo stisknul tlačítko a pak pro každé jiné tlačítko přehrajete zvuk.</p>
     </div>
   </div>

   <div class="topic">
    <div class="open">
       <h2 class="question"><strong>Nápověda</strong></h2>
       <span class="faq-t"></span>
    </div>
    <div class="answer">
      <p>Nyní opravdu budeme potřebovat, aby se program spustil ve více částech.<br>
         Spouštíme část - losování čísel.<br>
         Spouštíme část ověřování stisknutí tlačítka 1 a 2.<br>
         Informaci o tom, které tlačítko bylo stisknuto můžete přenést do vyhodnocení. </p>
    </div>
  </div>

  <h3 class="mt-50 mb-30">Vyhodnocení</h3>
  <p>Přiřaď každému body.</p>
  <div class="topic">
   <div class="open">
      <h2 class="question"><strong>Úkol</strong></h2>
      <span class="faq-t"></span>
   </div>
   <div class="answer">
     <p>Nyní jsme přenesli informaci o tom, kdo stiskl tlačítko jako první.
        Dále musíme vyhodnotit, jestli to stiskl správně nebo špatně. </p>
     <p>V části pro vyhodnocení vytvořte část, která provede:
     -jsou-li čísla shodná, přidělí tomu, kdo tlačítko stiskl +1 bod
     -v opačném případě bod odebere -1 bod
     -hráči oznámí, kdo získává bod nebo o něj přichází
     Po vyhodnocení pokračuje hra dále.</p>
     <img src="assets/images/ukol11_ukol3.png" alt="Úkol">
   </div>
 </div>

 <div class="topic">
  <div class="open">
     <h2 class="question"><strong>Nápověda</strong></h2>
     <span class="faq-t"></span>
  </div>
  <div class="answer">
    <p>Po vyhodnocení stisknutí musíte zařídit, aby druhý hráč nemohl tlačítko stisknout.<br>
      Musíte rovněž zastavit losování čísel.<br>
      Pro ověření, zda jsou čísla shodná, můžete využít snadno proměnných, do kterých jste vložili čísla při losování. Nyní je jen porovnáte.<br>
      Využije se blok "Switch".
      </p>
  </div>
</div>

<h3 class="mt-50 mb-30">Detaily</h3>
<p>Nyní už je dokončíme všechny detaily v naší hře.</p>
<div class="topic">
 <div class="open">
    <h2 class="question"><strong>Úkol</strong></h2>
    <span class="faq-t"></span>
 </div>
 <div class="answer">
   <p>Hru obohať o zvuky - jako správně stisknuté tlačítko, špatně stisknuté tlačítlo.
     Před každou hrou zobraz na displeji aktuální počet bodů.</p>
   <img src="assets/images/ukol11_ukol4.png" alt="Úkol">
 </div>
</div>

<div class="topic">
<div class="open">
   <h2 class="question"><strong>Nápověda</strong></h2>
   <span class="faq-t"></span>
</div>
<div class="answer">
  <p>Využij vhodně cyklů a zobrazení počtu bodů vlož před spuštění losování.</p>
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
