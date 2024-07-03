
<!doctype html>
<html lang="pt-br" dir="ltr">
<head>
    <!-- Meta data -->
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Proz Educação - Sistema de Gestão Escolar" name="description">
<meta content="Proz Educação - Sistema de Gestão Escolar LTDA" name="author">
<meta name="keywords" content="Pincel, Atomico, sistema, gestao escolar, gestao, escolar, faculdade, cursos, pos, educacao"/>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Title -->
<title>Proz Educação - Sistema de Gestão Escolar</title>

<!--Bootstrap.min css-->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

<!-- Dashboard Css -->
<link href="../assets/css/style.css?v=1719859576" rel="stylesheet" />
<link href="../assets/css/color-styles.css?v=1719859576" rel="stylesheet" />
<link href="../assets/css/skin-modes.css?v=1719859576" rel="stylesheet" />

<!-- Custom scroll bar css-->
<link href="../assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

<!-- Horizontal css -->
<link href="../assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
<link href="../assets/plugins/horizontal-menu/horizontal-menu.css?v=1719859576" rel="stylesheet">

<!---Font icons css-->
<link href="../assets/plugins/iconfonts/plugin.css" rel="stylesheet" />

<!--Font Awesome css-->
<link href="../assets/plugins/fontawesome-free/css/all.css" rel="stylesheet">

<!-- Sidebar css -->
<link href="../assets/plugins/sidebar/sidebar.css?v=1719859576" rel="stylesheet">
<!-- sweet alert css -->
<link href="../assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />
<link href="../assets/plugins/accordion/accordion.css" rel="stylesheet" />

<!-- Date Picker Plugin -->
<link href="../assets/plugins/date-picker/date-picker.css" rel="stylesheet" />
<style>
    a {
        color: #089e60;
    }
    a:hover {
        color: #089e60;
    }

    /*------- 2. Forms -------*/
    .form-control:focus {
        border:1px solid #089e60;
        box-shadow:none;
    }
    select.form-control:focus::-ms-value {
        border:1px solid  #089e60 !important;
    }
    /*--------3. Buttons ------*/
    .btn-primary {
        border: 1px solid #089e60;
        background: #089e60;
        color:#fff;
    }
    .btn-primary:hover {
        color: #fff;
        background-color: #0ea064;
        border: 1px solid #0ea064;
    }
    .btn-primary:focus, .btn-primary.focus {
        box-shadow: 0 0 0 2px rgba(83, 18, 127, 0.1);
    }
    .btn-primary.disabled, .btn-primary:disabled {
        color: #fff;
        background-color: #14a267;
        border-color: #14a267;
        opacity:0.7;
    }
    .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #089e60;
        border-color: #089e60;
    }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .show>.btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 2px rgba(242,242,242, 0.1);
    }
    .btn-secondary {
        color: #fff;
        background-color: #1396cc;
        border-color: #1396cc;
    }
    .btn-secondary:hover {
        color: #fff;
        background-color: #00a0cc;
        border-color: #00a0cc;
    }
    .btn-secondary:focus, .btn-secondary.focus {
        box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.1);
    }
    .btn-secondary.disabled, .btn-secondary:disabled {
        color: #fff;
        background-color: #1396cc;
        border-color: #1396cc;
        opacity:0.7;
    }
    .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show>.btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #1396cc;
        border-color: #1396cc;
    }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus, .show>.btn-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.1);
    }
    .btn-outline-primary {
        color: #089e60 ;
        background-color: transparent;
        background-image: none;
        border-color: #089e60  !important;
    }
    .btn-outline-primary:hover {
        color: #fff;
        background-color: #089e60 ;
        border-color: #089e60 ;
    }
    .btn-outline-primary:focus, .btn-outline-primary.focus {
        box-shadow: 0 0 0 2px rgba(242,242,242, 0.1);
    }
    .btn-outline-primary.disabled, .btn-outline-primary:disabled {
        color: #089e60 ;
        background-color: transparent;
    }
    .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .show>.btn-outline-primary.dropdown-toggle {
        color: #fff;
        background-color: #089e60 ;
        border-color: #089e60 ;
    }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .show>.btn-outline-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 2px rgba(242,242,242, 0.1);
    }
    .btn-outline-secondary {
        color: #1396cc;
        background-color: transparent;
        background-image: none;
        border-color: #1396cc !important;
    }
    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #1396cc;
        border-color: #1396cc;
    }
    .btn-outline-secondary:focus, .btn-outline-secondary.focus {
        box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.1);
    }
    .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
        color: #1396cc;
        background-color: transparent;
    }
    .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .show>.btn-outline-secondary.dropdown-toggle {
        color: #fff;
        background-color: #1396cc;
        border-color: #1396cc;
    }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .show>.btn-outline-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.1);
    }

    .btn-link {
        color: #089e60 ;
    }
    .btn-link:hover {
        color: #0ea064;
    }
    /*------4. Drop Downs-------*/
    .notifyimg {
        background: #089e60 ;
    }
    /*------ 5. Tables -----*/
    .table-primary, .table-primary>th, .table-primary>td {
        background-color: rgba(8, 158, 96, 0.1);
    }
    .table-hover .table-primary:hover {
        background-color: #9efad4;
    }
    .table-hover .table-primary:hover>td, .table-hover .table-primary:hover>th {
        background-color: #9efad4;
    }
    .table-secondary, .table-secondary>th, .table-secondary>td {
        background-color: #a2ddf6;
    }
    .table-hover .table-secondary:hover {
        background-color: #a2ddf6;
    }
    .table-hover .table-secondary:hover>td, .table-hover .table-secondary:hover>th {
        background-color: #1396cc;
    }
    .table-primary thead th,.table-primary thead th{
        color:#fff !important;
    }
    .table-primary td{
        color:#089e60 !important;
    }

    /*----- 7. Custom control -----*/
    .accordionjs .acc_section.acc_active > .acc_head {
        background: #089e60;
    }
    /*.sweet-alert button {*/
    /*    background-color: #089e60 !important;*/
    /*}*/

    .addui-slider .addui-slider-track .addui-slider-handle.addui-slider-handle-active .addui-slider-value {
        background: #089e60;
    }
    .addui-slider .addui-slider-track {
        background: #089e60;
    }
    .addui-slider .addui-slider-track .addui-slider-handle:after {
        background: #089e60;
    }
    .addui-slider .addui-slider-track .addui-slider-handle.addui-slider-handle-active {
        background: #089e60;
    }
    .addui-slider .addui-slider-track .addui-slider-range {
        background: #089e60;
    }
    .timeline__item:after {
        border: 6px solid #089e60;
    }
    .spinLoader {
        color: #089e60 !important;
    }
    .spinLoader,
    .spinLoader:before,
    .spinLoader:after {
        background: #089e60 !important;
    }
    div.conv-form-wrapper div.options div.option {
        border: 1px solid #089e60;
        color: #089e60;
    }
    div.conv-form-wrapper div#messages div.message.from {
        background: #089e60;
    }
    form.convFormDynamic button.submit:hover {
        background: #089e60;
    }
    form.convFormDynamic button.submit {
        background: #089e60;
    }
    .fc-event,
    .fc-event-dot {
        background-color: #089e60;
    }
    .fc-event {
        border: 1px solid #089e60
    }
    .fc button {
        background: #089e60;
    }
    .cal1 .clndr .clndr-controls .clndr-control-button .clndr-next-button:hover {
        background: #089e60;
    }
    .cal1 .clndr .clndr-table tr .day.today,
    .cal1 .clndr .clndr-table tr .day.my-today {
        background: #089e60;
    }
    .cal1 .clndr .clndr-controls .clndr-control-button .clndr-next-button:hover {
        background: #089e60;
    }
    .cal1 .clndr .clndr-controls .clndr-control-button .clndr-previous-button:hover {
        background: #089e60;
    }
    .cal1 .clndr .clndr-table .header-days {
        background: #089e60;
    }
    .offer-primary {	border-color: #089e60; }
    .offer-primary .shape{
        border-color: transparent #089e60 transparent transparent;
    }
    .icon-shape-primary{
        color:#089e60;
        background-color: rgba(8, 58, 96, .5);
    }
    .icon-shape-secondary{
        color: #1396cc;
        background-color: rgba(19, 150, 204, .5);
    }
    .bg-gradient-primary
    {
        background: linear-gradient( 89.1deg,  rgb(8, 158, 96) 0.7%, rgb(19, 150, 204) 88.4% ) !important;
    }
    .bg-gradient-secondary
    {
        background: linear-gradient(87deg, #1396cc 0, #1396cc 100%) !important;
    }
    .custom-control-input:checked~.custom-control-label::before {
        color: #fff;
        background-color: #089e60;
        border-color:#089e60;
    }
    .custom-control-input:focus~.custom-control-label::before {
        box-shadow: 0 0 0 1px rgba(152, 166, 173, 0.1), 0 0 0 2px rgba(242,242,242, 0.25);
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #089e60 ;
    }
    .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
        background-color: #089e60 ;
    }
    .custom-radio .custom-control-input:checked~.custom-control-label::before {
        background-color: #089e60 ;
    }
    .custom-select:focus {
        border-color: #089e60;
    }
    .custom-file-input:focus~.custom-file-label {
        border-color: #089e60;
    }
    .custom-file-input:focus~.custom-file-label::after {
        border-color: #089e60;
    }
    .custom-file-label::after {
        background-color: #089e60;
        border-left:1px solid  #089e60;
    }
    .custom-range::-webkit-slider-thumb {
        background-color: #089e60 ;
    }
    .custom-range::-moz-range-thumb {
        background-color: #089e60 ;
    }
    .custom-range::-ms-thumb {
        background-color: #089e60 ;
    }
    /*------8. Navigation -------*/
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        background-color: #089e60 ;
    }

    /*------ Accordion -------*/
    .page-link:hover {
        color: #089e60;
        border: 1px solid #089e60;
    }
    .page-link:focus {
        border: 1px solid #089e60;
    }
    .page-item.active .page-link {
        background-color: #089e60;
        border: 1px solid #089e60;
    }

    /*------ 11. Email services -------*/
    ul.inbox-nav li a:hover, ul.inbox-nav li.active a, ul.inbox-nav li a:focus {
        color: #089e60;
    }

    /*----- 12. Range slider -------*/
    .range.range-primary input[type="range"]::-webkit-slider-thumb {
        background-color: #089e60 ;
    }
    .range.range-primary input[type="range"]::-moz-slider-thumb {
        background-color: #089e60 ;
    }
    .range.range-primary output {
        background-color: #089e60 ;
    }
    .range.range-primary input[type="range"] {
        outline-color: #089e60 ;
    }

    /*-----13.Pricing tables-----*/
    .pricing-table:hover .price-header {
        background-color: #089e60;
    }
    .nav-tabs .nav-item1 .nav-link:hover:not(.disabled) {
        background: #089e60 ;
    }
    .nav-tabs .nav-item1 .nav-link.active {
        background: #089e60 ;
    }

    /*-------15. Tooptip &popover------*/
    /*alerts*/

    .pop-primary {
        color: #089e60;
    }
    .popsecondary {
        color: #1396cc;
    }

    /*----- 16. Typography ------*/
    .heading-primary {
        background-color: #089e60 ;
    }
    .heading-secondary {
        background-color: #1396cc;
    }

    /*------19. Breadcrumb ------*/
    .breadcrumb-item a {
        color: #089e60 ;
    }
    .breadcrumb-item1 a {
        color: #089e60 ;
    }
    .breadcrumb-item1 a:hover {
        color: #0ea064;
    }

    /* ----- v CAN BE DELETED v ----- */
    .panel-title1 a {
        background: #089e60 ;
    }


    /*-----21. List Of Dropdwons-----*/
    .btn.dropdown-toggle.btn-primary~.dropdown-menu .dropdown-plus-title {
        border-color: rgb(8, 158, 96) !important;
    }
    .btn.dropdown-toggle.btn-secondary~.dropdown-menu .dropdown-plus-title {
        border-color: rgb(19, 150, 204) !important;
    }

    /*-----22. Badges-----*/
    .badge-primary {
        background-color: #089e60 ;
    }
    .badge-primary[href]:hover, .badge-primary[href]:focus {
        background-color: #089e60;
    }
    .badge-secondary {
        background-color: #1396cc;
    }
    .badge-secondary[href]:hover, .badge-secondary[href]:focus {
        background-color: #089e60 ;
    }

    /*-----24. Alerts-----*/
    .alert-primary {
        background-color: #089e60;
        border-color: #089e60;
    }
    .alert-primary hr {
        border-top-color: #b7cded;
    }
    .alert-primary .alert-link {
        color: #172b46;
    }
    .alert-secondary {
        color: #464a4e;
        background-color: #1396cc;
        border-color: #1396cc;
    }
    .alert-secondary hr {
        border-top-color: #cfd2d6;
    }
    .alert-secondary .alert-link {
        color: #2e3133;
    }

    /*-----25. progress-----*/

    .progress-bar {
        background-color: #089e60;
    }

    /*-----26. Lists-----*/
    .list-group-item.active {
        color: #089e60 ;
    }
    .list-group-item-primary {
        color: #fff;
        background-color: #089e60;
    }
    .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
        color: #fff;
        background-color: #089e60;
    }
    .list-group-item-primary.list-group-item-action.active {
        color: #fff;
        background-color: #089e60;
        border-color: #089e60;
    }
    .list-group-item-secondary {
        color: #fff;
        background-color: #1396cc;
    }
    .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
        color: #fff;
        background-color: #1396cc;
    }
    .list-group-item-secondary.list-group-item-action.active {
        color: #fff;
        background-color: #1396cc;
        border-color: #1396cc;
    }

    /*------27. Modal -------*/
    .widget-info i {
        border: 2px solid #089e60;
    }

    /*------29. Alignments -------*/
    .bg-primary {
        background-color: #089e60  !important;
    }
    a.bg-primary:hover, a.bg-primary:focus, button.bg-primary:hover, button.bg-primary:focus {
        background-color: #089e60 !important;
    }
    .bg-secondary {
        background-color: #1396cc !important;
    }
    a.bg-secondary:hover, a.bg-secondary:focus, button.bg-secondary:hover, button.bg-secondary:focus {
        background-color: #1396cc !important;
    }
    .border-primary {
        border-color: #089e60  !important;
    }
    .border-secondary {
        border-color: #1396cc !important;
    }

    /*------- 31. Alignments & values-------*/
    .text-primary {
        color: #089e60  !important;
    }
    a.text-primary:hover, a.text-primary:focus {
        color: #089e60 !important;
    }
    .text-secondary {
        color: #1396cc  !important;
    }
    a.text-secondary:hover, a.text-secondary:focus {
        color: #1396cc !important;
    }

    /*------32. Headers -------*/

    .header-bg {
        background: #089e60 ;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #089e60 , #089e60 );
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #089e60 , #089e60 );
    }

    /*------33. Background colors -------*/

    .nav-tabs .nav-link:hover:not(.disabled) {
        background: #089e60 ;
    }
    .nav-tabs .nav-link.active {
        background: #089e60 ;
    }

    /*---Mega Menu---*/

    .ren-navbar .nav-link:hover, .ren-navbar .nav-link:focus {
        background-color: #089e60 ;
    }
    .ren-navbar .nav-link.active {
        background-color: #089e60 ;
    }
    .ren-navbar .mega-dropdown .sub-item .section-label {
        color: #089e60 ;
    }
    .ren-navbar .sub-item ul a:active{
        background-color: #089e60 ;
    }

    /*----- 34. Btn styles------*/

    .btn-secondary {
        color: #fff;
        background-color: #1396cc;
        border-color: #1396cc;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.05);
    }
    .btn-secondary:hover {
        color: #fff;
        background-color:#0e94cc;
        border-color:#0e94cc;
    }
    .btn-secondary:focus, .btn-secondary.focus {
        box-shadow: 0 0 0 2px #1396cc;
    }
    .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show>.btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #1396cc;
    }

    /*.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 2px #089e60 ;
    }*/


    /*
    .close:before {
      content: '\ea00';
      font-family: "feather";
    }
    */

    /*--------35. panel----------*/
    .expanel-primary {
        border: #089e60  !important;
    }
    .expanel-secondary {
        border: #1396cc  !important;
    }
    .expanel-primary>.expanel-heading {
        color: #fff !important;
        background-color: #089e60  !important;
        border-color: #089e60  !important;
    }
    .expanel-secondary>.expanel-heading {
        color: #fff !important;
        background-color: #1396cc  !important;
        border-color: #1396cc  !important;
    }

    /*----- 38. Avatars -----*/

    .avatar {
        background: #089e60 no-repeat center/cover;
    }

    /*-------- 41. Loaders ---------*/
    .lds-circle > div {
        background:#089e60;
    }
    .lds-dual-ring:after {
        border: 5px solid #089e60;
        border-color: #089e60 transparent #089e60 transparent;
    }
    .lds-facebook div {
        background: #089e60;
    }
    .lds-heart div {
        background: #089e60;
    }
    .lds-heart div:after,
    .lds-heart div:before {
        background: #089e60;
    }
    .lds-ring div {
        border: 6px solid #089e60;
        border-color: #089e60 transparent transparent transparent;
    }
    .lds-roller div:after {
        background: #089e60;
    }
    .lds-default div {
        background: #089e60;
    }
    .lds-ellipsis div {
        background:#089e60;
    }
    .lds-grid div {
        background: #089e60;
    }
    .lds-hourglass:after {
        border: 26px solid #089e60;
        border-color: #089e60 transparent #089e60 transparent;
    }
    .lds-ripple div {
        border: 4px solid #089e60;
    }
    .lds-spinner div:after {
        background: #089e60;
    }

    /*----42. Profile----*/
    .mediaicon {
        border: 1px solid #089e60 ;
        background: #089e60 ;
    }

    /*-----43. Icon input-----*/

    a.chip:hover {
        background-color: #089e60 ;
    }

    /*----44. Tags-----*/
    .tag-primary {
        background-color: #089e60;
    }
    .tag-secondary {
        background-color: #1396cc;
    }
    .selectgroup-input:checked+.selectgroup-button {
        border-color: #089e60 ;
        color: #089e60 ;
        background: #eaeaf9;
    }
    .selectgroup-input:focus+.selectgroup-button {
        border-color: #089e60 ;
        color: #089e60 ;
        box-shadow: 0 0 0 2px rgba(242,242,242, 0.25);
    }
    .custom-switch-input:checked~.custom-switch-indicator {
        background: #089e60 ;
    }

    /*----- 48. Gallery -----*/
    .demo-gallery>ul>li a {
        border: 2px solid #089e60;
    }
    .demo-gallery>ul>li a {
        background: #089e60;
    }


    /*-----51. Back to Top-----*/
    #back-to-top {
        background: #633197;
    }

    #back-to-top:hover {
        color: #089e60 ;
        border: 2px solid #089e60 ;
    }
    .tabs-menu ul li .active{
        background: #089e60 ;
    }
    .tabs-menu1 ul li .active{
        border-bottom:3px solid #089e60 ;
    }
    .feature .border {
        border: 2px solid #089e60  !important;
    }

    /*-- rating--*/
    .error-bg:before{
        background:linear-gradient( 89.1deg,  rgb(8, 158, 96,0.8) 0.7%, rgb(19, 150, 204,0.8) 88.4% );
    }

    /*---Count-down---*/

    #count-down .clock-presenter {
        background:linear-gradient( 89.1deg,  rgb(8, 158, 96) 0.7%, rgb(19, 150, 204) 88.4% );
    }


    /*---Navtab Wizard---*/

    .navtab-wizard.nav-tabs .nav-link.active, .navtab-wizard.nav-tabs .nav-link:hover{
        background: #089e60;
    }

    /*--- Ribbon ---*/
    .arrow-ribbon.bg-primary:before {
        border-left: 15px solid #089e60;
    }
    .arrow-ribbon.bg-secondary:before {
        border-left: 15px solid #1396cc;
    }

    /*--chat--*/
    .chat .action-header {
        background: #089e60;
    }
    @media (max-width: 767px){
        .search-show .search-element{
            background:linear-gradient(125deg, #089e60 35%, #089e60 65%);
        }
    }
    .page-headertabs .tabs-menu ul li a {
        border:1px solid #089e60;
    }
    .welcome-image:before{
        background:linear-gradient( 89.1deg,  rgb(8, 158, 96, 0.5) 0.7%, rgb(19, 150, 204, 0.5) 88.4% );
    }

    .page-header .page-title i{
        background:rgba(8, 158, 96,0.1);
        color: #089e60;
    }
    /*--bg-transparents--*/
    .bg-secondary-transparent {
        background-color: rgba(19, 150, 204, 0.1) ;
    }
    .bg-primary-transparent {
        background-color: rgb(8, 158, 96,0.1) ;
    }

    /** Claender **/
    .cal1 .clndr .clndr-table tr .empty:hover, .cal1 .clndr .clndr-table tr .adjacent-month:hover, .cal1 .clndr .clndr-table tr .my-empty:hover, .cal1 .clndr .clndr-table tr .my-adjacent-month:hover {
        background: #089e60;
    }
    .cal1 .clndr .clndr-table tr .day:hover {
        background: #089e60;
    }
    .cal1 .clndr .clndr-table tr .day.today:hover, .cal1 .clndr .clndr-table tr .day.my-today:hover {
        background: #0ea064;
    }

    .header-1 .header{
        background: #633197;
    }
    .header {
        background: #633197;
    }

    /*Side Menu*/
    .app-header {
        background: linear-gradient( 89.1deg,  rgb(8, 158, 96) 0.7%, rgb(19, 150, 204) 88.4% );
    }
    .side-menu__item.active, .side-menu__item:hover, .side-menu__item:focus {
        color:#089e60;
    }
    .side-menu__item.active .side-menu__icon, .side-menu__item:hover .side-menu__icon, .side-menu__item:focus .side-menu__icon{
        color:#089e60;
    }
    .slide-menu a.active{
        color:#089e60;
    }
    .slide-item.active, .slide-item:hover, .slide-item:focus {
        color:#089e60;
    }
    .slide.submenu .side-menu__label:hover{
        color: #089e60;
    }
    .side-menu .slide-menu.submenu-list a:hover{
        color: #089e60;
    }
    .side-menu .slide.submenu a.active {
        color: #089e60;
    }

    /*Horizontal*/
    .horizontalMenu>.horizontalMenu-list>li>a.active {
        color: #089e60;
        background: #26332e;
    }
    .horizontalMenu>.horizontalMenu-list>li>a:hover{
        color: #089e60;
        background: #26332e;
    }
    .horizontalMenu>.horizontalMenu-list>li>ul.sub-menu>li>a:hover {
        color:#089e60;
    }
    .horizontalMenu>.horizontalMenu-list>li>ul.sub-menu>li>ul.sub-menu>li>a:hover{
        color:#089e60;
    }
    .horizontalMenu>.horizontalMenu-list>li>.horizontal-megamenu .link-list li a:hover{
        color:#089e60;
    }
    @media only screen and (max-width: 991px) {
        .horizontalMenu>.horizontalMenu-list>li>ul.sub-menu>li>a:hover {
            color:#089e60;
        }
        .horizontalMenu>.horizontalMenu-list>li>ul.sub-menu li:hover>a {
            background:#089e60;
        }
        .horizontalMenu>.horizontalMenu-list>li:hover>a {
            background:#089e60;
        }
        .hor-menu .horizontalMenu>.horizontalMenu-list>li>a:hover{
            color: #fff;
            background:#123e2b
        }
        .hor-menu .horizontalMenu>.horizontalMenu-list>li>a.active{
            color: #fff;
            background:#123e2b
        }
    }


    /*----- Menu-Styles ----- */
    .slide.is-expanded [data-toggle='slide'] , .slide .side-menu__item.active {
        background: #089e60 !important;
        color: #fff !important;
    }
    .side-menu .side-menu__item:hover{
        background: #089e60 !important;
        color: #fff !important;
    }
    .app-sidebar .side-menu li a.active{
        background: #089e60 !important;
        color: #fff !important;
    }


    /*--- Switcher Checkbox ----*/
    .onoffswitch-checkbox:checked + .onoffswitch-label {
        background-color: #089e60;
    }
    .onoffswitch-checkbox:checked + .onoffswitch-label, .onoffswitch-checkbox:checked + .onoffswitch-label:before {
        border-color:#089e60;
    }
    .onoffswitch2-checkbox:checked + .onoffswitch2-label {
        background-color:#089e60;
    }
    .onoffswitch2-checkbox:checked + .onoffswitch-label2, .onoffswitch2-checkbox:checked + .onoffswitch2-label:before {
        border-color:#089e60;
    }
</style>
<!--GoogleTagManager-->
<script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P6C4FQM');
</script>
<!-- End GoogleTagManager -->

<!-- Date Picker Plugin -->
<link href="../novo/js/intro-js/introjs.css" rel="stylesheet" />
<style>
    .introjs-tooltip {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        position: absolute;
        visibility: visible;
        background-color: #ffffff;
        min-width: 400px;
        max-width: 400px;
        border-radius: 5px;
        -webkit-box-shadow: 0 3px 30px rgba(33, 33, 33, 0.3);
        box-shadow: 0 3px 30px rgba(33, 33, 33, 0.3);
        -webkit-transition: opacity 0.1s ease-out;
        -o-transition: opacity 0.1s ease-out;
        transition: opacity 0.1s ease-out;
        /* width: 100%; */
    }
    </style></head>

<body class="app sidebar-mini rtl">

<!-- Global Loader-->
<div id="global-loader"><img src="../assets/images/svgs/loader.svg" alt="loader"></div>
<input type="hidden" id="hostUsuario" value="https://enferminas.prozeducacao.com.br"/><div class="page">
    <div class="page-main">

        <!-- Navbar-->
        
<header class="header top-header">
    <!-- Navbar Right Menu-->
    <div class="container">
        <div class="d-flex">
            <a id="horizontal-navtoggle" class="animated-arrow hor-toggle" style="margin-top: 0"><span></span></a>
            <a class="header-brand" href="index.php">
                <img alt="logo" class="header-brand-img main-logo hidden-xs hidden-sm visible-lg visible-md"
                     src="../novo/img/logo-proz-branca.png"/>
<!--                <img alt="logo" class="header-brand-img mobile-logo visible-xs visible-sm" src="../assets/images/brand/icon.png">-->
            </a>
            <!-- Sidebar toggle button-->
            <div class="d-flex order-lg-2 ml-auto" style="padding-top: 5px">
                <!-- icone para professor -->
                
                <!-- icone para aluno -->
                                                        <div class="dropdown d-sm-flex d-none header-message">
                        <a class="nav-link icon" data-toggle="dropdown" aria-expanded="false">
                            <i class="fe fe-mail"></i>
                            <span id="topoNotificoesCount" class=" nav-unread badge badge-warning badge-pill">0</span>
                        </a>
                        <div id="topoNotificacoes" class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-225px, -5px, 0px);">
                            <div class="listaNotificacoes"></div>
                            <div class="dropdown-divider"></div>
                            <div class="text-center dropdown-btn pb-3">
                                <div class="btn-list">
                                    <a href="notificacoes.php" class=" btn btn-secondary btn-sm"><i class="fe fe-eye mr-1"></i>Ver Todas Notificações</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                </button>

                <!--Navbar -->
                <div class="dropdown boxPerfil">
                    <a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
                        <span class="avatar avatar-md brround cover-image" data-image-src="/images/perfil/sem_foto.jpg"></span>
                        <span class="ml-2 d-none d-lg-block"> <span class="text-white usuarioNome">FERNANDO JUNIO SANTOS</span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="drop-heading">
                            <div class="text-center">
                                <h5 class="text-dark mb-1">FERNANDO JUNIO SANTOS</h5>
                                <small class="text-muted">Aluno                                </small>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="perfil.php"><i class="dropdown-icon fe fe-user"></i> Perfil</a>
                        <a class="dropdown-item" href="termo_uso.php"><i class="dropdown-icon fa fa-file-alt"></i> Termo de Uso</a>
                                                <a class="dropdown-item" href="?sair=1"><i class="dropdown-icon fe fe-power"></i> Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- modal notificação -->
<div id="msgPincel" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header pd-x-20">
                <h6 class="modal-title" id="msgPincelTitulo"></h6>
                <button type="button" class="close close-alertV" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="msgPincelCorpo">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">
                    <div id="msgPincelBotao"> Ok </div>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- modal -->

<!--GoogleTagManager(noscript)-->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6C4FQM"height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!--EndGoogleTagManager(noscript)-->        <!--/.Navbar -->

        <!-- HORIZONTAL-MENU -->
        <div class="horizontal-main hor-menu clearfix">
    <div class="horizontal-mainwrapper container clearfix">
        <nav class="horizontalMenu clearfix">
            <ul class="horizontalMenu-list">
                                    <li aria-haspopup="true" class="menuInicio">
                        <a href="index.php" idMenu="1" target="_self" class="">
                            <i class="fa fa-home menuIcone"></i> <div class="menuTexto">Início</div>
                        </a>
                                            </li>
                                        <li aria-haspopup="true" class="menuAgenda">
                        <a href="agenda.php" idMenu="2" target="_self" class="">
                            <i class="fa fa-calendar menuIcone"></i> <div class="menuTexto">Agenda</div>
                        </a>
                                            </li>
                                        <li aria-haspopup="true" class="menuBoletim">
                        <a href="boletim.php" idMenu="3" target="_self" class="">
                            <i class="fa fa-medal menuIcone"></i> <div class="menuTexto">Minhas Notas</div>
                        </a>
                                            </li>
                                        <li aria-haspopup="true" class="menuFinanceiro">
                        <a href="financeiro.php" idMenu="4" target="_self" class="">
                            <i class="fa fa-money-bill menuIcone"></i> <div class="menuTexto">Financeiro</div>
                        </a>
                                            </li>
                                        <li aria-haspopup="true" class="menuAvaliacoes">
                        <a href="avaliacoes_corrigidas.php" idMenu="5" target="_self" class="">
                            <i class="fa fa-tasks menuIcone"></i> <div class="menuTexto">Avaliações Corrigidas</div>
                        </a>
                                            </li>
                                        <li aria-haspopup="true" class="menuDocumentos">
                        <a href="#" idMenu="6" target="_self" class="">
                            <i class="fa fa-archive menuIcone"></i> <div class="menuTexto">Documentos e Solicitações</div>
                        </a>
                                                        <ul class="sub-menu">
                                                                            <li aria-haspopup="true"><a target="_self"
                                                                    href="declaracao.php">Declarações Online</a>
                                        </li>
                                                                                <li aria-haspopup="true"><a target="_self"
                                                                    href="diplomas_certificados.php">Diplomas e Certificados</a>
                                        </li>
                                                                                <li aria-haspopup="true"><a target="_self"
                                                                    href="envio_documentos.php">Documentos Pessoais / Curso</a>
                                        </li>
                                                                                <li aria-haspopup="true"><a target="_self"
                                                                    href="requerimento.php">Requerimentos Online</a>
                                        </li>
                                                                        </ul>
                                                    </li>
                                        <li aria-haspopup="true" class="menuJoy">
                        <a href="https://proz.joyclass.com/api?mat=226.890.348-67&cb=aHR0cHM6Ly9lc3NhLnByb3plZHVjYWNhby5jb20uYnIvYWNhZGVtaWNvL3ZhbGlkYWRlTG9naW5Kb3kucGhw&class=none" idMenu="27" target="_blank" class="">
                            <i class="fa fa-desktop menuIcone"></i> <div class="menuTexto">JoyClass</div>
                        </a>
                                            </li>
                                        <li aria-haspopup="true" class="menuOportunidades">
                        <a href="https://proz-carreiras.notion.site/proz-carreiras/Mural-de-Oportunidades-3c582c5d4afe4ae897289bcc42c06c04" idMenu="28" target="_blank" class="">
                            <i class="fa fa-briefcase menuIcone"></i> <div class="menuTexto">Oportunidades</div>
                        </a>
                                            </li>
                                </ul>
        </nav>
        <!-- NAV END -->
    </div>
</div>        <!-- HORIZONTAL-MENU END -->

        <div class="container content-area">
            <div class="horizontal-content">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <form target="_blank" action="declaracao_pdf_portal.php" method="POST">
                                <input type="hidden" id="matricula" name="matricula" value="30149193" />
                                <input type="hidden" id="reqturma" name="reqturma" value="" />
                                <div class="our-services-wrapper card">
                                    <div class="services-inner">
                                        <div class="our-services-img">
                                            <div class="icon icon-shape bg-primary rounded-circle text-white">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div class="our-services-text">
                                            <h4>DECLARAÇÕES
                                                                                            </h4>
                                            <p>ATENÇÃO! Se a declaração não possuir assinatura e for necessário, procure a sua Instituição.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group row gutter table-responsive">
                                                                                    <table width="100%">
                                                <tr>
                                                    <td width="10%"><b>Declaração: </b></td>
                                                    <td><select name="modelo" id="modelo" class="form-control" style="width: 50%; margin-bottom:5px; display: inline" onKeyPress="return arrumaEnter(this, event)">
                                                            <option value="">Selecione o Modelo</option>
                                                                                                                            <option value="335" nivel="CURSO TÉCNICO">
                                                                    Declaração aluno cursante  - Curso Técnico</option>
                                                                                                                                <option value="85" nivel="CURSO TÉCNICO">
                                                                    Imposto de Renda - Curso Técnico</option>
                                                                                                                        </select>
                                                        <span class="col-auto align-self-center">
                                                            <span class="form-help bg-danger text-white" data-toggle="popover" data-placement="right"
                                                              data-content="<p>Selecione o modelo e preencha os dados solicitados, quando necessário.</p>
                                                                <p class='mb-0'><a href=''></a></p>" data-original-title="Modelo Obrigatório">?</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr style="display: none" class="hidden-curso">
                                                    <td class="hidden-curso">Curso: </td>
                                                    <td class="hidden-curso"><select name="curso" id="curso" class="form-control" style="width: 90%; margin-bottom:5px; display: inline">
                                                            <option value="">Escolha o Curso</option>
                                                                                                                            <option style="display:none" value="759703" nivel="CURSO TÉCNICO">
                                                                    Curso Técnico: Técnico em Desenvolvimento de Sistemas M&oacute;d. 0 - Grupo: TRILHAS DE FUTURO II - 07/2022 ((MG) Trilhas de Futuro / (MG) Divinópolis)</option>
                                                                                                                                <option style="display:none" value="818603" nivel="CAPACITAÇÃO">
                                                                    Capacitação: Soft Skills - Habilidades Comportamentais para Vida e o Trabalho M&oacute;d. 0 - Grupo: SOFT SKILLS 2023 ((MG) Trilhas de Futuro / (MG) Divinópolis)</option>
                                                                                                                        </select>
                                                        <span class="col-auto align-self-center">
                                                            <span class="form-help bg-danger text-white" data-toggle="popover" data-placement="right"
                                                                  data-content="<p>Selecione o Curso para qual deseja a Declaração.</p>
                                                                <p class='mb-0'><a href=''></a></p>" data-original-title="Curso Obrigatório">?</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr style="display: none" class="hidden-turma">
                                                    <td class="hidden-turma">Turma: </td>
                                                    <td class="hidden-turma"><select name="turma" id="turma" class="form-control" style="width: 70%; margin-bottom:5px; display: inline">
                                                            <option value="">Escolha a turma</option>
                                                                                                                            <option style="display:none" value="66822" nivel="CAPACITAÇÃO">
                                                                    Capacitação: Soft Skills - Habilidades Comportamentais para Vida e o Trabalho M&oacute;d. 0 - Grupo: SOFT SKILLS 2023 ((MG) Trilhas de Futuro / (MG) Divinópolis)</option>
                                                                                                                                <option style="display:none" value="63961" nivel="CURSO TÉCNICO">
                                                                    Curso Técnico: Técnico em Desenvolvimento de Sistemas M&oacute;d. 0 - Grupo: TRILHAS DE FUTURO II - 07/2022 ((MG) Trilhas de Futuro / (MG) Divinópolis)</option>
                                                                                                                        </select>
                                                        <span class="col-auto align-self-center">
                                                            <span class="form-help bg-danger text-white" data-toggle="popover" data-placement="right"
                                                                  data-content="<p>Selecione a Turma para qual deseja a Declaração.</p>
                                                                <p class='mb-0'><a href=''></a></p>" data-original-title="Turma Obrigatória">?</span>
                                                        </span>
                                                    </td>
                                                </tr>

                                                <tr style="display: none" class="blocoFinanceiro">
                                                    <td>Ano Referência: </td>
                                                    <td ><select name="ano" id="ano" matricula="30149193" class="form-control"  style="width: 20%;">
                                                            <option value="" selected="selected">Escolha o Ano</option>
                                                                                                                    </select>
                                                    </td>
                                                </tr>
                                                <tr  style="diplay:none" class="blocoFinanceiro">

                                                    <td id="tableDiv" colspan="2" style="padding-top:10px;">

                                                    </td>

                                                </tr>
                                            </table>
                                            <div class="footer hidden-observacoes" >
                                            <button class="btn btn-outline-success text-center "
                                                    type="submit" data-toggle="tooltip"
                                                    data-original-title="" data-placement="left">
                                                <i class="fa fa-archive mr-2"></i> Gerar Declaração
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Minhas Declarações</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                                                            <table class="table table-bordered card-table table-vcenter border text-nowrap table-hover">
                                            <thead>
                                            <tr align="center">
                                                <th width="10%"><b>Visualizar</b></th>
                                                <th width="15%"><b>Data</b></th>
                                                <th><b>Declaração / Validador</b></th>
                                                <th><b>Emissão</b></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                                                            <tr>
                                                    <td align="center" class="icon">
                                                        <a target="_blank"
                                                           href="../acesso/aluno_declaracao_emitida_pdf.php?validador=31bd045d30149193">
                                                            <span class="fa fa-eye fa-2x" data-toggle="tooltip"
                                                            data-placement="right"
                                                            data-original-title="Visualizar Declaração"></span>
                                                        </a>
                                                    </td>
                                                    <td>30/06/2024 22:06:03</td>
                                                    <td>Declaração aluno cursante  -                                                         31bd045d30149193</td>
                                                    <td align="left">30149193                                                         (Portal)                                                </tr>
                                                                                        </tbody>
                                        </table>
                                                                        </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <!--Sidebar-right-->
        
        <footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Proz Educação - Sistema de Gestão Escolar LTDA <span>2013/2024</span>.
            </div>
        </div>
    </div>
</footer>
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>
    </div>
</div>
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fas fa-angle-up "></i></a>

<!-- Dashboard Core -->
<script src="../assets/js/vendors/jquery-3.2.1.min.js"></script>
<script src="../assets/js/vendors/jquery.sparkline.min.js"></script>
<script src="../assets/js/vendors/selectize.min.js"></script>
<script src="../assets/js/vendors/jquery.tablesorter.min.js"></script>
<script src="../assets/js/vendors/circle-progress.min.js"></script>
<script src="../assets/plugins/jquery.rating/jquery.rating-stars.js"></script>

<!-- Datepicker js -->
<script src="../assets/plugins/date-picker/date-picker.js"></script>
<script src="../assets/plugins/date-picker/jquery-ui.js"></script>
<script src="../assets/plugins/jquery.mask/jquery.maskedinput.js"></script>
<script>
    jQuery(function($){
        $.datepicker.regional['pt-BR'] = {
            closeText: 'Fechar',
            prevText: '&#x3c;Anterior',
            nextText: 'Pr&oacute;ximo&#x3e;',
            currentText: 'Hoje',
            monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
                'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
                'Jul','Ago','Set','Out','Nov','Dez'],
            dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado'],
            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
            dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 0,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''};
        $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
    });
</script>

<!--Bootstrap.min js-->
<script src="../assets/plugins/bootstrap/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom scroll bar js-->
<script src="../assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../assets/plugins/sidemenu/js/left-menu.js"></script>

<!--Horizontal js -->
<script src="../assets/plugins/horizontal-menu/horizontal-menu.js"></script>

<!-- Input Mask js-->
<script src="../assets/plugins/jquery.mask/jquery.mask.min.js"></script>

<!-- Progress js-->
<script src="../assets/js/vendors/circle-progress.min.js"></script>

<!--Counters js-->
<script src="../assets/plugins/counters/counterup.min.js"></script>
<script src="../assets/plugins/counters/waypoints.min.js"></script>

<!-- Sidebar js -->
<script src="../assets/plugins/sidebar/sidebar.js"></script>

<!-- Custom js -->
<script src="../assets/js/custom.js?v=2"></script>

<!-- Sweet alert Plugin -->
<script src="../assets/plugins/sweet-alert/sweetalert.min.js"></script>
<script src="../assets/plugins/md5.js"></script>


<script src="../assets/plugins/accordion/accordion.min.js"></script>
<script src="../assets/plugins/accordion/accordion.js"></script>

<script>
    $(function(e) {
        $(".blocoAccordion").accordionjs();
        // Demo text. Let's save some space to make the code readable. ;)
    });
    function loadOn() {
        $('#global-loader').show();
    }
    function loadOff() {
        $('#global-loader').hide();
    }
    $('body').on('click', '.fecharJanela', function(){
        var reload = $(this).attr('reload');
        if(reload == 'true'){
            window.opener.location.reload();
            window.close();
        } else {
            window.close();
        }
    });



    var linkPadrao = $('#hostUsuario').val()+'/novo/';
</script>

<script type="text/javascript" src="https://cdn.editorasaraiva.com.br/bibliotecadigital/api/digital.library.min.js"></script>

<!-- notificacoes -->
<script src="../novo/js/pages/academico_novo/notificacoes.js?v=1719859581"></script>
<!-- intro -->
<script src="../novo/js/intro-js/intro.js?v=1719859581"></script>

<script src="../novo/js/pages/adm/aluno_declaracao.js?v=1719859581"></script>

</body>
</html>