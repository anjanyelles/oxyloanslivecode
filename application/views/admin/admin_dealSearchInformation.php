<?php include 'admin_header.php';?>
<?php include 'admin_sidebar.php';?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <left class="text-bold">Deal Information </left>
        </h1></br></br>
    
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box"></br></br>
                    <div class="box-body" style="min-height: 250px">
                        <div class="row">
                            <label for="lenderId " class="col-sm-3 col-form-label ">Search Deal Information <em
                                    class="error">*</em> :</label>
                            <div class="col-sm-4">
                                <input type="text" name="updating" class="form-control" placeholder="Enter The Deal Name" id="searchDealIdInfo">
                            
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-xm btn-primary col-sm-3" id="profit-submit-btn"
                                    onclick="searchDealInformation();">Search</button>


                            </div>
                        </div>
                        <div class="box-body getdealsearchInfomation" style="display: none;">
                            <div class="form-group row">
                                <div class="box-header">
                                    <div class="col-md-6 pull-left">


                                    </div>
                                    <div class="col-md-6 pull-right">
                                        <div class="viewLenderwalletsinfo pull-right">
                                            <ul class="pagination bootpag">
                                            </ul>
                                        </div>
                                        <div class="searchborrowerPagination pull-right" style="display: none;">
                                            <ul class="pagination bootpag">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr id="example">
                                                <th>Deal Summary</th>
                                                <th>Deal Info</th>
                                                <th>Deal Link</th>

                                            </tr>
                                        </thead>
                                        <tbody id="displayDealsInfo">
                                            <tr class="dealSummaryYearNodata" style="display:none;">
                                                <td colspan="8">No data found</td>
                                            </tr>
                                            </tfoot>
                                    </table>
                                    </br>
                                    </br>

                                </div>
                                <!-- /.
                                    
                                    /.box-header -->
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
<script id="displayDealSummaryInformationScript" type="text/template">
    {{#data}}
            <tr>
                <td>
                <b>  Deal Name : </b>  {{dealName}}  </br> 
                  <b>Deal Id : </b>  {{dealId}}  </br> 
                <b>   Deal Amount : </b> {{dealAmount}} </br>
                 <b> ROI :  </b> {{rateOfInterest}}  % </br>
                <b>  Loan Active Date : </b> {{loanActiveDate}}

                </td>
                <td>
                <b>  Deal Type  :  </b> {{dealType}} </br> 
                <b>  Duration : </b> {{duration}} M </br>  
                <b>  Fee  Status : </b> {{feeStatusToParticipate}} </br> 
                Funds Acceptance  End :{{fundsAcceptanceEndDate}}  </br>  
                Funds Acceptance Start : {{fundsAcceptanceStartDate}}

                </td>
                <td>
                      
                  
                      Borrower Name : {{borrowerName}} </br>
                      Mapped Borrower Ids : {{borrowerIdsMappedTodeal}}  </br>
                      Borrower ROI  : {{borrowerRateOfInterest}} % </br>


                     <b> participation  Type </b>:  {{participationLenderType}} </br>
                     <b> Link  </b>:  <a href="{{dealLink}}"><button class="btn  btn-xs">Link</button></a> </br>
                      
                         
                </td>
            </tr>
            {{/data}}
            </script>

<script src="<?php echo base_url(); ?>/assets/js/mustache.js"></script>
<?php include 'admin_footer.php';?>