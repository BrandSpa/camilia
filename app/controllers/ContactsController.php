<?php

class ContactsController extends BaseController {

	public function store()
	{
		$inputs = Input::all();
		$validator = Validator::make($inputs, Contact::$rules);

		if ($validator->passes()) {
			$contact = Contact::create($inputs);
			$data = ['name' => $contact->name, 'email' => $contact->mail, 'text' => $contact->message];

			Mail::send('emails.contact', $data, function($message)
			{
				$message->to('alejandro@brandspa.com', 'Camilia')->subject('Contacto camilia.co');
				$message->to('chef@camilia.co', 'Camilia')->subject('Contacto camilia.co');
			});

			return Response::json($contact);
		}

		return Response::json($validator->messages());
	}
}