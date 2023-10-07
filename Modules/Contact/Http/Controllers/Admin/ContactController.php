<?php


namespace Modules\Contact\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Contact\Entities\Contact;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        $searchString = $request->get('s');
        $query = Contact::query();
        if ($searchString){
            $query = $query->where('full_name', 'LIKE', "{$searchString}")
                ->orWhere('first_name', 'LIKE', "{$searchString}")
                ->orWhere('last_name', 'LIKE', "{$searchString}")
                ->orWhere('phone', 'LIKE', "{$searchString}")
                ->orWhere('email', 'LIKE', "{$searchString}");
        }
        $items = $query->orderByDesc('id')->paginate(30);

        return view("contact::admin.contact.index", compact('items'));
    }

    public function destroy(Request $request, $id)
    {
        $contact = Contact::find($id);
        if (!$contact){
            return redirect()->back()->with('error', 'Contact not correct');
        }
        $contact->delete();
        return redirect()->back()->with('success', 'Deleted contact successfully');
    }
}
