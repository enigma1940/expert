<?php
  class Admin{
    private $id, $nom, $prenom, $uname, $password, $email, $contact, $lastlogin;

    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getUname(){return $this->uname;}
    public function getPassword(){return $this->password;}
    public function getEmail(){return $this->email;}
    public function getContact(){return $this->contact;}
    public function getLastlogin(){return $this->lastlogin;}
    //public function getPhoto(){return $this->photo;}

    public function setId($i){$this->id=$i;}
    public function setNom($i){$this->nom=$i;}
    public function setPrenom($i){$this->prenom=$i;}
    public function setUname($i){$this->uname=$i;}
    public function setPassword($i){$this->password=$i;}
    public function setEmail($i){$this->email=$i;}
    public function setContact($i){$this->contact=$i;}
    public function setLastlogin($i){$this->lastlogin;}
    //public function setPhoto($i){$this->photo=$i;}

    public function __construct(){}

    public function hydrate(array $d){
		  foreach($d as $key => $value){
			  $method = 'set'.ucfirst($key);
			  if(method_exists($this, $method)){
 				   $this->$method($value);
			  }
		  }
  	}

    public function auth($bdd){
      $r=$bdd->prepare('SELECT id FROM admin WHERE username=? AND password=?');
      $r->execute(array($this->getUname(), $this->getPassword()));
      if($r->rowCount()==1){
        $d=$r->fetch();
        $this->setId($d['id']);
        return 1;
      }else{return 0;}
    }

    public function read($bdd){
      $req=$bdd->prepare('SELECT * FROM user WHERE ID=?');
      $req->execute(array($this->getId()));
      while($data=$req->fetch(PDO::FETCH_ASSOC)){
        $this->hydrate($data);
      }
    }

    public function create($bdd){
      $req=$bdd->prepare('INSERT INTO user(nom, prenom, uname, password, email, contact) VALUES(:nom, :prenom, :uname, :password, :email, :contact)');
      $req->execute(array(
        ':nom'=>$this->getNom(),
        ':prenom'=>$this->getPrenom(),
        ':uname'=>$this->getUname(),
        ':password'=>$this->getPassword(),
        ':email'=>$this->getEmail(),
        ':contact'=>$this->getContact()
        //':photo'=>$this->getPhoto()
      ));
    }

    /*public function updatePhoto($bdd){
      $r = $bdd->prepare('UPDATE user SET photo=? WHERE id=?');
      $r->execute(array($this->getPhoto(), $this->getId()));
    }*/

    public function userUpdate($bdd){
      $req=$bdd->prepare('UPDATE user SET nom=:nom, prenom=:prenom, uname=:uname, password=:password, email=:email, contact=:contact WHERE ID=:id');
      $req->execute(array(
        ':nom'=>$this->getNom(),
        ':prenom'=>$this->getPrenom(),
        ':uname'=>$this->getUname(),
        ':password'=>$this->getPassword(),
        ':email'=>$this->getEmail(),
        ':contact'=>$this->getContact(),
        ':id'=>$this->getId()
        //':photo'=>$this->getPhoto()
      ));
    }
    public function userName($bdd){
      $r=$bdd->prepare('SELECT uname FROM user WHERE ID=?');
      $r->execute(array($this->getId()));
      $d=$r->fetch();
      $this->setUname($d['uname']);
    }
  }
?>
