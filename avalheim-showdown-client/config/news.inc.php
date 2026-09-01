<?php
// news.inc.php - exemple minimal fonctionnel

$latestNewsCache = ['1'];

$newsCache = [
    '1' => [
        'topic_id' => 1,
        'date' => strtotime('2025-06-14'),
        'title_html' => 'Bienvenue sur Avalheim Showdown !',
        'summary_html' => '<p>ENCULEZ OKAFOULA PAR PITIE</p>',
        'authorname' => 'Admin',
        'details' => true, // présence de détails (lien "Read more" affiché)
    ],
];
