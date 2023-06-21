<?php
// Récupérer le mois actuel
$moisActuel = date('F');

// Tableau contenant les saisons et les mois correspondants
$tableauSaisons = [
    ['Message' => "<img src=\"../../../images/board_annonce/printemps_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est le printemps et le mois en cours est Nachexen, l'après sorcières", 'Mois' => 'March'],
    ['Message' => "<img src=\"../../../images/board_annonce/printemps_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est le printemps et le mois en cours est Jahrdrung, le tournant de l'année", 'Mois' => 'April'],
    ['Message' => "<img src=\"../../../images/board_annonce/printemps_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est le printemps et le mois en cours est Plugzeit, le temps des labours", 'Mois' => 'May'],
    ['Message' => "<img src=\"../../../images/board_annonce/ete_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est l'été et le mois en cours est Sigmarzeit, le temps de Sigmar", 'Mois' => 'June'],
    ['Message' => "<img src=\"../../../images/board_annonce/ete_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est l'été et le mois en cours est Sommerzeit, le temps de l'été", 'Mois' => 'July'],
    ['Message' => "<img src=\"../../../images/board_annonce/ete_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est l'été et le mois en cours est Vorgehein, l'avant mystère", 'Mois' => 'August'],
    ['Message' => "<img src=\"../../../images/board_annonce/automne_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est l'automne et le mois en cours est Nachgeheim, l'après mystère", 'Mois' => 'September'],
    ['Message' => "<img src=\"../../../images/board_annonce/automne_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est l'automne et le mois en cours est Erntzeit, le temps des récoltes", 'Mois' => 'October'],
    ['Message' => "<img src=\"../../../images/board_annonce/automne_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est l'automne et le mois en cours est Brauzeit, le mois des brasseurs", 'Mois' => 'November'],
    ['Message' => "<img src=\"../../../images/board_annonce/hiver_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est l'hiver et le mois en cours est Kaldezeit, le mois glacial", 'Mois' => 'December'],
    ['Message' => "<img src=\"../../../images/board_annonce/hiver_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est l'hiver et le mois en cours est Ulriczeit, le temps d'Ulric", 'Mois' => 'January'],
    ['Message' => "<img src=\"../../../images/board_annonce/hiver_image.png\" width=\"538\" height=\"223\"><br>Nous sommes aux alentours de l'an 2529. C'est l'hiver et le mois en cours est Vorhexen, l'avant sorcière.", 'Mois' => 'February'],
];

// Parcourir le tableau des saisons pour trouver celle correspondant au mois actuel
$message = '';
foreach ($tableauSaisons as $saison) {
    if ($saison['Mois'] === $moisActuel) {
        $message = $saison['Message'];
        break;
    }
}

// Afficher le message correspondant
echo $message;
?>