<?php
class Exercises
{
    /**
     *
     */
    public function __construct()
    {
        
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'ID',
            'title' => 'Title',
            'thumbnail' => 'Thumbnail',
            'gif' => 'Gif',
            'seconds' => 'Seconds'
        ];

        return $ordering;
    }
}
?>
