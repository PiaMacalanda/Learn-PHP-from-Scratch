<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Lab Activity 7🍓🎮';
    $hashtag = '#lesson5 #OOP';
    $header2 = $sentence.' '.$hashtag;
    $challenge = '<b>Challenge 1:</b> Bank Transaction🏢';

    $body = <<< 'EOD'
            Follow the instructions below:

    EOD; // heredoc

    class BankTransaction {
        public $bank_name;
        public $transaction;
        private $account_no;
        private $amount;
        private $savings_amount = 10000;

        public function __construct($bank_name, $transaction, $account_no, $amount) {
            $this->bank_name = $bank_name;
            $this->transaction = $transaction;
            $this->account_no = $account_no;
            $this->amount = $amount;
        }

        public function getInfo() {
            return "Bank Name: {$this->bank_name}<br>" .
                   "Customer Account No: {$this->account_no}<br>" .
                   "Type of Transaction: {$this->transaction}<br>" .
                   "Current Balance: {$this->savings_amount}<br>" .
                   "Amount: {$this->amount}<br>";
        }

        public function newBalance() {
            if ($this->transaction == 'D') {
                $this->savings_amount += $this->amount;
                return "New Balance: {$this->savings_amount}";
            } elseif ($this->transaction == 'W') {
                if ($this->amount > $this->savings_amount) {
                    return "Insufficient funds! Transaction failed.";
                } else {
                    $this->savings_amount -= $this->amount;
                    return "New Balance: {$this->savings_amount}";
                }
            } else {
                return "Unable to process this transaction! Invalid Transaction type!";
            }
        }
    }

    $customer1 = new BankTransaction("BDO", "W", "ACNO0000001", 3000);
    $customer2 = new BankTransaction("BPI", "D", "ACNO0000002", 3000);
    $customer3 = new BankTransaction("METROBANK", "AB", "ACNO0000003", 3000);

    $output = "<b>Object: customer1</b><br>" . $customer1->getInfo() . $customer1->newBalance() . "<br><br>";
    $output .= "<b>Object: customer2</b><br>" . $customer2->getInfo() . $customer2->newBalance() . "<br><br>";
    $output .= "<b>Object: customer3</b><br>" . $customer3->getInfo() . $customer3->newBalance();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            tailwind.config = {
                corePlugins: {
                    preflight: false,
                }
            };
        </script>
        <script src="https://cdn.tailwindcss.com"></script>

        <title>
            <?= "Learn PHP From Scratch - Pia" ?>
        </title>
    </head>

    <body class="bg-gray-100">
        <header class="bg-pink-400 text-white p-4">
            <div class="container mx-auto">
                <h1 class="text-3xl font-semibold"><?= $header1 ?></h1>
            </div>
        </header>
        <div class="container mx-auto p-4 mt-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold mb-4"><?= $header2 ?></h2>
                <h2 class="text-xl font-semibold my-4"><?= $challenge ?></h2>
                <p class="font-bold mb-4"><br>Solution: </p>
                <!-- Output -->
                <p class="text-xl"><?= $output ?></p>
            </div>
        </div>
    </body>
<!-- Pia Macalanda -->
</html>


<!-- . Create a class called `BankTransaction` that has the following properties: (2pts)

- `bank_name`    note: example  BDO
- `transaction`  note: the value for this is 'D' for deposit or 'W' for withdraw
- `account_no`   note: example ACN0000001
- `amount`       note: the value for this is the amount to deposit or to withdraw
- `savings_amount` note: Balance amount money savings.

2. The `account_no` `amount` and savings_amount property should be `private`. And savings_amount  default is 10000. (2pts)

3. Create a constructor that takes in the bank_name,transaction,account_no and amount as arguments and sets the values of the properties. (3pts)

4. Create a method called `getInfo` that will show the following: (3pts)

   Bank Name: BDO
   Customer Account No: ACNO0000001
   Type of Transaction: W
   Current Balance: 10000
   Amount: 3000


5. Create a method called `newBalance` that returns the new balance after  deposit or withdraw (4pts)

6. Create 3 new instances/objects of the `BankTransaction` class and call the `getInfo`  and `newBalance` method (5pts) -->

