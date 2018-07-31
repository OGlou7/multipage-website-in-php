<?php
  if(isset($_POST["button"])){
   @$gender = $_POST["gender"];
   @$prenom = $_POST["prenom"];
   @$nom = $_POST["nom"];
   @$objet = $_POST["objet"];
   @$message = $_POST['message'];
   @$document = $_POST["document"];
   @$format = $_POST['format'];
  }

//SANITIZE
  $prenom = $_POST['prenom'];
  $san_pren = filter_var($prenom, FILTER_SANITIZE_STRING);

  $nom = $_POST['nom'];
  $san_nom = filter_var($nom, FILTER_SANITIZE_STRING);

  $message = $_POST['prenom'];
  $san_mess = filter_var($message, FILTER_SANITIZE_STRING);





      // envoi d'une image via cette classe externe php upload


      // la fonction mail() de php étant trop basique, utilise une class externe pour mail


      // toujours pour l'envoi de l'email, utilise un serveur SMTP gratuit comme gmail (utilisez votre propre compte)


      // Validation :
      // limiter l'upload uniquement aux formats d'images les plus courants (jpg, jpeg, png, gif)
      // obliger le minimum pour pouvoir répondre : email + message

 ?>



 <!DOCTYPE html>
 <html lang="" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="./assets/style.css">
     <title></title>
   </head>
   <body>
     <!-- FORMULAIRE  -->
    <form class="" action="contact.php" method="post">
    <fieldset>
      <legend>CONTACT</legend>
      <input type="radio" name="gender" value="monsieur">Monsieur
      <input type="radio" name="gender" value="madame">Madame<br><br>
      Nom: <input type="text" name="nom"> <br><br>
      Prenom: <input type="text" name="prenom"><br><br>
      Objet: <select name="objet" size="1">
        <option value="information">Information</option>
        <option value="benevolat">Benevolat</option>
        <option value="donation">Donation</option>
        <option value="autre">Autre</option>
      </select><br><br>
      Message: <textarea name="message" rows="5" cols="40"></textarea><br><br>
      Documents: <input type="file" name="document"><br><br>
      Format de réponse souhaité <input type="radio" name="format" value="html">HTML
      <input type="radio" name="format" value="texte">Texte<br><br>
      <button type="submit" name="button">Contactez-nous</button> <br>

    </fieldset>
    </form>



       <!-- envoi d'une image via cette classe externe php upload -->

      <!-- la fonction mail() de php étant trop basique, utilise une class externe pour mail -->

      <!-- toujours pour l'envoi de l'email, utilise un serveur SMTP gratuit comme gmail (utilisez votre propre compte) -->


      <!-- Validation :
      limiter l'upload uniquement aux formats d'images les plus courants (jpg, jpeg, png, gif)
      obliger le minimum pour pouvoir répondre : email + message -->



     </form>















                                            <!-- DIVERS -->
          Infos utiles
          Cette section regroupe des informations utiles pour les personnes handicapées.

          Vous pouvez y trouver notamment :

          - les différents organismes actifs dans le secteur du handicap, qui se battent pour la défense des droits des personnes ayant une déficience et leurs sites internet qui regroupent toutes les informations pratiques

          - les différentes associations qui proposent des activités de loisirs et des activités de tourisme

          - un compte-rendu des essais de matériel réalisés avec un oeil critique et objectif

          - des interviews intéressantes de personnes concernées directement ou non par le secteur du handicap

          <!-- Access-I -->
          Access-I
          Access-I est une certification qui vous permettra de connaitre le niveau d’accessibilité d’un lieu, d’un événement ou d’une activité, en fonction de votre handicap.

          Access-i vous permet d’identifier, d’un seul coup d’œil, le niveau d’accessibilité d’un bâtiment, d’un site ou d’un événement par rapport à chaque réduction de mobilité.

          Chaque catégorie de personnes à mobilité réduite est identifiée par un pictogramme dont la couleur varie selon le niveau d’accessibilité de l’espace évalué.

          Si le pictogramme est vert, le site est accessible en autonomie.

          S’il est orange, le site est accessible avec un coup de main ponctuel.

          S’il est gris, le site n’est pas accessible de manière satisfaisante ou rien de spécifique n’est prévu.

          Des informations plus détaillées sont disponibles dans la fiche de chacune des destinations.

          Pour chaque fiche descriptive (d’un bâtiment ou d’un événement), un onglet spécifique pour chacune des catégories précise ces informations sous forme de points forts et de points faibles.

          Rendez vous sur www.access-i.be

<!-- Sites des administrations belges spécialisées -->
      Sites des administrations belges spécialisées
      AVIQ : L’Agence pour une Vie de Qualité -

      AVIQ

      Numéro vert : 0800/16061

      Cocof : Le Service PHARE [*Personne Handicapée Autonomie recherchée*] -

      Phare

      Tél. : 0800 82 03

      Het Vlaams Agentschap voor personen met een handicap -

      VAPH

      Tél. : 02 / 225 84 11

      La Direction Générale des Personnes Handicapées - DGPH (ex Vierge Noire)

      DGPH

      Contact Canter : 0800 / 987 99

      Finance Tower - boulevard du Jardin Botanique 50 - 1000 Bruxelles

      INAMI : Institut national d’assurance maladie-invalidité :

      INAMI

<!-- Associations spécialisées. -->
      Associations spécialisées.
      Collectif pour l’Accessibilité en Wallonie et à Bruxelles

      CAWaB

      L’association nationale pour le logement des personnes handicapées :

      ANLH

      Le site de la démystification du handicap :

      HORIZONS 2000

      1001 idées du monde du handicap

      Handilien

      Site d’information sur le handicap et l’autonomie

      Autonomia

      Altingo pour une meilleure accessibilité. Des tas d’idées, d’actions, de conseils .... Allez visiter le site de l’association

      ALTINGO

      (Anciennement GAMAH)

      Téléthon : l’association belge contre les maladies neuromusculaires qui organise le Téléthon en Belgique :

      ABMM

      L’annuaire de référence à consulter :

      GUIDE SOCIAL

      La Ligue nationale belge de la Sclérose en plaques :

      Ligue Sclérose en plaques

      EN FRANCE :

      Association des paralysés de France : notre association soeur en France.

      APF

      Le Groupe de liaison et d’Information Post-polio - GLIP, très actif en France.

      GLIP

<!-- ESSAIS MATERIELS -->
Nous ne pouvons pas nous consacrer à des bancs d’essais complets ni de publier tout ce qui existe sans en avoir fait la critique (positive comme négative). Vous trouverez donc dans cette page, les éléments du matériel que l’ABP aura réellement essayé dans l’intérêt de chacun...

Si vous pensez important que nous essayons un produit en particulier pour en faire une critique la plus objective possible, n’hésitez pas à nous contacter...

Tissu thermique
Tissu thermique
Lorsqu’une personne est fatiguée voire fatigable, lorsqu’on bouge peu, il est normal d’être plus sensible au froid. Nous avons testé un produit pour lutter contre le froid plus facilement.

Il est arrivé sur le marché belge quelques semaines avant 2018...

Il y a quelques mois, en discutant d’un produit n’ayant rien à voir avec le handicap, le fournisseur m’indiquait vouloir importer un produit extraordinaire qu’il avait découvert. Nous venons de le tester.

Il s’agit de vêtements ou sous-vêtements en tissus thermique spécifique et qui plus est, sans couture. Après quelques secondes déjà, la dizaine de personnes tout âge confondu qui l’ont porté, ressente une véritable impression de chaleur.
J’ai essayé un Tee-shirt plusieurs dizaines de minutes à l’extérieur par 5-6 degrés sans autre complément. Le froid ne se faisait pas ressentir.
Cet élément même si assez unique nous semblait un peu cher au départ. Vu son efficacité et l’absence de couture, il devrait tout de même correspondre à bien des personnes qu’elles soient simplement frileuses ou ne pouvant pas risquer un refroidissement ...ou des plis (F.L).

Ci-dessous une partie des infos reçues :

Les vêtements thermiques Silverskin garantissent un confort optimal dans toutes les conditions météorologiques.
Le sous-vêtement SilverSkin se distingue à la fois par les caractéristiques techniques du fil (hypoallergénique, antibactérien, inodore, transpirant et thermorégulateur) et par la technique de production, car les articles sont réalisés sans couture. Ces détails rendent les vêtements particulièrement adaptés à toutes les activités sportives, en particulier celles où la transpiration et les températures extérieures peuvent causer des pertes de chaleur importantes comme le ski, le vélo, la moto, la marche, le football, l’équitation, le jogging, etc. il est simplement porté comme sous-vêtement pour un usage quotidien.
La marque SilverSkin garantit la qualité et la sécurité des matériaux et l’ensemble de la chaîne de production est Made in Italy, de la production de fils au tissage et à l’emballage du vêtement fini.

Plus d’infos sur www.silverskin.eu
ou www.facebook.com/SilverskinBenelux/ (surtout en néérlandais pour l’instant)


<!-- INTERVIEWS -->
Durant des années, chaque membre de l’équipe a rencontré un grand nombre de personnes intéressantes concernées directement ou indirectement par le handicap. Chacun nous a apporté, par son expérience personnelle et/ou professionnelle, une vision nouvelle ou une approche différente de points de vue au sujet du secteur. Sans doute serait-il intéressant de vous parler de certaines de ces rencontres...

Nous placerons donc ici des interviews que nous réaliserons progressivement.

Nous vous invitons en attendant à suivre également les interviews réalisées par Justine Pecquet animatrice de "Cap ou pas Cap" (émission consacrée aux handicaps le jeudi de 16h à 17h sur Equinoxe Fm 100.1).

à suivre sur :
www.capoupascap1001.wordpress.com
www.facebook.com/capoupascapEquinoxefm
www.mixcloud.com/Cap_ou_Pas_Cap/

Blandine, une jeune femme (au)tour du monde
Blandine, une jeune femme (au)tour du monde
Interview de Blandine Even, jeune voyageuse autour du monde.
Blandine n’a pas la corpulence d’une baroudeuse et pourtant elle a choisi d’affronter seule les idées à priori...

Interview de Blandine Even, jeune voyageuse autour du monde.
Blandine n’a pas la corpulence d’une baroudeuse et pourtant elle a choisi d’affronter seule les idées à priori et les difficultés d’un tour du monde en chaise roulante. Elle n’a pas cherché à partir avec une assistance ou avec des amis alors que bon nombre d’entre-eux l’auraient suivie avec joie. Non, elle a préféré faire un bon bout de chemin seule avec sa chaise manuelle mais également avec une « cinquième roue motorisée » ...

Rencontre avec cette jeune femme hors du commun qui ouvre la porte d’un monde nouveau (F.L.). Interview novembre 2017

à suivre sur Facebook « Mille découvertes sur 4 roulettes »
www.facebook.com/1000decouvertes4roulettes

Blandine, tu en parlais depuis quelques temps de ce voyage mais quelle est la durée réelle consacrée à la préparation d’un tel voyage ?

Au total, les préparatifs auront duré près d’un an. J’ai mis environ 3 mois à construire mon itinéraire, en tenant compte des pays qui m’intéressaient, de leur accessibilité, de mon budget, et du climat sur place. 6 mois avant mon départ, j’ai commencé à réserver mes billets d’avion et les différents hébergements.
Lorsque je suis partie en septembre 2016, toutes mes réservations étaient bouclées jusque janvier 2017, date de mon arrivée en Australie pour un stage de 6 mois. Les deux derniers mois de voyage (de juillet à septembre 2017) ont été planifiés pendant mon séjour en Australie.

Combien de temps pensais-tu rester au départ et en fin de compte combien de temps es-tu restée ?

Je comptais partir de 10 à 18 mois, et mon voyage aura finalement duré un an !

Quelle a été ta plus belle surprise en matière d’accessibilité et à l’opposé ta plus grande déception ?

En matière d’accessibilité, ma plus belle surprise reste probablement Singapour. C’est de loin la ville (et le pays) la plus accessible que je connaisse. Là-bas, ils ne parlent pas d’accessibilité aux PMR mais de « Design universel », un concept selon lequel tout doit être conçu pour être accessible à tout le monde. Les transports en commun sont donc accessibles à tous sans devoir réserver une assistance à l’avance. Les trottoirs sont tous praticables en fauteuil roulant, et presque tous les bâtiments sont accessibles aux PMR, par l’entrée principale et non par une entrée « réservée » (et discriminatoire).

J’ai également été très agréablement surprise par l’accessibilité de nombreuses villes dans des pays qu’on considère souvent comme « moins développés », par exemple en Chine, au Chili et au Brésil.
Le choc fut d’autant plus grand lorsque je suis revenue à Bruxelles en septembre, et que je me suis rendue compte à quel point notre capitale était sous-développée en matière d’accessibilité… J’avais oublié que les trottoirs belges étaient si peu accessibles !

Ma plus grande déception est sans hésiter le Japon, où les transports en commun sont pratiquement 100% accessibles, mais où leur accès est limité à certains modèles de fauteuils roulants bien précis, et « enregistrés » par le gouvernement japonais. La politique d’accessibilité japonaise est malheureusement extrêmement discriminatoire… Avec mon fauteuil roulant, je pouvais monter à bord et descendre des trains sans assistance, et m’installer dans l’emplacement prévu à l’intérieur, mais mon fauteuil était apparemment « interdit » dans les trains japonais, et même dans les gares, pour une raison obscure que personne n’a jamais voulu m’expliquer…

As-tu changé ton planning en cours de parcours et pour quelles raisons ?
Est-ce qu’il t’est arrivé de vouloir tout abandonner durant ton parcours ?

Après ma première journée au Japon, j’ai failli quitter le pays dès le lendemain… Dès mon arrivée à l’aéroport d’Osaka, j’ai du me battre pendant 4h avec les employés de la gare, pour qu’ils me laissent prendre le train avec mon fauteuil roulant. En arrivant enfin à Kyoto, les propriétaires de l’hébergement que j’avais réservé sont venus me chercher à la gare, mais ont refusé que je séjourne chez eux, à cause de mon fauteuil ! Alors que j’avais communiqué avec eux par e-mail 3 mois plus tôt, et qu’ils étaient évidemment informés du fait que j’étais en fauteuil roulant… Après une heure de négociations (via un interprète de la gare), ils ont finalement accepté que je passe la nuit chez eux, mais à condition que je laisse mon fauteuil (électrique !) dehors pendant la nuit !! C’était évidemment hors de question…
Je me suis donc retrouvée à 23h, seule dans les rues de Kyoto, avec tous mes bagages, et sans savoir où j’allais passer la nuit…

Qu’est-ce qui t’a poussé à continuer ?

Déjà, quitter le Japon plus tôt m’aurait fait perdre énormément d’argent, vu que tous mes hébergements et billets de train étaient déjà réservés… Ensuite, je ne savais pas vraiment où aller, puisque mon visa chinois n’était plus valable, et que mon visa vietnamien ne démarrait que 3 semaines plus tard.
Finalement, je me suis dit que la suite allait probablement être plus tranquille, que beaucoup de gens aimeraient être à ma place, et que j’allais tout de même essayer de profiter de mon séjour au Japon. Je me suis accrochée à cette idée pendant les 3 semaines qui ont suivi, mais les difficultés pour me déplacer ont malheureusement continué jusqu’au dernier jour…

As-tu réfléchi avant ton voyage à l’impact qu’un tel exemple pourrait avoir sur la vie d’autres personnes concernées ?

J’ignore si mon voyage a pu avoir un impact sur la vie de quiconque (à part la mienne, bien sûr !), mais j’espère avoir réussi, au travers de mes récits, à montrer qu’un handicap n’empêche de voyager et de réaliser ses rêves. Voyager en fauteuil roulant n’est pas toujours simple, mais avec un minimum de préparation, c’est possible !

Depuis que j’ai créé mon blog (il y a trois ans), je reçois souvent des messages de personnes qui me demandent des conseils pour organiser leur voyage, des informations sur certaines destinations, ou qui veulent simplement me remercier de leur avoir (re)donné l’envie de voyager. Ça me fait super plaisir, et ça m’encourage à continuer !

Quel est l’accueil le plus chaleureux que tu as perçu durant ton ou tes séjours ?

À part au Japon, j’ai toujours été extrêmement bien accueillie. Même quand on ne comprend pas la langue du pays et que les gens ne parlent pas anglais, il suffit souvent d’un sourire pour ouvrir toutes les portes !
Je donnerais tout de même une mention spéciale pour l’accueil polynésien, où l’on se sent tout de suite comme un membre de la famille !

Quelle fut ta plus belle rencontre ?

En Chine, où de parfaits inconnus (rencontrés le tout premier jour de mon voyage) m’ont invitée au restaurant, et m’ont emmenée quelques jours plus tard sur la Grande muraille ! L’une des plus belles expériences de ce voyage…

Quel sera ton prochain voyage ?

Aucune idée ! Pour le moment, j’ai envie de me poser un peu, d’avoir enfin mon vrai « chez moi », de prendre le temps d’écrire et de refaire quelques économies…
Je ne ferai sans doute plus de grand voyage avant quelques années, mais il y a encore plein d’endroits en Europe que je rêve de découvrir : la Norvège, Rome, l’Islande ou encore la Grèce…

Comment vois-tu ton avenir aujourd’hui après quelques semaines revenue sur la terre belge ?

J’ai plein de projets dans la tête, mais je ne sais pas encore par où commencer ! Mettre à jour mon blog, écrire un livre, apprendre l’espagnol… et peut-être créer une association ou une agence qui organiserait des voyages accessibles ?

Merci pour tes réponses et ton temps…

Merci à toi

<!-- LOISIRS -->
LOISIRS
L’ABP organise chaque année des camps de vacances pour des personnes handicapées moteur adultes, membres de l’association.

Les Centres provinciaux de Boussu et Rixensart, quant à eux, organisent mensuellement des activités socio-culturelles.

Pour plus de renseignements : surfez sur la rubrique "Activités & Loisirs" .

Par ailleurs, nous vous renseignons, ci-dessous, quelques associations proposant des loisirs adaptés :

- HORIZON 2000 à Charleroi tél. : 071/31.27.19

- DECALAGE  à Woluwe Saint-Pierre :
Tel : 02 852 74 70
Gsm : 0489 550 309
Mail : info@decalage.be
Site web : www.decalage.be

- IDEJI
 à Bruxelles : activités et loisirs pour PH : tél. : 02/772.70.20

- MILLE PATTES  : à Verviers tél. : 087/35.20.06

        <!-- TOURISME -->
        <!-- Bruxelles pour tous -->
        Bruxelles pour tous : le guide touristique pour les voyageurs à mobilité réduite
        Une nouvelle version du guide "Bruxelles pour tous" vient d’être annoncée, le 4 mai 2010, par le Ministre Christophe DOULKERIDIS.

        Conçu et développé par l’équipe de Miguel GEREZ, on y trouve plein de renseignements sur les lieux accessibles à Bruxelles : hôtels, restaurants, cinémas, musées, salles de concert, moyens de transport, etc.

        Pour avoir toujours la meilleure et la plus récente information, allez aussi visiter le site Bruxelles pour tous .

        Vous y trouverez des informations utiles et indispensables en français, en anglais et en néerlandais.

        <!-- Tourisme adapté -->
        Tourisme adapté
        Envie de randonnées en Joëlette. ? Allez voir
        HANDI-RANDO

        Envies de voyage : allez voir
        DECALAGE
        il y a plein de suggestions !

        Vous voulez visiter Bruxelles et avez des problèmes de mobilité ? Allez consulter
        VOIR ET DIRE BRUXELLES

        Voici une agence de voyage spécialisée en
        Tourisme accessible
        (site multilingue).


                          <!-- NOUS SOUTENIR -->
            Nous soutenir
            N’hésitez pas à nous soutenir en devenantmembre et/ou bénévole. Vous aurez ainsi accès aux divers services et activités de l’association.
            Vous pouvez également nous soutenir en faisant un don à l’association.

<!-- Devenir membre -->
            Devenir membre
            Afin de bénéficier des services de l’ABP, veuillez payer votre cotisation annuelle de 13 € sur le compte de l’ABP : BE48 7755 9201 1027

            Vous trouverez en cliquant ici le formulaire d’inscription reprenant toutes les informations dont nous avons besoin.

            Les services principaux de l’ABP sont :

            Prêt de matériel et voiture partagée
            Activités mensuelles culturelles et divertissantes
            Camps de vacances
            Activités de l’ABP Polio
            Activités mensuelles à Boussu et Rixensart
            Magazine semestriel
            Newsletter électronique
            Suivi des démarches administratives
            Informations Sociales

  <!-- Devenir bénévole -->
            Devenir bénévole
Les activités mensuelles et les camps de vacances reposent sur l’aide bénévoles des personnes responsables mais également des aidants. Ces jeunes et moins jeunes apportent leur aide aux personnes handicapées et leur permettent de vivre des moments de détente et de rencontres, ainsi que des activités qui sortent parfois de l’ordinaire !

Ces rencontres apportent également beaucoup aux aidants bénévoles. Une ouverture sur le handicap, des rencontres incroyables et des moments de bonheur intenses.

Vous aussi vous pouvez participer aux activités de l’ABP en tant que bénévole.

Pour les activités du samedi, contactez

Claudine Rausens pour Rixensart
Michel Delahaut pour Boussu

Pour les camps de vacances, contactez :

Christel Dejaegere pour Bruxelles (juillet)
Delphine Langenaegen pour Marbehan (aout)
Anne Verschueren pour Oostduinkerke (septembre)


<!-- Don -->
Pour tout don supérieur à 40€ (accumulés sur une année), bénéficiez d’une déduction fiscale de 45% de la valeur du don

Don à l’ABP : BE48 7755 9201 1027
Don aux CVH : BE23 7775 9295 2891

Ne mentionnez rien d’autre que "DON" en communication de votre versement.


<!-- Legs -->
Grâce à quelques legs importants, l’ABP a pu voir ses activités se pérenniser dans le temps, et ce depuis 75 ans !

Si vous désirez vous aussi, continuer à soutenir les activités mensuelles et des camps de vacances à plus long terme, pensez à l’ABP au moment de rédiger votre testament.

L’ABP est habilitée à recevoir des legs et des legs en duo !

Plus d’infos sur le legs en duo.


<!-- droit de donateurs -->
<!-- Communication des comptes -->
Communication des comptes
L’Association belge des paralysés – ABP adhère au Code éthique de l’AERF.

Vous avez un droit à l’information.

Ceci implique que les donateurs, collaborateurs et employés sont informés au moins annuellement de l’utilisation des fonds récoltés.

Les bilans et comptes de résultat détaillés peuvent également être consultés au siège de l’association.


<!-- Taux pour la déduction fiscale des dons aux associations -->
Taux pour la déduction fiscale des dons aux associations
La loi du 13 décembre 2012 portant des dispositions fiscales et financière a modifié, à partir de l’exercice 2013 (année de revenus 2012), les dispositions concernant les libéralités.

"Les dons ne donnent désormais plus droit à une déduction de l’ensemble des revenus nets, mais à une réduction d’impôt de 45% des libéralités faites réellement"

En clair, jusqu’à aujourd’hui, votre avantage fiscal était fonction de vos revenus imposables. Cela pouvait aller de 20 à 55%. Depuis peu, cette déduction fiscale a pris la forme d’une réduction forfaitaire de 45% sur le montant total de vos dons, à partir de 40€ par an et par organisation.

Cela veut dire qu’un don de 40€ ne coûtera que 22€, avec le même avantage fiscal pour chacun.

A noter que cette mesure, adoptée par le Gouvernement en décembre 2012, s’applique déjà pour les dons effectués en 2012 et, donc, à la déclaration fiscale 2013


<!-- AGENDA -->


<!-- SUIVEZ-NOUS -->

   </body>
 </html>
