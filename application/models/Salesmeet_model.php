<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Salesmeet_model extends CI_Model
{
    public function totalparticipation()
    {
        $this->db->select('COUNT(*) as total_participation');
        $this->db->from('user_question');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['total_participation'];
        } else {
            return 0;
        }
    }
    public function abm_question()
    {
        $this->db->select('COUNT(*) as abm_question1');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP '^Q1\..*area has total [0-9]+ mapped villages.*$'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question1'];
        } else {
            return 0;
        }
    }
    public function rbm_question()
    {
        $this->db->select('COUNT(*) as rbm_question1');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP '^Q1\..*area has total [0-9]+ mapped villages.*$'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question1'];
        } else {
            return 0;
        }
    }
    public function Sales_question()
    {
        $this->db->select('COUNT(*) as sales_question1');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP '^Q1\..*area has total [0-9]+ mapped villages.*$'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question1'];
        } else {
            return 0;
        }
    }
    public function other_question()
    {
        $this->db->select('COUNT(*) as other_question1');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP '^Q1\..*area has total [0-9]+ mapped villages.*$'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question1'];
        } else {
            return 0;
        }
    }



    // question1 complate

    public function abm_question2()
    {
        $this->db->select('COUNT(*) as abm_question2');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP '^Q2\..*total villages mapped are [0-9]+.*current delivery village coverage is [0-9]+%.*$'");


        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question2'];
        } else {
            return 0;
        }
    }
    public function rbm_question2()
    {
        $this->db->select('COUNT(*) as rbm_question2');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP '^Q2\..*total villages mapped are [0-9]+.*current delivery village coverage is [0-9]+%.*$'");


        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question2'];
        } else {
            return 0;
        }
    }
    public function sales_question2()
    {
        $this->db->select('COUNT(*) as sales_question2');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP '^Q2\..*total villages mapped are [0-9]+.*current delivery village coverage is [0-9]+%.*$'");


        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question2'];
        } else {
            return 0;
        }
    }
    public function other_question2()
    {
        $this->db->select('COUNT(*) as other_question2');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP '^Q2\..*total villages mapped are [0-9]+.*current delivery village coverage is [0-9]+%.*$'");


        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question2'];
        } else {
            return 0;
        }
    }

    // question2 complate

    public function abm_question3()
    {
        $this->db->select('COUNT(*) as abm_question3');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM');
        $this->db->where("question REGEXP 'Q3. How can an ABM increase E2D enquiry to delivery conversion rate in May?'");


        $query = $this->db->get();
        // print_r($this->db->last_query());
        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question3'];
        } else {
            return 0;
        }
    }
    public function rbm_question3()
    {
        $this->db->select('COUNT(*) as rbm_question3');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP 'Q3. How can an ABM increase E2D enquiry to delivery conversion rate in May?'");


        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question3'];
        } else {
            return 0;
        }
    }
    public function sales_question3()
    {
        $this->db->select('COUNT(*) as sales_question3');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP 'Q3. How can an ABM increase E2D enquiry to delivery conversion rate in May?'");


        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question3'];
        } else {
            return 0;
        }
    }
    public function other_question3()
    {
        $this->db->select('COUNT(*) as other_question3');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP 'Q3. How can an ABM increase E2D enquiry to delivery conversion rate in May?'");


        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question3'];
        } else {
            return 0;
        }
    }


    // question3 complate

    public function abm_question4()
    {
        $this->db->select('COUNT(*) as abm_question4');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');

        $this->db->where("question REGEXP '^Q4\..*DSE sufficiency is calculated as.*$'");



        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question4'];
        } else {
            return 0;
        }
    }
    public function rbm_question4()
    {
        $this->db->select('COUNT(*) as rbm_question4');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP '^Q4\..*DSE sufficiency is calculated as.*$'");



        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question4'];
        } else {
            return 0;
        }
    }
    public function Sales_question4()
    {
        $this->db->select('COUNT(*) as sales_question4');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP '^Q4\..*DSE sufficiency is calculated as.*$'");



        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question4'];
        } else {
            return 0;
        }
    }
    public function other_question4()
    {
        $this->db->select('COUNT(*) as other_question4');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP '^Q4\..*DSE sufficiency is calculated as.*$'");
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question4'];
        } else {
            return 0;
        }
    }

    // question4 complate

    public function abm_question5()
    {
        $this->db->select('COUNT(*) as abm_question5');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');

        $this->db->where("question REGEXP '^Q5\..*new Demo Policy it is mandatory for the following dealers to own a Demo tractor.*$'");




        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question5'];
        } else {
            return 0;
        }
    }
    public function rbm_question5()
    {
        $this->db->select('COUNT(*) as rbm_question5');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP '^Q5\..*new Demo Policy it is mandatory for the following dealers to own a Demo tractor.*$'");




        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question5'];
        } else {
            return 0;
        }
    }
    public function Sales_question5()
    {
        $this->db->select('COUNT(*) as sales_question5');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP '^Q5\..*new Demo Policy it is mandatory for the following dealers to own a Demo tractor.*$'");




        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question5'];
        } else {
            return 0;
        }
    }
    public function other_question5()
    {
        $this->db->select('COUNT(*) as other_question5');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP '^Q5\..*new Demo Policy it is mandatory for the following dealers to own a Demo tractor.*$'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question5'];
        } else {
            return 0;
        }
    }


    // question5 complate

    public function abm_question6()
    {
        $this->db->select('COUNT(*) as abm_question6');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP 'Q6. Branch coverage is planned using the following criteria for the dealer:'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question6'];
        } else {
            return 0;
        }
    }
    public function rbm_question6()
    {
        $this->db->select('COUNT(*) as rbm_question6');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP 'Q6. Branch coverage is planned using the following criteria for the dealer:'");




        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question6'];
        } else {
            return 0;
        }
    }
    public function Sales_question6()
    {
        $this->db->select('COUNT(*) as sales_question6');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP 'Q6. Branch coverage is planned using the following criteria for the dealer:'");




        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question6'];
        } else {
            return 0;
        }
    }
    public function other_question6()
    {
        $this->db->select('COUNT(*) as other_question6');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP 'Q6. Branch coverage is planned using the following criteria for the dealer:'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question6'];
        } else {
            return 0;
        }
    }
    // question6 complate

    public function abm_question7()
    {
        $this->db->select('COUNT(*) as abm_question7');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP 'Q7. EKL focus model product strategy is defined for'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question7'];
        } else {
            return 0;
        }
    }
    public function rbm_question7()
    {
        $this->db->select('COUNT(*) as rbm_question7');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP 'Q7. EKL focus model product strategy is defined for'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question7'];
        } else {
            return 0;
        }
    }
    public function Sales_question7()
    {
        $this->db->select('COUNT(*) as sales_question7');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP 'Q7. EKL focus model product strategy is defined for'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question7'];
        } else {
            return 0;
        }
    }
    public function other_question7()
    {
        $this->db->select('COUNT(*) as other_question7');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP 'Q7. EKL focus model product strategy is defined for'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question7'];
        } else {
            return 0;
        }
    }

    // question7 complate

    public function abm_question8()
    {
        $this->db->select('COUNT(*) as abm_question8');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP 'Q8. Against 575XP plus, which POWERTRAC model to be positioned'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question8'];
        } else {
            return 0;
        }
    }
    public function rbm_question8()
    {
        $this->db->select('COUNT(*) as rbm_question8');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP 'Q8. Against 575XP plus, which POWERTRAC model to be positioned'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question8'];
        } else {
            return 0;
        }
    }
    public function Sales_question8()
    {
        $this->db->select('COUNT(*) as sales_question8');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP 'Q8. Against 575XP plus, which POWERTRAC model to be positioned'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question8'];
        } else {
            return 0;
        }
    }
    public function other_question8()
    {
        $this->db->select('COUNT(*) as other_question8');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP 'Q8. Against 575XP plus, which POWERTRAC model to be positioned'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question8'];
        } else {
            return 0;
        }
    }

    // question8 complate

    public function abm_question9()
    {
        $this->db->select('COUNT(*) as abm_question9');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP 'Q9. ABC motors ltd. is among 243 non-performing dealers. The dealer delivered 86 tractors in FY23 and 35 tractors in FY24. Which one of the following is the ideal delivery plan for FY25?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question9'];
        } else {
            return 0;
        }
    }
    public function rbm_question9()
    {
        $this->db->select('COUNT(*) as rbm_question9');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP 'Q9. ABC motors ltd. is among 243 non-performing dealers. The dealer delivered 86 tractors in FY23 and 35 tractors in FY24. Which one of the following is the ideal delivery plan for FY25?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question9'];
        } else {
            return 0;
        }
    }
    public function Sales_question9()
    {
        $this->db->select('COUNT(*) as sales_question9');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP 'Q9. ABC motors ltd. is among 243 non-performing dealers. The dealer delivered 86 tractors in FY23 and 35 tractors in FY24. Which one of the following is the ideal delivery plan for FY25?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question9'];
        } else {
            return 0;
        }
    }
    public function other_question9()
    {
        $this->db->select('COUNT(*) as other_question9');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP 'Q9. ABC motors ltd. is among 243 non-performing dealers. The dealer delivered 86 tractors in FY23 and 35 tractors in FY24. Which one of the following is the ideal delivery plan for FY25?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question9'];
        } else {
            return 0;
        }
    }

    // question9 complate

    public function abm_question10()
    {
        $this->db->select('COUNT(*) as abm_question10');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP 'Q10. What is the key activity for Conversion?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question10'];
        } else {
            return 0;
        }
    }
    public function rbm_question10()
    {
        $this->db->select('COUNT(*) as rbm_question10');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP 'Q10. What is the key activity for Conversion?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question10'];
        } else {
            return 0;
        }
    }
    public function Sales_question10()
    {
        $this->db->select('COUNT(*) as sales_question10');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP 'Q10. What is the key activity for Conversion?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question10'];
        } else {
            return 0;
        }
    }
    public function other_question10()
    {
        $this->db->select('COUNT(*) as other_question10');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP 'Q10. What is the key activity for Conversion?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question10'];
        } else {
            return 0;
        }
    }

    // question10 complate

    public function abm_question11()
    {
        $this->db->select('COUNT(*) as abm_question11');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP 'Q11. What is the ideal percentage of Follow-up on Hot Enquiries'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question11'];
        } else {
            return 0;
        }
    }
    public function rbm_question11()
    {
        $this->db->select('COUNT(*) as rbm_question11');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP 'Q11. What is the ideal percentage of Follow-up on Hot Enquiries'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question11'];
        } else {
            return 0;
        }
    }
    public function Sales_question11()
    {
        $this->db->select('COUNT(*) as sales_question11');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP 'Q11. What is the ideal percentage of Follow-up on Hot Enquiries'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question11'];
        } else {
            return 0;
        }
    }
    public function other_question11()
    {
        $this->db->select('COUNT(*) as other_question11');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP 'Q11. What is the ideal percentage of Follow-up on Hot Enquiries'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question11'];
        } else {
            return 0;
        }
    }

    // question11 complate

    public function abm_question12()
    {
        $this->db->select('COUNT(*) as abm_question12');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP 'Q12. The period to execute activities for the month is '");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question12'];
        } else {
            return 0;
        }
    }
    public function rbm_question12()
    {
        $this->db->select('COUNT(*) as rbm_question12');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP 'Q12. The period to execute activities for the month is '");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question12'];
        } else {
            return 0;
        }
    }
    public function Sales_question12()
    {
        $this->db->select('COUNT(*) as sales_question12');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP 'Q12. The period to execute activities for the month is '");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question12'];
        } else {
            return 0;
        }
    }
    public function other_question12()
    {
        $this->db->select('COUNT(*) as other_question12');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP 'Q12. The period to execute activities for the month is '");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question12'];
        } else {
            return 0;
        }
    }

    // question12 complate

    public function abm_question13()
    {
        $this->db->select('COUNT(*) as abm_question13');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP 'Q13. As per commercial policy, a BG dealer will get interest free credit for how many days?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question13'];
        } else {
            return 0;
        }
    }
    public function rbm_question13()
    {
        $this->db->select('COUNT(*) as rbm_question13');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP 'Q13. As per commercial policy, a BG dealer will get interest free credit for how many days?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question13'];
        } else {
            return 0;
        }
    }
    public function Sales_question13()
    {
        $this->db->select('COUNT(*) as sales_question13');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP 'Q13. As per commercial policy, a BG dealer will get interest free credit for how many days?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question13'];
        } else {
            return 0;
        }
    }
    public function other_question13()
    {
        $this->db->select('COUNT(*) as other_question13');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP 'Q13. As per commercial policy, a BG dealer will get interest free credit for how many days?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question13'];
        } else {
            return 0;
        }
    }

    // question13 complate

    public function abm_question14()
    {
        $this->db->select('COUNT(*) as abm_question14');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP 'Q14. From which date, billing to dealer operating on direct credit and having credit over their inventory funding limit will discontinue?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question14'];
        } else {
            return 0;
        }
    }
    public function rbm_question14()
    {
        $this->db->select('COUNT(*) as rbm_question14');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP 'Q14. From which date, billing to dealer operating on direct credit and having credit over their inventory funding limit will discontinue?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question14'];
        } else {
            return 0;
        }
    }
    public function Sales_question14()
    {
        $this->db->select('COUNT(*) as sales_question14');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP 'Q14. From which date, billing to dealer operating on direct credit and having credit over their inventory funding limit will discontinue?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question14'];
        } else {
            return 0;
        }
    }
    public function other_question14()
    {
        $this->db->select('COUNT(*) as other_question14');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP 'Q14. From which date, billing to dealer operating on direct credit and having credit over their inventory funding limit will discontinue?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question14'];
        } else {
            return 0;
        }
    }

    // question14 complate

    public function abm_question15()
    {
        $this->db->select('COUNT(*) as abm_question15');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'ABM ');
        $this->db->where("question REGEXP 'Q15. What is the working capital required by a dealer who has to sell 100 tractors annually with average billing price of 6 Lacs?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['abm_question15'];
        } else {
            return 0;
        }
    }
    public function rbm_question15()
    {
        $this->db->select('COUNT(*) as rbm_question15');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'RBM ');
        $this->db->where("question REGEXP 'Q15. What is the working capital required by a dealer who has to sell 100 tractors annually with average billing price of 6 Lacs?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['rbm_question15'];
        } else {
            return 0;
        }
    }
    public function Sales_question15()
    {
        $this->db->select('COUNT(*) as sales_question15');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Sales Officer ');
        $this->db->where("question REGEXP 'Q15. What is the working capital required by a dealer who has to sell 100 tractors annually with average billing price of 6 Lacs?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['sales_question15'];
        } else {
            return 0;
        }
    }
    public function other_question15()
    {
        $this->db->select('COUNT(*) as other_question15');
        $this->db->from('user_question');
        $this->db->join('user_login as login', 'login.number = user_question.number', 'left');
        $this->db->where('designation', 'Others');
        $this->db->where("question REGEXP 'Q15. What is the working capital required by a dealer who has to sell 100 tractors annually with average billing price of 6 Lacs?'");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array()['other_question15'];
        } else {
            return 0;
        }
    }
}
