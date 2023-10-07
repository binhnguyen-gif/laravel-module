<?php

namespace Modules\Account\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Modules\Account\Emails\AccountMail;
use Modules\Account\Entities\Account;
use Modules\Account\Http\Requests\Admin\CreateRequest;
use Illuminate\Support\Facades\Validator;
use Str;
use DB;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $searchString = $request->get('s');
        $query = Account::query();
        if ($searchString) {
            $query = $query->where('name', 'LIKE', "%{$searchString}%")
                ->orWhere('email', 'LIKE', "%{$searchString}%");
        }
        $items = $query->paginate(config('account.per_page'));
        return view('account::admin.account.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('account::admin.account.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  CreateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateRequest $request)
    {
        try {
            DB::beginTransaction();
            $accountData = $request->validated();
            $item = Account::query()->where('name', $accountData['name'])->first();
            if (!$item) {
                return redirect()->back()->with('error', 'Error create account');
            }
            $password = Str::random(10);
            $accountData['password'] = Hash::make($password);
            $account = Account::create($accountData);
            Mail::to($account['email'])->send(new AccountMail($account, $password));
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Error create account');
        }

        return redirect()->back()->with('success', 'Success');
    }

    /**
     * Show the specified resource.
     * @param  int  $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('account::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $item = Account::find($id);

        if (!$item) {
            return redirect()->back()->with('error', 'Account not found');
        }
        return view('account::admin.account.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $account = Account::find($id);
        if (!$account) {
            return redirect()->back()->with('error', 'Account not found');
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required|',
            'email' => 'required|email',
            'type' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $account->update($request->all());

        return redirect()->route('account.admin.index')
            ->with('success', 'Updated account successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $account = Account::find($id);
        if (!$account) {
            return redirect()->back()->with('error', 'Account not correct');
        }
        $account->delete();
        return redirect()->back()->with('success', 'Deleted account successfully');
    }
}
