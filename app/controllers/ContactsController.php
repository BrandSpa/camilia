<?php

class ContactsController extends BaseController {

	public function store()
	{
		$inputs = Input::all();
		$validator = Validator::make($inputs, Contact::$rules);

		if ($validator->passes()) {
			$contact = Contact::create($inputs);
			$data = ['name' => $contact->name, 'email' => $contact->email, 'text' => $contact->message];

			Mail::send('emails.contact', $data, function($message)
			{
				$message->to('alejandro@brandspa.com', 'Lucía dalel')->subject('Contacto camilia.co');
			});

			return Response::json($contact);
		}

		return Response::json($validator->messages());
	}
}