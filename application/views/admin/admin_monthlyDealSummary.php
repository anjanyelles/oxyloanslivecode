<?php include 'admin_header.php';?>
<?php include 'admin_sidebar.php';?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="pull-left">
           Monthly Deal Summary
           
        </h1>
    </section><br />
    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class="col-xs-3 text-center" style="display: none;">
                <select class="form-control choosenType" id="Search">
                    <option value="">-- Choose Month and year --</option>
         
                    <option value="Dealsexcelsheet">Deals Excel Sheet</option>
                    <option value="ClosedDealsexcelsheet">Closed Deals Excel Sheet</option>
                </select>
                <span class="errorsearch" style="display: none;">Please Choose Month And Year.</span>
            </div>
            <div class="col-xs-2 text-center dealSummaryMonth" style="display: none;">
                <select class="form-control" name="city" id="choosenMonth" class="form-control MonthlyDealSummaryMonth">
                    <option value=""> Select Month</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>


             <div class="col-xs-3 text-center dealSummaryStatus">
                <select class="form-control" name="city" id="choosendealSummaryStatus" class="form-control MonthlyDealSummaryStatus">
                    <option value=""> Select Status</option>
                    <option value="NOTATACHIEVED">NOTATACHIEVED</option>
                     <option value="ACHIEVED">ACHIEVED</option>
                           <option value="CLOSED">CLOSED</option>
                    
                </select>
            </div>


              <div class="col-xs-2 text-center dealSummaryYear" style="display: none;">
                <select class="form-control" name="city" id="dealSummaryYear" class="form-control MonthlyDealSummaryStatus">
                    <option value=""> Select Year</option>
                    <option value="2024">2024</option>
                     <option value="2023">2023</option> 
                     <option value="2022">2022</option>
                      <option value="2021">2021</option>
                    
                </select>
            </div>


             <div class="col-xs-3 text-center dealSummaryInputYear" >
                <!-- <label class="form-label" for="dealSummaryStartState">Start Date</label> -->
                <input type="date" name="dealSummaryStartState" class="form-control" id="dealSummaryStartInPut">
                 <code>start Date</code>
            </div>

              <div class="col-xs-3 text-center dealSumaaryInputEndYear">
                <!-- <label class="form-label" for="dealSummaryEndInPut">End Date</label> -->
                <input type="date" name="dealSummaryEndInPut" class="form-control" id="dealSummaryEndInPut">
                <code>End Date</code>
            </div>


            <div class="col-xs-3 text-center">
                <button type="button" class="btn bg-gray pull-left search-btn" onclick="monthlydealSumaraySearchRequest();"><i
                        class="fa fa-angle-double-right"></i> <b>Search</b>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-md-12">
                            <b> Note : <code> 
                       Displaying deal summary information On these pages, if you want more information about the closed, not yet achived, Achived information, choose the above search option.
                            </code></b>
                        </div>
                        <div class="col-md-6 pull-right">
                            <div class="viewPaytmdetails pull-right downloadExcelDiv" style="display:none;">

                              <a href="#" target="_blank" class="dealsummaryDownloadUrl"><button class="btn btn-primary "> <i class="fa fa-file-excel-o"> </i> Download Excel </button></a>
                            </div>
                            <div class="viewPaytmdetailsSearch pull-right">
                                <ul class="pagination bootpag">
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr style="background-color: #B0C4DE; border: 3px solid lightgrey;">
                                    <th>Deal Name</th>
                                    <th>Deal Id</th>
                                    <th>Deal Amount</th>
                                    <th>Total Paticipation</th>
                                    <th>Funds Start</th>
                                    <th>Funds End</th>
                                 
                                </tr>
                            </thead>
                            <tbody id="displayPaytmTransactions">
                                <tr id="displayNoRecords" class="displayRequests" style="border: 3px solid lightgrey;">
                                    <td colspan="1">No Data Found!</td>
                                </tr>
                                </tfoot>
                        </table>
                    </div>

                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<script id="displayPaytm" type="text/template">
    {{#data}}
  <tr>
     <td>{{dealname}}</td>
    <td>{{id}}</td>
    <td>{{dealamount}}</td>
    <td>{{totalPaticipation}}</td>
    <td>{{funds_acceptance_start_date}}</td>
    <td>{{funds_acceptance_end_date}}</td>
   
  </tr>
  {{/data}}
  </script>
<script type="text/javascript">
window.onload = paytmTransactions();
</script>
<script src="<?php echo base_url(); ?>/assets/js/mustache.js"></script>
<?php include 'admin_footer.php';?>