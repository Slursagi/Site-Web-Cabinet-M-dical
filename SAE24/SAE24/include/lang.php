<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = 'fr';
if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}

$t = array();
//Anglais
if ($lang === 'en') {
    $t = array(
	
	//Header
        "accueil" => "Home",
        "equipe" => "Team",
        "livrables" => "Deliverables",
        "telephonie" => "Phone plan",
        "problemes" => "Issues",
        "login" => "Login",
        "logout" => "Logout",
        "espace_prive" => "Private space",
	
	//SAE24.php
        "welcome" => "Welcome to our medical cabinet",
        "intro" => "This site presents the work carried out for the medical cabinet: Setting up an IT solution for this medical office.",
        "content_title" => "Website content",
        "team" => "Team",
        "team_desc" => "Presentation of members and role distribution",
        "deliverables" => "Deliverables",
        "deliverables_desc" => "Access to documents produced during the project",
        "phone_plan" => "Phone plan",
        "phone_plan_desc" => "Internal IP numbering",
        "problems" => "Issues",
        "problems_desc" => "Difficulties encountered and solutions",
        "private_space" => "Private space",
        "private_space_desc" => "Restricted access with authentication",
	"title" => "Medical Cabinet",
	
	//equipe.php
        "team_page_title" => "Our Team",
        "team_main_title" => "Task Distribution - SAE 24",
        "project_leader" => "project leader",
        "task_gaetan_1" => "Deployment of the ESXi hypervisor",
        "task_gaetan_2" => "Creation and configuration of the Ubuntu Linux VM",
        "task_gaetan_3" => "Writing deliverables (plan, logins, Gantt, PDF docs)",
        "task_gaetan_4" => "Organizing the team's work",
        "task_nael_1" => "Installation and configuration of Windows Server 2019 (domain controller)",
        "task_nael_2" => "Development of the PHP website (public and private sections)",
        "task_nael_3" => "Setup of the Wi-Fi access point",
        "task_mamadou_1" => "Intrasite network configuration",
        "task_mamadou_2" => "Implementation of IP routing, addressing plan, and interconnections",
        "task_ilian_1" => "Implementation of IP telephony (ToIP) with Asterisk",
        "task_ilian_2" => "Configuration of phones and dial plan",
	
	//livrable.php
        "deliverables_page_title" => "Deliverables",
        "deliverables_main_title" => "SAE24 Deliverables",
        "intro_page" => "Project presentation",
        "see_intro" => "View intro page",
        "team_presentation" => "Team breakdown",
        "see_presentation" => "View presentation",
        "network_plan" => "Addressing / network plan",
        "plan_file" => "Plan file",
        "numbers_file" => "Number file",
        "test_results" => "Test results (ping, sip)",
        "network_pings" => "Network pings",
        "vm_test_results" => "Test results (VM pings)",
        "vm_pings" => "VM pings",
        "gantt_chart" => "Gantt chart",
        "github" => "Website GitHub",
        "self_eval" => "Self-assessments",
        "self_eval_file" => "Self-assessment file",
        "poc_title" => "Proof of Concept Guide",
        "poc_text" => "Guide",
	
	//telephonie.php
        "telephony_title" => "SAE24 Telephony System",
        "asterisk_solution" => "Chosen solution: Asterisk",
        "asterisk_description" => "The Linux server hosts the Asterisk service, an open-source IPBX allowing IP telephony management. It allows configuration of internal extensions, transfers, voicemails, and custom call scenarios.",
        "devices_used" => "Devices used",
        "softphones" => "Softphones",
        "softphones_desc" => "3CX used to simulate internal extensions from PCs",
        "fon175" => "FON-175 IP Phones",
        "fon175_desc" => "Used for physical phones",
        "aastra" => "Aastra 320w mobile",
        "aastra_desc" => "Wi-Fi phone configured on the network",
	"cisco" => "Cisco SPA508G VoIP phone",
        "cisco_desc" => "used as a fixed extension in the internal network",
        "dial_plan" => "Dial plan",
        "dial_plan_intro" => "Each extension is identified by an internal number:",
        "secretary" => "Secretary",
        "dentist" => "Dentist",
        "kines" => "Physiotherapists",
        "doctor" => "Doctor",
        "wifi_mobile" => "Wi-Fi Mobile",
        "tests_done" => "Tests performed",
        "sip_commands1" => "Commands <code>sip show peers</code> checked in Asterisk",
	"sip_commands2" => "Commands <code>sip show users</code> checked in Asterisk",	
        "internal_calls" => "Internal calls tested between softphones",
        "scenarios" => "Basic call scenarios tested (call to secretary, welcome message)",

        //login.php
        "login_title" => "Administrator Login",
        "login_label" => "Login:",
        "password_label" => "Password:",
        "submit_login" => "Log in",
        "incorrect_credentials" => "Incorrect credentials.",

        //problemes.php
        "issues_title" => "Issues Encountered - SAE24",
        "gaetan_section" => "Gaétan Wesemann - Project Manager",
        "nael_section" => "Nael Zerroukhi - Development & Windows Server",
        "mamadou_section" => "Mamadou Bah - Networking & Routing",
        "ilian_section" => "Ilian Bouffersaoui - IP Telephony (ToIP)",
	"problems_main_title" => "Issues Encountered - SAE24",
	"problem" => "Problem",
	"solution" => "Solution",
	"problems_page_title" => "Problemes and solution",

	"gaetan_problem_1" => "Difficulty getting ESXi to work on some machines due to BIOS/UEFI compatibility.",
	"gaetan_solution_1" => "Changed machine + enabled virtualization in BIOS.",
	"gaetan_problem_2" => "Team organization was difficult at the start of the project.",
	"gaetan_solution_2" => "Set up a Trello board quickly + planning via Gantt chart.",

	"nael_problem_1" => "Connection errors between PHP site and MySQL database via phpMyAdmin.",
	"nael_solution_1" => "Checked server IP, opened port 3306, granted MySQL privileges + updated `db.php`.",
	"nael_problem_2" => "PHP session not maintained across pages after login.",
	"nael_solution_2" => "Reviewed `session_start()` and standardized `include` structure.",
	"nael_problem_3" => "Error installing roles via Server Manager on Windows Server.",
	"nael_solution_3" => "Create the AD DS and configure domain.",

	"mamadou_problem_1" => "IP addressing conflicts between VLANs on Cisco switches.",
	"mamadou_solution_1" => "Created clear addressing plan + trunk configuration with `dot1q`.",
	"mamadou_problem_2" => "Inter-VLAN routing unstable with DHCP.",
	"mamadou_solution_2" => "Added `ip helper-address` + fixed DHCP configuration.",

	"ilian_problem_1" => "Difficulty registering IP phones with Asterisk server.",
	"ilian_solution_1" => "Checked SIP ports + config files `sip.conf` and `extensions.conf`.",
	"ilian_problem_2" => "Internal calls between softphones failed.",
	"ilian_solution_2" => "Used `sip show peers` for diagnostics + restarted Asterisk service.",

	//private.php
	"private_space_title" => "Private space",
	"deliverables_section" => "Deliverables",
	"deliverable_pdf" => "View final deliverable (PDF)",
	"network_config" => "View addressing plan",
	"test_screenshots" => "View test screenshots",
	"logins_section" => "Logins",
	"login_file" => "Logins file",
	"test_results_section" => "Test results",
	"test_php_mysql" => "PHP ↔ MySQL connection working",
	"test_telephony" => "Internal calls functional with Asterisk",
	"test_dns_dhcp" => "DHCP + DNS server successfully configured",
	"test_dude" => "Active monitoring via The Dude",
	"task_distribution_section" => "Task distribution",
	"diagrams_section" => "Diagrams",
	"diagram_phone" => "Phone plan",
	"diagram_network" => "Network plan",
	"diagram_gantt" => "Gantt diagram",
	"selfeval_section" => "Self-evaluations",
	"selfeval_pdf" => "Self-evaluation file",
	"eval_pdf" => "Cross-evaluation file",
	"issues_section" => "Issues encountered",
	"issue_php_mysql" => "Connection issue between site and MySQL resolved",
	"issue_sessions" => "PHP session now maintained across pages",
	"issue_redirect" => "Successful redirection after login implemented",
	"summary_section" => "Summary",
	"summary_text" => "All services have been successfully configured and meet the project's expectations.",
	"prob+solu" => "Problemes and solution",
	"probtitre" => "Heres the differents problemes and solution",


    );
} 
//Français
else {
    $t = array(

	//header
        "accueil" => "Accueil",
        "equipe" => "Équipe",
        "livrables" => "Livrables",
        "telephonie" => "Téléphonie",
        "problemes" => "Problèmes",
        "login" => "Connexion",
        "logout" => "Déconnexion",
        "espace_prive" => "Espace privé",

	//SAE24.php
        "welcome" => "Bienvenue sur le site du cabinet médical",
        "intro" => "Ce site présente les travaux réalisés dans le cadre du cabinet médical : Mise en place d’une solution informatique pour un cabinet médical.",
        "content_title" => "Contenu du site",
        "team" => "Équipe",
        "team_desc" => "Présentation des membres et répartition des rôles",
        "deliverables" => "Livrables",
        "deliverables_desc" => "Accès aux documents produits pendant le projet",
        "phone_plan" => "Plan de téléphonie",
        "phone_plan_desc" => "Numérotation IP interne",
        "problems" => "Problèmes rencontrés",
        "problems_desc" => "Difficultés et solutions apportées",
        "private_space" => "Espace privé",
        "private_space_desc" => "Accès restreint avec authentification",
	"title" => "Cabinet Médical",

	//equipe.php
        "team_page_title" => "Notre équipe",
        "team_main_title" => "Répartition des tâches - SAE 24",
        "project_leader" => "chef de projet",
        "task_gaetan_1" => "Mise en place de l'hyperviseur ESXi",
        "task_gaetan_2" => "Création et configuration de la VM Ubuntu Linux",
        "task_gaetan_3" => "Rédaction des livrables (plan, logins, Gantt, docs PDF)",
        "task_gaetan_4" => "Organisation du travail au sein de l'équipe",
        "task_nael_1" => "Installation et configuration de Windows Server 2019 (contrôleur de domaine)",
        "task_nael_2" => "Développement du site web en PHP (partie publique et privée)",
        "task_nael_3" => "Mise en place du point d'accès Wi-Fi",
        "task_mamadou_1" => "Configuration réseau intrasite",
        "task_mamadou_2" => "Mise en œuvre du routage IP, du plan d'adressage, et des interconnexions",
        "task_ilian_1" => "Mise en œuvre de la téléphonie IP (ToIP) avec Asterisk",
        "task_ilian_2" => "Configuration des postes téléphoniques et du plan de numérotation",
	
	//livrable.php
        "deliverables_page_title" => "Livrables",
        "deliverables_main_title" => "Livrables de la SAÉ24",
        "intro_page" => "Présentation de la SAÉ",
        "see_intro" => "Voir page d'intro",
        "team_presentation" => "Répartition de l’équipe",
        "see_presentation" => "Voir la présentation",
        "network_plan" => "Plan d’adressage / réseau",
        "plan_file" => "Fichier du plan",
        "numbers_file" => "Fichier des numéros",
        "test_results" => "Résultats tests (ping, sip)",
        "network_pings" => "Pings réseau",
        "vm_test_results" => "Résultats tests (ping VM)",
        "vm_pings" => "Pings VM",
        "gantt_chart" => "Diagramme de Gantt",
        "github" => "GitHub du site",
        "self_eval" => "Autoévaluations",
        "self_eval_file" => "Fichier d'auto évaluation",
        "poc_title" => "Mode d’emploi de la preuve de concept",
        "poc_text" => "Guide",

	//telephonie.php
        "telephony_title" => "Système de téléphonie - SAÉ24",
        "asterisk_solution" => "Solution choisie : Asterisk",
        "asterisk_description" => "Le serveur Linux héberge le service Asterisk, un IPBX open-source permettant la gestion de la téléphonie sur IP. Il permet de configurer des postes internes, des transferts, des messages vocaux, et des scénarios personnalisés.",
        "devices_used" => "Appareils utilisés",
        "softphones" => "Softphones",
        "softphones_desc" => "3CX utilisés pour simuler les postes internes depuis les PC",
        "fon175" => "Téléphones IP FON-175",
        "fon175_desc" => "utilisés pour les postes physiques",
        "aastra" => "Mobile Aastra 320w",
        "aastra_desc" => "téléphone Wi-Fi configuré sur le réseau",
	"cisco" => "Cisco SPA508G téléphone VoIP",
        "cisco_desc" => "utilisé comme poste fixe dans le réseau interne",
        "dial_plan" => "Plan de numérotation",
        "dial_plan_intro" => "Chaque poste est identifié par un numéro interne :",
        "secretary" => "Secrétaire",
        "dentist" => "Dentiste",
        "kines" => "Kinés",
        "doctor" => "Médecin",
        "wifi_mobile" => "Mobile Wi-Fi",
        "tests_done" => "Tests réalisés",
        "sip_commands1" => "Commandes <code>sip show peers</code> vérifiées dans Asterisk",
	"sip_commands2" => "Commandes <code>sip show users</code> vérifiées dans Asterisk",
        "internal_calls" => "Appels internes testés entre softphones",
        "scenarios" => "Fonctionnement des scénarios simples (appel secrétaire, message d'accueil)",

        //login.php
        "login_title" => "Connexion administrateur",
        "login_label" => "Identifiant :",
        "password_label" => "Mot de passe :",
        "submit_login" => "Se connecter",
        "incorrect_credentials" => "Identifiants incorrects.",

        //problemes.php
        "issues_title" => "Problèmes rencontrés - SAÉ24",
        "gaetan_section" => "Gaétan Wesemann - Chef de projet",
        "nael_section" => "Nael Zerroukhi - Développement & Windows Server",
        "mamadou_section" => "Mamadou Bah - Réseau et Routage",
        "ilian_section" => "Ilian Bouffersaoui - Téléphonie IP (ToIP)",
	"problems_main_title" => "Problèmes rencontrés - SAÉ24",
	"problem" => "Problème",
	"solution" => "Solution",
	"problems_page_title" => "Problème et solution",

	"gaetan_problem_1" => "Difficulté à faire fonctionner ESXi sur certains postes avec compatibilité BIOS/UEFI.",
	"gaetan_solution_1" => "Changement de machine + activation de la virtualisation dans le BIOS.",
	"gaetan_problem_2" => "Organisation difficile de l’équipe au début du projet.",
	"gaetan_solution_2" => "Mise en place rapide d’un tableau Trello + planification via Gantt.",

	"nael_problem_1" => "Erreurs de connexion entre le site PHP et la base de données MySQL sous phpMyAdmin.",
	"nael_solution_1" => "Vérification IP du serveur, ouverture du port 3306, configuration des droits MySQL + `db.php`.",
	"nael_problem_2" => "Session PHP non conservée entre les pages après la connexion.",
	"nael_solution_2" => "Révision du `session_start()` et des `include`.",
	"nael_problem_3" => "Erreur lors de l'installation de rôles sur Windows Server.",
	"nael_solution_3" => "Mettre l'AD DS et configurer le domaine.",

	"mamadou_problem_1" => "Conflits d'adressage IP entre les VLANs sur les switchs Cisco.",
	"mamadou_solution_1" => "Plan d’adressage clair + configuration des trunks avec `dot1q`.",
	"mamadou_problem_2" => "Routage inter-VLAN instable avec le DHCP.",
	"mamadou_solution_2" => "Ajout de `ip helper-address` + correction de la config DHCP.",

	"ilian_problem_1" => "Difficulté à enregistrer les téléphones IP sur Asterisk.",
	"ilian_solution_1" => "Vérification des ports SIP + fichiers `sip.conf` et `extensions.conf`.",
	"ilian_problem_2" => "Appels internes échoués entre softphones.",
	"ilian_solution_2" => "Commande `sip show peers` + redémarrage d'Asterisk.",

	//private.php
	"private_space_title" => "Espace privé",
	"deliverables_section" => "Livrables",
	"deliverable_pdf" => "Voir le livrable final (PDF)",
	"network_config" => "Voir le plan d’adressage",
	"test_screenshots" => "Voir les captures de tests",
	"logins_section" => "Identifiants",
	"login_file" => "Fichier des identifiants",
	"test_results_section" => "Résultats des tests",
	"test_php_mysql" => "Connexion PHP ↔ MySQL fonctionnelle",
	"test_telephony" => "Appels internes fonctionnels avec Asterisk",
	"test_dns_dhcp" => "Serveur DHCP + DNS configuré avec succès",
	"test_dude" => "Supervision active via The Dude",
	"task_distribution_section" => "Répartition des tâches",
	"diagrams_section" => "Schémas",
	"diagram_phone" => "Plan de téléphonie",
	"diagram_network" => "Plan réseau",
	"diagram_gantt" => "Diagramme de Gantt",
	"selfeval_section" => "Autoévaluations",
	"selfeval_pdf" => "Fichier d’autoévaluation",
	"eval_pdf" => "Fichier d’évaluation croisée",
	"issues_section" => "Problèmes rencontrés",
	"issue_php_mysql" => "Problème de connexion entre le site et la base MySQL résolu",
	"issue_sessions" => "Session PHP maintenant maintenue sur les pages",
	"issue_redirect" => "Redirection correcte après connexion implémentée",
	"summary_section" => "Résumé",
	"summary_text" => "L'ensemble des services ont été configurés avec succès, répondant aux attentes du projet.",
	"prob+solu" => "Problèmes et solution",
	"probtitre" => "Voici les différents problèmes et solution",


    );
}

$lang = $t;
?>
