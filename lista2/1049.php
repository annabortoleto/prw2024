<?php

$p1 = trim(fgets(STDIN));
$p2 = trim(fgets(STDIN));
$p3 = trim(fgets(STDIN));

if ($p1 == 'vertebrado') {
    if ($p2 == 'ave') {
        if ($p3 == 'carnivoro') {
            echo "aguia\n";
        } elseif ($p3 == 'onivoro') {
            echo "pomba\n";
        }
    } elseif ($p2 == 'mamifero') {
        if ($p3 == 'onivoro') {
            echo "homem\n";
        } elseif ($p3 == 'herbivoro') {
            echo "vaca\n";
        }
    }
} elseif ($p1 == 'invertebrado') {
    if ($p2 == 'inseto') {
        if ($p3 == 'hematofago') {
            echo "pulga\n";
        } elseif ($p3 == 'herbivoro') {
            echo "lagarta\n";
        }
    } elseif ($p2 == 'anelideo') {
        if ($p3 == 'hematofago') {
            echo "sanguessuga\n";
        } elseif ($p3 == 'onivoro') {
            echo "minhoca\n";
        }
    }
}

?>
