<?php

namespace Bank\Objektinis;

use App\DB\DataBase;

class Json implements DataBase
{
    private static $obj;
    private $data;

    public static function get()
    {
        return self::$obj ?? self::$obj = new self;
    }


    public function getData()
    {
        return $this->data;
    }

    private function __construct()
    {
        if (!file_exists(DIR . 'data/bank.json')) {

            file_put_contents(DIR . 'data/bank.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(DIR . 'data/bank.json'), 1);
    }

    public function __destruct()
    {
        file_put_contents(DIR . 'data/bank.json', json_encode($this->data));
    }

    function create(array $userData): void
    {
        $this->data[] = $userData;
    }

    function update(int $userId, array $userData): void
    {
        foreach ($this->data as $key => $i) {
            if ($i['id'] == $userId) {
                $this->data[$key] = $userData;
            }
        }
    }

    function delete(int $userId): void
    {
        foreach ($this->data as $key => $i) {
            if ($i['id'] == $userId && $i['funds'] <= 0) {
                unset($this->data[$key]);
                // addMessage('Sėkmingai ištrinta');
            }
        }
        // addMessage('Sąskaitoje yra lėšų, neglima ištrinti');

    }

    function show(int $userId): array
    {
        foreach ($this->data as $i) {
            if ($i['email'] == $userId) {
                return $i;
            }
        }
        return [];
    }

    function showAll(): array
    {
        return $this->data;
    }
}