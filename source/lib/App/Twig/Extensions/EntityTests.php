<?php
namespace App\Twig\Extensions;

use Twig_Extension;
use App\Model\Entities\Article;
use App\Model\Entities\Event;
use App\Model\Entities\Location;
use App\Model\Entities\Upload;
use App\Model\Entities\UploadImage;

class EntityTests extends Twig_Extension
{
    public function getName()
    {
        return 'history-wiki-entity-tests';
    }
    
    public function getTests()
    {
        return array(
            new \Twig_SimpleTest('Article', function ($entity) {
                return $entity instanceof Article;
            }),
            new \Twig_SimpleTest('Event', function ($entity) {
                return $entity instanceof Event;
            }),
            new \Twig_SimpleTest('Location', function ($entity) {
                return $entity instanceof Location;
            }),
            new \Twig_SimpleTest('Upload', function ($entity) {
                return $entity instanceof Upload;
            }),
            new \Twig_SimpleTest('UploadImage', function ($entity) {
                return $entity instanceof UploadImage;
            })
        );
    }
}
