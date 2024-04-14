<?php
    include("dbconnect.php");
    $R=$_REQUEST;
    $flag=0;
    if($R['act']=='save_invoice'){
        // print_r($R);
        $service=implode(',',$R['service_id']);
        $sql="insert into invoices (service_ids,user_id) values('$service','$R[u_id]')";
        $flag=mysqli_query($con,$sql) or die(mysqli_error($con));

    }
?>
<script>
    if(<?=$flag?>) alert("Invoice Generated Successfully!");
    window.location.href="../gen-invoice.php?u_id=<?=$R['u_id']?>";
</script>