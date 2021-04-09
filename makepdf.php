<?php

require_once __DIR__ . '/vendor/autoload.php';


    //Get variable
    $naam= $_POST['naam'];
    $adres= $_POST['adres'];
    $plaats= $_POST['plaats'];
    $postcode= $_POST['postcode'];
    $telefoon= $_POST['telefoon'];
    $van= $_POST['van'];
    $tot= $_POST['tot'];
    $kamernummer= $_POST['kamernummer'];

    // Create PDF
    $mpdf = new \Mpdf\Mpdf();
    // Empty $data
    $data = '';
    //title
    $data .= '<h1>Reservatie overzicht</h1>';

    // add data
    $data .= '<strong>Naam</strong> ' . $naam . '<br>';
    $data .= '<strong>adres</strong> ' . $adres . '<br>';
    $data .= '<strong>plaats</strong> ' . $plaats . '<br>';
    $data .= '<strong>postcode</strong> ' . $postcode . '<br>';
    $data .= '<strong>telefoon</strong> ' . $telefoon . '<br>';
    $data .= '<strong>van</strong> ' . $van . '<br>';
    $data .= '<strong>tot</strong> ' . $tot . '<br>';
    $data .= '<strong>kamernummer</strong> ' . $idkamer . '<br>';

if($massage)
{
    $data .= '<br> /><strong>Message</strong><br />' .$message;
}

    // write pdf
    $mpdf->WriteHTML($data);
    // output brwoser
    $mpdf->Output('Reservatie_overzicht.pdf', 'D');
