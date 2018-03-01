<?php
class SelectProject
{
	function __construct()
	{
		$this->SetProjectName();
	}
	private function SetProjectName() 
	{
		$uri = explode('/', $_SERVER['REQUEST_URI']);
		$this->uri = $uri[2];
	}
	public function GetProject()
	{
		$uri = $this->uri;
		if (empty($uri)) 
		{
			include ('./layout/default.php');
		} 
		else 
		{
			if(!@include ('./layout/projects/'.$uri.'.php'))
			{
				include ('./layout/e404.php');
			}
		}
	}
	public function AnotherProject()
	{
		$scandir = scandir('./layout/projects/');
		print_r($scandir);
		$n = 0;
		for ($i=1; $i < sizeof($scandir); $i++) { 
			$filename = $i.'.php';
			if (in_array($filename, $scandir)) {
				$arr[$i] = $i;
			}
		}
		$slice = array_slice($arr, $this->uri);
		print_r($slice);
		$random = random_int(0, sizeof($slice)-1);
		return $slice[$random];
	}
}
?>