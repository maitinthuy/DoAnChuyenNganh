<?php

class B
{	
	public $conn;
	private $num;
	
	public function __construct()// mac dinh, tu dong chay
	{
			$this->conn = new PDO("mysql:host=localhost; dbname=web", "root", "");
			$this->conn->query("set names 'utf8' ");
			
	}
	function query($sql, $arr= array())
		{
				$sth= $this->conn->prepare($sql);
				$sth->execute($arr);
				$this->num = $sth->rowCount();
				return $sth->fetchAll(PDO::FETCH_ASSOC);
		}
	
	
	public function getNum(){return $this->num;}
	public function exeQuery($sql,  $arr = array(), $mode = PDO::FETCH_ASSOC)
		{
			return $this->query($sql, $arr, $mode);	
		}
	
	function select($sql, $arr= array())
	{
		return $this->query($sql, $arr);	
		
	}
	function insert($sql, $arr= array())
	{
		 $this->query($sql, $arr);	
		 return $this->num;
		
	}
	function update($sql, $arr= array())
	{
		 $this->query($sql, $arr);	
		 return $this->num;
		
	}
	function delete($sql, $arr= array())
	{
		 $this->query($sql, $arr);	
		 return $this->num;
		
	}
	public function getRowCount()
		{
			return $this->_numRow;	
		}
}


?>