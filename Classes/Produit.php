<?php
    class Produit
    {
        // private $id_produit;
        private $nom_produit;
        private $description_article;
        private $taille_article;
        private $genre_article;
		private $prix_vente;
		private $prix_d_achat;

	public function getPrix_d_achat() {
		return $this ->prix_d_achat;
	}

	public function setPrix_d_achat($prix_d_achat) {
		$this ->prix_d_achat = $prix_d_achat;
	}

	public function getTaille_article() {
		return $this ->taille_article;
	}

	public function setTaille_article($taille_article) {
		$this ->taille_article = $taille_article;
	}

	public function getGenre_article() {
		return $this ->genre_article;
	}

	public function setGenre_article($genre_article) {
		$this ->genre_article = $genre_article;
	}


	public function getId_produit() {
		return $this->id_produit;
	}

	public function setId_produit($id_produit) {
		$this->id_produit = $id_produit;
	}

	public function getNom_produit() {
		return $this->nom_produit;
	}

	public function setNom_produit($nom_produit) {
		$this->nom_produit = $nom_produit;
	}

	public function getDescription_article() {
		return $this->description_article;
	}

	public function setDescription_article($description_article) {
		$this->description_article = $description_article;
	}

	public function getPrix_vente() {
		return $this->prix_vente;
	}

	public function setPrix_vente($prix_vente) {
		$this->prix_vente = $prix_vente;
	}


        public function __construct()
        {
            
        }
    }
?>