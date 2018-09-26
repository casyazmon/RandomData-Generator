<?php

	require "config/database.php";
	require "config/db_config.php";
	require "model/word.php";


	// $wrd = new Word();
	// $config = new  DbConfig();
	// $conn = $config->getConnection();

	// $db = new Database($conn);


	
	// function to generate random words of specific length ($length)
	function randw($length=4, $num){
		$words = array(); // array to store generated words

		for ($i=0; $i < $num; $i++) { 
			$word = substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"),0,$length);
			array_push($words, $word); // add word to array
			
		}

        return $words;
    }


    // Function to store generated words into DB
    function loadGeneratedData($number)
    {
    	$wrd = new Word();
		$config = new  DbConfig();
		$conn = $config->getConnection();

		$db = new Database($conn);
    	$myWords = randw(5, $number);
    	//$db->creat("words", $myWords);
    

	    foreach ($myWords as $word) {
	    	
	    	$wrd->setWord($word);
	    	echo $word . "<br/>";
	    	$db->create("word", $wrd->toArray());
	    	
	    }
    }



    // Tes.....t Generate four random words and store into the DB
    loadGeneratedData(4);

    

?>
