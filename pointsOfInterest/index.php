<?php 

// I want to know the best places to go in a city...

    if(isset($_GET["city"])){   // If I have a valid city...
        $city = $_GET["city"];

        $attractions = get_list_from_file();

        if (strcmp($city, "all") == 0){
            header("Content-type: application/json");  // Prepares browser for incoming JSON
            print_r(json_encode($attractions));     // Converts all $attractions in array to JSON
        }
        else{
            header("Content-type: text/plain");
        
            if(array_key_exists($city, $attractions)){
                echo "The best place to visit in ". $city ." is " .$attractions[$city]. ".\n";
            }
            else{
                echo "I did not find that on my list!  Perhaps we can add it someday.";
            }
        }
    }

    function get_list_from_file(){
        $contents = file("cities.txt", FILE_IGNORE_NEW_LINES);
        $attractions = array();
        foreach ($contents as $line){
            $parts = explode(",", $line);
            $attractions[$parts[0]] = $parts[1];
        }
        return $attractions;
    }

    /*
    function get_list(){
        // Hard code all the places and the attractions in those cities...
        $attractions = array("Seattle" => "Space Needle",
                            "New York" => "Ellis Island",
                            "Boston" => "Boston Harbor",
                            "Philadelphia" => "Valley Forge",
                            "Detriot" => "The Henry Ford Museum",
                            "Paris" => "Eiffel Tower",
                            "Vancouver BC" => "Stanley Park",
                            "Tokyo" => "Mt. Fuji",
                            "Beijing" => "Great Wall",
                            "London" => "Big Ben");

        return $attractions;
    }
    */








?>