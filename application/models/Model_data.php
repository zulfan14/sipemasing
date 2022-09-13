<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_data extends CI_Model
{
    // AMBIL DATA
    function ambilSemuaData($tables)
    {
        return $this->db->get($tables)->result_array();
    }

    function ambilDataTerakhir($tables, $jml)
    {
        return $this->db->get($tables, $jml);
    }

    function ambilDataTertentu($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function ambilDataTertentuSelect($table, $kolom, $where)
    {
        $this->db->select($kolom);
        return $this->db->get_where($table, $where);
    }

    function ambilDataKolomTertentu($table, $kolom)
    {
        $this->db->select($kolom);
        return $this->db->get($table);
    }

    function ambilDataMax($table, $kolom)
    {
        $this->db->select_max($kolom);
        return $this->db->get($table);
    }


    public function inputData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function hapusData($table, $where)
    {
        $this->db->delete($table, $where);
    }

    function updateData($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function jointTabel($selectData, $rootTable, $join, $where = null, $not_in = null) // isi dari variable Join harus data array didalam array (ex :[[namatable, nama_table.nama_kolom_primary = nama_table.nama_kolom_foreign, jenisJoin]])
    {
        $this->db->select($selectData);
        $this->db->from($rootTable);
        for ($i = 0; $i < count($join); $i++) {
            for ($j = 0; $j < count($join[$i]); $j++) {
                $this->db->join($join[$i][$j], $join[$i][$j += 1], $join[$i][$j += 1]);
            }
        }

        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }


    public function jointCount($selectData, $groupBy, $rootTable, $join)
    {
        $this->db->select($selectData);
        $this->db->from($rootTable);
        for ($i = 0; $i < count($join); $i++) {
            for ($j = 0; $j < count($join[$i]); $j++) {
                $this->db->join($join[$i][$j], $join[$i][$j += 1], $join[$i][$j += 1]);
            }
        }
        $this->db->group_by($groupBy);
        return $this->db->get();
    }

    function query($string)
    {
        return $this->db->query($string);
    }

    public function getJumlah($where)
    {
        $queryLapor = $this->db->get_where($where);
        if ($queryLapor->num_rows() > 0) {
            return $queryLapor->num_rows();
        } else {
            return 0;
        }
    }

    public function jointTes($select, $join, $from)
    {
        $this->db->select($select);
        $this->db->join($join);
        $this->db->from($from);
        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file ModelName.php */
