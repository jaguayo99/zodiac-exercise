<?php
/**
 * ZODIAC SIGNS - create_zodiacsigns_table.php
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

require_once "zodiac_functions.php";
require_once "config/db.php";
require_once "./controlSesion.php";
pageTop("Create zodiacsigns Table", BACK_MENU);

$control=true;

$query = "CREATE TABLE zodiacsigns (
  id INT UNSIGNED NOT NULL, 
  sign CHAR(11), 
  symbol CHAR(13),
  planet CHAR(7),
  element CHAR(5),
  start_month TINYINT,
  start_day TINYINT,
  end_month TINYINT,
  end_day TINYINT,
  PRIMARY KEY(id)
);";

try{
  $conn->exec("USE zodiac_signs");
  try{
    $conn->exec($query);
  }
  catch(PDOException $e){
    echo "Error al crear la tabla: " . $e->getMessage() . "<br>";
    echo "La tabla ya existe";
    
    $control=false;
  }
  if($control){
    echo "Tabla creada correctamente<br>";
  }
  
}
catch(PDOException $e){
  echo "Error al crear la base de datos: " . $e->getMessage() . "<br>";
  echo "La base de datos no existe";
}
   



pageBottom("2020-11-20");
