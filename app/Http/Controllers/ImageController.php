<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Config;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;
use App\ImageDetail;
use PHPUnit\Framework\MockObject\Stub\Exception;
use function Psy\debug;
use Lanin\Laravel\ApiDebugger\Debugger;

class ImageController extends ApiController
{
    public function show($image)
    {
        $path = Config::get('assets.uploads.images') . $image;

        $file = new Symfony\Component\HttpFoundation\File\File($path);

        $response = Response::make(File::get($path), 200);

        $response->header('Content-type', $file->getMimeType());

        return $response;
    }

    public function store(Request $request)
    {
        //  $this->validate($request, ['image' => 'required']);

        // $this->respond(['haha' => 'haha']);
        // Debugger::dump($request);

        // return  $this->respondCreated('Uploaded successfully', ['1' =>'bla bla']);
        // Handle File Upload
        try {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filenameToStore = time();
            $filenameToStoreWithExt = $filename.'_'.$filenameToStore.'.'.$extension;
            $path =  $request->file('image')->storeAs('public/uploads/images', $filenameToStoreWithExt);
            return $this->respond(['id' => $filenameToStoreWithExt]);
        }catch(Exception $e) {
            return $this->respondInternalError("Can't store image");
        }
       
    }
}
