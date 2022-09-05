<?php
    $wisdom = array(
        "Never miss a good chance to shut up",
        "Snowmen fall from heaven unassembled",
        "Why don't sheep shrink when it rains?",
        "Why doesn't Tarzan have a beard?",
        "Why are there no fat turtles?",
        "Can two people be alone together?"
    );

    $total = count($wisdom);
    $r = rand(0,$total-1);
    print $wisdom[$r];
?>