<?php

class User
{

    private
        $id,
        $nombre,
        $paterno,
        $materno,
        $email,
        $password,
        $created_at,
        $updated_at,
        $deleted_at;

    function  __construct($id)
    {
        $this->id = $id;
    }

    public function create($data = [])
    {
        $this->nombre = $data['nombre'];
        $this->paterno = $data['paterno'];
        $this->materno = $data['materno'];
        $this->email = $data['email'];
        $this->password = $data['password'];
    }
}
