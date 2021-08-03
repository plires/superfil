<?php

abstract class Repositorio {
  protected $repoProducts;
  protected $repoContacts;

  public function getRepoProducts() {
    return $this->repoProducts;
  }

  public function getRepoContacts() {
    return $this->repoContacts;
  }

}

?>