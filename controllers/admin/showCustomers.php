<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/CRM/models/customer.php';

if(isset($_GET['action'])  && $_GET['action'] == 'delete')
{
    $customer_id = $_GET['id'] ;
    $customer = new customer();
    $customer->get_by_id($customer_id);
    $customer->delete($customer_id);
}

$customer = new customer();
$customers_data = $customer->get_all();
require_once $_SERVER['DOCUMENT_ROOT'].'/CRM/views/admin/showCustomers.php';


