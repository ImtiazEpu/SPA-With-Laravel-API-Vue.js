<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactsController extends Controller
{
    /**
     * Data validation
     *
     * @return mixed
     */
    private function validateData()
    {
        return request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'birthday' => 'required',
            'company' => 'required',
        ]);
    }

    /**
     *
     */
    public function index()
    {
        return \request()->user()->contacts;
    }

    /**
     * Data Store
     */
    public function store()
    {
        request()->user()->contacts()->create($this->validateData());
    }

    /**
     * Data Showing
     *
     * @param Contact $contact
     * @return Contact
     */
    public function show(Contact $contact)
    {
        if (\request()->user()->isNot($contact->user)){
            return response([],403);
        }
        return $contact;
    }

    /**
     * Data Updating
     *
     * @param Contact $contact
     * @return ResponseFactory|Response
     */
    public function update(Contact $contact)
    {
        if (\request()->user()->isNot($contact->user)){
            return response([],403);
        }
        $contact->update($this->validateData());
    }

    /**
     * @param Contact $contact
     * @return ResponseFactory|Response
     * @throws \Exception
     */
    public function destroy(Contact $contact)
    {
        if (\request()->user()->isNot($contact->user)){
            return response([],403);
        }
        $contact->delete();
    }
}
