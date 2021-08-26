<?php

namespace Bank\Objektinis\Login;

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
        if (!file_exists(DIR . 'data/users.json')) {

            file_put_contents(DIR . 'data/users.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(DIR . 'data/users.json'), 1);
    }

    public function __destruct()
    {
        file_put_contents(DIR . 'data/users.json', json_encode($this->data));
    }

    function create(array $bankData): void
    {
        $this->data[] = $bankData;
    }

    function update(int $bankId, array $bankData): void
    {
        foreach ($this->data as $key => $i) {
            if ($i['id'] == $bankId) {
                $this->data[$key] = $bankData;
            }
        }
    }

    function delete(int $bankId): void
    {
        foreach ($this->data as $key => $i) {
            if ($i['id'] == $bankId && $i['funds'] <= 0) {
                unset($this->data[$key]);
                // addMessage('Sėkmingai ištrinta');
            }
        }
        // addMessage('Sąskaitoje yra lėšų, neglima ištrinti');

    }

    function show($bankId): array
    {
        foreach ($this->data as $i) {
            if ($i['email'] == $bankId) {
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