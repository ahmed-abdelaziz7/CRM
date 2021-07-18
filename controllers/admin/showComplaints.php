<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/CRM/models/complaint.php';

if(isset($_GET['action'])  && $_GET['action'] == 'delete')
{
    $complaint_id = $_GET['id'] ;
    $complaint = new complaint();
    $complaint->delete($complaint_id);
}
$complaint = new complaint();
$comps_data = $complaint->get_all();
require_once $_SERVER['DOCUMENT_ROOT'].'/CRM/views/admin/showComplaints.php';

