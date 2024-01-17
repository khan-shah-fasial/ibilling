<?php
if (!isset($myCtrl)) {
    $myCtrl = 'ai';
}
_auth();
$ui->assign('_application_menu', 'ai');
$ui->assign('_title', $_L['ai'] . ' - ' . $config['CompanyName']);
$ui->assign('_st', $_L['ai']);
$ui->assign('content_inner', inner_contents($config['c_cache']));
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);

$ui->assign(
    'jsvar',
    '
_L[\'Working\'] = \'' .
        $_L['Working'] .
        '\';
_L[\'Submit\'] = \'' .
        $_L['Submit'] .
        '\';
 '
);

switch ($action) {
    case 'auto-send-email':

        $today = date('Y-m-d');

        $overdueInvoices = ORM::for_table('sys_invoices')
            ->where_raw("DATEDIFF(duedate, '$today') = 0") 
            ->find_many();
        if($overdueInvoices){

            foreach ($overdueInvoices as $invoice) {

                $user = ORM::for_table('crm_accounts')->where('id', $invoice->userid)->find_one();

                // Check if the user exists before proceeding
                if ($user) {
                    // $user is an object, not an array, so no need for as_array()
                    $cid = $invoice->userid;
                    $toname = $user->account;
                    $email = $user->email;
                    $subject = 'Overdue Invoice';
                    $message = "Your invoice with ID {$invoice->id} is overdue. Please make the payment.";

                    Notify_Email::_send($toname, $email, $subject, $message, $cid);

                    echo'send';

                    // Update the due date by adding 1 day
                    $dueDate = new DateTime($invoice->duedate);
                    $dueDate->add(new DateInterval('P1D'));
                    $invoice->duedate = $dueDate->format('Y-m-d');
                    $invoice->save();
                } else {
                    echo'something went wrong';
                }
            }
        } else {
            echo'no record';
        }

        break;

    default:
        echo 'action not defined';
}
