<?php
  class Document{
    private $id, $theme, $type, $user_id, $annee, $universite_id, $filiere_id, $admin_id;
    public function __construct(){}

    public function getId(){return $this->id;}
    public function getTheme(){return $this->theme;}
    public function getType(){return $this->type;}

  }
?>
