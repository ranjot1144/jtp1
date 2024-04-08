<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function homepage() {
        $range_data = DB::table('range as r')
                        ->orderBy('r.order_wise','ASC')
                        ->get();
        $prod_data = DB::table('product as r')
                        ->get();
        
       return view('frontend_view.dashboard', compact('range_data','prod_data'));
    }
    
    public function search_data(Request $request) {
        
        if($request->ajax()) {
            if($request->search!=''){

                    $prod_data = DB::table('product as p')
                                ->select('p.prod_name as p_name', 'p.prod_url as p_url')
                                ->where('p.prod_name','like','%'. $request->search.'%')
                                ->get();
                    $result_data = $prod_data;
                    if(count($prod_data)==0) {
                        $cat_data = DB::table('category as c')
                                ->select('c.cat_name as p_name', 'c.cat_url as p_url')
                                ->where('c.cat_name','like','%'. $request->search.'%')
                                ->get();
                    $result_data = $cat_data;
                    }

                    if(count($prod_data)==0 && count($cat_data)==0) {
                        $sub_cat_data = DB::table('subcategory as sc')
                                ->select('sc.sub_cat_name as p_name', 'sc.subcat_url as p_url', 'sc.subcat_url as sc_ranges')
                                ->where('sc.sub_cat_name','like','%'. $request->search.'%')
                                ->get();
                    $result_data = $sub_cat_data;
                    }

                
                $output = '';
                $option_size='2';
                if(count($result_data)>0) {
                    if(count($result_data)>2) {
                        $option_size=7;
                    }
                    $output = '<select size="'.$option_size.'" class="search-list text-white" onchange="location = this.value;" style="width:40%;background:transparent;border-left:none; border-bottom:1px solid #d3d3d3;">';
                    foreach($result_data as $value) {
                        //$output .= '<option style="padding: 10px;" value="'.$value->cat_url.'">'.$value->$p_name.' '.$value->cat_ranges.'</option>';
                        $output .= '<option style="padding: 10px;" value="'.$value->p_url.'">'.$value->p_name.'</option>';
                    }
                        $output .= '</select>';
                }else{
                    $output = '<select class="search-list text-white" style="width:40%;background:transparent; padding:10px;border:none;"><option style="color:red;">oops ! No Result Found</option></select>';
                }
                return $output;
            }
        }
    }

}
