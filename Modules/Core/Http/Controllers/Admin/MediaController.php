<?php
namespace Modules\Core\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaController extends Controller
{
    public function index(){
        return view("core::admin.media.index");
    }
    /**
     * Add a file to the media library. The file will be removed from
     * its original location.
     *
     * @param string|\Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return \Spatie\MediaLibrary\MediaCollections\FileAdder
     */
    public function store(Request $request){
//        $image = $request->file('file');
//        $avatarName = $image->getClientOriginalName();
//        $image->move(public_path('images'),$avatarName);
//
//        $imageUpload = new Image();
//        $imageUpload->filename = $avatarName;
//        $imageUpload->save();
//        return response()->json(['success'=>$avatarName]);
    }

}
