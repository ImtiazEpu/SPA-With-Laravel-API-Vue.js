<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Data validation
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
     * Data Store
     */
    public function store()
    {
        Contact::create($this->validateData());
    }

    /**
     * Data Showing
     *
     * @param Contact $contact
     * @return Contact
     */
    public function show(Contact $contact)
    {
        return $contact;
    }

    /**
     * Data Updating
     *
     * @param Contact $contact
     */
    public function update(Contact $contact)
    {
        $contact->update($this->validateData());
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
    }
}
