<?php

//DBに接続する。
function connect(){
    $db = mysql_connect('localhost:8889', 'root', 'root');
    if (!$db) {
        exit('データベースに接続できませんでした。');
    }
    
    $result = mysql_select_db('pink_search', $db);
    mysql_set_charset('utf8');

    if (!$result) {
        exit('データベースを選択できませんでした。');
    }
    
    return $db;
}



//DBを閉じる。
function close($db) {
    
    mysql_close($db);
}
?>