<aside class="main-sidebar">
      <!-- sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <div class="image pull-left">
                  @guest

                  @else
                    <img src="{{Auth::user()->avatar}}" class="img-circle" alt="User Image">
                  @endguest
              </div>
              <div class="info">
                  <h4>Welcome</h4>
                  <p>{{Auth::user()->name}}</p>
              </div>
          </div>

          <!-- sidebar menu -->
          <ul class="sidebar-menu">
              <li>
                  <a href="/admin"><i class="fa fa-hospital-o"></i><span>Dashboard</span>
                  </a>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-user-md"></i><span>CareGivers</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="/caregivers/new">Add CareGiver</a></li>
                      <li><a href="/caregivers">CareGiver list</a></li>
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-user"></i><span>Patients</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="/patients/new">Add patient</a></li>
                      <li><a href="/patients">Patient list</a></li>
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-list-alt"></i> <span>Locations</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="/locations/create">Add location</a></li>
                      <li><a href="/locations">Locations List</a></li>

                  </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-list-alt"></i> <span>Pages</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="/pages/new">Add Page</a></li>
                      <li><a href="/pages">Pages List</a></li>

                  </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-credit-card-alt"></i><span>Conditions</span>
                      <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="add-payment.html">Make Invoice</a></li>
                      <li><a href="pay-list.html">List Invoices</a></li>
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-text"></i><span>Activities</span>
                    <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="/activities">Patient Activities</a></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="widgets.html">
                  <i class="fa fa-user-circle-o"></i><span>Stats</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="add-emp.html">Add Staff</a></li>
                  <li><a href="emp-list.html">employee list</a></li>
              </ul>
          </li>
       </li>
  </ul>
