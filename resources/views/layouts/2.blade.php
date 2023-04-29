
<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar -->
        <div class="side-menu-fixed">
         <div class="scrollbar side-menu-bg">
          <ul class="nav navbar-nav side-menu" id="sidebarnav">
    <!-- menu item Dashboard-->
     @can('users')
    <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Permissions</span>
            </div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>

        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
            <li> <a href="{{route('users.index')}}">users menu </a> </li>
            <li> <a href="{{route('roles.index')}}">users permissions </a> </li>
        </ul>
    </li>
    @endcan

    <!-- menu title -->
    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
    <!-- menu item Elements-->
    <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
            <div class="pull-left"><i class="ti-palette"></i><span
                    class="right-nav-text">Show Information</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>
        <ul id="elements" class="collapse" data-parent="#sidebarnav">
            <li><a href="{{URL('driverInf')}}">Driver Information </a></li>
            <li><a href="{{URL('carInf')}}">Car Information</a></li>
            <li><a href="{{URL('healthInf')}}">Health condition of the driver</a></li>
            {{-- <li><a href="{{URL('test')}}">test</a></li> --}}
         </ul>
    </li>
    <!-- menu item calendar-->
    @can('Add Driver Inf')
    <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
            <div class="pull-left"><i class="ti-calendar"></i><span
                    class="right-nav-text">Add Information</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>
        <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
            <li> <a href="{{URL('Driver')}}">Add Driver Inf </a> </li>
        </ul>
    </li>
    @endcan
    <!-- menu item todo-->
    <li>
        <a href="{{URL('control')}}"><i class="ti-menu-alt"></i><span class="right-nav-text"> Control
              </span> </a>
    </li>
    <!-- menu item chat-->


<li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
<!-- menu item Elements-->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#elementss">
<div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">Elements</span></div>
<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
</a>
<ul id="elementss" class="collapse" data-parent="#sidebarnav">
<li><a href="assets/accordions.html">Accordions</a></li>
<li><a href="assets/alerts.html">Alerts</a></li>
<li><a href="assets/button.html">Button</a></li>
<li><a href="assets/colorpicker.html">Colorpicker</a></li>
<li><a href="assets/dropdown.html">Dropdown</a></li>
<li><a href="assets/lists.html">lists</a></li>
<li><a href="assets/assets/modal.html">modal</a></li>
<li><a href="assets/nav.html">nav</a></li>
<li><a href="assets/nicescroll.html">nicescroll</a></li>
<li><a href="assets/pricing-table.html">pricing table</a></li>
<li><a href="assets/ratings.html">ratings</a></li>
<li><a href="assets/date-picker.html">date picker</a></li>
<li><a href="assets/tabs.html">tabs</a></li>
<li><a href="assets/typography.html">typography</a></li>
<li><a href="assets/popover-tooltips.html">Popover tooltips</a></li>
<li><a href="assets/progress.html">progress</a></li>
<li><a href="assets/switch.html">switch</a></li>
<li><a href="assets/sweetalert2.html">sweetalert2</a></li>
<li><a href="assets/touchspin.html">touchspin</a></li>
</ul>
</li>
<!-- menu item calendar-->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menuu">
<div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">calendar</span></div>
<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
</a>
<ul id="calendar-menuu" class="collapse" data-parent="#sidebarnav">
<li> <a href="assets/calendar.html">Events Calendar </a> </li>
<li> <a href="assets/calendar-list.html">List Calendar</a> </li>
</ul>
</li>
<!-- menu item todo-->
<li>
<a href="assets/todo-list.html"><i class="ti-menu-alt"></i><span class="right-nav-text">Todo list</span> </a>
</li>
<!-- menu item chat-->
<li>
<a href="assets/chat-page.html"><i class="ti-comments"></i><span class="right-nav-text">Chat </span></a>
</li>
<!-- menu item mailbox-->
<li>
<a href="assets/mail-box.html"><i class="ti-email"></i><span class="right-nav-text">Mail box</span> <span class="badge badge-pill badge-warning float-right mt-1">HOT</span> </a>
</li>
<!-- menu item Charts-->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
<div class="pull-left"><i class="ti-pie-chart"></i><span class="right-nav-text">Charts</span></div>
<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
</a>
<ul id="chart" class="collapse" data-parent="#sidebarnav">
<li> <a href="assets/chart-js.html">Chart.js</a> </li>
<li> <a href="assets/chart-morris.html">Chart morris </a> </li>
<li> <a href="assets/chart-sparkline.html">Chart Sparkline</a> </li>
</ul>
</li>
<!-- menu font icon-->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
<div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">font icon</span></div>
<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
</a>
<ul id="font-icon" class="collapse" data-parent="#sidebarnav">
<li> <a href="assets/fontawesome-icon.html">font Awesome</a> </li>
<li> <a href="assets/themify-icons.html">Themify icons</a> </li>
<li> <a href="assets/weather-icon.html">Weather icons</a> </li>
</ul>
</li>
<!-- menu title -->
<li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Widgets, Forms & Tables </li>
<!-- menu item Widgets-->
<li>
<a href="assets/widgets.html"><i class="ti-blackboard"></i><span class="right-nav-text">Widgets</span> <span class="badge badge-pill badge-danger float-right mt-1">59</span> </a>
</li>
<!-- menu item Form-->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
<div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Form & Editor</span></div>
<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
</a>
<ul id="Form" class="collapse" data-parent="#sidebarnav">
<li> <a href="assets/editor.html">Editor</a> </li>
<li> <a href="assets/editor-markdown.html">Editor Markdown</a> </li>
<li> <a href="assets/form-input.html">Form input</a> </li>
<li> <a href="assets/form-validation-jquery.html">form validation jquery</a> </li>
<li> <a href="assets/form-wizard.html">form wizard</a> </li>
<li> <a href="assets/form-repeater.html">form repeater</a> </li>
<li> <a href="assets/input-group.html">input group</a> </li>
<li> <a href="assets/toastr.html">toastr</a> </li>
</ul>
</li>
<!-- menu item table -->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
<div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">data table</span></div>
<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
</a>
<ul id="table" class="collapse" data-parent="#sidebarnav">
<li> <a href="assets/data-html-table.html">Data html table</a> </li>
<li> <a href="assets/data-local.html">Data local</a> </li>
<li> <a href="assets/data-table.html">Data table</a> </li>
</ul>
</li>
<li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">More Pages</li>
<!-- menu item Custom pages-->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
<div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">Custom pages</span></div>
<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
</a>
<ul id="custom-page" class="collapse" data-parent="#sidebarnav">
<li> <a href="assets/projects.html">projects</a> </li>
<li> <a href="assets/project-summary.html">Projects summary</a> </li>
<li> <a href="assets/profile.html">profile</a> </li>
<li> <a href="assets/app-contacts.html">App contacts</a> </li>
<li> <a href="assets/contacts.html">Contacts</a> </li>
<li> <a href="assets/file-manager.html">file manager</a> </li>
<li> <a href="assets/invoice.html">Invoice</a> </li>
<li> <a href="assets/blank.html">Blank page</a> </li>
<li> <a href="assets/layout-container.html">layout container</a> </li>
<li> <a href="assets/error.html">Error</a> </li>
<li> <a href="assets/faqs.html">faqs</a> </li>
</ul>
</li>
<!-- menu item Authentication-->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
<div class="pull-left"><i class="ti-id-badge"></i><span class="right-nav-text">Authentication</span></div>
<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
</a>
<ul id="authentication" class="collapse" data-parent="#sidebarnav">
<li> <a href="assets/login.html">login</a> </li>
<li> <a href="assets/register.html">register</a> </li>
<li> <a href="assets/lockscreen.html">Lock screen</a> </li>
</ul>
</li>
<!-- menu item maps-->
<li>
<a href="assets/maps.html"><i class="ti-location-pin"></i><span class="right-nav-text">maps</span> <span class="badge badge-pill badge-success float-right mt-1">06</span></a>
</li>
<!-- menu item timeline-->
<li>
<a href="assets/timeline.html"><i class="ti-panel"></i><span class="right-nav-text">timeline</span> </a>
</li>
<!-- menu item Multi level-->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level"><div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">Multi level Menu</span></div><div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
<ul id="multi-level" class="collapse" data-parent="#sidebarnav">
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#auth">Level item 1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
<ul id="auth" class="collapse">
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#login">Level item 1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
  <ul id="login" class="collapse">
    <li>
    <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice">level item 1.1.1<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
    <ul id="invoice" class="collapse">
      <li> <a href="#">level item 1.1.1.1</a> </li>
      <li> <a href="#">level item 1.1.1.2</a> </li>
    </ul>
  </li>
</ul>
</li>
<li> <a href="#">level item 1.2</a> </li>
</ul>
</li>
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#error">level item 2<div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
<ul id="error" class="collapse" >
<li> <a href="#">level item 2.1</a> </li>
<li> <a href="#">level item 2.2</a> </li>
</ul>
</li>
</ul>
</li>
</ul>
</div>
</div>

<!-- Left Sidebar End-->

<!--=================================

<!-- Left Sidebar End-->

<!--=================================
Main content -->

<!--=================================
wrapper -->


<!--=================================
wrapper -->

<!--=================================
footer -->



<!--=================================
footer -->



<!--=================================
jquery -->

<!-- jquery -->
{{-- <script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="assets/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'assets/js/';</script>

<!-- chart -->
<script src="assets/js/chart-init.js"></script>

<!-- calendar -->
<script src="assets/js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="assets/js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="assets/js/morris.init.js"></script>

<!-- datepicker -->
<script src="assets/js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="assets/js/sweetalert2.js"></script>

<!-- toastr -->
<script src="assets/js/toastr.js"></script>

<!-- validation -->
<script src="assets/js/validation.js"></script>

<!-- lobilist -->
<script src="assets/js/lobilist.js"></script>

<!-- custom -->
<script src="assets/js/custom.js"></script> --}}

</body>
</html>
