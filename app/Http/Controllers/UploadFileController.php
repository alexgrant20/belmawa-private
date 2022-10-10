<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
  public function store(Request $request)
  {
    if ($request->hasFile('photo')) {
      $file = $request->file('photo');
      $filename = $file->getClientOriginalName();

      $folder = uniqid() . '-' . now()->timestamp;
      $file->storeAs('avatars/tmp' . $folder, $filename);

      return $folder;
    }

    return '';
  }
}