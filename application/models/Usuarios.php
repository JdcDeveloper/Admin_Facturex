<?php 

use \Illuminate\Database\Eloquent\Model as Eloquent;



// correr el comando de abajo  cada vez que  cree un modelo

// composer dump-autoload 

class Usuarios extends Eloquent {


	// le concateno por que postgres esta case sensitive

    protected $table = "jonathan."."Usuarios"; // table name
}