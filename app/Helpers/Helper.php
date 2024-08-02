<?php

namespace App\Helpers;


class Helper{
    public static function menu($menus,$parent_id = 0, $char = ''){

        $html = '';

        foreach ($menus as $key =>$menu){
            if($menu->parent_id == $parent_id){
                $html .= '
                <tr>
                <td>'. htmlspecialchars($menu->id) .'</td>
                <td>'. htmlspecialchars($char . $menu->name) .'</td>
                <td>'. htmlspecialchars($menu->active) .'</td>
                <td>'. htmlspecialchars($menu->updated_at) .'</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="admin/menus/edit/ '.$menu->id.'" ><i class="fa-regular fa-pen-to-square"></i> EDIT</a> 
                    <a href ="#" class="btn btn-danger btn-sm" onClick="removeRow('.$menu->id.',\'/admin/menus/destroy\')">
                        <i class="fa-solid fa-trash"></i> DELETE
                    </a>
                </td>
            </tr>
                ';

            unset($menus[$key]);
            $html .= self::menu($menus, $menu ->id, $char . '|=|');
            }
        }
        return $html;
    }
}