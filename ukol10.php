<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úkol 10 | ZČU FPE</title>
    <meta name="robots" content="noindex, nofollow">

    <link href="assets/css/style.css" rel="stylesheet">
    <!--<link href="assets/css/style.min.css" rel="stylesheet">-->
  </head>
  <body>
    <?php include "partials/header.php" ?>
    <main role="main">
      <section role="region" class="section text-center">
        <div class="container">
          <h3>Parkovací asistent</h3>
          <p>
            V této hodině navážema na předchozí aktivity s ultrazvukovým senzorem. Využijeme tento senzor k vyhledání dostatečného místa na parkování a následnému zajetí do řady vozidel.
          </p>
          <div class="row">
            <div class="col-md-5 col-md-offset-1">
              <img src="assets/images/ukol10_parkovaci_asistent.png" alt="Parkovací asistent">
            </div>
            <div class="col-md-5">
              <div class="text-left">
              <h3>Jak bude parkovací asistent fungovat?</h3>
                <p>Programování parkovacího asistenta se bude skládat z několika dílčích kroků. Nejprve musí robot dokázat nalézt volné místo na zaparkování. Následně si ověřit, jestli je místo dostatečně velké a nakonec robota naučíme zjistit, yda na místě pro zaparkování není nějaká překážka.</p>
                <p>K řešení úlohy využijte <strong>ultrazvukový senzor</strong> umístěný na <strong>levé straně</strong> robota.</p>

              </div>
            </div>
          </div>
        </div>

      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <h3>Nalezení začátku volného místa</h3>
        <p>Otevřete programovací prostředí EV3 a řešte jednotlivé úkoly uvedené v záložkách níže vedoucích k nalezení začátku volného parkovacího místa.</p>
        <div class="container">
        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>Aktivita</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <p>Vytvořte program, díky kterému robot detekuje začátek volného místa pro zaparkování. Po nalezení místa zastaví a oznámí to dlouhým výrazným tónem.</p>
           <img src="assets/images/ukol10_aktivita.png" alt="Aktivita">
         </div>
       </div>

       <div class="topic">
        <div class="open">
           <h2 class="question"><strong>Nápověda</strong></h2>
           <span class="faq-t"></span>
        </div>
        <div class="answer">
          <p> Jak robot pozná, že nalezl volní místo na zaparkování?<br> Celou jízdu musí měřit vzdálenost pomocí ultrazvukového senzoru.<br> Jak se jeho měření bude lišit, když pojede podél řady zaparkovaných automobilů <br>a když nalezne volné místo? Už víte jak úlohu vyřešit?</p>
        </div>
      </div>

      <div class="topic">
       <div class="open">
          <h2 class="question"><strong>Řešení</strong></h2>
          <span class="faq-t"></span>
       </div>
       <div class="answer">
         <p>Může být tento program správným řešení aktivity? Pokud ne, proč?</p>
         <img src="assets/images/ukol10_reseni.png" alt="Řešení">
       </div>
     </div>

       </div>
      </section>

      <section role="region" class="section text-center">
        <div class="container">
          <h3>Tvorba vlastního bloku</h3>
          <p>
            Program, který vytváříme, bude ve výsledku poměrně rozsáhlý. Pro jeho zpřehlednění si můžeme vytvořit vlastní bloky. Stačí si označit všechny bloky, které do něj chcete zahrnout a v horním menu vybrat položku "Tools" a následně "My Block Builder".
          </p>
          <img src="assets/images/ukol10_tvorba_vlastniho_bloku.png" alt="Tvorba vlastního bloku">
          <p>V okně, které se nám otevře si následně zvolíme název bloku, jeho volitelný popis a ikonku, která se na bloku bude zobrazovat. Vytvořený blok se nám následně přiřadí do poslední záložky programových bloků s názvem "<strong>My Blocks</strong>".</p>
          <p><strong>Vyzkoušejte si</strong>: Vytvořte si z programu pro detekci začátku volného parkovacího místa vlastní blok. Poté ho vložte na plochu programovacího prostředí a program spusťte. Našli jste nějaký rozdíl?</p>
        </div>

      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
            <h3>Měření potřebné vzdálenosti</h3>
            <p>Druhým krokem vytvoření programu je nalezení dostatečně velkého místa na zaparkování. Robot už sice umí nalézt začátek volného parkovacího místa, ale neví, jestli je místo dostatečně velké.</p>

            <div class="topic">
             <div class="open">
                <h2 class="question"><strong>Aktivita</strong></h2>
                <span class="faq-t"></span>
             </div>
             <div class="answer text-left">
               <p>Vytvořte program, pomocí kterého robot změří, zda je místo pro zaparkování dostatečně velké a pokud ano, tak do něj zajede, pokud ne, vydá chybové hlášení nebo tón.</p>
               <img src="assets/images/ukol10_aktivita2.png" alt="Měření parkovacího místa">
             </div>
           </div>

           <div class="topic">
            <div class="open">
               <h2 class="question"><strong>Nápověda</strong></h2>
               <span class="faq-t"></span>
            </div>
            <div class="answer">
              <p> Jak nejjednoduším způsobem zjistit, jestli je prostor pro zaparkování dostatečné velký? Nejdříve musíte vědět, jak dlouhý náš robot je. Jakmile detekuje začátek parkovacího místa, popojede o vzdálenost své délky a znovu ověří, jestli je zde volno.</p>
              <img src="assets/images/ukol10_aktivita2.png" alt="Měření parkovacího místa">
            </div>
          </div>

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Otázka</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p> Mohl by takovýto parkovací asistent fungovat v reálném životě? Jaké by u něj mohly nastat problémy? Prodiskutujte ve skupině a své postřehy si zapište.</p>
           </div>
         </div>
        </div>

      </section>

      <section role="region" class="section text-center">
        <div class="container">
          <h3>Rozšiřující aktivita pro rychlé žáky</h3>
          <p>Možná jste během diskuse došli k tomu, že předchozí řešení by nebylo příliš správné. Může totiž dojít k tomu, že na místě, které robot vyhodnotil jako volné bude zaparkovaná motorka, umístěná popelnice nebo sloup veřejného osvětlení. V aktivitě níže se tedy naučíme, jak tento problém vyřešit.</p>
          <img src="assets/images/ukol10_rozsireni.png" alt="Rozšiřující aktivita" class="mt-30">
        </div>
      </section>

      <section role="region" class="section text-center bg-light-yellow">
        <div class="container">
            <h3>Měření s překážkou</h3>
            <p>Otevřete programovací prostředí EV3 a řešte jednotlivé úkoly uvedené v záložkách níže.</p>
            <div class="topic">
             <div class="open">
                <h2 class="question"><strong>Aktivita</strong></h2>
                <span class="faq-t"></span>
             </div>
             <div class="answer">
               <p>Analyzujte následující program a zjistěte, k čemu slouží. Upozorníme vás, že pro vás bude velmi důležitý k řešení závěrečné funkce robota. Až zjistíte, co tento program dělá, použitejte předchozí získané znalosti a zkuste úlohu vyřešit.</p>
               <p>Pokud si nevíte rady, pomůcku najdete v záložce "<strong>Nápověda</strong>".</p>
               <img src="assets/images/ukol10_aktivita3" alt="Aktivita 3">
             </div>
           </div>

           <div class="topic">
            <div class="open">
               <h2 class="question"><strong>Nápověda</strong></h2>
               <span class="faq-t"></span>
            </div>
            <div class="answer">
              <p class="text-grey">Tip: Nový blok, který v programu vidíte, se jmenuje "<strong>Motor Rotation</strong>" a najdete ho ve žluté záložce. Slouží k měření nebo porovnávání počtu otáček motoru ve stupních nebo otáčkách.</p>
              <img src="assets/images/ukol10_napoveda.png" alt="Nápověda">
            </div>
          </div>

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Návod</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
            <p>Na závěr si shrneme všechny informace. Ke správnému vyřešení aktivity musíte vyřešit několik dílčích kroků:</p>
            <p>1) Nalézt volné místo pro parkování.</p>
            <p>2) Změřit, zda je místo pro parkování dostatečně velké.</p>
            <p>3) Ověřit, zda na parkovacím místě není nějaká překážka.</p>
            <p>4) Úspěšně zaparkovat.</p>
           </div>
         </div>

         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>Návod</strong></h2>
             <span class="faq-t"></span>
          </div>
          <div class="answer">
            <p>Vaším úkolem v této aktivitě je spočítat průměrnou hodnotu snímané barvy. Propojte jednotlivé bloky na obrázku tak, aby se do proměnné "PRUMER" uložila průměrná hodnota dle následujícího vzorce:</p>
            <p><strong>PRUMER = (BILA - CERNA) / 2 + CERNA</strong></p>
          </div>
        </div>
        </div>

      </section>

      <section role="region" class="section text-center">
        <div class="container">
          <h3>Aktivita - sledování okraje černé čáry</h3>
          <p>Jsme ve finále. Můžeme dokončit program pro sledování okraje černé čáry. Na obrázku vidíte drobnou nápovědu k tomu, jak program dokončit. Musíte naplnit tyto tři kroky, z nichž první dva už jsme se naučili a vytvořili jsme je. </p>
          <p>1) Kalibrace - přirazení minima a maxima světelnému senzoru. </p>
          <p>2) Výpočet průměrné hodnoty - realizováno na základě kalibrace. </p>
          <p>3) Nyní najděte a doplňte nedostatky uvnitř nekonečného cyklu.</p>
          <p>Pokud bude hodnota snímaná senzorem větší, než hodnota vypočítaného průměru, tak se oba motory budou snažit přiblížit světelný senzor k černé čáře. V opačném případě bude mít robot snahu dostat snímač senzoru z černé čáry zpět na okraj.</p>
          <img src="assets/images/ukol9_finale.png" alt="">
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
