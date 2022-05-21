<?php

class Schedule{

        public function __construct(){
            $this->db = DB::connect();
        }

    /**---------------------------------------- */
    /**---------------- Methods --------------- */
    /**---------------------------------------- */

        public function createSchedule($userID){
            
            // Schedule PHP General Structure

            $schedule = [
                "monday" => array(
                    "6" => array(
                        "title" => "Monday madafaka",
                        "markup" => "1",
                        "cell-color" => "red-c",
                        "description" => ""
                    ),
                    "7" => array(
                        "title" => "Otra",
                        "markup" => "1",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "8" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "9" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "10" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "11" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "12" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "13" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "14" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "15" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "16" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "17" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "18" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "19" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "20" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "21" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "tuesday" => array(
                    "6" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "7" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "8" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "9" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "10" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "11" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "12" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "13" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "14" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "15" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "16" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "17" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "18" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "19" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "20" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "21" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "wednesday" => array(
                    "6" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "7" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "8" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "9" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "10" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "11" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "12" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "13" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "14" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "15" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "16" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "17" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "18" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "19" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "20" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "21" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "thursday" => array(
                    "6" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "7" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "8" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "9" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "10" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "11" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "12" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "13" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "14" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "15" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "16" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "17" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "18" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "19" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "20" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "21" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "friday" => array(
                    "6" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "7" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "8" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "9" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "10" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "11" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "12" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "13" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "14" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "15" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "16" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "17" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "18" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "19" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "20" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "21" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "saturday" => array(
                    "6" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "7" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "8" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "9" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "10" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "11" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "12" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "13" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "14" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "15" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "16" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "17" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "18" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "19" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "20" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "21" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "sunday" => array(
                    "6" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "7" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "8" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "9" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "10" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "11" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "12" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "13" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "14" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "15" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "16" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "17" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "18" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "19" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "20" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "21" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
            ];

            $scheduleParsed = json_encode($schedule);

            // Add to DB

            $sql = "INSERT INTO schedule VALUES(null, {$userID}, '{$scheduleParsed}', CURDATE(), null)";

            try{
                if($this->db->query($sql)){
                    return true;
                }
            }catch(Exception $err){
                var_dump($err);
            }

        }

        public function getSchedule($userID){
            $sql = ("SELECT (data) FROM schedule WHERE user_id = {$userID}");

            try{

                $schedule = $this->db->query($sql)->fetch_object();
                return json_decode($schedule->data);

            }catch(Exception $err){
                var_dump($err);
            }

        }

}