<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public $image_conent_db = 'public/images/page/';
    public $image_conent_view = 'storage/images/page/';

    public function alert_success ()
    {
        Session::flash('success', 'Запрос успешный!');
    }

    public function alert_error ()
    {
        Session::flash('error', 'Запрос с ошиюкой');
    }

    public function image_upload (UploadedFile $file, Model $model)
    {
        $file_name = time() . '.' . $file->extension();
        $file->storeAs($this->image_conent_db, $file_name);
        $model->images()->create(['image' => $this->image_conent_view . $file_name]);
    }

    public function image_update (UploadedFile $file, Model $model)
    {
        $file_name = time() . '.' . $file->extension();
        $file->storeAs($this->image_conent_db, $file_name);
        $model->images()->delete();
        $model->images()->create(['image' => $this->image_conent_view . $file_name]);
    }

    public function image_delete (Model $model)
    {
        foreach($model->images()->get() as $image)
        {
            $image->delete();
        }
    }
}
