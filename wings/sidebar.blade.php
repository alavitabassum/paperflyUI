
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li class="menu-banner">
                  <i class="fa fa-paper-plane"></i> Order Management</li>
                <li>
                  <a>
                    <i class="fa fa-edit"></i>Assign Orders
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="#">Assign One By One</a>
                    </li>
                    <li>
                      <a href="#">Batch Pick Up Assignment</a>
                    </li>
                    <li>
                      <a href="#">Batch Delivery Assignment</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-th"></i>Order History
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{route('orders')}}">Order Records</a>
                    </li>
                    <li>
                      <a href="{{route('orders')}}">Return Orders</a>
                    </li>
                    <li>
                      <a href="{{route('orders')}}">Exchange Orders</a>
                    </li>
                    <li>
                      <a href="#">Banking Details</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a>
                    <i class="fa fa-th-list"></i> Pick Up Details
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="#">Track Pick Ups</a>
                      <!-- add date filter-->
                    </li>
                    <li>
                      <a href="#">Pick Ups Per Executive</a>
                      <!-- add date filter-->
                    </li>
                    <li>
                      <a href="#">Pick Ups Per Merchant</a>
                      <!-- add date filter-->
                    </li>
                    <li>
                      <a href="#">Pick Ups Per Location</a>
                      <!-- add date filter-->
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-cube"></i>Delivery Details
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="#">Track Deliveries</a>
                      <!-- add date filter-->
                    </li>
                    <li>
                      <a href="#">Deliveries Per Executive</a>
                      <!-- add date filter-->
                    </li>
                    <li>
                      <a href="#">Deliveries Per Location</a>
                      <!-- add date filter-->
                    </li>
                  </ul>
                </li>

                <li class="menu-banner">
                  <i class="fa fa-paper-plane"></i> Data Management</li>
                <li>
                  <a>
                    <i class="fa fa-group"></i>Merchants
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{route('merchant')}}">New Registration</a>
                      <!-- add date filter-->
                    </li>
                    <li>
                      <a href="{{route('merchantedit')}}">Edit Existing</a>
                      <!-- add date filter-->
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-map-marker"></i>Operational Countries
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{route('opco')}}">Operational Countries List</a>
                      <!-- add date filter-->
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-map-marker"></i>Districts
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{route('districts')}}">Districts List</a>
                      <!-- add date filter-->
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-map-marker"></i>Thanas
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{route('thanas')}}">Thanas List</a>
                      <!-- add date filter-->
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-map-marker"></i>Routes
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{route('routes')}}">Routes List</a>
                      <!-- add date filter-->
                    </li>
                  </ul>
                </li>
                 <li>
                  <a>
                    <i class="fa fa-map-marker"></i>Banks
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{route('banks')}}">Banks List</a>
                      <!-- add date filter-->
                    </li>
                  </ul>
                </li>
                 <li>
                  <a>
                    <i class="fa fa-map-marker"></i>Bankbranches
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{route('bankbranches')}}">Bankbranch List</a>
                      <!-- add date filter-->
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-location-arrow"></i>Points
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{route('points')}}">Points List</a>
                      <!-- add date filter-->
                    </li>
                    <!--<li>
                      <a href="edit-point.html">Edit Existing</a>
                      <!-- add date filter
                    </li>-->
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-male"></i>Employee
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{route('employees')}}">New Registration</a>
                      <!-- add date filter-->
                    </li>
                    <li>
                      <a href="{{route('employeesedit')}}">Edit Existing</a>
                      <!-- add date filter-->
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <i class="fa fa-suitcase"></i>Designation
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{route('designation')}}">Designation List</a>
                      <!-- add date filter-->
                    </li>
                    
                  </ul>
                </li>

                <li>
                  <a>
                    <i class="fa fa-file-text"></i>Reports
                    <span class="fa fa-chevron-down"></span>
                  </a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="#">Orders</a>
                      <!--use vertical tabs fro sectionings-->
                    </li>
                    <li>
                      <a href="#">Invoices</a>
                      <!-- use vertical tabs fro sectionings-->
                    </li>
                    <li>
                      <a href="#">Shuttles</a>
                      <!--use vertical tabs fro sectionings-->
                    </li>
                    <li>
                      <a href="#S">Points and Executives</a>
                      <!--use vertical tabs fro sectionings-->
                    </li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
