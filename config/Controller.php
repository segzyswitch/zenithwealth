<?php
// require_once 'config.php';
class Controller
{
  private string $db_server;
  private string $db_username;
  private string $db_password;
  private string $db_name;

  // DB Connection
  public $conn;

  public function __construct()
  {
    $this->db_server = 'localhost';
    $this->db_username = 'root';
    $this->db_password = '';
    $this->db_name = 'velloxa';

    // $this->db_username = 'velloxaw_default';
    // $this->db_password = 'Primestar1$';
    // $this->db_name = 'velloxaw_default';

    try {
      $this->conn = @new PDO("mysql:host=$this->db_server;dbname=$this->db_name", $this->db_username, $this->db_password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  // USERS INFO
  public function User()
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM users WHERE id = '$user_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function singleUser($user_id)
  {
    $sql = "SELECT * FROM users WHERE id = '$user_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function fullName()
  {
    $user_info = $this->User();
    $fullname = $user_info['fname'] . ' ' . $user_info['lname'];
    return $fullname;
  }
  public function totalBalance()
  {
    $user_info = $this->User();
    $balanceSum = $user_info['wallet_bal'] + $user_info['trading_bal'];
    return '$' . number_format($balanceSum, 2);
  }

  // Linked Accounts
  public function linkedAccounts($type = null)
  {
    $user_id = $_SESSION["moon_account_id"];
    if ($type == null)
      $sql = "SELECT * FROM linked_account WHERE user_id = '$user_id' ORDER BY id DESC";
    else
      $sql = "SELECT * FROM linked_account WHERE user_id = '$user_id' AND `type` = '$type' ORDER BY id DESC";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  // Login history
  public function userActivity()
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM user_activity WHERE user_id = '$user_id' ORDER BY id DESC LIMIT 50";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function lastSession()
  {
    $last_session = $this->userActivity()[0];
    return $last_session;
  }

  // Plans
  public function Plans()
  {
    $sql = "SELECT * FROM plans ORDER BY id ASC";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function singlePlan($plan_id)
  {
    $sql = "SELECT * FROM plans WHERE id = '$plan_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }


  // Transaction history
  public function Transactions($limit)
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM transactions WHERE user_id = '$user_id' ORDER BY id DESC LIMIT $limit";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function singleTransaction($invoice)
  {
    // $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM transactions WHERE invoice = '$invoice'";
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
  public function Deposits($limit = 10)
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM transactions
    WHERE user_id='$user_id'
    AND type='deposit'
    ORDER BY id DESC LIMIT $limit";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function totalDeposits()
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM transactions
    WHERE user_id='$user_id'
    AND type = 'deposit'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      $total = 0;
      foreach ($data as $key => $value) {
        $total += $value['amount'];
      }
      return [
        'count' => count($data),
        'sum' => '$' . number_format($total, 2)
      ];
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function pendingDeposits()
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM transactions
    WHERE user_id='$user_id'
    AND type = 'deposit'
    AND status = 'pending'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      $total = 0;
      foreach ($data as $key => $value) {
        $total += $value['amount'];
      }
      return [
        'count' => count($data),
        'sum' => '$' . number_format($total, 2)
      ];
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function completedDeposits()
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM transactions
    WHERE user_id='$user_id'
    AND type = 'deposit'
    AND status = 'success'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      $total = 0;
      foreach ($data as $key => $value) {
        $total += $value['amount'];
      }
      return [
        'count' => count($data),
        'sum' => '$' . number_format($total, 2)
      ];
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  // All withdrawals
  public function Withdrawals($limit = 100)
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM transactions
    WHERE user_id='$user_id'
    AND type='withdrawal'
    ORDER BY id DESC LIMIT $limit";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  // Trades
  public function Trades($limit)
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM trades
    LEFT JOIN plans ON trades.plan_id = plans.id
    WHERE trades.user_id='$user_id'
    ORDER BY trades.id DESC LIMIT $limit";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function singleTrade($invoice)
  {
    $sql = "SELECT * FROM trades LEFT JOIN plans ON trades.plan_id = plans.id WHERE plan_hash = '$invoice'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function runningTrades()
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM trades
    WHERE user_id='$user_id'
    AND status = 'running'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      $total = 0;
      foreach ($data as $key => $value) {
        $total += $value['returns'];
      }
      return [
        'count' => count($data),
        'sum' => '$' . number_format($total, 2)
      ];
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function completedTrades()
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM trades
    WHERE user_id='$user_id'
    AND status = 'completed'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      $total = 0;
      foreach ($data as $key => $value) {
        $total += $value['returns'];
      }
      return [
        'count' => count($data),
        'sum' => '$' . number_format($total, 2)
      ];
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function totalInvested()
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM trades
    WHERE user_id='$user_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      $total = 0;
      foreach ($data as $key => $value) {
        $total += $value['amount'];
      }
      return $total;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function totalRetruns()
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM trades
    WHERE user_id='$user_id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      $total = 0;
      foreach ($data as $key => $value) {
        $total += $value['profit'];
      }
      $returns = $total + $this->totalInvested();
      return '$' . number_format($returns, 2);
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function totalProfit()
  {
    $user_id = $_SESSION["moon_account_id"];
    $sql = "SELECT * FROM trades
    WHERE user_id='$user_id'
    AND status = 'completed'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      $total = 0;
      foreach ($data as $key => $value) {
        $total += $value['profit'];
      }
      return '$' . number_format($total, 2);
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

  // Crypto wallets
  public function cryptoWallets()
  {
    $sql = "SELECT * FROM crypto_wallets ORDER BY id";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetchAll();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  public function singleWallet($id)
  {
    $sql = "SELECT * FROM crypto_wallets WHERE id = '$id'";
    try {
      $query = $this->conn->prepare($sql);
      $query->execute();
      $data = $query->fetch();
      return $data;
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }

}
?>