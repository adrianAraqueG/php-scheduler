<?php 

class Hour{
    /** Attributes */
        public intervalHour;
        public subject;
        public color;
        public desc;

    /** Methods */
        public __construct(int_hour, subject, color, desc){
            $this->intervalHour = int_hour;
            $this->subject = subject;
            $this->color = color;
            $this->desc = desc;
        }

        public function save(){
            $sql = "INSERT INTO hour VALUES(NULL, '{$this->intervalHour}', '{$this->subject}', '$this->color', '$this->desc', CURDATE(), NULL)";
        }

}