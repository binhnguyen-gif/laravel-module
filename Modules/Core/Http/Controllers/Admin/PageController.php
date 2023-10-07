<?php
namespace Modules\Core\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\Core\Entities\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $items = Page::withDepth()
            ->defaultOrder()
            ->paginate(30);
        return view('core::admin.page.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $item = null;
        return view('core::admin.page.create', compact('item'));
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

        $category = Page::create($request->all());
        if ($request->hasFile('image')){
            $category->addMedia($request->file('image'))->toMediaCollection('image');
        }
        return redirect()->route('core.admin.page.index')
            ->with('success', 'Created new page successful');
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
        $item = Page::find($id);

        if (!$item){
            return redirect()->back()->with('error', 'Page not found');
        }
        return view("core::admin.page.edit", compact('item'));

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $category = Page::find($id);
        if (!$category){
            return redirect()->back()->with('error', 'Page not found');
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
        return redirect()->route('core.admin.page.index')
            ->with('success', 'Created new page successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = Page::find($id);
        if (!$category){
            return redirect()->back()->with('error', 'Page not found');
        }
        $category->delete();
        return redirect()->back()->with('success', 'Delete page successful');
    }
}
