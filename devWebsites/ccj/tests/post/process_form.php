<?php
/**
 * Created with WebFormGenerator.eu
 * Powered by www.easyclick.ch
 */

$form = new ProcessForm();
$form->field_rules = array(
	'element_1'=>'',
	'element_2'=>'',
	'element_3'=>'',
	'element_4'=>'',
	'element_5'=>'',
	'element_6'=>'',
	'element_7'=>'',
	'element_8'=>'',
	'element_9'=>'',
	'element_10'=>'',
	'element_11'=>'',
	'element_12'=>'',
	'element_13'=>'',
	'element_14'=>'',
	'element_15'=>'',
	'element_16'=>'',
	'element_17'=>'',
	'element_18'=>'',
	'element_19'=>'',
	'element_20'=>'',
	'element_21'=>'',
	'element_22'=>'',
	'element_23'=>'',
	'element_24'=>'',
	'element_25'=>'',
	'element_26'=>'',
	'element_27'=>'',
	'element_28'=>'',
	'element_29'=>'',
	'element_30'=>'',
	'element_31'=>'',
	'element_32'=>'',
	'element_33'=>'',
	'element_34'=>'',
	'element_35'=>'',
	'element_36'=>'',
	'element_37'=>'',
	'element_38'=>'',
	'element_39'=>'',
	'element_40'=>'',
	'element_41'=>'',
	'element_42'=>'',
	'element_43'=>'',
	'element_44'=>'',
	'element_45'=>'',
	'element_46'=>'',
	'element_47'=>'',
	'element_48'=>'',
	'element_49'=>'',
	'element_50'=>'',
	'element_51'=>'',
	'element_52'=>'',
	'element_53'=>'',
	'element_54'=>'',
	'element_55'=>'',
	'element_56'=>'',
	'element_57'=>'',
	'element_58'=>'',
	'element_59'=>'',
	'element_60'=>'',
	'element_61'=>'',
	'element_62'=>'',
	'element_63'=>'',
	'element_64'=>'',
	'element_65'=>'',
	'element_66'=>'',
	'element_67'=>'',
	'element_68'=>'',
);
$form->validate();

class ProcessForm
{
    public $field_rules;
    public $error_messages;
    public $fields;
    private $error_list;
    private $is_xhr;





    function __construct()
    {
        $this->error_messages = array(
            'required' => 'This field is required',
            'email' => 'Please enter a valid email address',
            'number' => 'Please enter a numeric value',
            'url' => 'Please enter a valid URL',
            'pattern' => 'Please correct this value',
            'min' => 'Please enter a value larger than the minimum value',
            'max' => 'Please enter a value smaller than the maximum value'
        );

        $this->field_rules = array();
        $this->error_list = '';
        $this->fields = $_POST;
        $this->is_xhr = $this->xhr();
    }





    function validate()
    {
        if (!empty($this->fields))
        {
            //Validate each of the fields
            foreach ($this->field_rules as $field => $rules)
            {
                $rules = explode('|', $rules);

                foreach ($rules as $rule)
                {
                    $result = null;

                    if (isset($this->fields[$field]))
                    {
                        $param = false;

                        if (preg_match("/(.*?)\[(.*?)\]/", $rule, $match))
                        {
                            $rule = $match[1];
                            $param = $match[2];
                        }

                        $this->fields[$field] = $this->clean($this->fields[$field]);

                        //if the field is a checkbox group create string
                        if (is_array($this->fields[$field]))
                            $this->fields[$field] = implode(', ', $this->fields[$field]);

                        // Call the function that corresponds to the rule
                        if (!empty($rule))
                            $result = $this->$rule($this->fields[$field], $param);

                        // Handle errors
                        if ($result === false)
                            $this->set_error($field, $rule);
                    }
                }
            }

            if (empty($this->error_list))
            {
                if ($this->is_xhr)
                    echo json_encode(array('status' => 'success'));

                $this->process();
				 ?><p>Thank you very much for filling this post class test <br />
				 <a href="http://ccjidaho.org">Click Here to Return to our main page.</a><br /><hr />
				 <?php
				
            }
            else
            {
                if ($this->is_xhr)
                    echo json_encode(array('status' => 'invalid', 'errors' => $this->error_list));
                else echo $this->error_list;
            }
        }
    }





    function process()
    {
         /**
         * SUCCESS!!
         * There were no errors in the form. Insert your processing logic here (i.e. send an email, save to a
         * database etc.
         *
         * All of the submitted fields are available in the $this->fields variable.
         *
         * Example code to mail the results of the form:
         *
         * IMPORTANT - PLEASE READ:
         * 1. YOU MUST UNCOMMENT THE CODE FOR IT TO WORK.
         *    - This means removing the '//' in front of each line.
         *    - If you do not know what php comments are see here: http://php.net/manual/en/language.basic-syntax.comments.php
         *
         * 2. YOU CAN ENTER ANY EMAIL ADDRESS IN THE $from VARIABLE.
         *    - This is the address that will show in the From column in your mail application.
         *    - If your form contains an email field, and you want to use that value as the $from variable, you can set $from = $this->fields['name of your email field'];
         *    - As stated in the description on codecanyon, this code does not mail attachments. Google 'php html email attachments' for information on how to do this
         */



         $msg = "Form Contents: \n\n";
         foreach($this->fields as $key => $field)
               $msg .= "$key :  $field \n";

         $to = 'gnp_81310@comunidadyjusticia.org';
         $subject = 'Cuidate pre test Form Submission';
         $from = 'gnp_81310@comunidadyjusticia.org';

         mail($to, $subject, $msg, "From: $from\r\nReply-To: $from\r\nReturn-Path: $from\r\n");


    }



    function set_error($field, $rule)
    {
        if ($this->is_xhr)
        {
            $this->error_list[$field] = $this->error_messages[$rule];
        }
        else $this->error_list .= "<div class='error'>$field: " . $this->error_messages[$rule] . "</div>";
    }





    function xhr()
    {
        return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') ? true : false;
    }





    /** Validation Functions */
    function required($str, $val = false)
    {

        if (!is_array($str))
        {
            $str = trim($str);
            return ($str == '') ? false : true;
        }
        else
        {
            return (!empty($str));
        }
    }





    function email($str)
    {
        return (!preg_match("/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD", $str)) ? false : true;
    }





    function number($str)
    {
        return (!is_numeric($str)) ? false : true;
    }





    function min($str, $val)
    {
        return ($str >= $val) ? true : false;
    }





    function max($str, $val)
    {
        return ($str <= $val) ? true : false;
    }





    function pattern($str, $pattern)
    {
        return (!preg_match($pattern, $str)) ? false : true;
    }





    function clean($str)
    {
        $str = is_array($str) ? array_map(array("ProcessForm", 'clean'), $str) : str_replace('\\', '\\\\', strip_tags(trim(htmlspecialchars((get_magic_quotes_gpc() ? stripslashes($str) : $str), ENT_QUOTES))));
        return $str;
    }
}


?>