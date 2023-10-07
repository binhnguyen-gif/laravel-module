<?php


namespace Modules\Contact\Http\Controllers\Web;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Modules\Contact\Entities\Contact;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'email'  =>  'required|email',
           'phone'  =>  'required:min:10:max:14',
           'message'  =>  'required:min:6,max:1000',
           'full_name'  =>  'required|string:min:3,max:160',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)
                ->withInput($request->all());
        }
        $data = $request->only("email", "phone", "message", "full_name");
        Contact::create($data);
        return redirect()->back()
            ->with('success', 'Send contact success');
    }
}
