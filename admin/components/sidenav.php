<style>
  .mdc-drawer {
  background: url(components/sidebar-bg.png)!important;
  }
  
      td {
      text-align: left!important;
      }
      
</style>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="index.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                &nbsp;Dashboard
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="myteam.php">
              <i class="fa-solid fa-user-group"></i>
                &nbsp;&nbsp;&nbsp;&nbsp;My Team
              </a>
            </div>
           
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
              <i class="fa-solid fa-user-tie " style="font-size: 1.1rem;" ></i>
                  &nbsp; &nbsp; &nbsp; Staff
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="addstaff.php">
                      Add Staff
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="viewstaff.php">
                      View Staff
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="dsa.php" >
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
                &nbsp; DSA
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="uit-sub-menu">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                  &nbsp;Campaign
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="uit-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="addcampaign.php">
                      Add Campaign
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="viewcampaign.php">
                    View Campaign
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="uiz-sub-menu">
              <i class="fa-solid fa-chart-column"></i>
              &nbsp; &nbsp;&nbsp;  Leads
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="uiz-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="pushleads.php">
                      Push Leads
                    </a>
                  </div>
                
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="newleads.php">
                      View Leads
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="assignedleads.php">
                      Assigned Leads
                    </a>
                  </div>
                 
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="submittedforms.php" data-toggle="expansionPanel" data-target="uio-sub-menu">
              <i class="fa-solid fa-file-contract" style="font-size: 1.1rem;" ></i>
              &nbsp; &nbsp;&nbsp;  Submitted forms
              
              </a>
              
            </div>
            

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui1-sub-menu">
              <i class="fa-solid fa-link"></i>
                  &nbsp; &nbsp;&nbsp;&nbsp;UM Utility
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui1-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="addutility.php">
                      Add
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="viewutility.php">
                      View
                    </a>
                  </div>
                </nav>
              </div>
            </div>

           <!-- <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="uix-sub-menu">
              <i class="fa-solid fa-suitcase"></i> 
              &nbsp; &nbsp; &nbsp;Designation
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="uix-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                 
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="adddesignation.php">
                      Add Designation
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="viewdesignation.php">
                      View Designation
                    </a>
                  </div>
                </nav>
              </div>
            </div>-->
            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="reports.php" >
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
                &nbsp; Reports
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="report1.php">
              <i class="fa-solid fa-receipt" style="font-size: 1.1rem;" ></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agent Report 
              </a>
            </div>
           
            
            
            
           
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="charts.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>
               &nbsp; Charts
              </a>
            </div>
            
            
            
            
          </nav>