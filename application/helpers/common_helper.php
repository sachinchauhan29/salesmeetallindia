<?php if (!defined('BASEPATH'))
    exit ('No direct script access allowed');




// Define the ms_name function in your helper or appropriate file
if (!function_exists('ms_name')) {
    function ms_name($user_id)
    {
        $ci = &get_instance();
        $ci->load->database();

        $ci->db->select('*');
        $ci->db->from('tbl_manager');
        $ci->db->where('id', $user_id);
        $query = $ci->db->get();

        if ($query->num_rows() > 0) {
            return $query->row(); // Return all data as an associative array
        }

        return array('Name' => 'N/A', 'Address' => 'N/A'); // Default values if no data found
    }
}


// function ms_name()
// {
//     $CI = &get_instance();
//     $CI->load->database();
//     $query = $CI->db->select('ms_table.*')
//         ->from('ms_table')
//         ->get();

//     if ($query->num_rows() > 0) {
//         $row = $query->row();
//         return $row->ms_name;
//     }

//     return 'm';
// }







// ------------------------------------------------------------------------

/**
 * Random Element - Takes an array as input and returns a random element
 *
 * @access	public
 * @param	array
 * @return	mixed	depends on what the array contains
 */
if (!function_exists('random_element')) {
    function random_element($array)
    {
        if (!is_array($array)) {
            return $array;
        }

        return $array[array_rand($array)];
    }
}

// --------------------------------------------------------------------

/**
 * Elements
 *
 * Returns only the array items specified.  Will return a default value if
 * it is not set.
 *
 * @access	public
 * @param	array
 * @param	array
 * @param	mixed
 * @return	mixed	depends on what the array contains
 */



/* End of file array_helper.php */
/* Location: ./system/helpers/array_helper.php */