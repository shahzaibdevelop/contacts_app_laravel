<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use DB;
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
        public function edit($id){
                $contact = new Contact;
                $contactid=$id;
                $contactrow=  contact::find($contactid);
                return view('Contact.update',compact('contactrow'));
                
        }
        public function update(Request $request,$id){
                if($request->name != null && $request->contact != null)
                {
                        
                //         $contactname=$request->name;
                //         $contactcontact=$request->contact;
                //         DB::update('update contacts set name = ?, contact=? where id = ?',[$contactname,$contactcontact,$id]);
                //       return $this->showData();
                $contact = Contact::find($id);
                $contact->name = $request->input('name');
                $contact->contact = $request->input('contact');
                $contact->save();
                return $this->showData();
                }
                else{
                        return 'Data Fields cannot be empty';
                }
        }
        public function delete($id){
                $contact = Contact::find($id);
                $contact->delete();
                return $this->showData();

        }
    }

