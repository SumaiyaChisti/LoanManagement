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
              <i class="fa-solid fa-user "></i>
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
                 
                </nav>
              </div>
            </div>
            

            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="umutility.php">
                <i class="fa-solid fa-link"></i>
                &nbsp;&nbsp; UM Utility
              </a>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="reports.php" >
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
                &nbsp; Reports
              </a>
            </div>
           
            
            
            
           
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="charts.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>
               &nbsp; Charts
              </a>
            </div>
            
            
            
            
          </nav>