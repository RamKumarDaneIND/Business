<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CategoryRequest;
use Lang;
use App\BusinessCategory as BusinessCategoryModel;
class BusinessCategory extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BusinessCategoryModel $BusinessCategory)
    {
        $this->middleware('auth');
        $this->BusinessCategory=$BusinessCategory;
    }

    public function index()
    {
    	$data=$this->setPageAttributes();
    	return view('back/categories',$data);
    }
    public function create()
    {
    	return view('back/newCategory');
    }
    public function add_category(CategoryRequest $request)
    {
    	$this->BusinessCategory = BusinessCategoryModel::create($request->only(['name', 'status']));
        if ($this->BusinessCategory->id) {
            return back()->with('success',Lang::get('message.add_y',array('item' => 'Business Category')));
        }else{
            return back()->with('danger',Lang::get('message.went_wrong'));
        }
    }
    public function edit(Request $request)
    {
    	return view('back/editCategory');
    }
    public function edit_category(CategoryRequest $request)
    {
    	$this->BusinessCategory = BusinessCategoryModel::create($request->only(['name', 'status']));

        if ($this->BusinessCategory->id) {
            return back()->with('success',Lang::get('message.add_y',array('item' => 'Business Category')));
        }else{
            return back()->with('danger',Lang::get('message.went_wrong'));
        }
    }
    public function delete_category()
    {
    }
    public static function list_active_category()
    {
    	return $this->where('status', 'active')->get();
    }
    public static function list_category()
    {
    	return $this->all();
    }
    private function setPageAttributes()
    {
    	$data['categories']=BusinessCategoryModel::all();
    	$data['active']="Business-Category";
    	return $data;
    }
}
