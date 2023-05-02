<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ManegementController extends Controller
{
    public function index()
    {
        return view('inquiry');
    }

    public function confirm(ContactRequest $request)
    {
        $inputs = $request->all();
        return view('content', ['inputs' => $inputs]);
    }
    
    public function create(Request $request)
    {
        $form = $request->all();
        Contact::create($form);
        return view('thanks');
    }


    public function find(Request $request)
    {
        $articles = $query->orderByDesc('created_at')->paginate(10);
        $contacts = Contact::Paginate(10);
        return view('management', ['contacts' => $contacts]);

    }

    public function search(Request $request)
    {
        $searchName = $request->input('fullname');
        $searchGender = $request->input('gender');
        $searchCreated1 = $request->input('created-day1');
        $searchCreated2 = $request->input('created-day2');
        $searchEmail = $request->input('email');

        $contacts = Contact::doSearch($searchName, $searchGender, $searchCreated1, $searchCreated2, $searchEmail);

        $param = ['contacts' => $contacts];
        return view('management', $param);
    }


    public function delete(Request $request)
    {   
        Contact::find($request->id)->delete();
        return redirect('/');
    }
}
