<?php


namespace Modules\Blog\Http\Controllers\Admin;


use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $searchString = $request->get('s');
        $query = Category::query();
        if ($searchString){
            $query = $query->where('name', 'LIKE', "%{$searchString}%");
        }
        $items = $query->withDepth()
            ->with(['media', 'seoUrl'])
            ->defaultOrder()
            ->paginate(30);
        return view('blog::admin.category.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $item = null;
        return view('blog::admin.category.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'name'   =>  'required'
        ]);

        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $category = Category::create($request->all());
        if ($request->hasFile('image')){
            $category->addMedia($request->file('image'))->toMediaCollection('image');
        }
        return redirect()->route('blog.admin.category.index')
            ->with('success', 'Created new category successful');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $item = Category::find($id);

        if (!$item){
            return redirect()->back()->with('error', 'Category not found');
        }
        return view("blog::admin.category.edit", compact('item'));

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (!$category){
            return redirect()->back()->with('error', 'Category not found');
        }
        $validator = Validator::make($request->all(), [
            'name'   =>  'required'
        ]);

        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $category->update($request->all());

        if ($request->hasFile('image')){
            $category->addMedia($request->file('image'))->toMediaCollection('image');
        }
        return redirect()->route('blog.admin.category.index')
            ->with('success', 'Created new category successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if (!$category){
            return redirect()->back()->with('error', 'Category not found');
        }
        $category->delete();
        return redirect()->back()->with('success', 'Delete category successful');
    }
}
