##Nom du projet
    eLEGO

##Type de projet  
    Boutique e-commerce avec développement spécifique

##Version du projet
    0.1 (Draft)

##Date de création
    11 janvier 2016

##Date de dernière mise à jour
    13 janvier 2016

##Auteurs 
    (cf. Participants)

##Description du projet 
    Construire des figurines LEGO™ personnalisées que l’on peut ensuite acheter sur une boutique 
    e-commerce en ligne possédant un système d’assistance et de SAV ainsi qu’un module d’import/export 
    de données.

##Participants    
    * Cyrille GARCIA (CG)
    * Dylan BOURRELI (DB)
    * Mélina MARTINEZ (MM)
    * Alexandre OMELJANCZYK (AO)

##Répartition des rôles dans le projet    
    CG => Système d’assistance et de SAV (WordPress)
    DB => Boutique e-commerce (WordPress / WooCommerce)
    MM => Construction et composition de modèles de figurines LEGO™ en développement spécifique
    AO => Module d’import / export en développement spécifique et gestion documentaire.

##Contexte Technologique  
    Sont initialement prévues pour ce projet les technologies suivantes:
    * HTML5/CSS3/JS
    * CMS WordPress + Plugin WooCommerce + autres plugins et thèmes
    * PHP5 en POO / MVC
    * Framework W
    * API Paypal et/ou Google Map
    * GitHub & Git
    * Bases de données sous MySQL 5.4

##Description détaillée du projet - Branches
    Le projet va être scindé en 4 branches distinctes :
    * eLEGO Production
    * eLEGO Acceptance
    * eLEGO Test
    * eLEGO Développement

##Branches - eLEGO Production
    La branche eLEGO Production représente la finalité du projet, lorsque les deux autres 
    branches auront atteint un stade de maturité suffisant pour faire une mise en production
    du site complet. Un premier commit est prévu avant la fin du projet pour valider la 
    phase 1 (cf. Déroulement du projet) et il est possible qu'un deuxième commit soit au 
    programme. De manière générale, cette branche proposera des versions finalisées du projet.

##Branches - eLEGO Acceptance
    La branche eLEGO Acceptance est une branche spécifique dédiée à la réalisation sous 
    WordPress de la plupart des fonctionnalités du projet. Cette branche va surtout être 
    implémentée en phase 1 du projet (cf. Déroulement du projet) jusqu'au premier commit 
    de la branche eLEGO Production. Lorsque ce commit aura été effectué, cette branche 
    sera mise de côté jusqu'à la fin du projet. Le but de cette branche est uniquement 
    de permettre la réalisation rapide du projet à travers le CMS WordPress et différents 
    plugins ; une fois la branche production mise en route, les éléments et fonctionnalités 
    de cette branche vont peu à peu être remplacés par du développement spécifique.

##Branches - eLEGO Test
    La branche eLEGO Test sert de jonction entre les branches Acceptance et Développement.
    C'est dans cette branche (et uniquement dans celle-ci) que seront effectués les 
    opérations de Merging entre les branches. Les différents tests de fonctionnement seront 
    ensuite effectués sur cette branche ainsi que le débogage jusqu'à l'obtention d'une 
    version "stabilisée" et fonctionnelle qui sera poussée en production après validation 
    des fonctionnalités décrites dans la partie ##Fonctionnalités.

##Branches - eLEGO Développement
    La branche eLEGO Développement est une branche du projet qui propose du contenu développé
    spécifiquement pour le projet. Au départ, la gestion des produits finis seule sera
    développée sur cette branche jusqu'à la publication de la première version de production.
    Ensuite, des développements complémentaires seront effectués sur cette branche afin de
    remplacer petit à petit les fonctionnalités de WordPress pour ne laisser que du
    développement spécifique.

##Déroulement du projet - 3 phases
    Le projet va s'articuler autour de trois grandes phases distinctes ; la première concerne
    le prototypage de l'application web finale avec le CMS WordPress et différents plugins.
    La seconde va permettre de remplacer (ou étendre) certaines fonctionnalités du prototype
    et la troisième (optionnelle) va concerner l'optimisation de l'application et sa validation
    par rapport à différents référentiels (W3C, OpQuast, AccessiWeb...) afin d'en valider
    la qualité.

##Déroulement du projet - Phase 1 - Acceptance
    Durant la phase 1, l'équipe qui va travailler sur la branche Acceptance devra réaliser
    les opérations suivantes :
    * Mettre en place WordPress
    * Créer un thème enfant
    * Implémenter, configurer et paramétrer WooCommerce
    * Implémenter, configurer et paramétrer bbPress (ou autre)
    * Préparer l’interconnexion avec les éléments du développement (pages de modèles)

##Déroulement du projet - Phase 1 - Développement
    Durant la phase 1, l'équipe qui va travailler sur la branche Développement devra réaliser
    les opérations suivantes :
    * Créer une base de données pour les pièces
    * Créer l’application web permettant de faire ses propres figurines
        * Sélectionner les pièces
        * Enregistrer les configurations
    * Préparer l’interconnexion avec WooCommerce

##Déroulement du projet - Phase 1 - Test + Production
    Les deux équipes mettent en commun les travaux dans chacune des branches Acceptance 
    et Développement et font des "merges" sur la branche Test. Lorsqu'une opération de 
    mise en commun est faite, l'équipe qui a fait l'opération est en charge du débogage 
    et doit consulter l'autre équipe en cas de conflits lors de cette phase. Lorsque 
    l'opération de mise en commun a été faite, les fonctionnalités ajoutées sont vérifiées
    par l'autre équipe à l'aide d'un jeu d'essai créé par l'équipe qui a mis en place la 
    fonctionnalité. Lorsque toutes les fonctionnalités initiales ont été implémentées et 
    que leur fonctionnement et comportement a été vérifié, le contenu de la branche Test
    est déployé dans la branche Production.

##Déroulement du projet - Phase 2 - Développement + Test + Production
    Une fois l'application "livrée" dans la branche Production, la phase 1 est considérée
    comme terminée et la phase 2 peut alors commencer. La phase 2 consiste à redévelopper
    tout ou partie des fonctionnalités implémentées par WordPress et les différents plugins
    utilisés dans le but de s'affranchir à terme du CMS. Toutefois, le temps alloué au projet
    ne permettra sans doute pas de remplacer entièrement le CMS. 
    Pour cette raison, lorsqu'une fonctionnalité sera développée et validée, elle sera
    automatiquement "mergée" dans la branche Test. Celle-ci accueillera tous les commit de
    l'équipe qui se sera réparti les tâches au début de la phase 2. La veille du dernier jour
    de projet, les fonctionnalités qui n'auront pas été validées ou qui n'auraient pas été
    terminées seront abandonnées et une dernière série de tests sera effectuée avant que le
    contenu de la branche Test ne soit poussé dans la branche Production.

##Déroulement du projet - Phase 3 - Test + Production
    La phase 3 du projet commence et se termine quasiment en même temps que la phase 2. Durant
    cette période, un ou plusieurs membres de l'équipe vont vérifier des listes de points par
    fonctionnalité correspondant à différents référentiels, afin d'offrir une qualité de 
    développement optimale. Toutefois, cette partie n'ayant pas un caractère obligatoire 
    pour la réussite du projet, elle sera traitée en mode "On best effort" par l'équipe 
    selon le degré d'avancement du projet. La Phase 3 se termine avec la mise en production
    finale du projet à la fin de la phase 2.

##Fonctionnalités
    Voici une liste des fonctionnalités attendues dans le projet (exigences fonctionnelles)
    * Les internautes doivent pouvoir se connecter
    * Les internautes peuvent accéder aux pages principales du site (Accueil, Présentation, Contact...)
    * Les internautes peuvent passer des commandes sur le site sans avoir besoin d'être enregistrés
    * Les internautes peuvent acheter leurs compositions de figurines mais elles ne sont pas enregistrées
    * Les utilisateurs bénéficient d'un espace personnel
    * Les utilisateurs peuvent vérifier leurs commandes passées
    * Les utilisateurs peuvent enregister leurs compositions de figurines, même sans passer d'achat
    * Les utilisateurs ont accès à un espace de vente et de service dédié (Forum, FAQ, SAV...)
    * Les utilisateurs et les internautes ont à tout moment accès aux Mentions légales, CGV, CGU...
    * Les administrateurs peuvent importer des données provenant d'un ou plusieurs fournisseurs
    * Les administrateurs peuvent faire des statistiques et du reporting 
    (pièces les plus vendues, nombre de clients...)
    * Les administrateurs peuvent gérer toutes les parties du site
    
    Le projet comporte également des exigences non-fonctionnelles 
    * Le code doit respecter une convention de nommage (cf. ##Qualité du code)
    * Le code doit être correctement indenté et suffisamment commenté
    * Les pages doivent être accessibles et ne pas comporter d'erreur
    * La page d'erreur doit être personnalisée (404)
    * Le site ne doit pas être parcouru (.htaccess)
    * Le site doit comporter un sitemap
    * Le site doit se conformer à une charte graphique par défaut

##Qualité du code
    Le développement de chaque partie du site devra se conformer aux règles suivantes :
    * Les variables, fonctions, tables et autres éléments du code commencent par des 
    minuscules ($test, $display, getID()...)
    * Les noms composites sont explicites et chaque nouvel élément commence par une 
    majuscule (getIdFromTable(), $myAddress, $displayView...)
    * Chaque élément HTML est défini par 2 à 4 lettres qui le représentent :
        - input type="text" => txt
        - input type="password" => pwd
        - input type="number" => nb
        - input type="mail" => mail
        - input type="checkbox" => chk
        - input type="hidden" => hid
        - input type="button" => btn
        - input type="radio" => rd || rad
        - select => slc || slt
        - textarea => txar || txtr
        - button => btn
        - ...
    Exemple d'utilisation : Soit un "button" que l'on souhaite nommer "Envoyer". 
    L'attribut sera alors [name="btnEnvoyer"]. De la même façon si on a un input de type
    text que l'on souhaite nommer "Firstname", l'attribut sera alors [name="txtFirstname"].
    L'avantage de cette notation est qu'elle permet de savoir juste en regardant le nom
    d'une variable quel type de données est attendu ! Si on a par exemple une variable
    $nbZergling, on sait immédiatement que l'on va devoir traiter un nombre et donc même
    si cette notation peut paraitre contraignante, elle permet de gagner du temps !
    
    * Chaque table est nommée tb[nom de la table]_[Fonction de la table]. La 
    [Fonction de la table] n’est pas systématique ni obligatoire mais elle permet d’identifier 
    les tables possédants une clef étrangère.
    * Toutes les clefs primaires de toutes les tables se nomment ID_[abc]. [abc] est une 
    représentation en trois ou quatre lettres maximum du nom complet de la table.
    * Tous les champs de la table commencent par [abc]NomDuChamp. [abc] correspond à ce qui 
    a été défini dans la clef primaire. De cette façon, on évite au maximum les homonymies 
    entres les champs de différentes tables et on a une lecture plus efficace du code 
    lorsqu’on fait des requêtes SQL. Note : Il est possible d’ajouter _[fonction] 
    ou _[option] pour plus de précisions après [abc]NomDuChamp. 
    * On retourne le nom de la clef en [abc]_ID pour bien identifier qu’il s’agit d’une 
    clef étrangère dans la table.
    
    Les règles concernant la gestion des éléments de la base de données s'appliquent à un 
    développement spécifique et peuvent ne pas s'appliquer à un CMS comme WordPress utilisant
    une base de données ; En règle générale, lorsqu'on a un CMS et du développement spécifique,
    il convient de faire deux bases de données séparées, tout comme il convient de faire une 
    base de données pour chaque branche (Production, Acceptance, Test, Développement).
    
    * Le code doit être correctement indenté et suffisamment commenté, quel que soit le 
    fichier (HTML, PHP, CSS, JAVASCRIPT). Cette règle ne s'applique pas dans le cadre de 
    l'utilisation de SASS pour générer du CSS.
    * Une structure de fichier doit être mise en place en début de projet pour accueillir 
    l'ensemble du projet.

