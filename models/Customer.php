<?php
  class Customer {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function addCustomer($data) {
      // Prepare Query
      $this->db->query('INSERT INTO donor (id, firstName, surName, email, phoneNumber, street, number, postCode, city, country) VALUES(:id, :firstName, :surName, :email, :phoneNumber, :street, :number, :postCode, :city, :country)');

      // Bind Values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':firstName', $data['firstName']);
    $this->db->bind(':surName', $data['surName']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':phoneNumber', $data['phoneNumber']);
    $this->db->bind(':street', $data['street']);
    $this->db->bind(':number', $data['number']);
    $this->db->bind(':postCode', $data['postCode']);
    $this->db->bind(':city', $data['city']);
    $this->db->bind(':country', $data['country']);

      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getCustomers() {
      $this->db->query('SELECT * FROM donor');

      $results = $this->db->resultset();

      return $results;
    }
  }