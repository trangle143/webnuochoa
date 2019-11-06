<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thuonghieu;

class SearchController extends Controller
{
    public function getSearch(Request $require)
    {
    	return view('index');
    }

    function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = Thuonghieu::all()
            ->where('ten', 'LIKE', "%{$query}%")
            ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
               $output .= '
               <li><a href="data/'. $row->id .'">'.$row->name_product.'</a></li>
               ';
           }
           $output .= '</ul>';
           echo $output;
       }
    }
}
