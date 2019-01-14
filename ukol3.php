<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úkol 3 | ZČU FPE</title>
    <meta name="robots" content="noindex, nofollow">

    <link href="assets/css/style.css" rel="stylesheet">
    <!--<link href="assets/css/style.min.css" rel="stylesheet">-->
  </head>
  <body>
    <?php include "partials/header.php" ?>
    <main role="main">
      <section role="region" class="section text-center">
        <div class="container">
          <h2>Robot ve městě</h2>
          <p class="mt-15">Dnes využijeme robota sestaveného v předchozí hodině.Vaším úkolem bude zajistit úspěšné projetí robota městem na základě dílčích úkolů uvedených níže.</p>
          <div class="row mt-30">
            <div class="col-md-5 col-md-offset-1">
              <img src="assets/images/ukol3_mesto.png" alt="Mapa města">
            </div>
            <div class="col-md-5">
              <h3>Město, ve kterém robot žije</h3>
              <div class="text-left">
                <p>Na obrázku vidíte mapu města, ve kterém se budete s robotem pohybovat.</p>
                <p>Vaším úkolem je krok po kroku dostávat robota z jednoho místa na druhé. Schéma města vám zvýraznil/a vyučující přímo ve třídě.</p>
                <p>Jednotlivé úkoly, které budete řešit, najdete o něco níže. Zobrazí se vám vždy po kliknutí na příslušný blok.</p>
              </div>
            </div>
          </div>
        </div>

      </section>

      <section role="region" class="section text-center">
        <div class="container">

          <div class="topic">
           <div class="open">
              <h2 class="question"><strong>A - Cesta do nemocnice</strong></h2>
              <span class="faq-t"></span>
           </div>
           <div class="answer">
             <p>
               Zařiďte, aby robot dojel na křižovatku hlavní ulice a ulice k nemocnici (A). Zde totiž zjistí, jak se dostat k nemocnici, kde chce navštívit nemocného kamaráda.
             </p>
           </div>
         </div>

         <div class="topic">
          <div class="open">
             <h2 class="question"><strong>B - Odbočení k nemocnici</strong></h2>
             <span class="faq-t"></span>
          </div>
          <div class="answer">
            <p>
              Do ulice k nemocnici se dostanete tak, že zabočíte vlevo. Zatočte o 90° a dojeďte k nemocnici.
            </p>
          </div>
        </div>

        <div class="topic">
         <div class="open">
            <h2 class="question"><strong>C - Hledání parkoviště</strong></h2>
            <span class="faq-t"></span>
         </div>
         <div class="answer">
           <p>
             Při projíždění ulicí nebylo nikde možné zaparkovat. Před nemocnicí je jen jedno velmi malé parkovací místo. Objeďte dokola celý areál nemocnice, třeba se vám místo k parkování podaří najít. Pokud ne, zaparkujte na místě označeném C.
           </p>
         </div>
       </div>

       <div class="topic">
        <div class="open">
           <h2 class="question"><strong>D - Do trafiky pro noviny</strong></h2>
           <span class="faq-t"></span>
        </div>
        <div class="answer">
          <p>
            Navštívili jste robotova kamaráda v nemocnici, kterému se již daří o mnoho lépe. Nyní si zajeďte koupit noviny do blízké trafiky na rohu ulice, kde robot bydlí.
          </p>
        </div>
      </div>

      <div class="topic">
       <div class="open">
          <h2 class="question"><strong>E - Do bankomatu pro peníze</strong></h2>
          <span class="faq-t"></span>
       </div>
       <div class="answer">
         <p>
           V novinách se robot dočetl, že dnes večer hraje jeho oblíbený fotbalový tým FC Robotics. Bohužel ale nemá dostatek peněz pro zakoupení lístku. Zajeďte tedy bankomatu pro peníze. Bankomat je těsně před velkým kruhovým objezdem.
         </p>
       </div>
     </div>

     <div class="topic">
      <div class="open">
         <h2 class="question"><strong>F - Cesta na stadion</strong></h2>
         <span class="faq-t"></span>
      </div>
      <div class="answer">
        <p>
          Nyní už má robot dostatek peněz pro zakoupení lístku na fotbal. Zařiďte, aby dojel na parkoviště před fotbalovým stadiónem, kde si může lístek v pokladně koupit.
        </p>
      </div>
    </div>

    <div class="topic">
     <div class="open">
        <h2 class="question"><strong>G - Nákup v supermarketu</strong></h2>
        <span class="faq-t"></span>
     </div>
     <div class="answer">
       <p>
         Je již pozdě odpoledne. Než ale bude moci robot vyrazit zpátky domů, je potřeba ještě zajet na nákup. Supermarket je na druhém konci města. Zařiďte, aby tam robot dojel co nejrychleji a co nejkratší cestou, protože provoz ve městě je nyní velmi hustý.
       </p>
     </div>
   </div>

   <div class="topic">
    <div class="open">
       <h2 class="question"><strong>H - Konečně domů</strong></h2>
       <span class="faq-t"></span>
    </div>
    <div class="answer">
      <p>
        Den byl velice náročný. Robot je již unavený, je tedy načase vyrazit zpátky domů. Zařiďte, aby robot ze supermarketu dojel bezpečně domů a zacouval do garáže.
      </p>
    </div>
  </div>

        </div>
      </section>

      <section role="region" class="section text-center bg-light-green">
        <div class="container">
          <h3>Zbyla Vám ještě chvilka času?</h3>
          <p>Vymyslete vlastní trasu městem a trasu naprogramujte.</p>
          <a href="" class="button">VYZKOUŠEJTE</a>
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
