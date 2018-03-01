<?php
class Router
{
	function __construct()
	{
		$this->GetUrl();
	}
	private function GetUrl()
	{
		$uri = explode('/', $_SERVER['REQUEST_URI']);
		$this->uri = $uri[1];
	}
	public function GetFile($lang)
	{
		$uri = $this->uri;
		if (empty($uri)) 
		{
			include ('./layout/default.php');
		} 
		else 
		{
			if(!@include ('./layout/'.$uri.'.php'))
			{
				include ('./layout/e404.php');
			}
		}		
	}
	public function GetFullUrl() 
	{
		return substr($_SERVER['REQUEST_URI'], 1);
	}
	public function GetPageName()
	{
		return $this->uri;
	}
	public function includeLang() {
        if(empty($_SESSION['lang'])){
            $lang = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
            $lang = explode(';', $lang[1]);
            $_SESSION['lang'] = $lang[0];
            $lang = 'lang/'.$_SESSION['lang'].'.ini';
            if(file_exists($lang)) 
            {
                return parse_ini_file($lang);
            } 
            elseif ($_SESSION['lang'] == 'sk') 
            {
            	$_SESSION['lang'] = 'cs';
            	return parse_ini_file('lang/cs.ini');
            }
            else 
            {
                $_SESSION['lang'] = 'en';
                return parse_ini_file('lang/en.ini');
            }
        } 
        else 
        {
            $lang = 'lang/'.$_SESSION['lang'].'.ini';
            if(file_exists($lang)) 
            {
                return parse_ini_file($lang);
            } 
            else 
            {
                return parse_ini_file('lang/en.ini');
            }
        }
    }
}
?>