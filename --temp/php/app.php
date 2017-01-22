<?php

	function editName( $name ){
		$name[0] = strtoupper($name[0]);
		for ($i=0; $i < strlen ($name) ; $i++) 
			if($name[$i] == "_" || $name[$i] == "-")
				$name[$i] = " ";			
		return $name;
	}

	function getAll( $path ){
		$dirsAndFiles = [];
		$dir = opendir($path);
		while(($file = readdir($dir)) !== false)
			if($file != "." && $file != ".." && $file != "index.php" && $file[0] != "-") 
				$dirsAndFiles[] = $file;
		
		closedir($dir);
		return $dirsAndFiles;
	}