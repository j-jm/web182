<?php


// CH10 - EX01 DATE FORMATS EDITS - VALIDATION -  WE DID IN CLASS 09-30-15 

//set default value
$message = '';

//get value from POST array
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action =  'start_app';
}

//process
switch ($action) {
    case 'start_app':

        // set default invoice date 1 month prior to current date
        $interval = new DateInterval('P1M');
        $default_date = new DateTime();
        $default_date->sub($interval);
        $invoice_date_s = $default_date->format('n/j/Y');

        // set default due date 2 months after current date
        $interval = new DateInterval('P2M');
        $default_date = new DateTime();
        $default_date->add($interval);
        $due_date_s = $default_date->format('n/j/Y');

        $message = 'Enter two dates and click on the Submit button.';
        break;
    case 'process_data':
        $invoice_date_s = filter_input(INPUT_POST, 'invoice_date');
        $due_date_s = filter_input(INPUT_POST, 'due_date');

        // make sure the user enters both dates

        if (!isset($invoice_date_s) || !isset($due_date_s) 
            || $invoice_date_s == null || $due_date_s == null)
        {
            $message = 'Error: you need 2 dates at least';
            break;
        }

        $invoice_date_s = strtotime($invoice_date_s);
        if ((checkdate($invoice_date_s))
            {
        $invoice_date_s = date('Y-m-d',$invoice_date_s); 
            }
        else
            {
          $message = 'Error: you need a valid date';
            }


        $due_date_s = strtotime($due_date_s);
      if ((checkdate($due_date_s))
        {

        }
        else
        {

        }
        $due_date_s = date('Y-m-d',$due_date_s); 


        #print $invoice_date_s;
        #print $due_date_s;
        #print $due_date_s;        

      #  $invoice_date_f = date('Y-m-d' , $invoice_date_f);

        // convert date strings to DateTime objects
        // and use a try/catch to make sure the dates are valid

        $invoice_date = new DateTime($invoice_date_s);
        $due_date = new DateTime($due_date_s);


        // make sure the due date is after the invoice date

        // format both dates
        #$invoice_date_f = 'not implemented yet';
        #$due_date_f = 'not implemented yet'; 
        $invoice_date_f = $invoice_date->format('F d, Y');
        $due_date_f = $due_date->format('F d, Y');
        
        // get the current date and time and format it
 #       $current_date_f = 'not implemented yet';
  #      $current_time_f = 'not implemented yet';
        $curent_date = new DateTime();
        $current_date_f = $current_date->format('F d, Y');
        $current_time_f = $current_date->format('g:i:s a');



        
        // get the amount of time between the current date and the due date
        // and format the due date message
  #      $due_date_message = 'not implemented yet';

        $due_date_diff = $invoice_date->diff($due_date);
       // print_r($due_date_diff);
        if ($due_date_diff->format(%R) == '-')
        {
        $due_date_message = $due_date_diff->format('This invoice is %y years  %m months %d days overdue.');
        } else
        {
        $due_date_message = $due_date_diff->format('This invoice is due in %y years  %m months %d days.');

        }


        break;
}
include 'date_tester.php';
?>