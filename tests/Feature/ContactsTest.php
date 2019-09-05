<?php

namespace Tests\Feature;

use App\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_contact_a_can_be_added()
    {
        $this->post('/api/contacts', $this->data());
        $contact = Contact::first();

        $this->assertEquals('Test Name', $contact->name);
        $this->assertEquals('01616567207', $contact->phone);
        $this->assertEquals('test@email.com', $contact->email);
        $this->assertEquals('22/03/1987', $contact->birthday);
        $this->assertEquals('ABC String', $contact->company);
    }

    /** @test */
        public function fields_are_required(){
            collect(['name', 'phone', 'email', 'birthday', 'company'])
                ->each(function ($field){
                $response = $this->post('/api/contacts',
                    array_merge($this->data(),[$field=>'']));

                $response->assertSessionHasErrors($field);
                $this->assertCount(0, Contact::all());
            });
        }

        private function data()
        {
            return [
                'name' => 'Test Name',
                'phone' => '01616567207',
                'email' => 'test@email.com',
                'birthday' => '22/03/1987',
                'company' => 'ABC String'
            ];
        }
}
