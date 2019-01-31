<?php 

// namespace App;

// require_once('Eloquent.php');

use \Illuminate\Database\Eloquent\Model as Eloquent;



// correr el comando de abajo  cada vez que  cree un modelo

// composer dump-autoload 

class Presupuesto extends Eloquent {


	// le concateno por que postgres esta case sensitive

    protected $table = "jonathan."."Presupuesto"; // table name
}