<?php include 'admin_header.php';?>
<?php include 'admin_sidebar.php';?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="margin-left:20px" class="text-bold">
            <left>Update Validity</left>
        </h1>
        <div class="col-md-6 pull-right">
            <div class="dashBoardPagination pull-right">
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
                            <!-- <table id="example2" class="table table-bordered table-hover">
                            <thead>  
    
                                <tr id="example">
                                    <th>userId </th>
                                    <th> UserName </th>
                                    <th> TransactionAmount </th>
                                    <th>CreatedDate </th>
                                    <th> ValidityDate </th>
                                    <th> LenderRenewalStatus </th>

                                    <th>LenderMembership</th>   <th> FeeStatus </th> <th>Validity Upgrade</th>
                                   
                                 
                                 

                                </tr>
                            </thead>
                            <tbody id="displayfdinvoiceList12">
                                <tr class="fdinvoiceNodata" style="display:none;">
                                    <td colspan="8"> No data found</td>

                                </tr>




                                </tfoot>
                        </table> -->


                            <div class="mb-3 " style="width:20rem">
                                <label for="input1" class="form-label">Select Validity date</label>
                                <input type="date" class="form-control" id="input1" aria-describedby="emailHelp">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                            </div>
                            <br>
                            <div class="mb-3 mt-2">

                                <button type="button" class="btn btn-primary" onclick="userValidityUpdation()">Update
                                    Validity</button>

                            </div>
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



<div class="modal modal-success fade" id="modal-transactiondanger">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
    
            </div>
            <div class="modal-body">
       
            </div>
            <div class="modal-footer">
                <a href="#">
                    <button type="button" class="btn btn-outline pull-right" data-dismiss="modal">OK</button>
                </a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div> 





<script type="text/javascript">
// window.onload = userValidityUpdation("load");
</script>


<script type="text/javascript">
// numberOfRegistered11();
// userValidityUpdation();

// Bind the numberOfRegistered11 function to the Bootpag page event
$('.dashBoardPagination').on("page", function(event, num) {
    // Call the function again when the page changes
    // numberOfRegistered11();
    // userValidityUpdation();
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
                               
                                    <td><a  href="ValidityUpdation?userId:{{userId}}&validityDate:{{validityDate}}" target="_self" ><button type="button" class="btn btn-primary">Validity Upgrade</button></a></td>
                                 
                                </tr>
                                {{/data}}
</script>

<script src="<?php echo base_url(); ?>/assets/js/mustache.js"></script>
<?php include 'admin_footer.php';?>