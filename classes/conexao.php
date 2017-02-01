<?php

class conexao {
    
    public $dbhost; // servidor
    public $dbuser ; // usuario do banco
    public $dbpass ; // senha do usuario do banco
    public $dbname ; // nome do banco

    private $con = false;

    public function _set($atrib,$valor){
            $this ->$atrib = $valor;
        
    }
  public function _get($atrib){
      return $this->$atrib;
  }


  public function connect() // estabelece conexao
    {
        if(!$this->con)
        {
            $myconn = @mysql_connect($this->dbhost,$this->dbuser,$this->dbpass);
            if($myconn)
            {
                $seldb = @mysql_select_db($this->dbname,$myconn);
                if($seldb)
                {
                    $this->con = true;
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return true;
        }
    }

  
    public function disconnect() // fecha conexao
    {
    if($this->con)
    {
        if(@mysql_close())
        {
                        $this->con = false;
            return true;
        }
        else
        {
            return false;
        }
    }
    }
     
}
