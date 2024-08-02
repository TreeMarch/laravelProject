<?php 

namespace App\Http\Service\Menu;

use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Helpers\Helper;


class MenuService{

    public function getParent(){
        return Menu::where('parent_id',0)->get(); //neu ma parent id == 0 thi lay toan bo du lieu
    }

    public function getAll(){
        return Menu::orderbyDesc('id')->paginate(20); //Phân trang menu
    }

    public function create($request){
        try {
            Menu::create([
                'name' => (string) $request->input('name'),
                'parent_id' => (string) $request->input('parent_id'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'active' => (string) $request->input('active'),
            ]);
            
            Session::flash('success','Tạo thành công ');
        } catch (\Exception $eer) {
            Session::flash('error',$eer->getMessage());
            return false;
        }
        return true;
    }

    public function destroy($request){
        $menu = Menu::where('id',$request->input('id')->first());
    }

}