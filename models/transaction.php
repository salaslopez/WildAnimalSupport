<?php
  class Transaction {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function addTransaction($data) {
      // Prepare Query
      $this->db->query('INSERT INTO transactions (id, description, messages, currency, price, donorId) VALUES(:id, :description, :messages, :currency, :price, :donorId)');

      // Bind Values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':messages', $data['messages']);
    $this->db->bind(':currency', $data['currency']);
    $this->db->bind(':price', $data['price']);
    $this->db->bind(':donorId', $data['donorId']);

      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
  }