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
                Dashboard
              </a>
            </div>
           
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="myprofile.php" data-toggle="expansionPanel" data-target="ui-sub-menu">
              <i class="fa-solid fa-user "></i>
                  &nbsp; &nbsp; &nbsp;My Profile
               
              </a>
              
            </div>

           
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="uiz-sub-menu">
              <i class="fa-solid fa-chart-column"></i>
              &nbsp; &nbsp; &nbsp; Leads
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="uiz-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="newleads.php">
                      New Leads
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="leads.php">
                      Leads
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="https://www.bootstrapdash.com/demo/material-admin-free/jquery/documentation/documentation.html" target="_blank">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
                Reports
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="pages/tables/basic-tables.html">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                Table
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="pages/charts/chartjs.html">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>
                Charts
              </a>
            </div>
            
            
          </nav>