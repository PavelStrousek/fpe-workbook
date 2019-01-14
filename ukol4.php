<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úkol 4 | ZČU FPE</title>
    <meta name="robots" content="noindex, nofollow">

    <link href="assets/css/style.css" rel="stylesheet">
    <!--<link href="assets/css/style.min.css" rel="stylesheet">-->
  </head>
  <body>
    <?php include "partials/header.php" ?>
    <main role="main">
      <section role="region" class="section text-center">
        <div class="container">
          <h2>Řídící jednotka</h2>
          <p class="mt-15">
            V dnešní hodině si dáme trochu odpočinek od ježdění a budeme "kouzlit" se zvukem a grafikou.
          </p>
          <p>
            Jistě jste si všimli, že jsme jak motory, tak i počítač připojovali k řídící jednotce. Je to velmi důležitá "krabička", která vše propojuje a stará se o vykonávání programů. Je v ní umístěn mikropočítač ARM velmi podobný tomu, který možná máte ve svém chytrém telefonu. Ten nejdříve tzv. dekóduje a poté vykonává Vaše příkazy zadané do programovacího prostředí a uložené do programu.
          </p>
          <p>
            Vezměte si Váš model robotického auta a opatrně od něj odpojte řídící jednotku. Zbytek modelu odložte. Nebudete ho dnes potřebovat.
          </p>
          <div class="row mt-30">
            <div class="col-md-5 col-md-offset-1">
              <img src="assets/images/ukol4_legostorm.png" alt="Řídící jednotka Legostorm">
            </div>
            <div class="col-md-5">
              <div class="text-left">
              <h3 class="mt-60">Řídicí jednotka LEGO Mindstorms EV3</h3>
                <p>Jedna z komponent, kterou jednotka obsahuje je mikroprocesor.</p>
              </div>
            </div>
          </div>
        </div>

      </section>
      <section role="region" class="section bg-light-yellow text-center">
        <div class="container">
          <h3>Řídicí jednotka obsahuje ...</h3>
          <p><strong>Napájení</strong> - bez energie by řídicí jednotka nemohla fungovat</p>
          <p>Řídicí jednotka je elektrické zařízení napájené z baterií. V případě našeho LEGA jsou to dle typu buďto nabíjecí Li-ION baterie či AA baterie (klasické či nabíjecí NiMH). Řídicí jednotka dále napájí i další prvky jako jsou např. motory, senzory, reproduktor, Bluetooth či displej.</p>
          <p><strong>Paměť</strong> - jednotka je stejně jako většina počítačů vybavena dokonce dvěma typy paměti - dočasnou operační pamětí a trvalou pamětí typu flash.</p>
          <p>Operační paměť typu RAM je velmi rychlou pamětí, do které se ukládají data a ze které se spouští (vykonávají) programy.
          Má však jednu nevýhodu. Po odpojení napájení ztrácí svůj obsah.
          Paměť typu flash je pomalejší pamětí, ale svůj obsah po odpojení neztratí.
          K čemu by jí šlo využít? Co je na ní uloženo?</p>
          <p>Proč není využita jen operační pamět RAM, když jednotka obsahuje baterie?
          Víš, co to je firmware a proč je důležitý?</p>
          <p><strong>Displej</strong> - k zobrazení informací z řídící jednotky </p>
        </div>
      </section>

      <section role="region" class="section text-center">
        <div class="container">
          <div class="row">
            <div class="text-left display-flex">
              <div class="col-md-6 position-rel">
                <img src="assets/images/open_icon.png" alt="Stažení manuálu" class="">
                <div class="float-right ukol1_stazeni">
                  <p>Stáhni si</p>
                  <p>První program</p>
                </div>
              </div>
              <div class="col-md-6 ukol1_border position-rel">
                <div class="float-right">
                  <p>Začnemejednoduše.</p>
                  <p>Připravili jsme pro vás první program, který si můžete stáhnout pomocí ikony pro stažení v levé části obrazovky.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <h3>První program</h3>
        <p>Máš program stažený? Otevři ho v programovacím prostředí LEGO Mindstroms EV3. Má následující ikonku, ale možná ti soubor půjde otevřít jen jednoduchým poklepáním.</p>
        <p>Záložky nepřepínej, dokud úkol nevyřešíš.</p>
        <div class="container">
        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>1. - Návrh řešení</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <p>Zkus navrhnout a vyzkoušet řešení, jak dostat z počítače do řídicí jednotky.</p>
         </div>
       </div>

       <div class="topic">
        <div class="open">
           <h2 class="question"><strong>2. - Odbočení k nemocnici</strong></h2>
           <span class="faq-t"></span>
        </div>
        <div class="answer">
          <p>Tlačítko spustit nereaguje? Proč je tomu tak?</p>
          <img src="assets/images/ukol4_2.png" alt="">
        </div>
      </div>

      <div class="topic">
       <div class="open">
          <h2 class="question"><strong>3 - Hledání parkoviště</strong></h2>
          <span class="faq-t"></span>
       </div>
       <div class="answer">
         <p>Jednotku je potřeba s počítačem propojit a to buďto pomocí USB kabelu či pomocí Bluetooth. S tím budeme pracovat až v příštích hodinách a tak teď použij USB kabel, který najdeš v krabici.</p>
         <p class="text-grey">TIP: TIP: O tom, zda je jednotka úspěšně připojena se můžeš přesvědčit v pravém dolním rohu.</p>
         <img src="assets/images/ukol4_3.png" alt="">
         <p>Uvidíš zde název jednotky, stav nabití baterií, verzi řídícího programu, zaplnění paměti i typ připojení (USB).</p>
       </div>
     </div>

       </div>
      </section>

      <section role="region" class="section text-center">
        <div class="container">
            <h3>Zjišťujeme, co program dělá</h3>
            <div class="topic">
             <div class="open">
                <h2 class="question"><strong>Program</strong></h2>
                <span class="faq-t"></span>
             </div>
             <div class="answer text-left">
               <ul>
                 <li>1. Napiš, co program dělá. </li>
                 <li>2. Poznal jsi písničku?</li>
                 <li>3. Napiš, jaké chyby se v ní vyskytují.</li>
                 <li>4. Zkus je v programu nejprve vyhledat a poté opravit.</li>
                 <li>5. Písničku dokonči.</li>
               </ul>
             </div>
           </div>

           <div class="topic">
            <div class="open">
               <h2 class="question"><strong>Parametry bloků</strong></h2>
               <span class="faq-t"></span>
            </div>
            <div class="answer">
              <p>Každý programový blok („kostička s příkazem“) má určité vlastnosti. Těm se říká parametry.</p>
              <img src="assets/images/ukol4_parametry.png" alt="">
              <p>Jaké vlastnosti měním pomocí:<br>1., 2., 3. a 4. tlačítka?</p>
              <p>Které z nich jste pro opravu využili?</p>
            </div>
          </div>

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>TIP: Nové bloky</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p>TIP: Bloky můžete buďto zkopírovat nebo vybrat v dolní části okna. Zelená sekce sdružuje všechny základní výstupní bloky, tedy bloky, které provádí navenek viditelnou činnost (např. zvuky, vykreslení na displeji, otáčení motorů a jiné).</p>
             <img src="assets/images/ukol4_tip.png" alt="">
           </div>
         </div>
        </div>

      </section>

      <section role="region" class="section bg-light-yellow text-center">
        <h3>Hrátky s displejem</h3>
        <p>Naučili jste se ovládat zvuk, nyní se podíváme na displej. Kde se nachází asi říkat nemusíme, zajímavé však bude, jak se ovládá.</p>
      </section>

      <section role="region" class="section text-center">
        <div class="container">
          <div class="row">
            <div class="text-left display-flex">
              <div class="col-md-6 position-rel">
                <img src="assets/images/open_icon.png" alt="Stažení manuálu" class="">
                <div class="float-right ukol1_stazeni">
                  <p>Stáhni si</p>
                  <p>Displej 1</p>
                </div>
              </div>
              <div class="col-md-6 ukol1_border position-rel">
                <div class="float-right">
                  <p>Stáhněte si program a otestujte, co dělá.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section role="region" class="section text-center bg-light-yellow">
        <div class="container">
            <h3>Zjišťujeme, co program dělá</h3>
            <div class="topic">
             <div class="open">
                <h2 class="question"><strong>Program</strong></h2>
                <span class="faq-t"></span>
             </div>
             <div class="answer text-left">
               <ul>
                 <li>1. Napiš, co program dělá. </li>
                 <li>2. Napište, co očekáváte, že se stane, pokud odstraníte blok zvuku. Nevadí, když se zmýlíte. Důležité je se zamyslet. </li>
                 <li>3. Předpoklad otestujte. Stalo se to, co jste si mysleli?</li>
               </ul>
             </div>
           </div>

           <div class="topic">
            <div class="open">
               <h2 class="question"><strong>Ověření</strong></h2>
               <span class="faq-t"></span>
            </div>
            <div class="answer">
              <p>Proč se na displeji „nic“ nezobrazuje?</p>
              <img src="assets/images/ukol4_overeniy.png" alt="">
              <p>Jaké vlastnosti měním pomocí:<br>1., 2., 3. a 4. tlačítka?</p>
              <p>Které z nich jste pro opravu využili?</p>
            </div>
          </div>

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>Vysvělení</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p>Program se skládá ze sledu příkazů, které jsou postupně (a někdy i souběžně) vykonávány. Po vykonání všech příkazů program skončí a řízení se ujme operační systém. Program tedy skončil a displej se přepsal.</p>
             <p>Tvůj program se skládá jen z jednoho bloku, který se vykonal a program následně skončil. Došlo tedy k přepsání výstupu displeje. Pro ovlivnění délky běhu programu můžeš využít i blok s čekáním „Wait“.</p>
             <img src="assets/images/ukol4_tip.png" alt="">
           </div>
         </div>
        </div>

      </section>

      <section role="region" class="section text-center">
        <div class="container">
          <h3>Upravujeme program</h3>
          <p>1. Uprav program tak, aby text zůstal na displeji zobrazený po 3 vteřiny.</p>
          <p>2. Dokážete zobrazovat text postupně po písmenkách (L, LE, LEG, LEGO)? Program vytvořte a vyzkoušejte.</p>
          <p>3. Poradíte si i se složitějším výpisem (obrázek). TIP: Složitější úlohy je vhodné řešit po menších částech. Zkus např. nejdřív text zarovnat na střed a např. až poté řešit jeho pozici či zarovnání.</p>
          <p>4. Nyní si na závěr pojmenujte robota a nechte jeho jméno zajímavým způsobem vypsat na displej.</p>
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
