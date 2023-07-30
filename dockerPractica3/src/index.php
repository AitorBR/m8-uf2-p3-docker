<?php
    // El servei MySQL al docker-compose.yml.
    $host = 'db';

    // Nom d'usuari a la BD's
    $user = 'USUARI_MYSQL';

    // Contrasenya de l'usuari per accedir a la BDs
    $pass = 'PASSW_MYSQL';

    // Nom de la BDs
    $mydatabase = 'BD_M08';

    // Comprova l'estat de la connexió a la BD's
    $conn = new mysqli($host, $user, $pass, $mydatabase);

    // Consulta a la BD's
    $sql = 'SELECT * FROM usuaris';

    if ($result = $conn->query($sql)) {
        while ($data = $result->fetch_object()) {
            $users[] = $data;
        }
    }

    foreach ($users as $user) {
        echo "<br>";
        echo "USUARI: " . $user->nomusuari . " PASSW: " . $user->password;
        echo "<br>";
    }
?>