<?php
namespace common\models;
use yii\base\Model;
use yii\web\UploadedFile;
use common\models\Image;

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
        $image = new Image();
        if ($this->validate()) {
            $image->image = $this->image->saveAs('uploads/' . $this->image->baseName . '.' . $this->image->extension);
            
            return true;
        } else {
            return false;
        }
    }
}