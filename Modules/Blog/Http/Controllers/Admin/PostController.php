<?php


namespace Modules\Blog\Http\Controllers\Admin;


use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\Hashtag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $searchString = $request->get('s');
        $query = Post::query();
        if ($searchString){
            $query = $query->where('name', 'LIKE', "{$searchString}");
        }
        $items = $query->with(['media', 'seoUrl'])
            ->orderByDesc('id')
            ->paginate(30);
        return view('blog::admin.post.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $item = null;
        return view('blog::admin.post.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'   =>  'required',
        ]);

        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $post = Post::create($request->all());
        $post->categories()->sync($request->categories);

        if ($request->hashtag !== null) {
            $hashtags = explode(',' ,$request->hashtag ?? "");
            $tagIds = [];
            foreach ($hashtags as $hashtag) {
                $tag = Hashtag::firstOrCreate(['hashtag' => $hashtag]);
                $tagIds[] = $tag->id;
            }
            if (count($tagIds) > 0) $post->hashtags()->sync($tagIds, true);
        }

        if ($request->hasFile('image')){
            $post->addMedia($request->file('image'))->toMediaCollection('image');
        }
        return redirect()->route('blog.admin.post.index')
            ->with('success', 'Created new post successful');
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
        $item = Post::find($id);

        if (!$item){
            return redirect()->back()->with('error', 'Post not found');
        }
        return view("blog::admin.post.edit", compact('item'));

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post){
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

        $post->update($request->all());
        $post->categories()->sync($request->categories);

        if ($request->hashtag !== null) {
            $hashtags = explode(',' ,$request->hashtag ?? "");
            $tagIds = [];
            foreach ($hashtags as $hashtag) {
                $tag = Hashtag::firstOrCreate(['hashtag' => $hashtag]);
                $tagIds[] = $tag->id;
            }
            if (count($tagIds) > 0) $post->hashtags()->sync($tagIds, true);
        }

        if ($request->hasFile('image')){
            $post->addMedia($request->file('image'))->toMediaCollection('image');
        }
        return redirect()->route('blog.admin.post.index')
            ->with('success', 'Updated post successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (!$post){
            return redirect()->back()->with('error', 'Post not found');
        }
        $post->delete();
        return redirect()->back()->with('success', 'Delete post successful');
    }
}
