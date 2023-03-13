<?php 

class Kelas 
{
    public function tambah($data)
    {
        global $conn;

    $kelas = htmlspecialchars($data['nama_kelas']);
    $kompetensi = htmlspecialchars($data['kompetensi_keahlian']);

    $query = " INSERT INTO kelas 
                    VALUES (NULL,'$kelas','$kompetensi')";
                    mysqli_query($conn,$query);

                    return mysqli_affected_rows($conn);
    }

    public function edit($data)
    {
        global $conn;
    
        $id = $data['id_kelas'];
        $kelas = htmlspecialchars($data['nama_kelas']);
        $kompetensi = htmlspecialchars($data['kompetensi_keahlian']);

        $query = "UPDATE kelas SET nama_kelas = '$kelas',
                kompetensi_keahlian = '$kompetensi' 
                WHERE id_kelas = '$id' ";
                mysqli_query($conn,$query);
                return mysqli_affected_rows($conn);

    }

    public function hapus($id_kelas)
    {
        global $conn;
        mysqli_query($conn,"DELETE  FROM kelas WHERE id_kelas = '$id_kelas'");
        return mysqli_affected_rows($conn);
    }
}
?>