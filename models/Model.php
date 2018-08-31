<?php
/**
 *
 */
class Model
{
    //@TODO remove the properties and put them inside a non commitable config file
    protected $dbConnec;
    protected $tableName;

    function __construct()
    {
        $aConf = parse_ini_file ("config.ini",true);
        $sDbName = $aConf["model"]["dbName"];
        $sUser = $aConf["model"]["user"];
        $sPass = $aConf["model"]["pass"];


        $this->dbConnec = new PDO('mysql:host=localhost;dbname=' . $sDbName, $sUser, $sPass);
    }

    public function getAll()
    {
        $request = $this->dbConnec->prepare('SELECT * FROM ' . $this->tableName);
        $request->execute();
        $results = $request->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public function getOne($identifierKey, $identifierValue)
    {
        $request = $this->dbConnec->prepare('SELECT * FROM ' . $this->tableName . ' WHERE ' . $identifierKey .  ' = "' . $identifierValue . '" LIMIT 1');
        $request->execute();
        $results = $request->fetchAll(PDO::FETCH_OBJ);
        return $results[0];
    }
    public function insert($aParams)
    {
        // var_dump('INSERT INTO '.$this->tableName.'(title, content, hidden) VALUES('.$aParams['sTitle'].', '.$aParams['sContent'].', '.$aParams['bHidden'].')');die;
        $request = $this->dbConnec->prepare('INSERT INTO '.$this->tableName.'(title, content, hidden) VALUES("'.$aParams['sTitle'].'", "'.$aParams['sContent'].'", "'.$aParams['bHidden'].'")');
        $request->execute();
    }
}
