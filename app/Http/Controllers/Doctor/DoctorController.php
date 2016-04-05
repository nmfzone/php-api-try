<?php

class DoctorController
{

    public function index()
    {
        $query = mysql_query("SELECT * FROM doctor");

        if (mysql_num_rows($query) > 0) {
            $doctor = [];
            $i = 0;
            while ($row = mysql_fetch_object($query)) {
                $tmp = [
                    'id'        => $row->id,
                    'nama'      => $row->nama,
                    'umur'      => $row->umur,
                    'jabatan'   => $row->jabatan,
                ];
                $doctor[$i++] = $tmp;
            } 
            $this->toJson($doctor);
        } else {
            $this->toJson(['message' => 'There is no doctor in database.']);
        }
    }

    public function create($nama, $umur, $jabatan)
    {
        $success = true;
        if ($nama != "" && $umur != "" && $jabatan != "") {
            $query = mysql_query("INSERT INTO doctor VALUES ('', '$nama', '$umur', '$jabatan')");

            if (!$query) $success = false;
        } else {
            $success = false;
        }

        if ($success) {
            $this->toJson(['message' => 'Doctor successfully created.']);
        } else {
            $this->toJson(['message' => 'Oops, sorry. Something failed.']);
        }
    }

    public function toJson($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }

}
