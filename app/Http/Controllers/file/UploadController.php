<?php namespace app\Http\Controllers\file;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use app\Http\Requests;
use app\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UploadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public  $blogImgPath="image/blog/";
    public $portraitImgPath='image/portraits/';
    public $defaultPortraitImgPath='image/portraits/default.jpg';
	public function postBlog(Request $request)
	{
		$file =$request->file('upload');
        if($request->hasFile('upload'))
        {
            try
            {
                $filename=md5(time().rand()). '.'.substr($file->getMimeType(),strrpos( $file->getMimeType(),'/')+1);
                $file->move($this->blogImgPath,$filename);
                $callback =$request->get("CKEditorFuncNum");
                $path= $_SERVER['HTTP_ORIGIN'].'/'.$this->blogImgPath.$filename;

        echo "<script type=\"text/javascript\">";

        echo "window.parent.CKEDITOR.tools.callFunction('$callback','$path')";

       echo "</script>";

            }catch (FileException $e)
            {

            }

        }
	}
    public function postPortrait(Request $request)
    {
        $file =$request->file('file');
        if($request->hasFile('file'))
        {
            try
            {
                $filename=md5(time().rand()). '.'.substr($file->getMimeType(),strrpos( $file->getMimeType(),'/')+1);
                $file->move($this->portraitImgPath,$filename);

                $path= '/'.$this->portraitImgPath.$filename;

                return ['status'=>1,'url'=>$path];


            }catch (FileException $e)
            {
                return ['status'=>0];
            }

        }
    }



}
