<?php
namespace App\Model\Entities;

/**
 * @Entity
 */
class UploadImage extends Upload
{
    /**
     * @Column(type="integer", name="UploadImage_width", unique=false, nullable=false)
     */
    private $width = null;
    
    /**
     * @Column(type="integer", name="UploadImage_height", unique=false, nullable=false)
     */
    private $height = null;

    /**
     * Set width
     *
     * @param integer $width
     * @return UploadImage
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return UploadImage
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }
}
