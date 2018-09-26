<?php

	/**
	 * Words Model class
	 */
	class Word
	{
		
		private $word;


		public function setWord($w)
		{
			$this->word = $w;
		}

		public function getWord()
		{
			return $this->word;
		}

		public function toArray() {
        return [
            
            "word" => $this->getWord()            
        ];
    }
	}

?>