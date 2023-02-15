<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use DB;
class ContactController extends Controller
{
        public function addData(Request $request){
                $request->validate([
                        'name' => 'required|min:3',
                        'contact' => 'required|digits:11|numeric'
                ]);
                        $contact = new Contact;
                        $contact->name=$request->name;
                        $contact->contact=$request->contact;
                        $contact->save();
                        return $this->showData();

        }
        public function showData(){
                $data = Contact::all();
                return view('Contact.showcontact',compact('data'));
        }
        public function edit($id){
                $contact = new Contact;
                $contactid=$id;
                $contactrow=  contact::find($contactid);
                return view('Contact.update',compact('contactrow'));
        }
        public function update(Request $request,$id){
                
                $request->validate([
                        'name' => 'required|min:3',
                        'contact' => 'required|digits:11|numeric'
                ]);
                
                $contact = Contact::find($id);
                $contact->name = $request->input('name');
                $contact->contact = $request->input('contact');
                $contact->save();
                return $this->showData();
                
               
        }
        public function delete($id){
                $contact = Contact::find($id);
                $contact->delete();
                return redirect('/');
                // return $this->showData();

        }
    }

