<?php
class Issue{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //fetch all issues
    public function getAllIssues(){
        $this->db->query("SELECT issues.*, categories.name AS cname FROM issues INNER JOIN categories ON issues.category_id = categories.id ORDER BY issue_date DESC");

        //assign result set
        $results = $this->db->resultSet();

        return $results;
    }

    //get categories
    public function getCategories(){
        $this->db->query("SELECT * FROM categories");

        //assign result set
        $results = $this->db->resultSet();

        return $results;
    }

    //get issues by category
    public function getByCategory($category){
        $this->db->query("SELECT issues.*, categories.name AS cname FROM issues INNER JOIN categories ON issues.category_id = categories.id WHERE issues.category_id = $category ORDER BY issue_date DESC");

        //assign result set
        $results = $this->db->resultSet();

        return $results;
    }

    //get category 
    public function getCategory($category_id){
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");
        //bind value
        $this->db->bind(':category_id', $category_id);

        //assign role
        $row = $this->db->single();

        return $row;
    }

    //get issue
    public function getIssue($id){
        $this->db->query("SELECT * FROM issues WHERE id = :id");
        //bind value
        $this->db->bind(':id', $id);

        //assign role
        $row = $this->db->single();

        return $row;
    }
}

?>