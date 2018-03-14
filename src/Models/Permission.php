<?php 

namespace Beli\Permissions\Models;

use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Permission extends Model
{
	protected $table = 'permission';
	protected $fillable = ['id','name','nick','description'];
}
	

 ?>