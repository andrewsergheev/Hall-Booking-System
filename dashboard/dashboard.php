<?php include('includes/header.php'); ?>

          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
<!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">



 <div class="card">
     <div class="card-header d-flex align-items-center">
                      <h3 class="h2">Calendar</h3>
         <div class="card-body text-right">
                      <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add New Client & Booking</button>
                      <!-- Modal-->
                      <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Add New Client & Booking</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                               <?php include('bookingForm.php');?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>



                    </div>
                      <div class="card-body">
                          <!--
<div id='script-warning'>
    <code>php/get-events.php</code> must be running.
</div>

<div id='loading'>loading...</div>-->
<div id="calendar"></div>
                </div>
                </div>


                </div>
</section>

<?php include ('includes/footer.php');?>
