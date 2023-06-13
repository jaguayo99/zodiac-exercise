<?php
/**
 * ZODIAC SIGNS - mostrar_tabla_zodiacsigns.php
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

pageTop("Display zodiacsigns table", BACK_MENU);

require_once "config/db.php";
try{
    $conn->exec("USE zodiac_signs");
    $selectQuery = "SELECT * FROM zodiacsigns";
    $stmt = $conn->query($selectQuery);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($result) {
    foreach ($result as $row) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Sign: " . $row['sign'] . "<br>";
        echo "Symbol: " . $row['symbol'] . "<br>";
        echo "Planet: " . $row['planet'] . "<br>";
        echo "Element: " . $row['element'] . "<br>";
        echo "Start Month: " . $row['start_month'] . "<br>";
        echo "Start Day: " . $row['start_day'] . "<br>";
        echo "End Month: " . $row['end_month'] . "<br>";
        echo "End Day: " . $row['end_day'] . "<br>";
        echo "<br>";
    }
}
} catch(PDOException $e){
    echo "No existen registros";
    echo "Error al insertar fila: " . $e->getMessage() . "<br>";
    

}




pageBottom("2020-11-20");

