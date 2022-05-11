<?php 

require_once 'model/hour.php';

class Day{
    /** Attributes */
    
    /** Methods */
    public function save(){
        //6
        $h6 = new Hour(NULL, '6-7', '', 'default-c', '');
        
        //7
        $h7 = new Hour(NULL, '7-8', '', 'default-c', '');
        
        //8
        $h8 = new Hour(NULL, '8-9', '', 'default-c', '');
        
        //9
        $h9 = new Hour(NULL, '9-10', '', 'default-c', '');
        
        //10
        $h10 = new Hour(NULL, '10-11', '', 'default-c', '');
        
        //11
        $h11 = new Hour(NULL, '11-12', '', 'default-c', '');
        
        //12
        $h12 = new Hour(NULL, '12-13', '', 'default-c', '');
        
        //13
        $h13 = new Hour(NULL, '13-14', '', 'default-c', '');
        
        //14
        $h14 = new Hour(NULL, '14-15', '', 'default-c', '');
        
        //15
        $h15 = new Hour(NULL, '15-16', '', 'default-c', '');
        
        //16
        $h16 = new Hour(NULL, '16-17', '', 'default-c', '');
        
        //16
        $h17 = new Hour(NULL, '17-18', '', 'default-c', '');
        
        //17
        $h18 = new Hour(NULL, '18-19', '', 'default-c', '');
        
        //18
        $h19 = new Hour(NULL, '19-20', '', 'default-c', '');
        
        //19
        $h20 = new Hour(NULL, '20-21', '', 'default-c', '');
        
        //20
        $h21 = new Hour(NULL, '21-22', '', 'default-c', '');


        $sql = "INSERT INTO day VALUES(NULL)";    
    }
}