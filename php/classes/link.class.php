<?php
  class Link{
    private $id, $nomAuteur, $annee, $univ_id, $filiere_id, $admin_id, $theme, $mailAuteur, $contactAuteur;

    public function getId(){return $this->id;}
    public function getNomAuteur(){return $this->nomAuteur;}
    public function getAnnee(){return $this->annee;}
    public function getUniv_id(){return $this->univ_id;}
    public function getFiliere_id(){return $this->filiere_id;}
    public function getAdmin_id(){return $this->admin_id;}
    public function getTheme(){return $this->theme;}
    public function getMailAuteur(){return $this->mailAuteur;}
    public function getContactAuteur(){return $this->contactAuteur;}

    public function setId($i){$this->id=$i;}
    public function setTheme($i){$this->theme=$i;}
    public function setNomAuteur($i){$this->nomAuteur=$i;}
    public function setAnnee($i){$this->annee=$i;}
    public function setUniv_id($i){$this->univ_id=$i;}
    public function setFiliere_id($i){$this->filiere_id=$i;}
    public function setAdmin_id($i){$this->admin_id=$i;}
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
    //  $req=$bdd->prepare('INSERT INTO link(nomAuteur, annee, univ_id, filiere_id, admin_id, theme, mailAuteur, contactAuteur)');
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
