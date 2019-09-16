<?php
namespace common\models;
use yii\base\Model;
use yii\web\UploadedFile;
use common\models\Image;
use phpDocumentor\Reflection\Types\String_;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    //public $id;
    public $image;
//     public $category_id;
//     public $updated_at;
//     public $parent_id;
//     public $crated_at;
    
    public function rules()
    {
        return [
//             [['id', 'image'], 'required'],
//             [['id', 'category_id', 'parent_id', 'updated_at', 'created_at'], 'integer'],
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }
    
    public function upload()
    {
        $img = new Image();
        if ($this->validate()) {
            $this->image->saveAs('uploads/' .$_SERVER['REQUEST_TIME'].
            '-'.
            $this->image->baseName .
            '.' . 
            $this->image->extension/* 文件后缀 */);
            
            $img->image ='admin/uploads/' .$_SERVER['REQUEST_TIME'].
            '-'.
            $this->image->baseName .
            '.' .
            $this->image->extension ;
            
            
            $img->save(FALSE);
            
            return true;
        } else {
            return false;
        }
    }
}