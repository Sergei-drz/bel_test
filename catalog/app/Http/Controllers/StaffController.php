<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StaffRequest;
use App\Models\Staff;

class StaffController extends Controller {

public function submit(StaffRequest $req) {

  $staff = new Staff();
  $staff->name = $req->input('name');
  $staff->position = $req->input('position');
  $staff->date = $req->input('date');
  $staff->salary = $req->input('salary');
  $staff->chief = $req->input('chief');
  $staff->subject = $req->input('subject');
  $staff->message = $req->input('message');

  $staff->save();
  return redirect()->route('home')->with('success', 'Информация о сотруднике была отправлена');
}

public function allData() {
      $staff = new Staff;
return view('messages', ['data' => $staff->inRandomOrder()->get()]); //сортировка
      return view('messages', ['data' => $staff->all()]);
}

public function ShowOneMessage($id) {
      $staff = new Staff;
      return view('one-message', ['data' => $staff->find($id)]);
}


public function updateMessage($id){
    $staff = new Staff;
    return view('update-message', ['data' => $staff->find($id)]);
}

public function updateMessageSubmit($id, StaffRequest $req) {

  $staff = Staff::find($id);
  $staff->name = $req->input('name');
  $staff->position = $req->input('position');
  $staff->date = $req->input('date');
  $staff->salary = $req->input('salary');
  $staff->chief = $req->input('chief');
  $staff->subject = $req->input('subject');
  $staff->message = $req->input('message');

  $staff->save();
  return redirect()->route('staff-data-one', $id)->with('success', 'Информация о сотруднике была обновлена');
}

public function deleteMessage($id) {
  Staff::find($id)->delete();
  return redirect()->route('staff-data')->with('success', 'Сотрудник был удален');
}

}
