<?php

    $header1 = 'Learn PHP from Scratch ₊˚ʚ 🌱 ₊˚✧ ﾟ.';
    $sentence = 'Lab Activity 7🍓🎮';
    $hashtag = '#lesson5 #OOP';
    $header2 = $sentence.' '.$hashtag;
    $challenge = '<b>Challenge 2:</b> String Utility📝';

    $body = <<< 'EOD'
            1. Create a class called `StringUtility` that has the following static methods:

            - `shout($string)` - Takes in a string and returns it in all uppercase letters with an exclamation mark added to the end. 3pts

            - `whisper($string)` - Takes in a string and returns it in all lowercase letters with a period added to the end. 3pts

            - `repeat($string, $times)` - Takes in a string and a number and returns the string repeated the specified number of times. Use a default value of `2` for the `$times` parameter. 4pts

            2. Create a new instance of the `StringUtility` class and call each of the methods on it. 5pts

            #### Hints

            - You can use the `strtoupper` and `strtolower` functions to convert a string to uppercase or lowercase.
            - You can use the `str_repeat` function to repeat a string a certain number of times.
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

    class StringUtility {
        public static function shout($string) {
            return strtoupper($string) . '!';
        }

        public static function whisper($string) {
            return strtolower($string) . '.';
        }

        public static function repeat($string, $times = 2) {
            return str_repeat($string . ' ', $times);
        }
    }

    $output = "<b>String Utility Examples</b><br>";
    $output .= "Shout: " . StringUtility::shout('Hello World') . "<br>";
    $output .= "Whisper: " . StringUtility::whisper('Hello World') . "<br>";
    $output .= "Repeat (default): " . StringUtility::repeat('Hello World') . "<br>";
    $output .= "Repeat (5x): " . StringUtility::repeat('Hello World', 5) . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
