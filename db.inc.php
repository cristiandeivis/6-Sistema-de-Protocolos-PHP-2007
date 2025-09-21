<?
     $db = @mysql_connect("localhost", "root", "")
	 or die("Ocorreu um erro durante a conexуo com o banco de dados.". mysql_error());
     mysql_select_db("protocolo", $db) or die ("Erro na seleчуo do banco: "  .mysql_error());	 
	 
?>