<?php

namespace App\Http\Controllers;

use App\Http\Resources\Contact as ContactResource;
use App\Models\Contact;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

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
     * @throws AuthorizationException
     */
    public function index()
    {
        $this->authorize('viewAny', Contact::class);
        return ContactResource::collection(request()->user()->contacts);
    }

    /**
     * Data Store
     * @throws AuthorizationException
     */
    public function store()
    {
        $this->authorize('create', Contact::class);

        $contact = request()->user()
            ->contacts()
            ->create($this->validateData());

        return (new ContactResource($contact))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Data Showing
     *
     * @param Contact $contact
     * @return ContactResource
     * @throws AuthorizationException
     */
    public function show(Contact $contact)
    {
        $this->authorize('view', $contact);
        return new ContactResource($contact);
    }

    /**
     * Data Updating
     *
     * @param Contact $contact
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function update(Contact $contact)
    {
        $this->authorize('update', $contact);
        $contact->update($this->validateData());

        return (new ContactResource($contact))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * @param Contact $contact
     *
     * @return ResponseFactory|\Illuminate\Http\Response
     * @throws AuthorizationException
     * @throws \Exception
     */
    public function destroy(Contact $contact)
    {
        $this->authorize('delete', $contact);
        $contact->delete();

        return response([], Response::HTTP_NO_CONTENT);
    }
}
