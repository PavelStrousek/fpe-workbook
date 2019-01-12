<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úkol 8 | ZČU FPE</title>
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
            <h3>Adaptivní tempomat</h3>
            <p>V minulé aktivitě jsme robota naučili jezdit po čáře. Pokud by ale takový robot fungoval například jako dopravník materiálu ve výrobě, jedna podstatná věc by mu chyběla. Nedokázal by zjistit, jestli mu v cestě nestojí překážka. V následujících aktivitách to robota naučíme.</p>
            <img src="assets/images/ukol8_tempomat.png" alt="Adaptivní tempomat" class="img-fullwidth mt-30 mb-30">
            <p>K detekci překážky využijeme ultrazvukový senzor. Ten funguje jako "oči robota", protože mu pomáhá detekovat objekty v jeho okolí.</p>
            <p class="text-grey">TIP: Jedná se o vstupní zařízení, takže se připojuje k portů 1 - 4.</p>
          </div>
        </div>
      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
          <h3>Učíme se používat ultrazvukový senzor</h3>
          <p>Než začneme utlrazvukový senzor používat k řízení robota, musíme se s ním seznámit a naučit pracovat.</p>

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Tip</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p>TIP: Blok pro ovládání ultrazvukového senzoru naleznete ve žluté paletě programových bloků. Jmenuje se "Ultrasonic Sensor" a umožňuje měřit nebo porovnávat naměřenou vzdálenost.</p>
             <img src="assets/images/ukol8_tip.png" style="width: 457px;" alt="Chytrá závora" class="img-fullwidth mt-30 mb-30">
           </div>
         </div>

         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>Seznámení s fungováním</strong></h2>
             <span class="faq-t"></span>
          </div>
          <div class="answer">
            <p>Fungování ultrazvukového senzoru můžeme přirovnat k orientaci netopýra v prostoru. Senzor vyšle ultrazvukový signál a ten se odrazí od překážky umístěné před senzorem. Senzor poté vyhodnotí dobu, která uplynula mezi vysláním signálu a jeho přijetím a díky tomu zjistí, v jaké vzdálenosti předmět je.</p>
            <h3>Hledejte problém!</h3>
            <p>Otestujte následující program, který by měl měřit vzdálenost senzoru od libovolného předmětu. Jakou vzdálenost jste naměřili? Přijdete na to, proč senzor měří poněkud zvláštně?</p>
            <img src="assets/images/ukol8_seznameni_s_tempomatem.png" alt="Chytrá závora" class="img-fullwidth mt-30 mb-30">
          </div>
        </div>

        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>Aktivita</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <p>Vytvořte funkční digitální měřič vzdálenosti, pomocí kterého změříte výšku vašeho spolužáka. Ta se následně vypíše na displej ve tvaru XY cm (XY = výška spolužáka).</p>
         </div>
       </div>


        </div>
      </section>

      <section role="region" class="section">
        <div class="container text-center">
          <h3>Zastavení před překážkou</h3>
          <p>Už víte, jak ultrazvukový senzor funguje? Naučíme se tedy, jak ho použít k ovládání robota. Bude sloužit jako bezpečnostní pojistka, díky které robot zastaví, pokud se před ním objeví překážka a předejde tak srážce.</p>
        </div>
      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
          <h3>Bezpečnostní pojistka</h3>
          <p>Otevřete programovací prostředí EV3 a řešte jednotlivé úkoly uvedené v záložkách níže, které vedou k vytvoření bezpečnostní pojistky k zastavení robota před překážkou.</p>

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Tip</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p>TIP: K řešení úlohy využijte blok podmíněného vykonávání "Switch", které je možné řídit vzdáleností naměřenou ultrazvukovým senzorem.</p>
             <img src="assets/images/ukol8_tip2.png" style="width: 412px;" alt="Chytrá závora" class="img-fullwidth mt-30 mb-30">
           </div>
         </div>

         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>Aktivita</strong></h2>
             <span class="faq-t"></span>
          </div>
          <div class="answer">
            <p>Vytvořte program, díky kterému se bude robot neustále pohybovat vpřed<br> a ve chvíli kdy narazí na překážku, zastaví 15 cm před ní.</p>
          </div>
        </div>

        </div>
      </section>

      <section role="region" class="section text-center">
        <div class="container">
          <h3>Reakce na pohyblivou překážku</h3>
          <p> Bezpečnostní pojistku jsme vytvořili. Vezměte si libovolnou pohyblivou překážku (postačí i vaše ruka), spusťte robota a ve chvíli kdy zastaví, se k němu zkuste rukou přiblížit. Stalo se něco?</p>
          <p>Stejná situace může nastat v koloně, kdy auto před námi začne nenadále couvat. Musíme být schopni na tuto situaci zareagovat.</p>
        </div>
      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
          <h3>Adaptivní tempomat</h3>
          <p>V této aktivitě naučíme robota reagovat na pohyblivou překážku. Ať se překážku bude pohybovat směrem k němu či od něj, bude si od ní stále udržovat stejnou vzdálenost.</p>

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Úkol</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p> Vytvořte program, pomocí kterého si bude robot udržovat od překážky odstup 20 cm. Pokud se překážka bude vzdalovat, dojede ji, pokud se bude přibližovat, začne couvat.</p>
             <p class="text-grey">Tip: K řešení vám pomůže program, pro zastavení robota před překážkou. Pokud si nyní ihned nevíte s řešením rady, pokračujte na další záložku.</p>
           </div>
         </div>

         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>Návod</strong></h2>
             <span class="faq-t"></span>
          </div>
          <div class="answer">
            <p>TIP: Rozsáhlejší úlohy si je pro snadnější řešení dobré rozdělit na dílčí, jednodušší kroky.</p>
            <p>Na obrázku níže vidíte torzo výsledného programu. Vaším úkolem je doplnit chybějící části tak, aby program fungoval v souladu se zadáním.</p>
            <p>Základem konstrukce programu je podmínka, která je řízena vzdáleností naměřenou senzorem (nezapomeňte zařídit v souladu se zadáním).</p>
            <p>Na doplnění chybějících tří částí se zaměřují aktivity v dalších záložkách.</p>
            <img src="assets/images/ukol8_navod.png" alt="Chytrá závora" class="img-fullwidth mt-30 mb-30">
          </div>
        </div>

        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>Aktivita</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <h3>Uložení hodnoty do proměnné</h3>
           <p>Uložte vzdálenost naměřenou senzorem do proměnné, kterou nazvěte "vzdalenost" a tyto bloky umístěte na příslušné místo dle obrázku v sekci "Návod".</p>
         </div>
       </div>

       <div class="topic">
        <div class="open">
           <h2 class="question"><strong>Aktivita</strong></h2>
           <span class="faq-t"></span>
        </div>
        <div class="answer">
          <h3>Pohyb vpřed</h3>
          <p>Zařiďte, aby se v případě, že bude naměřená hodnota větší než 20 cm, robot pohyboval neustále vpřed.</p>
        </div>
      </div>

      <div class="topic">
       <div class="open">
          <h2 class="question"><strong>Aktivita</strong></h2>
          <span class="faq-t"></span>
       </div>
       <div class="answer">
         <h3>Přepočet vzdálenosti na rychlost</h3>
         <p>Hodnotu uloženou v proměnné "vzdalenost" použijte k přepočtu na potřebnou rychlost robota a vhodně propojte připravené bloky.</p>
        <p>Jakou hodnotu musíte od naměřené vzdálenosti odečíst, aby robot zastavil ve vzdálenosti 20 cm před překážkou?</p>
        <p><strong>Dokončení:</strong> Nyní byste měli mít celý úkol dokončený. Otestujte ho tedy. Funguje vše správně?</p>
       </div>
     </div>

        </div>
      </section>

      <section role="region" class="section text-center">
        <div class="container">
          <h3>Rozšíření úlohy</h3>
          <p> Určitě jste si všimli, že při dobržďování před překážkou a při couvání dělá robot trhavé pohyby. Navíc nedokáže reagovat na rychlejší přibližování překážky a couvá stále stejnou rychlostí. Přidáním jediného bloku můžete jeho pohyb udělat přesnější a plynulejší.</p>
          <p>Zařiďte, aby robot při detekci překážky postupně zpomaloval a ve vzdálenosti 20 cm před ní úplně zastavil. Pokud se k němu začne překážka přibližovat, bude couvání také zrychlovat. Ve chvíli, kdy se překážka přiblíží až těsně k němu, bude couvat rychlostí 100 %.</p>
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
