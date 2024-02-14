<?php
    require_once "Room.php";

    $room = new room(350, 475, 500);

    echo "Volume:" . $room->getVolume();
    echo "</br>";
    echo "Prijs van het huis:" . $room->getMoney();
    echo "</br>";
    echo $room->getHouseOne();
    echo "</br></br>";
