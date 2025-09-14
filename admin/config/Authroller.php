<?php
require_once "../config/Controller.php";

class Authroller extends Controller
{
  public function Admin() {
    $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM auth_users WHERE admin_id = '$admin_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  // All users
  public function Users() {
    $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM users ORDER BY id DESC";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  // Single User
  public function singleUser($id) {
    $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  // user By UUID
  public function userByUUID($uuid) {
    $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM users WHERE uuid = '$uuid'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }


  // All transactions
  public function allTransactions() {
    $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM transactions
    ORDER BY id DESC";

    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  // Single transaction
  public function singleTransaction($trx_id) {
    // $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM transactions
    WHERE id = '$trx_id'
    ORDER BY id DESC";

    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  // All deposits
  public function allDeposits() {
    $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM transactions
    WHERE type = 'deposit'
    ORDER BY id DESC";

    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  // Pending deposits
  public function pendingDeposits() {
    $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM transactions
    WHERE type = 'deposit'
    AND status = 'pending'
    ORDER BY id DESC";

    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }


  // All investments
  public function allInvestments() {
    $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM trades
    ORDER BY id DESC";

    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  // Running investments
  public function runningInvestments() {
    $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM trades
    WHERE status = 'running'
    ORDER BY id DESC";

    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  // Plans
  public function allPlans() {
    $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM plans
    ORDER BY id DESC";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  // Wallets
  public function Wallets() {
    $admin_id = $_SESSION["aave_auth_login_id"];
    $sql = "SELECT * FROM crypto_wallets
    ORDER BY id DESC";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
}
?>