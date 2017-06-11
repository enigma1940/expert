<?php
  class Document{
    private $id, $theme, $type, $auteur, $annee, $universite_id, $filiere_id, $admin_id, $contenu, $mailAuteur, $contactAuteur;
    public function __construct(){}

    public function getId(){return $this->id;}
    public function getTheme(){return $this->theme;}
    public function getType(){return $this->type;}
    public function getAuteur(){return $this->auteur;}
    public function getAnnee(){return $this->annee;}
    public function getUniversite_id(){return $this->universite_id;}
    public function getFiliere_id(){return $this->filiere_id;}
    public function getAdmin_id(){return $this->admin_id;}
    public function getContenu(){return $this->contenu;}
    public function getMailAuteur(){return $this->mailAuteur;}
    public function getContactAuteur(){return $this->contactAuteur;}

    public function setId($i){$this->id=$i;}
    public function setTheme($i){$this->theme=$i;}
    public function setType($i){$this->type=$i;}
    public function setAuteur($i){$this->auteur=$i;}
    public function setAnnee($i){$this->annee=$i;}
    public function setUniversite_id($i){$this->universite_id=$i;}
    public function setFiliere_id($i){$this->filiere_id=$i;}
    public function setAdmin_id($i){$this->admin_id=$i;}
    public function setContenu($i){$this->contenu=$i;}
    public function setMailAuteur($i){$this->mailAuteur=$i;}
    public function setConactAuteur($i){$this->contactAuteur=$i;}

    public function hydrate(array $d){
		  foreach($d as $key => $value){
			  $method = 'set'.ucfirst($key);
			  if(method_exists($this, $method)){
 				   $this->$method($value);
			  }
		  }
  	}

    public function create($bdd){
      $req=$bdd->prepare('INSERT INTO document(theme, type, auteur, mailAuteur, contactAuteur, annee, filiere_id, universite_id, admin_id, contenu) VALUES(:theme, :type, :auteur, :mailAuteur, :contactAuteur, :annee, :filiere_id, :universite_id, :admin_id, :contenu)');
      $req->execute(array(
        ':theme'=>$this->getTheme(),
        ':type'=>$this->getType(),
        ':auteur'=>$this->getAuteur(),
        ':annee'=>$this->getAnnee(),
        ':universite_id'=>$this->getUniiversite_id(),
        ':filiere_id'=>$this->getFiliere_id(),
        ':admin_id'=>$this->getAdmin_id(),
        ':contenu'=>$this->getContenu(),
        ':mailAuteur'=>$this->getMailAuteur(),
        ':contactAuteur'=>$this->getContactAuteur()
      ));
    }

    public function read($bdd){
      $req=$bdd->prepare('SELECT * FROM document WHERE id=?');
      $req->execute(array($this->getId()));
      while($data=$req->fetch()){
        $this->hydrate($data);
      }
    }

  }
?>
