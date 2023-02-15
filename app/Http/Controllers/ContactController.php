<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
        public function addData(Request $request){
        
                if($request->name != null && $request->contact != null)
                {
                        $contact = new Contact;
                        $contact->name=$request->name;
                        $contact->contact=$request->contact;
                      $contact->save();
                      return $this->showData();
                }
                else{
                        return 'Data Fields cannot be empty'.'<br>'.'<a href="addcontact">Go Back</a>';
                }

        }
        public function showData(){
                $data = Contact::all();
                return view('Contact.showcontact',compact('data'));
        }
    }

