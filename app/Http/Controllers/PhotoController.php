<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    // public function upload(Request $request)
    // {
    //     // Get the uploaded files
    //     $photo1 = $request->file('photo1');
    //     $photo2 = $request->file('photo2');
    //     $photo3 = $request->file('photo3');

    //     // Save the files to the database
    //     $photoModel1 = new Photo();
    //     $photoModel1->filename1= $photo1->store('public/photos');
    //     $photoModel1->save();

    //     $photoModel2 = new Photo();
    //     $photoModel2->filename2 = $photo2->store('public/photos');
    //     $photoModel2->save();

    //     $photoModel3 = new Photo();
    //     $photoModel3->filename3 = $photo3->store('public/photos');
    //     $photoModel3->save();

    //     return redirect()->back()->with('success', 'Photos uploaded successfully!');
    // }
 public function upload(Request $request)
{

    $photo = new Photo();
    if ($request->hasFile('filename1')) {
        $filename = $request->file('filename1')->store('public');
        $photo->filename1 = basename($filename);
    }
    if ($request->hasFile('filename2')) {
        $filename = $request->file('filename2')->store('public');
        $photo->filename2 = basename($filename);
    }
    if ($request->hasFile('filename3')) {
        $filename = $request->file('filename3')->store('public');
        $photo->filename3 = basename($filename);
    }
    $photo->save();
    return redirect()->back()->with('success', 'Photos uploaded successfully.');

    return redirect('/save');
}


    public function view($id)
    {
        $photo = Photo::findOrFail($id);
        $url = Storage::url($photo->filename);
        return view('photo.view', compact('photo', 'url'));
    }

    public function download($id,$filename)
    {
        // $photo = Photo::findOrFail($id);
        $photo = Photo::where('id', $id)->where('filename1',$filename)->firstOrFail();
        $path = Storage::path($photo->filename);
        return response()->download($path);
    }





    public function index()
    {
        return view('Driver.test');
    }


    // public function downloadByName($filename)
    // {
    //     $photo = Photo::where('filename1', $filename)->first();
    //     if (!$photo) {
    //         abort(404);
    //     }

    //     $pathToFile = storage_path('app/' . $photo->filename);
    //     $headers = [
    //         'Content-Type' => 'application/octet-stream',
    //     ];
    //     $fileName = basename($pathToFile);

    //     return response()->download($pathToFile, $fileName, $headers);
    // }

//     public function downloadPhoto($id, $filename)
// {
//     $photo = Photo::where('id', $id)->where('filename', $filename)->firstOrFail();
//     $pathToFile = storage_path('app/photos/' . $photo->filename);
//     return response()->download($pathToFile);
// }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
