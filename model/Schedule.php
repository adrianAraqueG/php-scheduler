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
                    "mon-6" => array(
                        "title" => "Monday madafaka",
                        "markup" => "1",
                        "cell-color" => "red-c",
                        "description" => ""
                    ),
                    "mon-7" => array(
                        "title" => "Otra",
                        "markup" => "1",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-8" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-9" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-10" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-11" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-12" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-13" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-14" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-15" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-16" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-17" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-18" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-19" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-20" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "mon-21" => array(
                        "title" => "M",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "tuesday" => array(
                    "tue-6" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-7" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-8" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-9" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-10" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-11" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-12" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-13" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-14" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-15" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-16" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-17" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-18" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-19" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-20" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "tue-21" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "wednesday" => array(
                    "wed-6" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-7" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-8" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-9" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-10" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-11" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-12" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-13" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-14" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-15" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-16" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-17" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-18" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-19" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-20" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "wed-21" => array(
                        "title" => "W",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "thursday" => array(
                    "thu-6" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-7" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-8" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-9" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-10" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-11" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-12" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-13" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-14" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-15" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-16" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-17" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-18" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-19" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-20" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "thu-21" => array(
                        "title" => "T",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "friday" => array(
                    "fri-6" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-7" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-8" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-9" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-10" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-11" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-12" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-13" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-14" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-15" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-16" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-17" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-18" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-19" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-20" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "fri-21" => array(
                        "title" => "F",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "saturday" => array(
                    "sat-6" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-7" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-8" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-9" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-10" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-11" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-12" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-13" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-14" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-15" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-16" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-17" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-18" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-19" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-20" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sat-21" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                ),
                "sunday" => array(
                    "sun-6" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-7" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-8" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-9" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-10" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-11" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-12" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-13" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-14" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-15" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-16" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-17" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-18" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-19" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-20" => array(
                        "title" => "S",
                        "markup" => "0",
                        "cell-color" => "default-c",
                        "description" => ""
                    ),
                    "sun-21" => array(
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