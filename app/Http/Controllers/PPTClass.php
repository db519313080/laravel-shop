<?php

namespace App\Http\Controllers;

use PhpOffice\PhpPresentation\IOFactory;
use Intervention\Image\Facades\Image;

class PPTClass
{
    // 图片原始路径
    private $original_path = 'C:\Users\dangbing.MI\Desktop\img\\';

    // 截取后保存路径
    private $save_path = 'C:\Users\dangbing.MI\Desktop\img\result\\';

    // 临时图片路径
    private $tmp_path = 'C:\Users\dangbing.MI\Desktop\img\\';

    // 文件类型
    private $ext;

    // 截取的高度
    private $canvas_height;

    // 截取的宽度
    private $canvas_width;

    // ppt幻灯片数量
    private $num;

    public function __construct($param = ['height'=>1000,'width'=>563])
    {
        if(isset($param['original_path'])) {
            $this->original_path = $param['original_path'];
        }
        if(isset($param['save_path'])) {
            $this->save_path = $param['save_path'];
        }
        if(isset($param['tmp_path'])) {
            $this->tmp_path = $param['tmp_path'];
        }
        if(isset($param['height'])) {
            $this->canvas_height = $param['height'];
        }
        if(isset($param['width'])) {
            $this->canvas_width = $param['width'];
        }
    }

    /**
     * 截取图片
     * @param string $name 被截取图片名
     * @param int $num 截取图片数量
     * @return $this
     */
    public function intercepringImg($name = '2017-12.jpeg',$num = 15)
    {
        $this->num = $num;
        if(!file_exists($this->original_path.$name)) {
            throw new \Exception('图片不存在');
        }
        // 文件类型
        $this->ext = pathinfo($this->original_path.$name, PATHINFO_EXTENSION);

        $img = Image::make($this->original_path.$name);
        // backup status
        $img->backup();

        $width = $this->canvas_width;
        $height = $this->canvas_height;

        // 第一张
        $img->resizeCanvas($height, $width, 'top-left');
        $img->save($this->save_path . '1.' . $this->ext);
        $img->reset();

        // 第2 -- $num 张中间过度图片
        for($i=2; $i<=$num; $i++) {
            $width_res = $i * $width + ($i-1) * 10;
            $img->resizeCanvas($height, $width_res, 'top-left');
            $img->save($this->tmp_path .$i.'.' . $this->ext);
            $img->reset();
        }
        $img->destroy();

        // 生成第2 -- $num
        for($j=2;$j<=$num;$j++) {
            $img = Image::make($this->tmp_path.$j.'.' . $this->ext);
            $img->resizeCanvas($height, $width, 'bottom-left');
            $img->save($this->save_path.$j.'.' . $this->ext);
            $img->destroy();
            unlink($this->tmp_path.$j.'.' . $this->ext);
        }
        return $this;
    }

    /**
     * 生成ppt文件
     * @param $template_file
     * @param $save_path
     * @param $name
     * @return $this
     */
    public function creatPPT($template_file,$save_path,$name)
    {
        if(!file_exists($template_file)) {
            throw new \Exception('模板文件不存在');
        }
        //读取模板实例
        $oReader = IOFactory::createReader('PowerPoint2007');
        $objPHPPowerPoint = $oReader->load($template_file);
        for($i=1;$i<=$this->num;$i++) {
            $currentSlide = $objPHPPowerPoint->createSlide();
            $shape = $currentSlide->createDrawingShape();
            $shape->setName('datastone')
                ->setDescription('datastone')
                ->setPath($this->save_path .$i.'.' . $this->ext)
                ->setHeight(1890) // 手动调试出的数值
                ->setWidth(960)   // 手动调试出的数值
                ->setOffsetX(0)
                ->setOffsetY(0);
        }
        $oWriterPPTX = IOFactory::createWriter($objPHPPowerPoint, 'PowerPoint2007');
        $oWriterPPTX->save($save_path.$name);
        return $this;
    }
}