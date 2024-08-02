<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Service\Menu\MenuService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menuService;

   public function __construct(MenuService $menuService){
    $this->menuService = $menuService;
   }

    public function create(){
        return view('admin.add',[
            'title' => "Thêm Danh Mục",
            'menus' => $this->menuService->getParent()
        ]);
    }
    public function store(CreateFormRequest $request){
        $result = $this->menuService->create($request);
        return redirect()->back();
    }

    public function index(){
        return view('admin.menu.list',[
            'title'=> 'Danh sách danh mục mới nhất',
            'menus' => $this->menuService->getAll(),
        ]);
    }

    public function destroy(Request $request){
        $result = $this->menuService->destroy($request);
    }
    
}
