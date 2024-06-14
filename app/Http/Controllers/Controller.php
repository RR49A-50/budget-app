<?php

namespace App\Http\Controllers;

abstract class Controller
{
    private $name = 'abc';
    public function response(array $data, int $responseCode)
    {
        return response()->json($data, $responseCode);
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this->name;
    }
}
