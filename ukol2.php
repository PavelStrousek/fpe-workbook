<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úkol 2 | ZČU FPE</title>
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
            <h3>Oživení pojízdného robota</h3>
            <p>V dnešní hodině se naučíme řídit pojízdného robota, kterého jsme si sestavili v minulé hodině. Vezměte si Vašeho robota a pusťte se níže do řešení.</p>
            <img src="assets/images/bok.png" alt="Lego robot" class="img-fullwidth mt-30 mb-30">
            <p>Náš sestavený robot. Všimněte si připojení motorů k portu D a A.</p>
          </div>
        </div>
      </section>
      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
          <h3>Připojení motorů</h3>
          <p>Pro připojení všech motorů k řídící jednotce slouží výstupní porty označené písmenky A - D. </p>
          <p>Zkontrolujte, zda máte motory na Vašem robotu připojeny dle výše uvedeného obrázku.</p>
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
              <h2 class="question"><strong>1. Úkol</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <div class="display-flex">
               <img src="assets/images/idea.png" alt="žárovka - nápad" style="width: 53px;height: 53px;" class="mr-10">
               <div class="pt-25">
                 <p>Co se stane, pokud motory připojíte k daným portům dle obrázku, <br>program nahrajete do řídící jednotky a spustíte?</p>
               </div>
               <img src="assets/images/idea.png" alt="žárovka - nápad" style="width: 53px;height: 53px;" class="ml-10">
             </div>
             <p class="mt-30">Poznamenejte si, co si myslíte a následně program otestujte. Uhádli jste správné řešení?</p>
             <img src="assets/images/ukol2_1.png" alt="Programovatelný bloky" class="mt-30 mb-30">
             <p class="text-grey">TIP: Pro řízení robotů, kteří jsou poháněni dvěma motory se používá blok s názvem "Move Steering". - Naleznete ho v zelené záložce programových bloků.</p>
             <p>
               <span class="text-red">Upozornění:</span> Nezapomeňte při programování zvolit správné výstupní porty řídící jednotky, ke kterým jsou motory připojeny (A - D).
             </p>
           </div>
         </div>

         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>2. Úkol</strong></h2>
             <span class="faq-t"></span>
          </div>

          <div class="answer">
            <div class="display-flex">
              <img src="assets/images/idea.png" alt="žárovka - nápad" style="width: 53px;height: 53px;" class="mr-10">
              <div class="pt-25">
                <p>V kterém případě robot urazí delší vzdálenost? Dokážete najít odpověď jen ne základě obrázku? Jaký je rozdíl mezi oběma programy?</p>
              </div>
              <img src="assets/images/idea.png" alt="žárovka - nápad" style="width: 53px;height: 53px;" class="ml-10">
            </div>
            <p class="mt-30">Poznamenejte si odpověď a následně programy otestujte a porovnejte odpověď s výsledkem.</p>
            <img src="assets/images/ukol2_2.png" alt="Programovatelný bloky" class="mt-30 mb-30">
          </div>
        </div>

        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>3. Úkol</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <p>Pomocí programu na obrázku ujede robot určitou vzdálenost.</p>
           <div class="display-flex">
             <img src="assets/images/idea.png" alt="žárovka - nápad" style="width: 53px;height: 53px;" class="mr-10">
             <div class="pt-25">
               <p>Co musíte v programu změnit, aby ujel pouze polovinu této vzdálenosti? Vymyslete a otestujte.</p>
             </div>
             <img src="assets/images/idea.png" alt="žárovka - nápad" style="width: 53px;height: 53px;" class="ml-10">
           </div>
           <img src="assets/images/ukol2_3.png" alt="Programovatelný bloky" class="mt-30 mb-30">
         </div>
       </div>

       <div class="topic">
        <div class="open">
           <h2 class="question"><strong>Hádanka</strong></h2>
           <span class="faq-t"></span>
        </div>
        <div class="answer">
          <div class="display-flex">
            <img src="assets/images/idea.png" alt="žárovka - nápad" style="width: 53px;height: 53px;" class="mr-10">
            <div class="pt-25">
              <p>Nyní pro vás máme jednu hádanku. Proč se robot při spuštění tohoto programu nerozjede?</p>
            </div>
            <img src="assets/images/idea.png" alt="žárovka - nápad" style="width: 53px;height: 53px;" class="ml-10">
          </div>
          <img src="assets/images/ukol2_hadanka.png" alt="Programovatelný bloky" class="mt-30 mb-30">
          <p class="text-grey">TIP: Zaměřte se na režimy programového bloku a ověřte, jak je robot v tomto případě řízen.</p>
        </div>
      </div>

        </div>
      </section>

      <section role="region">
        <div class="container section text-center">
          <h3>Souhrnný úkol - střídáme rychlosti</h3>
          <p>Vytvořte program, pomocí kterého robot pojede 4 otáčky motorů rychlostí 50 % a poté na dvě otáčky motorů zrychlí na 100 %-</p>
        </div>
      </section>
      <section role="region" class="section bg-light-yellow text-center">
        <h3>Učíme robota vzdálenost</h3>
        <p>Otevřete programovací prostředí EV3 a postupně řešte jednotlivé úkoly uvedené v záložkách níže.</p>
        <p>Protože již nejste úplní začátečníci, zkusíme, jak rozumíte programům. Vezměte si poznámkový blok a před řešením úloh zkuste vymyslet či odhadnout správnou odpověď.</p>
        <p>Váš úsudek poté otestujte vytvořeným programem.</p>
        <div class="row">
          <div class="col-md-2 col-md-offset-1">1. Úkol</div>
          <div class="col-md-2">2. Úkol</div>
          <div class="col-md-2">Hádanka</div>
          <div class="col-md-2">Hádanka</div>
          <div class="col-md-2">3. Úkol</div>
        </div>
        <div>
          <img src="assets/images/idea.png" alt="žárovka - nápad">
          <p>Jaký je rozdíl mezi programy na obrázku?</p>
          <img src="assets/images/idea.png" alt="žárovka - nápad">
          <p>Pomocí kterého programu robot ujede delší vzdálenost? Zamyslete si, vaši odpověd si poznamenejte a pak otestujte, jestli byl váš úsudek správný.</p>
          <img src="assets/images/ukol2_2.png" alt="">
        </div>
      </section>
      <section role="region" class="section text-center">
        <div class="container">
          <h3>Náročnější úkol</h3>
          <p>Nyní si vyzkoušíme, jestli umíte znalosti z předchozích úkolů použít k řešení složitějšího problému.</p>
          <img src="assets/images/idea.png" alt="žárovka - nápad">
          <p>Vytvořte program, pomocí kterého robot ujede 5 otáček motoru, poté se otočí o 90° vpravo a následně ujede znovu 5 otáček motoru.</p>
          <img src="assets/images/idea.png" alt="žárovka - nápad">
        </div>
      </section>

      <section role="region" class="section text-center">
        <div class="container">
          <img src="assets/images/idea.png" alt="žárovka - nápad">
          <h3>Úkol pro rychlé žáky</h3>
          <p>Otevřete programovací prostředí EV3 a řešte jednotlivé úkoly uvedené v záložkách níže.</p>
          <div class="row">
            <div class="col-md-4">1. Úkol</div>
            <div class="col-md-4">2. Úkol</div>
            <div class="col-md-4">3. Úkol</div>
          </div>
        </div>

      </section>

      <section>

<div class="topic">
   <div class="open">
      <h2 class="question">2. I have posted a complaint/comment, but it doesn’t appear on the website. Why? When my complaint will be posted?</h2>
      <span class="faq-t"></span>
   </div>
   <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="topic">
   <div class="open">
      <h2 class="question">3. How can I edit a complaint I posted?</h2>
      <span class="faq-t"></span>
   </div>
   <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="topic">
   <div class="open">
      <h2 class="question">4. How can i find out personal information of another user?</h2>
      <span class="faq-t"></span>
   </div>
   <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="topic">
   <div class="open">
      <h2 class="question">5. How can i contact another user?</h2>
      <span class="faq-t"></span>
   </div>
   <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="topic">
   <div class="open">
      <h2 class="question">2. I have posted a complaint/comment, but it doesn’t appear on the website. Why? When my complaint will be posted?</h2>
      <span class="faq-t"></span>
   </div>
   <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="topic">
   <div class="open">
      <h2 class="question">3. How can I edit a complaint I posted?</h2>
      <span class="faq-t"></span>
   </div>
   <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="topic">
   <div class="open">
      <h2 class="question">4. How can i find out personal information of another user?</h2>
      <span class="faq-t"></span>
   </div>
   <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="topic">
   <div class="open">
      <h2 class="question">5. How can i contact another user?</h2>
      <span class="faq-t"></span>
   </div>
   <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
      </section>

      <section role="region" class="section text-center">
        <div class="container">
          <h3>Závěrečné ověření</h3>
          <p>Myslíte si, že už základní ovládání robota zvládáte? Máme pro vás závěrečný úkol.</p>
          <img src="assets/images/idea.png" alt="žárovka - nápad">
          <p>Zajistěte, aby robot projel následující dráhu a během jízdy respektoval pokyny ohledně délky pohybu a uvedené rychlosti.</p>
          <img src="assets/images/idea.png" alt="žárovka - nápad">
          <img src="assets/images/ukol2_overeni.png" alt="žárovka - nápad">
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
