<?php
/**
 * zodiacsigns SIGNS - insert_rows.php
 *
 * IES Virgen del Carmen de Jaén
 * Desarrollo Web en Entorno Servidor 2º DAW
 *
 * Based on the code of:
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2012 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2012-11-27
 * @link      http://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
require_once "./controlSesion.php";
require_once "zodiac_functions.php";
require_once "config/db.php";

pageTop("Insert Rows zodiacsigns table", BACK_MENU);

$query = "INSERT INTO zodiacsigns VALUES 
    (1,'Aries','Ram','Mars','fire',3,21,4,19),
    (2,'Taurus','Bull','Venus','earth',4,20,5,20),
    (3,'Gemini','Twins','Mercury','air',5,21,6,21),
    (4,'Cancer','Crab','Moon','water',6,22,7,22),
    (5,'Leo','Lion','Sun','fire',7,23,8,22),
    (6,'Virgo','Virgin','Mercury','earth',8,23,9,22),
    (7,'Libra','Scales','Venus','air',9,23,10,23),
    (8,'Scorpio','Scorpion','Mars','water',10,24,11,21),
    (9,'Sagittarius','Archer','Jupiter','fire',11,22,12,21),
    (10,'Capricorn','Goat','Saturn','earth',12,22,1,19),
    (11,'Aquarius','Water Carrier','Uranus','air',1,20,2,18),
    (12,'Pisces','Fishes','Neptune','water',2,19,3,20);";


    // Crear la tabla zodiacsigns
    $conn->exec("USE zodiac_signs");

    
    try {
        $conn->exec($query);
        echo "Filas insertada correctamente<br>";
    } catch (PDOException $e) {
    echo "Error al insertar fila: " . $e->getMessage() . "<br>";
    echo "Las filas ya estan insertadas";
    

   
} catch (PDOException $e) {
    echo "No existe base de datos o tabla para insertar o las filas ya fueron insertadas<br>";
}

pageBottom("2020-11-20");
?>