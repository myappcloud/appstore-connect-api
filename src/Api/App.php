<?php


namespace MingYuanYun\AppStore\Api;


class App extends AbstractApi
{
    public function all(array $params = [], $id = null)
    {
        return $this->get("/apps/{$id}", $params);
    }
}
