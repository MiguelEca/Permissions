<?php 

namespace Beli\Permissions\app\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Beli\Permissions\Models\Permission;
use DB;
/**
* 
*/
class ControllerPermiso extends Controller
{
	
	public function getDataPermissions()
	{
		try{
			$permissions = Permission::all();
			return response()->json([
				'success' => true,
				'info' => $permissions
			]);
		}catch(\Exception $e){
			return response()->json([
				'success' => false,
				'message' => $e->getMessage()
			]);
		}
	}

	public function saveDataPermission(Request $request)
	{
		DB::beginTransaction();
		try{
			Permission::create($request->all());
			DB::commit();
			return response()->json([
				'success' => true,
				'message' => 'Permission registered...'
			]);
		}catch(\Exception $e){
			DB::rollback();
			return response()->json([
				'success' => false,
				'message' => $e->getMessage()
			]);
		}
	}

	public function updateDataPermission(Permission $permission,Request $request)
	{
		DB::beginTransaction();
		try{
			$permission->update($request->all());
			DB::commit();
			return response()->json([
				'success' => true,
				'message' => 'Permission updated...'
			]);
		}catch(\Exception $e){
			DB::rollback();
			return response()->json([
				'success' => false,
				'message' => $e->getMessage()
			]);
		}
	}

	public function deleteDataPermission(Permission $permission)
	{
		try{
			$permission->delete();
			return response()->json([
				'success' => true,
				'info' => 'Permission removed...'
			]);
		}catch(\Exception $e){
			return response()->json([
				'success' => false,
				'message' => $e->getMessage()
			]);
		}
	}
}

 ?>