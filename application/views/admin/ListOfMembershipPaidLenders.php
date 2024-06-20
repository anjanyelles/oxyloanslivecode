<?php include 'admin_header.php';?>
<?php include 'admin_sidebar.php';?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="margin-left:20px" class="text-bold">
            <left>Update Membership</left>
        </h1>
        <div class="col-md-6 pull-right">
            <div class="dashBoardPagination pull-right">

                <!-- <ul class="pagination bootpag">
                    <li data-lp="1" class="first disabled"><a href="javascript:void(0);">←</a></li>
                    <li data-lp="1" class="prev disabled"><a href="javascript:void(0);">«</a></li>
                    <li data-lp="1" class="active"><a href="javascript:void(0);">1</a></li>
                    <li data-lp="2" class=""><a href="javascript:void(0);">2</a></li>
                    <li data-lp="3"><a href="javascript:void(0);">3</a></li>
                    <li data-lp="2" class="next"><a href="javascript:void(0);">»</a></li>
                    <li data-lp="3.3" class="last"><a href="javascript:void(0);">→</a></li>
                </ul> -->
            </div>
            <div class="searchborrowerPagination pull-right" style="display: none;">
                <ul class="pagination bootpag">
                </ul>
            </div>
        </div>
    </section><br />

    <section class="content">
        <div class="row">





            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <div class="col-md-6 pull-right">
                                <!-- <div class="pagenationget pull-right pagenationget">
                                <ul class="pagination bootpag">
                                </ul>
                            </div> -->

                            </div>

                        </div>
                        <div class="fdverifiedUserList pull-right">
                            <ul class="pagination bootpag" id="pagination"></ul>
                        </div>


                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>

                                    <tr id="example">
                                        <th>userId </th>
                                        <th> UserName </th>
                                        <th> TransactionAmount </th>
                                        <th>CreatedDate </th>
                                        <th> ValidityDate </th>
                                        <th> LenderRenewalStatus </th>

                                        <th>LenderMembership</th>
                                        <th> FeeStatus </th>
                                        <th>Validity Upgrade</th>




                                    </tr>
                                </thead>
                                <tbody id="displayfdinvoiceList12">
                                    <tr class="fdinvoiceNodata" style="display:none;">
                                        <td colspan="8"> No data found</td>

                                    </tr>




                                    </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

            <!-- /.row -->
    </section>


    <!-- /.content -->
</div>



<script type="text/javascript">
window.onload = ListOfMembershipPaidLenders("load");
</script>


<script type="text/javascript">
// numberOfRegistered11();
ListOfMembershipPaidLenders();

// Bind the numberOfRegistered11 function to the Bootpag page event
$('.dashBoardPagination').on("page", function(event, num) {
    // Call the function again when the page changes
    // numberOfRegistered11();
    ListOfMembershipPaidLenders();
});
</script>


<script id="scriptfdinvoice111" type="text/template">

    {{#data}}
     <tr>      
                                     <td> {{userId}}  
                                     </td>
                                    <!-- <td>{{userName}}</td>
                                    <td>{{mobileNumber}}</td>
                                    <td>{{panNumber}}</td>
                                    <td>{{address}}</td>
                                    <td>{{email}}</td>
                                    <td>{{primaryType}}</td>
                                    <td>{{registeredDate}}</td> -->
                                    <td>{{firstName}}</td>
                                    <td>{{TransactionAmount}}</td>
                                    <td>{{createdDate}}</td>
                                    <td>{{validityDate}}</td>
                                    <td>{{lenderRenewalStatus}}</td>
                                    <td>{{lenderMembership}}</td>
                                    <td>{{feeStatus}}</td>
                                    <td><a  href="ValidityUpdation?userId={{userId}}" target="_self" ><button type="button" class="btn btn-primary">Validity Upgrade</button></a></td>
                                 
                                </tr>
                                {{/data}}
</script>

<script src="<?php echo base_url(); ?>/assets/js/mustache.js"></script>
<?php include 'admin_footer.php';?>