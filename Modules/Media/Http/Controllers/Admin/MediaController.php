<?php

namespace Modules\Media\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\Admin;
use Modules\Core\Entities\Setting;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaController extends Controller
{
    public function index(){
        $items = Media::orderByDesc('id')->paginate(30);
        return view("media::admin.media.index", compact('items'));
    }
    public function store(Request $request)
    {

    }

    public function storeWithEditor(Request $request){
        if ($request->get('model')){
            $class = str_replace('//','\\',$request->get('model'));
            $media = new $class();
            if ($media){
                $media = new $class();
            }else{
                $media = new Admin();
            }
        }
        $media->id = 0;
        $media->exists = true;
        if ($request->hasFile('file')){
            $image = $media->addMedia($request->file('file'))->toMediaCollection('file');
        }
        return response()->json([
            'link'   =>  $image->getUrl()
        ]);
    }
}
