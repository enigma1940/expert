<?php
  class Filiere{
    private $id, $nom, $code;
    public function __construct(){$this->code='';}
    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getCode(){return $this->code;}

    public function setId($i){$this->id=$i;}
    public function setNom($i){$this->nom=$i;}
    public function setCode($i){$this->code=$i;}

    public function hydrate(array $d){
		  foreach($d as $key => $value){
			  $method = 'set'.ucfirst($key);
			  if(method_exists($this, $method)){
 				   $this->$method($value);
			  }
		  }
  	}

    public function create($bdd){
      $req=$bdd->prepare('INSERT INTO filiere(code, nom) VALUES(:code, :nom)');
      $req->execute(array(
        ':code'=>$this->getCode(),
        ':nom'=>$this->getNom()
      ));
    }

    public function read($bdd){
      $req=$bdd->prepare('SELECT * FROM universite WHERE id=?');
      $req->execute(array($this->getId()));
    }
  }
?>
