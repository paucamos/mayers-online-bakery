<?php
include('conexio.php'); //conexio
$sql = "SELECT * FROM productes";
$result = mysqli_query($conn, $sql); //exec(conexio + query)
echo "<h2>Llista Productes:</h2>";
echo "<table border=1 class='taulaProductes' id='taulaElements'>";
$contador = 1;
$numImg = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr class='producte' id='fila{$row['id']}'>";
    $id = $row['id'];
    foreach ($row as $field => $value) {
        echo  "<td class='propiedades' id='propietat{$id}'>{$value} </td>" ;
    }
    //funcio elimina passant el id
    echo "<td id='modifica'><a href='./funcionsDB/modifica.php?id=$row[id]&nom=$row[nom]&descripcio=$row[descripcio]&preu=$row[preu]' >
              <i class='fas fa-pencil-alt'></i>
          </a></td>";
    echo "<td id='elimina' onclick='elimina(".$id.")'>
              <i class='fas fa-trash-alt'></i>
          </td>";
    $contador++;
    echo "</tr>";
}

echo "<tr id='formulari'>";
$idContador = 1;
for ($i=0; $i < 4 ; $i++) {
    echo "<td> <input class='inputs' id='input{$idContador}' type='text' required></td>";
    $idContador ++;
}
echo "</tr>";
echo "</table>";
echo '<div id="afegeix" class="botoCrea" onclick=crea(id)>Crea</div>';
