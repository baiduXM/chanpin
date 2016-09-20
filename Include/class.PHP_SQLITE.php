<?php
/**
 * SQLITE+php
 * User:lushaobo
 * Last Modified: 2009-11-26
 * $DB=new SQLite('blog.db');  //这个数据库文件名字任意
 * $DB->Query("create table test(id integer primary key,title varchar(50)"); //创建数据库表
 * $DB->Query("insert into test(title) values('泡菜')"); //接下来添加数据
 * //读取数据
 * $SQL='select title from test order by id desc';       
	foreach($DB->Query($SQL) as $RS){       
    echo $RS['title'];       
	} 
 */
class SQLite{    
    function __construct($file){    
        try{    
            $this->Connection=new PDO('sqlite2:'.$file);    
        }catch(PDOException $e){    
            try{    
                $this->Connection=new PDO('sqlite:'.$file);    
            }catch(PDOException $e){    
                exit('error!');    
            }    
        }    
    }    
    function __destruct(){    
        $this->Connection=null;    
    }    
    function Query($SQL){    
        return $this->Connection->Query($SQL);    
    }    
    function Execute($SQL){    
        return $this->Query($SQL)->fetch();    
    }    
    function RecordArray($SQL){    
        return $this->Query($SQL)->fetchAll();    
    }    
    function RecordCount($SQL){    
        return count($this->RecordArray($SQL));    
    }    
    function RecordLastID(){    
        return $this->Connection->lastInsertId();    
    }    
}   

?>