<div class="left-container" style="" id="left_container">

    <h1>!! CSMS !!</h1>
    <p>MENU</p>
    <div class="side-nav" >
        <span>
            <a href="dashboard.php"><p><i class="fa-solid fa-briefcase" ></i>  Dashboard</p></a>
        </span>
        <span>
            <a ><p><i class="fa-solid fa-hand-holding-hand"></i>  Services</p> <i class="fa-solid fa-caret-up"></i></a>
            <div class="sub-nav">
                <a href="add-service.php"><p><i class="fa-regular fa-square-plus"></i> Add Services</p></a>
                <a href="manage-services.php"><p><i class="fa-solid fa-people-roof"></i> Manage Services</p></a>
            </div>
        </span>
        <span>
            <a><p><i class="fa-solid fa-pen-to-square"></i> Pages</p><i class="fa-solid fa-caret-up"></i></a>
            <div class="sub-nav">
                <a href="about-us.php"><p><i class="fa-regular fa-address-card"></i> About Us</p></a>
                <a href="contact-us.php"><p><i class="fa-solid fa-id-badge"></i> Contact Us</p></a>
            </div>
        </span>
        <span>
            <a href="customer-list.php"><p> <i class="fa-solid fa-list-ul"></i>  Customer List</p></a>
        </span>
        <span>
            <a href="invoices.php"><p> <i class="fa-solid fa-file-invoice"></i>  Invoices</p></a>
        </span>
        <span>
            <a><p><i class="fa-solid fa-flag"></i> Reports</p> <i class="fa-solid fa-caret-up"></i></a>
            <div class="sub-nav">
                <a href="bwdates-report.php"><p><i class="fa-solid fa-flag"></i> B/W Dates Report</p></a>                       
            </div>
        </span>
        <span>
            <a href="search-invoice.php"><p> <i class="fa-solid fa-magnifying-glass"></i>  Search Invoice</p></a>
        </span>
    </div>
</div>

    <!-- Navigate to change color of link -->
<script>
        let tags=document.getElementsByTagName("a");
        console.log(tags)
        for(let i=0;i<tags.length;i++){
            if(document.title.trim()===tags[i].innerText.trim()){
                tags[i].style.backgroundColor="rgba(0,0,0,0.2)";
            }
        }
 </script>