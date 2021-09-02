<?php
class Realestate {
    private $db;
 
    public function __construct() {
        $this -> db = new Database;
    }

    // Uzmi sve nekretnine iz baze
    public function getAllRealestate() {
        $this -> db -> query("SELECT realestate.*, categories.name AS cname
                            FROM realestate
                            INNER JOIN categories
                            ON realestate.category_id = categories.id
                            ORDER BY post_date DESC
                            ");

        $results = $this -> db -> resultSet();

        return $results;
    }

    // Uzmi sve kategorije
    public function getCategories() {
        $this -> db -> query("SELECT *FROM categories");

        $results = $this -> db -> resultSet();

        return $results;
    }

    // Uzmi nekretnine po kategoriji
    public function getByCategory($category) {
        $this -> db -> query("SELECT realestate.*, categories.name AS cname
                            FROM realestate
                            INNER JOIN categories
                            ON realestate.category_id = categories.id
                            WHERE realestate.category_id = $category
                            ORDER BY post_date DESC
                            ");

        $results = $this -> db -> resultSet();

        return $results;
    }

    // Uzmi jednu kategoriju
    public function getCategory($category_id) {
        $this -> db -> query("SELECT * FROM categories WHERE id = :category_id");

        $this -> db -> bind(':category_id', $category_id);

        //uzmi red
        $row = $this -> db -> single();

        return $row;
    }

    // Uzmi jednu nekretninu
    public function getRealestate($id) {
        $this -> db -> query("SELECT * FROM realestate WHERE id = :id");

        $this -> db -> bind(':id', $id);

        // uzmi red
        $row = $this -> db -> single();

        return $row;
    }

    // Kreiraj nekretninu
    public function create($data) {
        $this -> db -> query("INSERT INTO realestate (category_id, realestate_title, company, description, location, price, contact_agent, contact_email)
                            VALUES (:category_id, :realestate_title, :company, :description, :location, :price, :contact_agent, :contact_email)");

        // Bind data
        $this -> db -> bind(':category_id', $data['category_id']);
        $this -> db -> bind(':realestate_title', $data['realestate_title']);
        $this -> db -> bind(':company', $data['company']);
        $this -> db -> bind(':description', $data['description']);
        $this -> db -> bind(':location', $data['location']);
        $this -> db -> bind(':price', $data['price']);
        $this -> db -> bind(':contact_agent', $data['contact_agent']);
        $this -> db -> bind(':contact_email', $data['contact_email']);

        // Execute
        if($this -> db -> execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Obrisi nekretninu
    public function delete($id) {
        $this -> db -> query("DELETE FROM realestate WHERE id = $id");

        // Execute
        if($this -> db -> execute()) {
        return true;
        } else {
        return false;
        }
    }

    // Update nekretnine
    public function update($id, $data) {
        $this -> db -> query("UPDATE realestate SET category_id = :category_id, realestate_title = :realestate_title, company = :company, description = :description, location = :location, price = :price, contact_agent = :contact_agent, contact_email = :contact_email WHERE id = $id");

        // Bind data
        $this -> db -> bind(':category_id', $data['category_id']);
        $this -> db -> bind(':realestate_title', $data['realestate_title']);
        $this -> db -> bind(':company', $data['company']);
        $this -> db -> bind(':description', $data['description']);
        $this -> db -> bind(':location', $data['location']);
        $this -> db -> bind(':price', $data['price']);
        $this -> db -> bind(':contact_agent', $data['contact_agent']);
        $this -> db -> bind(':contact_email', $data['contact_email']);

        // Execute
        if($this -> db -> execute()) {
            return true;
        } else {
            return false;
        }
    }
}