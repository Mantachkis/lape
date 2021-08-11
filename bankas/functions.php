<?php
// function getBank(): array
// {
//     if (!file_exists(__DIR__ . '/bank.json')) {
//         $bank = [['name' => '', 'surname' => '', 'acc' => '', 'id' => "", 'funds' => 0]];
//         $bank = json_encode($bank);
//         file_put_contents(__DIR__ . '/bank.json', $bank);
//     }
//     return json_decode(file_get_contents(__DIR__ . '/bank.json'), 1);
// }

// function setBank(array $bank): void
// {
//     $bank = json_encode($bank);
//     file_put_contents(__DIR__ . '/bank.json', $bank);
// }