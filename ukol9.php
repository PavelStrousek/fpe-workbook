<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úkol 9 | ZČU FPE</title>
    <meta name="robots" content="noindex, nofollow">

    <link href="assets/css/style.css" rel="stylesheet">
    <!--<link href="assets/css/style.min.css" rel="stylesheet">-->
  </head>
  <body>
    <?php include "partials/header.php" ?>
    <main role="main">
      <section role="region" class="section text-center">
        <div class="containter">
          <h3>Inteligentní pojízdný robot</h3>
          <p>
            V minulé hodině jste si určitě všimli, že robot byl při jízdě po městě poměrně nepřesný. Často nedorazil úplně přesně na požadované místo.
          </p>
          <p>
            V této hodině se tedy naučíte, jak přesně určit, kudy má robot projet a na jaké místo má dorazit.
          </p>
          <p>
            Jak cestu najde? Nakreslíme mu ji! Všimněte si, že na zemi v učebně už je připravena černá čára. Naším úkolem v této hodině bude vytvořit program, díky kterému bude robot tuto čáru sledovat.
          </p>
          <div class="row">
            <div class="col-md-5 col-md-offset-1">
              <img src="assets/images/ukol9_senzor.png" alt="Barevný senzor">
            </div>
            <div class="col-md-5">
              <div class="text-left">
              <h3>Barevný senzor</h3>
                <p>K přesné orientaci robota v prostoru využijeme barevný senzor.</p>
                <p>Jedná se o <strong>vstupní zařízení</strong>, které se připojuje k portům řídící jednotky označeným <strong>1 - 4.</strong></p>
                <p>Senzor je upevněn na přední části robota tak, aby byl jeho snímač (na obrázku červeně ohraničen) umístěn ve vzdálenosti zhruba 0,5 cm nad zemí.</p>
              </div>
            </div>
          </div>
        </div>

      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <h3>Testujeme barevný senzor</h3>
        <p>Otevřete programovací prostředí EV3 a řešte jednotlivé úkoly uvedené v záložkách níže.</p>
        <div class="container">
        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>Tip</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <p class="text-grey">TIP: Blok pro ovládání barevného senzoru naleznete ve žluté paletě programových bloků. Jmenuje se "Color Sensor".</p>
           <img src="assets/images/ukol9_tip.png" alt="">
         </div>
       </div>

       <div class="topic">
        <div class="open">
           <h2 class="question"><strong>Testování</strong></h2>
           <span class="faq-t"></span>
        </div>
        <div class="answer">
          <p>Prozkoumejte režimy programového bloku a zkuste zjistit, jak senzor rozeznává jednotlivé barvy. Co je zjištěnou hodnotou při detekci libovolné barvy?</p>
          <p class="text-grey">Tip pro řešení: Na třetí záložce v rámci operačního systému řídící jednotky naleznete volbu "Port View". Pomocí ní si můžete vybrat senzor, který je aktuálně k jednotce připojený a zapnout snímání. Na displeji se zobrazí snímaná hodnota.</p>
          <p>Co robot detekuji si také můžete programově vypsat na displej řídící jednotky.</p>
        </div>
      </div>

      <div class="topic">
       <div class="open">
          <h2 class="question"><strong>Aktivita</strong></h2>
          <span class="faq-t"></span>
       </div>
       <div class="answer">
         <p>Čára, kterou robot bude sledovat, je černá na bílém podkladu. Jak robot tyto dvě barvy rozeznává? Zjistěte.</p>
         <p class="text-grey">TIP: Pro lepší názornost použijte výpis hodnoty na displej.</p>
       </div>
     </div>

     <div class="topic">
      <div class="open">
         <h2 class="question"><strong>Rozšíření</strong></h2>
         <span class="faq-t"></span>
      </div>
      <div class="answer">
        <h3>Úkol pro rychlé žáky</h3>
        <p>Vytvořte program, který vždy slovem vypíše na displej název barvy, kterou světelný senzor detekoval.</p>
        <p class="text-grey">TIP: Pro rozlišení jednotlivých barev můžete využít blok pro podmínku "Switch", která v režimu měření barvy barevným senzorem umožňuje rozlišovat 6 základních barev.</p>
        <img src="assets/images/ukol9_rozsireni.png" alt="">
      </div>
    </div>

       </div>
      </section>

      <section role="region" class="section text-center">
        <div class="containter">
          <h3>Aktivita - jednoduchý pohyb po čáře</h3>
          <p>
            Doplňte obě části podmínky na obrázku tak, aby pomocí programu robot vykonával kmitavý pohyb po čáře.
          </p>
          <div class="row">
            <div class="col-md-5 col-md-offset-1">
              <img src="assets/images/ukol9_rozsireni2.png" alt="">
            </div>
            <div class="col-md-5">
              <div class="text-left">
                <p class="text-grey">TIP pro řešení: Jakmile senzor detekuje černou barvu, jeden z motorů se rozjede vpřed. Druhý mezitím stojí. Jakmile během šikmého pohybu detekuje senzor bílou barvu, motory si fuknci prohodí. Ten, který doteď stál se spustí a druhý svůj pohyb přeruší.</p>
              </div>
            </div>
          </div>
        </div>

      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
            <h3>Kalibrace senzoru</h3>
            <p>Čára, kterou náš robot sleduje nemusí být sytě černá a podklad čistě bílý. Abychom tyto dvě barvy robota naučili a on tak vždy poznal, kdy je senzor nad čarou a kdy mimo, musíme provést jeho <strong>kalibraci.</strong></p>

            <div class="topic">
             <div class="open">
                <h2 class="question"><strong>Kalibrace</strong></h2>
                <span class="faq-t"></span>
             </div>
             <div class="answer text-left">
               <p>Kalibraci provedeme tak, že senzoru určíme hraniční barvy pro snímání (minimální a maximální). Kalibraci naleznete mezi režimy programového bloku "Color Sensor".</p>
               <img src="assets/images/ukol9_kalibrace.png" alt="">
             </div>
           </div>

           <div class="topic">
            <div class="open">
               <h2 class="question"><strong>Nastavení hodnot</strong></h2>
               <span class="faq-t"></span>
            </div>
            <div class="answer">
              <p>Hodnotu, kterou snímá senzor musíme přiřadit senzoru v režimu "Calibrate", čímž senzoru řekneme, v jakém rozsahu budeme měřit. Která hodnota bude minimální a která maximální.</p>
              <p>Hodnota se u kalibrace nastaví tak, že bloky propojíme přetažením výstupního portu na port vstupní. Vznikne tak trvalé spojení zajišťující uložení hodnoty pro kalibraci.</p>
              <img src="assets/images/ukol9_nastaveni_hodnot.png" alt="">
            </div>
          </div>

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Aktivita</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p><strong>Proveďte kalibraci světelného senzoru. Nastavte barvu bílého okolí jako maximální a černou čáru jako minimální hodnotu pro snímání.</strong></p>
             <p class="text-grey">TIP: Abyste mohli kalibraci pohodlně provést, pomozte si opět blokem "Wait". Ten obsahuje režim, ve kterém se čeká na stisk tlačítka řídící jednotky. Na obrázku se čeká na stisk prostředního tlačítka.</p>
             <p>Program tak bude vždy čekat, až umístíte senzor nad požadovanou barvu a až po stisku tlačítka provede kalibraci.</p>
             <img src="assets/images/ukol9_aktivita.png" alt="">
           </div>
         </div>
        </div>

      </section>

      <section role="region" class="section text-center">
        <h3>Jak zpřesnit pohyb robota?</h3>
        <p>Určitě jste si všimli, že kmitavý pohyb po čáře není příliš vhodný. Robot provádí příliš trhavé pohyby.</p>
        <p>Využijeme tedy kalibraci, kterou jste se právě naučili a zajistíme, aby robot sledoval okraj černé čáry.</p>
        <img src="assets/images/ukol9_presnejsi.png" alt="">
      </section>

      <section role="region" class="section text-center bg-light-yellow">
        <div class="container">
            <h3>Jak na sledování okraje čáry?</h3>
            <p>Aby mohl robot sledovat okraj černé čáry, musíme zrealizovat několik dílčích kroků. Prvním krokem je kalibrace, kterou jsme se již naučili. Zbylé kroky se naučíme nyní.</p>
            <div class="topic">
             <div class="open">
                <h2 class="question"><strong>Tip</strong></h2>
                <span class="faq-t"></span>
             </div>
             <div class="answer">
               <p>Pro řešení této aktivity využijeme několik nových programových prvků.</p>
               <p><strong>Proměnná</strong></p>
               <p>Při kalibraci si musíme hodnotu barvy čáry a jejího okolí trvale uložit. K tomu slouží prvek, který nazýváme proměnná. Nalezneme ji v červené záložce programových bloků a jmenuje se "Variable".</p>
               <p>Pro vytvoření proměnné musíme nejdříve zapsat její název (na obrázku BILA vpravo nahoře).</p>
               <p>Programový blok pracuje ve dvou režimech. Write, který využijeme, když chceme hodnotu do proměnné uložit a Read, který slouží pro čtení hodnoty z proměnné.</p>
               <img src="assets/images/ukol9_tip2" alt="">
             </div>
           </div>

           <div class="topic">
            <div class="open">
               <h2 class="question"><strong>Aktivita</strong></h2>
               <span class="faq-t"></span>
            </div>
            <div class="answer">
              <p>Proveďte kalibraci barevného senzoru a hodnotu bílé a černé barvy zároveň uložte do proměnné. Uložení každé barvy vždy proběhne až po stisku tlačítka řídící jednotky.</p>
              <p class="text-grey">TIP: Způsob uložení hodnoty ze senzoru do proměnné můžete vidět na obrázku.</p>
              <p>Využijte již dříve vytvořený program pro kalibraci senzoru. Jak ho musíte rozšířit, abyste zároveń obě hodnoty uložili do proměnné?</p>
              <img src="assets/images/ukol9_aktivita2.png" alt="">
            </div>
          </div>

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Návod</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p>Při sledování okraje černé čáry robot vyhledává středovou hodnotu mezi maximem a minimem, které jsme mu uložili při kalibraci. Jedná se o pomezí mezi černou čarou a bílým okolím. Tuto hodnotu si musíme vypočítat.</p>
             <p>K jednoduchým výpočtům se používá blok "Math", který nalezneme v červené záložce. Obsahuje řadu režimů. Na obrázku zvýrazněny čtyři základní (sčítání, odčítání, násobení a dělení). Na vstupy "a" a "b" se přivádí (zadávají) hodnoty, se kterými se počítá.</p>
             <img src="assets/images/ukol9_navod.png" alt="">
             <p class="text-grey">TIP: Pro výpočet můžete využít také hodnotu uloženou v proměnné a přenést ji na vstupní port.</p>
             <img src="assets/images/ukol9_navod2.png" alt="">
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
