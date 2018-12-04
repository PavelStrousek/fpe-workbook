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
            <img src="assets/images/bok.png" alt="Lego robot">
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
          <img src="assets/images/vstupni_porty.png" alt="Vstupní porty robota">
        </div>
      </section>
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
        </div>
      </section>

    </main>
    <?php include "partials/footer.php" ?>
  </body>
</html>
