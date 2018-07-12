<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\IOFactory;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Alignment;

class TestController extends Controller
{
    public function test()
    {
        $objPHPPowerPoint = new PhpPresentation();

        // Create slide
        $currentSlide = $objPHPPowerPoint->getActiveSlide();

        // Create a shape (drawing)
        $shape = $currentSlide->createDrawingShape();
        $shape->setName('PHPPresentation logo')
            ->setDescription('PHPPresentation logo')
            ->setPath('C:\Users\dangbing.MI\Desktop\images\01.jpg')
            ->setHeight(100)
            ->setOffsetX(10)
            ->setOffsetY(10);
        $shape->getShadow()->setVisible(true)
            ->setDirection(45)
            ->setDistance(10);

        // Create a shape (text)
        $shape = $currentSlide->createRichTextShape()
            ->setHeight(300)
            ->setWidth(600)
            ->setOffsetX(170)
            ->setOffsetY(180);
        $shape->getActiveParagraph()->getAlignment()->setHorizontal( Alignment::HORIZONTAL_CENTER );
        $textRun = $shape->createTextRun('Thank you for using PHPPresentation!');
        $textRun->getFont()->setBold(true)
            ->setSize(60)
            ->setColor( new Color( 'FFE06B20' ) );

        $oWriterPPTX = IOFactory::createWriter($objPHPPowerPoint);
        $oWriterPPTX->save("C:\Users\dangbing.MI\Desktop\MyProject\sample.pptx");
        //$oWriterODP = IOFactory::createWriter($objPHPPowerPoint, 'ODPresentation');
        //$oWriterODP->save("C:\Users\dangbing.MI\Desktop\MyProject\sample.odp");
    }
}