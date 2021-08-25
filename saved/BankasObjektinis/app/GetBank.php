<?php

class GetBank
{
    function getBank(): array
    {
        if (!file_exists(__DIR__ . '/bank.json')) {
            $bank = [];
            $bank = json_encode($bank);
            file_put_contents(__DIR__ . '/bank.json', $bank);
        }
        return json_decode(file_get_contents(__DIR__ . '/bank.json'), 1);
    }
}