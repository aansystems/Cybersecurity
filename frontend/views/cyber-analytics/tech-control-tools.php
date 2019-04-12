<?php
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LearnersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Technical Control Dashboard';
$this->params['breadcrumbs'][] = $this->title;
//print_r($role_type);
//           die();
$role = Yii::$app->user->identity->role_type;
?>

<style>
    .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
        margin-bottom: 0;
    }
    .policy_div.current {
        border: 2rem solid #C1E344;
        background: none;
    }
    .radio input[type="radio"] {
        opacity: 1;
        height: auto;
        width: auto;
        overflow: hidden;
    }
    .radio {
        margin-left: -1rem;
    }
    .radio label {
        color: black;
        line-height: 2.5rem;
        width: 100%
    }
    .policy_desc {
        max-height: 24rem;
        min-height: 24rem;
        overflow-y: auto;
        font-size: initial;
    }
    ::-webkit-scrollbar {
        width: 0px;  /* remove scrollbar space */
        background: transparent;  /* optional: just make scrollbar invisible */
    }
    /* optional: show position indicator in red */
    ::-webkit-scrollbar-thumb {
        background: #FF0000;
    }
    input[type=file] {
        cursor: pointer;
        display: block; 
        height: 100%; 
        opacity: 1 !important; 
        position: relative; 
        width: 100%;
    }
    .div-policy {
        background-image: linear-gradient(-120deg, #dde49f 0%, #fbfcdb 100%);
        min-height: 26rem;
        max-height: 26rem;
        border-bottom: 0.2rem solid white;
    }
    .div-policy.policy_div {
        min-height: 48rem;
        max-height: 48rem;
    }
    .upload-doc {
        margin: 1rem 1rem 2rem 7.5rem;
    }
    input[type=file] {
        display: inline-block;
        width: 50%;
        margin-left: 1.5rem;
    }
    input[type=date] {
        margin-left: 1.5rem
    }
    .checkbox+.checkbox, .radio+.radio {
        margin-top: -10px;
    }
    .radio label, label {
        font-size: large;
    }
    .legend {
        height: 1rem;
        width: 1.5rem;
    }
    @media (min-height: 890px) {
        #policies {
            max-height: 70rem;
        }
        .div-policy.policy_div {
            min-height: 70rem;
            max-height: 70rem;
        }
    }
    @media (max-width: 767px){
        .col-sm-12 {
            width: 100%;
        }
        .col-sm-8 {
            margin-top: -10px;
        }
        .container-fluid{

            margin-top: 50px !important;
        }
    }
    @media (max-width: 991px){
        .col-sm-8 {
            width: 100% !important;
        }
    }
    @media (min-width: 992px) and (max-width: 1223px){
        .div-options{
            min-height: 30rem;
            max-height: 30rem;
        }
        .div-status{
            min-height: 30rem;
            max-height: 30rem;
        }

    }
    @media (min-width: 768px) and (max-width: 1100px) {
        .div-policy{
            min-height: 28rem;
            max-height: 28rem;
        } 

        span {
            font-size: 17px !important;
        }

        span.round-tabs {
            width: 52px !important;
            height: 52px !important;
            line-height: 54px !important;
        }

        .liner {

            top: 42% !important;

        }
    }
    @media (min-width: 1210px){
        .div-options{
            min-height: 18rem;
            max-height: 18rem;
        }
    }
    @media (max-width: 440px){
        .div-options{
            min-height: 30rem;
        }
    }
    @media (min-height: 890px) {
        .div-policy{
            min-height: 47rem;
        }
        .policy_desc{
            max-height: 38rem;
            min-height: 38rem;
        }
        .div-links{
            max-height: 43.5rem;
            min-height: 43.5rem;
        }
        .policy_div {
            max-height: 70rem;
            overflow-y: auto;
        }
    }

    #policies {
        max-height: 48rem;
        overflow-y: auto;
        margin-right: -0.01rem;
    }
    @media (min-height: 890px) {
        .div-policy{
            min-height: 47rem;
        }
        .policy_desc{
            max-height: 38rem;
            min-height: 38rem;
        }
        .div-links{
            max-height: 43.5rem;
            min-height: 43.5rem;
        }
        .policy_div {
            max-height: 70rem;
            overflow-y: auto;
        }
    }

    ::-webkit-scrollbar { 
        display: none;
    }
    /*  vertical tab */
    div.vertical-tab-container {
        z-index: 10;
        background-color: #ffffff;
        padding: 0 !important;
        border-radius: 4px;
        -moz-border-radius: 4px;
        border:1px solid #ddd;
        margin-top: 20px;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
        -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        background-clip: padding-box;
        opacity: 0.97;
        filter: alpha(opacity=97);
    }

    div.vertical-tab-menu{
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 0;
        height: 550px;
        overflow-y: scroll;
    }

    div.vertical-tab-menu div.list-group{
        margin-bottom: 0;
    }

    div.vertical-tab-menu div.list-group>a{
        margin-bottom: 0;
        color: #000000;
        font-weight: 500 !important;
    }

    div.vertical-tab-menu div.list-group>a .glyphicon,
    div.vertical-tab-menu div.list-group>a .fa {
        color: #7B7B7B;
    }

    div.vertical-tab-menu div.list-group>a:first-child {
        border-top-right-radius: 0;
        -moz-border-top-right-radius: 0;
    }

    div.vertical-tab-menu div.list-group>a:last-child {
        border-bottom-right-radius: 0;
        -moz-border-bottom-right-radius: 0;
    }

    div.vertical-tab-menu div.list-group>a.active,
    div.vertical-tab-menu div.list-group>a.active .glyphicon,
    div.vertical-tab-menu div.list-group>a.active .fa {
        color: #ffffff;
    }

    div.vertical-tab-menu div.list-group>a.active:after {
        content: '';
        position: absolute;
        left: 95%;
        top: 50%;
        margin-top: -13px;
        border-right: 0;
        border-bottom: 13px solid transparent;
        border-top: 13px solid transparent;
        border-right: 15px solid #FFFFFF;
    }

    div.vertical-tab-content {
        background-color: #ffffff;
        padding-left: 20px;
        padding-top: 10px;
    }

    div.vertical-tab div.vertical-tab-content:not(.active) {
        display: none;
    }

    .board {
        width: 100%;
        height: auto;
        overflow-y: scroll;
        background: #fff;
    }

    .board .nav-tabs {
        position: relative;
        margin: 2rem auto;
        margin-bottom: 0;
        box-sizing: border-box;
    }

    .board > div.board-inner {
        background: #fafafa;
        background-size: 30%;
    }

    div.narrow {
        width: 100%;
        padding-left: 5%;
        padding-right: 5%;
        font-size: 16px;
        line-height: 25px;
        font-weight: 400;
    }

    .liner {
        height: 2px;
        background: #ddd;
        position: absolute;
        width: 66%;
        margin: 0 auto;
        left: -31px;
        right: -43px;
        top: 50%;
        z-index: 1;
    }

    .nav-tabs {
        background: none !important;
        border: 1px solid #9A9A9A;
    }

    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tabs {
        width: 70px;
        height: 70px;
        line-height: 70px;
        display: inline-block;
        border-radius: 100px;
        background: white;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 25px;
    }

    span.round-tabs.one {
        color: rgb(34, 194, 34);
        border: 2px solid rgb(34, 194, 34);
    }

    li.active span.round-tabs.one {
        background: rgb(34, 194, 34) !important;
        border: 2px solid #ddd;
        color: #FFFFFF;
    }

    span.round-tabs.two{
        color: #f1685e;
        border: 2px solid #f1685e;
    }

    li.active span.round-tabs.two{
        background: #f1685e !important;
        border: 2px solid #ddd;
        color: #FFFFFF;
    }

    span.round-tabs.three{
        color: #467ce2;
        border: 2px solid #467ce2;
    }

    li.active span.round-tabs.three{
        background: #467ce2 !important;
        border: 2px solid #ddd;
        color: #FFFFFF;
    }

    span.round-tabs.four{
        color: orange;
        border: 2px solid orange;
    }

    li.active span.round-tabs.four{
        background: orange !important;
        border: 2px solid #ddd;
        color: #FFFFFF;
    }

    span.round-tabs.five{
        color: #999999;
        border: 2px solid #999999;
    }

    li.active span.round-tabs.five{
        background: #999999 !important;
        border: 2px solid #ddd;
        color: #FFFFFF;
    }

    .nav-tabs > li.active > a span.round-tabs{
        background: #fafafa;
    }
    .nav-tabs > li {
        width: 25%;
    }

    .nav-tabs > li:after {
        content: " ";
        position: absolute;
        left: 45%;
        opacity:0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: #ddd;
        transition:0.1s ease-in-out;

    }
    .nav-tabs > li.active:after {
        content: " ";
        position: absolute;
        left: 45%;
        opacity:1;
        margin: 0 auto;
        bottom: 0px;
        border: 10px solid transparent;
        border-bottom-color: #9A9A9A;

    }
    .nav-tabs > li a{
        width: 70px;
        height: 70px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
    }

    .nav-tabs > li a:hover{
        background: transparent;
    }

    .tab-pane{
        position: relative;
        padding-top: 20px;
    }
    .tab-content .head{
        font-weight: 300;
        font-size: 23px;
        text-transform: uppercase;
        padding-bottom: 10px;
    }
    .btn-outline-rounded {
        padding: 10px 40px;
        margin: 20px 0;
        border: 2px solid transparent;
        border-radius: 25px;
    }

    .btn.green {
        background-color:#5cb85c;
        color: #ffffff;
    }

    i.fa.fa-square {
        margin-right: 1%;
    }

    @media( max-width : 585px){

        .board {
            width: 90%;
            height:auto !important;
        }
        span.round-tabs {
            font-size:16px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }
        .tab-content .head{
            font-size:20px;
        }
        .nav-tabs > li a {
            width: 50px;
            height: 50px;
            line-height:50px;
        }

        .nav-tabs > li.active:after {
            content: " ";
            position: absolute;
            left: 35%;
        }

        .btn-outline-rounded {
            padding:12px 20px;
        }
    }

    .messagebox {
        border: solid 1px #cecece;
        min-height: 12rem;
        color: #4B515D;
        padding: 0;
        margin-right: 1rem;
        margin-left: 1rem;
        margin-bottom: 1rem;
    }

    .messagebox.success{
        border: solid 1px #00C851;
        border-left: solid 4px #00C851;
    }

    .messagebox.fail{
        border: solid 1px #ff4444;
        border-left: solid 4px #ff4444;
    }

    .messagebox.warning {
        border: solid 1px #ffbb33;
        border-left: solid 4px #ffbb33;
    }

    .messagebox.info {
        border: solid 1px #5BC0DE;
        border-left: solid 4px #5BC0DE;
    }

    .messagebox.not-started {
        border: solid 1px #616161;
        border-left: solid 4px #616161;
    }

    .messagebox-icon{
        padding: 1em;
    }

    .messagebox-detail-link{
        margin-left: 1em;
        margin-right: 1em;
        position: relative;
        right: 0;
    }

    .messagebox .col-md-10 i, .messagebox .col-lg-10 i, .messagebox .col-sm-10 i {
        font-size: 8px;
    }

    @media (min-width: 1200px) {
        .col-lg-4.messagebox {
            width: 30%;
        }
    }
    @media (max-width: 1200px) AND (min-width: 1000px) {
        .col-md-6.messagebox {
            width: 45%;
            min-height: 15rem;
        }
    }
    @media (max-width: 1000px) {
        .col-sm-12.messagebox {
            width: 95%;
            margin-bottom: 1rem;
        }
    }

    .title {
        font-weight: 400;
        letter-spacing: -1px;
    }

    #expanded-status{
        border: solid 1px black;
    }

    .list-group-item h6 {
        font-weight: 500;
    }

    .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
        color: #fff;
    }
    .card img {
        width: 90%;
    }
    .process-pane {
        padding-top: 0;
    }

    .color-red.active, .color-red.active:focus, .color-red.active:hover {
        background: #F16D63;  /* fallback for old browsers */
        border-color: #F16D63;  /* fallback for old browsers */
    }
    .color-red.current {
        border-color: #F16D63;  /* fallback for old browsers */
    }
    label.color-red {
        color: #F16D63;  /* fallback for old browsers */
        background: none;
        border: none;
    }
    .color-green.active, .color-green.active:focus, .color-green.active:hover {
        background: #28C328;  /* fallback for old browsers */
        border-color: #28C328;  /* fallback for old browsers */
    }
    .color-green.current {
        border-color: #28C328;  /* fallback for old browsers */
    }
    label.color-green {
        color: #28C328;  /* fallback for old browsers */
        background: none;
        border: none;
    }
    .color-blue.active, .color-blue.active:focus, .color-blue.active:hover {
        background: #4B80E2;  /* fallback for old browsers */
        border-color: #4B80E2;  /* fallback for old browsers */
    }
    .color-blue.current {
        border-color: #4B80E2;  /* fallback for old browsers */
    }
    label.color-blue {
        color: #4B80E2;  /* fallback for old browsers */
        background: none;
        border: none;
    }
    .color-orange.active, .color-orange.active:focus, .color-orange.active:hover {
        background: #FFA707;  /* fallback for old browsers */
        border-color: #FFA707;  /* fallback for old browsers */
    }
    .color-orange.current {
        border-color: #FFA707;  /* fallback for old browsers */
    }
    label.color-orange {
        color: #FFA707;  /* fallback for old browsers */
        background: none;
        border: none;
    }
    .color-grey.active, .color-grey.active:focus, .color-grey.active:hover {
        background: #616161;  /* fallback for old browsers */
        border-color: #616161;
    }
    .color-grey.current {
        border-color: #616161;
    }
    label.color-grey {
        color: #616161;  /* fallback for old browsers */
        background: none;
        border: none;
    }

    @media (max-width: 500px) {
        .list-style{
            word-break: break-word;
            font-size: xx-small;
        }

        .card img {
            width: 100%;
        }

        .list-group-item {

            padding: 0px 2px;
        }

    }
</style>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header1 card-header-text" data-background-color="blue">
                        <h4 class="card-title text-uppercase">Technical Control Tools</h4>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vertical-tab-container">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 vertical-tab-menu">
                                    <div class="list-group list-style">
                                        <a href="#" class="list-group-item hide text-center">
                                            <i class="fa fa-low-vision fa-2x"></i><br>
                                            <h6 class="text-capitalize">Technical Controls</h6>
                                        </a>
                                        <a href="#" id="policy_11" class="list-group-item text-center color-red active">
                                            <h6 class="text-capitalize">Application Diagnostic</h6>
                                        </a>
                                        <a href="#" id="policy_6" class="list-group-item text-center 
                                           color-green                                               ">
                                            <h6 class="text-capitalize">Network Diagnostic</h6>
                                        </a>
                                        <a href="#" id="policy_4" class="list-group-item text-center 
                                           color-orange                                               ">
                                            <h6 class="text-capitalize">Vulnerability assessment and Penetration testing</h6>
                                        </a>
                                        <a href="#" id="policy_8" class="list-group-item text-center 
                                           color-blue                                               ">
                                            <h6 class="text-capitalize">Miscellaneous</h6>
                                        </a>

                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Technical Controls</h3>
                                                <div class="board">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active process-pane">
                                                            <img src="/cybersecurity_cloud/images/vivaan-armor.jpg" alt="" width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content active">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Application Diagnostic</h3>
                                                <div class="board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#description_11" data-toggle="tab" title="description">
                                                                    <span class="round-tabs one">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#status_11" id="status_click_11" data-toggle="tab" title="status">
                                                                    <span class="round-tabs three">
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#additional-links_11" data-toggle="tab" title="additional-links">
                                                                    <span class="round-tabs four">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/cybersecurity_cloud/cso-templates/index?id=11" title="download">
                                                                    <span class="round-tabs five">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="description_11">
                                                            <h4 class="head text-center">Info</h4>
                                                            <div class="policy_desc narrow text-left">
                                                                <p><b>Application security</b> encompasses measures taken to improve the security of an application often by finding, fixing and preventing security vulnerabilities.</p><p>
                                                                    Different techniques are used to surface such security vulnerabilities at different stages of an applications lifecycle such design, development, deployment, upgrade, maintenance.</p><p>
                                                                    Different techniques will find different subsets of the security vulnerabilities lurking in an application and are most effective at different times in the software lifecycle. They each represent different tradeoffs of time, effort, cost and vulnerabilities found.</p>
                                                                <b>Techniques</b>
                                                                <ul>
                                                                    <li>
                                                                        Whitebox security review, or code review. This is a security engineer deeply understanding the application through manually reviewing the source code and noticing security flaws. Through comprehension of the application vulnerabilities unique to the application can be found.</li>
                                                                    <li>Blackbox security audit. This is only through use of an application testing it for security vulnerabilities, no source code required.</li>
                                                                    <li>Design review. Before code is written working through a threat model of the application. Sometimes alongside a spec or design document.</li>
                                                                    <li>Tooling. There exist many automated tools that test for security flaws, often with a higher false positive rate than having a human involved.</li>
                                                                    <li>Coordinated vulnerability platforms. These are hacker-powered application security solutions offered by many websites and software developers by which individuals can receive recognition and compensation for reporting bugs.</li>
                                                                    <li>Utilizing these techniques appropriately throughout the software development life cycle (SDLC) to maximize security is the role of an application security team.</li></ul>                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="question_11">
                                                            <h3 class="head text-center">Please choose one of the options below</h3>
                                                            <form enctype="multipart/form-data" method="POST" action="process-policy">
                                                                <input type="hidden" name="_csrf" value="66__4_OfMh5EJe5u7TeQyRWXzhSjNKWjAYnelJGky-mt_ou5kqhqfBdBjDaiXufkJda0ZMVh6cEsv5zb6Mi-qA==">
                                                                <div class="narrow text-left question">
                                                                    <div class="radio">
                                                                        <label class="color-green">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="11" data-option="option_1" value="1" data-score="1" name="optradio">Control has been implemented                                                                                    <input name="policy_id" type="hidden" value="11">
                                                                        </label>
                                                                        <div id="upload_doc_11" class="upload-doc hide">
                                                                            <p>Upload the policy document: <input name="doc" type="file" class="policy_doc"></p>
                                                                            <p>Expiry date of document: <input name="ex_date" type="date">
                                                                            </p></div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-red">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="11" data-option="option_2" value="2" data-score="0" name="optradio" checked="">Control is required but not completed                                                                                    <input name="policy_id" type="hidden" value="11">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-blue">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="11" data-option="option_3" value="3" data-score="1" name="optradio">Control not needed in our organization                                                                                    <input name="policy_id" type="hidden" value="11">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-orange">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="11" data-option="option_4" value="4" data-score="1" name="optradio">I don't know about this                                                                                    <input name="policy_id" type="hidden" value="11">
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <p class="text-center">
                                                                    <input type="submit" class="btn btn-success btn-outline-rounded green">
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="status_11">
                                                            <h4 class="head text-center">Report Uploads</h4>
                                                            <div class="row div-status" id="status_log_11">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 messagebox fail">
                                                                    <div class="row">
                                                                        <div class="col-lg-2 col-md-2 col-sm-2 messagebox-icon">
                                                                            <i class="fa fa-2x fa-times-circle text-danger" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-10 col-sm-10">
                                                                            <div class="h5 messagebox-header">
                                                                                Control is required but not completed                                                                                        </div>
                                                                            <i class="fa fa-circle text-danger" aria-hidden="true"></i> 2019-02-16 15:26:42 <br>
                                                                            <i class="fa fa-circle text-danger" aria-hidden="true"></i> Raghavendra Kulkarni                                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-links_11">
                                                            <h4 class="head text-center">Additional Links</h4>
                                                            <div class="narrow text-left">
                                                                <ul>                                                                            <li><a href="https://www-935.ibm.com/services/us/imc/pdf/br-ibm-application-security.pdf" target="_blank">https://www-935.ibm.com/services/us/imc/pdf/br-ibm-application-security.pdf</a></li>
                                                                    <li><a href=" https://www.hcltech.com/sites/default/files/Application_Security_An_SDLC_Imperative.pdf" target="_blank"> https://www.hcltech.com/sites/default/files/Application_Security_An_SDLC_Imperative.pdf</a></li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Network Diagnostic</h3>
                                                <div class="board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#description_6" data-toggle="tab" title="description">
                                                                    <span class="round-tabs one">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <!--                                                            <li>
                                                                                                                            <a href="#question_6" data-toggle="tab" title="question">
                                                                                                                                <span class="round-tabs two">
                                                                                                                                    <i class="fa fa-question" aria-hidden="true"></i>
                                                                                                                                </span> 
                                                                                                                            </a>
                                                                                                                        </li>-->
                                                            <li>
                                                                <a href="#status_6" id="status_click_6" data-toggle="tab" title="status">
                                                                    <span class="round-tabs three">
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#additional-links_6" data-toggle="tab" title="additional-links">
                                                                    <span class="round-tabs four">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/cybersecurity_cloud/cso-templates/index?id=6" title="download">
                                                                    <span class="round-tabs five">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="description_6">
                                                            <h4 class="head text-center">Info</h4>
                                                            <div class="policy_desc narrow text-left">
                                                                <p>Access control relies on and coexists with other security services in a computer system. This is illustrated in. Access control is concerned with limiting the activity of legitimate users. It is enforced by a reference monitor which mediates every attempted access by a user (or program executing on behalf of that user) to objects in the system. The reference monitor consults an authorization database in order to determine if the user attempting to do an operation is actually authorized to perform that operation. Authorizations in this database are administered and maintained by a security administrator. The administrator sets these authorizations on the basis of the security policy of the organization. Users may also be able to modify some portion of the authorization database, for instance, to set permissions for their personal’s. Auditing monitors and keeps a record of relevant activity in the system. Figure 1 is a logical picture of security services and their interactions. It should not be interpreted literally. For instance, as we will see later, the authorization database is often stored with the objects being protected by the reference monitor rather than in a physically separate area. The picture is also somewhat idealized in that the separation between authentication, access control, auditing and administration services may not always be so clear as this picture indicates. This separation is considered highly desirable but is not always faithfully implemented in every system. It is important to make a clear distinction between authentication and access control. Correctly establishing the identity of the user is the responsibility of the authentication service. Access control assumes that authentication of the user has been successfully verified prior to enforcement of access control via a reference monitor. The effectiveness of the access control rests on a proper user identification and on the correctness of the authorizations governing the reference monitor. The reader is surely familiar with the process of signing on to a computer system by providing an identified and a password. In a networked environment authentication becomes more difficult for several reasons. If intruders can observe network trac they can replay authentication protocols to masquerade as legitimate users. Also, computers on the network need to mutually authenticate each other. In this paper we assume that authentication has been correctly achieved, and focus on what happens after that.</p>                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="question_6">
                                                            <h3 class="head text-center">Please choose one of the options below</h3>
                                                            <form enctype="multipart/form-data" method="POST" action="process-policy">
                                                                <input type="hidden" name="_csrf" value="66__4_OfMh5EJe5u7TeQyRWXzhSjNKWjAYnelJGky-mt_ou5kqhqfBdBjDaiXufkJda0ZMVh6cEsv5zb6Mi-qA==">
                                                                <div class="narrow text-left question">
                                                                    <div class="radio">
                                                                        <label class="color-green">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="6" data-option="option_1" value="1" data-score="1" name="optradio" checked="">Control has been implemented                                                                                    <input name="policy_id" type="hidden" value="6">
                                                                        </label>
                                                                        <div id="upload_doc_6" class="upload-doc ">
                                                                            <p>Upload the policy document: <input name="doc" type="file" class="policy_doc"></p>
                                                                            <p>Expiry date of document: <input name="ex_date" type="date">
                                                                            </p></div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-red">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="6" data-option="option_2" value="2" data-score="0" name="optradio">Control is required but not completed                                                                                    <input name="policy_id" type="hidden" value="6">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-blue">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="6" data-option="option_3" value="3" data-score="1" name="optradio">Control not needed in our organization                                                                                    <input name="policy_id" type="hidden" value="6">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-orange">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="6" data-option="option_4" value="4" data-score="1" name="optradio">I don't know about this                                                                                    <input name="policy_id" type="hidden" value="6">
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <p class="text-center">
                                                                    <input type="submit" class="btn btn-success btn-outline-rounded green">
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="status_6">
                                                            <h4 class="head text-center">Status</h4>
                                                            <div class="row div-status" id="status_log_6">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 messagebox success">
                                                                    <div class="row">
                                                                        <div class="col-lg-2 col-md-2 col-sm-2 messagebox-icon">
                                                                            <i class="fa fa-2x fa-check-circle text-success" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-10 col-sm-10">
                                                                            <div class="h5 messagebox-header">
                                                                                Control has been implemented                                                                                        </div>
                                                                            <i class="fa fa-circle text-success" aria-hidden="true"></i> 2019-02-16 15:27:51 <br>
                                                                            <i class="fa fa-circle text-success" aria-hidden="true"></i> Raghavendra Kulkarni                                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-links_6">
                                                            <h4 class="head text-center">Additional Links</h4>
                                                            <div class="narrow text-left">
                                                                <ul>                                                                            <li><a href="https://www.cmu.edu/iso/governance/guidelines/password-management.html" target="_blank">https://www.cmu.edu/iso/governance/guidelines/password-management.html</a></li>
                                                                    <li><a href="https://www.computerhope.com/issues/ch000464.htm" target="_blank">https://www.computerhope.com/issues/ch000464.htm</a></li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Vulnerability assessment and Penetration testing</h3>
                                                <div class="board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#description_4" data-toggle="tab" title="description">
                                                                    <span class="round-tabs one">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <!--                                                            <li>
                                                                                                                            <a href="#question_4" data-toggle="tab" title="question">
                                                                                                                                <span class="round-tabs two">
                                                                                                                                    <i class="fa fa-question" aria-hidden="true"></i>
                                                                                                                                </span> 
                                                                                                                            </a>
                                                                                                                        </li>-->
                                                            <li>
                                                                <a href="#status_4" id="status_click_4" data-toggle="tab" title="status">
                                                                    <span class="round-tabs three">
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#additional-links_4" data-toggle="tab" title="additional-links">
                                                                    <span class="round-tabs four">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/cybersecurity_cloud/cso-templates/index?id=4" title="download">
                                                                    <span class="round-tabs five">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="description_4">
                                                            <h4 class="head text-center">Info</h4>
                                                            <div class="policy_desc narrow text-left">
                                                                <p>It's not that IT pros see smartphones and tablets as disposable, exactly. It's just that the hardware is not nearly as important to the 371 business technology professionals responding to our 2014 InformationWeek Mobile Security Survey as the company data that people carry around on those devices. Securing that data is rated very important by 68%, a full 21 points ahead of securing devices themselves, using anti-malware or MDM client software. And 72% say their top mobile security concern is data compromise due to lost or stolen devices.</p>
                                                                <p>Our priorities are in the right place. Now we just need policies and controls to catch up. Nearly half, 46%, feel only moderately confident that their mobile security controls are effective at protecting data, and 40% worry about users forwarding corporate data to cloud-based storage services. In case you had any doubts, respondents confirm that IT consumerization is fully upon us, mostly thanks to mobility. Yet even as most companies allow -- even encourage -- employees to bring consumer mobile devices to work, enterprise security pros are still scratching their heads, wondering how best to deal with the influx.</p>
                                                                <p>Do we allow personal devices to access the internal network? How do we provide users with remote connectivity to collaborative resources hosted internally? Should we provide full management and configuration of employees' personal devices or look for a system that isolates and protects corporate data?</p>
                                                                <p>No surprise, the number of specialized vendors offering mobile device configuration and content management tools is increasing. Big players such as IBM and VMware are getting in on the action by acquisition, buying Fiberlink (MaaS360) and AirWatch, respectively.
                                                                    Before selecting from among the product panoply, however, you need to wrap your head around one key concept: Data security is data security, period. Keeping corporate data safe on a user's personal mobile device isn't all that different from protecting a corporate laptop that's being used on free public wireless networks.</p>
                                                                <p>Remember what you're supposed to protect -- sensitive information. Work from there. Wasting time complaining about consumerization and how managing employee-owned devices is such a huge imposition is not helpful. And ignoring it is foolish. Says one survey respondent: "Many of these questions ask if we 'allow' types of behavior. We don't. However, the fact that we have nothing in place to prevent it constitutes permission."</p>
                                                                <p>All respondents in this year's Mobile Security Survey are involved with mobile device management, policy development, or security at their organizations, and it shows. At 76%, data security was cited as a policy driver by twice as many respondents as those saying their security policies are driven by regulatory or legal compliance, or enhancing mobility and telework. Surprisingly, only 23% cite bring-your-own-device requests as a primary driver, yet 66% of all respondents say they allow employees to use personal devices at work.</p>                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="question_4">
                                                            <h3 class="head text-center">Please choose one of the options below</h3>
                                                            <form enctype="multipart/form-data" method="POST" action="process-policy">
                                                                <input type="hidden" name="_csrf" value="66__4_OfMh5EJe5u7TeQyRWXzhSjNKWjAYnelJGky-mt_ou5kqhqfBdBjDaiXufkJda0ZMVh6cEsv5zb6Mi-qA==">
                                                                <div class="narrow text-left question">
                                                                    <div class="radio">
                                                                        <label class="color-green">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="4" data-option="option_1" value="1" data-score="1" name="optradio">Control has been implemented                                                                                    <input name="policy_id" type="hidden" value="4">
                                                                        </label>
                                                                        <div id="upload_doc_4" class="upload-doc hide">
                                                                            <p>Upload the policy document: <input name="doc" type="file" class="policy_doc"></p>
                                                                            <p>Expiry date of document: <input name="ex_date" type="date">
                                                                            </p></div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-red">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="4" data-option="option_2" value="2" data-score="0" name="optradio">Control is required but not completed                                                                                    <input name="policy_id" type="hidden" value="4">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-blue">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="4" data-option="option_3" value="3" data-score="1" name="optradio">Control not needed in our organization                                                                                    <input name="policy_id" type="hidden" value="4">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-orange">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="4" data-option="option_4" value="4" data-score="1" name="optradio" checked="">I don't know about this                                                                                    <input name="policy_id" type="hidden" value="4">
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <p class="text-center">
                                                                    <input type="submit" class="btn btn-success btn-outline-rounded green">
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="status_4">
                                                            <h4 class="head text-center">Report Uploads</h4>
                                                            <div class="row div-status" id="status_log_4">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 messagebox warning">
                                                                    <div class="row">
                                                                        <div class="col-lg-2 col-md-2 col-sm-2 messagebox-icon">
                                                                            <i class="fa fa-2x fa-exclamation-circle text-warning" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-10 col-sm-10">
                                                                            <div class="h5 messagebox-header">
                                                                                I don't know about this                                                                                        </div>
                                                                            <i class="fa fa-circle text-warning" aria-hidden="true"></i> 2019-01-16 07:10:26 <br>
                                                                            <i class="fa fa-circle text-warning" aria-hidden="true"></i> Dinesh Rajendran                                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-links_4">
                                                            <h4 class="head text-center">Additional Links</h4>
                                                            <div class="narrow text-left">
                                                                <ul>                                                                            <li><a href="https://hitconsultant.net/2015/11/03/5-best-practices-for-mobile-device-security-in-healthcare/" target="_blank">https://hitconsultant.net/2015/11/03/5-best-practices-for-mobile-device-security-in-healthcare/</a></li>
                                                                    <li><a href="https://erm.ncsu.edu/library/article/manage-risks-mobile-enterprise" target="_blank">https://erm.ncsu.edu/library/article/manage-risks-mobile-enterprise</a></li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Miscellaneous</h3>
                                                <div class="board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#description_8" data-toggle="tab" title="description">
                                                                    <span class="round-tabs one">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <!--                                                            <li>
                                                                                                                            <a href="#question_8" data-toggle="tab" title="question">
                                                                                                                                <span class="round-tabs two">
                                                                                                                                    <i class="fa fa-question" aria-hidden="true"></i>
                                                                                                                                </span> 
                                                                                                                            </a>
                                                                                                                        </li>-->
                                                            <li>
                                                                <a href="#status_8" id="status_click_8" data-toggle="tab" title="status">
                                                                    <span class="round-tabs three">
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#additional-links_8" data-toggle="tab" title="additional-links">
                                                                    <span class="round-tabs four">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/cybersecurity_cloud/cso-templates/index?id=8" title="download">
                                                                    <span class="round-tabs five">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="description_8">
                                                            <h4 class="head text-center">Info</h4>
                                                            <div class="policy_desc narrow text-left">
                                                                Work with banks or processors to ensure the most trusted and validated tools and anti-fraud services are being used. You may also have additional security obligations pursuant to agreements with your bank or processor. Isolate payment systems from other, less secure programs and don’t use the same computer to process payments and surf the Internet.<p>Employers face a myriad of legal obligations when it comes to recruiting, retaining and terminating employees. As employment legislation and protections are ever-changing, employers must learn to adapt and be flexible to ensure compliance. This article sets out 10 best practices that all employers should consider to ensure that they remain compliant with legislation, while fostering good employee relations.</p>
                                                                <ol>
                                                                    <li>Issue terms and conditions within two months</li>
                                                                    <li>Check valid immigration permission</li>
                                                                    <li>Ensure regular reviews and feedback during probationary periods</li>
                                                                    <li>Establish and maintain consistent policies and procedures</li>
                                                                    <li>Be aware of permitting customs and practices in the workplace</li>
                                                                    <li>Know your obligations regarding teleworkers/working from home</li>
                                                                    <li>Comply with data-protection legislation</li>
                                                                    <li>Be aware of atypical employees</li>
                                                                    <li>Obtain a full release of claims on making ex-gratia termination payments</li>
                                                                    <li>Consult a professional</li>
                                                                </ol>                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="question_8">
                                                            <h3 class="head text-center">Please choose one of the options below</h3>
                                                            <form enctype="multipart/form-data" method="POST" action="process-policy">
                                                                <input type="hidden" name="_csrf" value="66__4_OfMh5EJe5u7TeQyRWXzhSjNKWjAYnelJGky-mt_ou5kqhqfBdBjDaiXufkJda0ZMVh6cEsv5zb6Mi-qA==">
                                                                <div class="narrow text-left question">
                                                                    <div class="radio">
                                                                        <label class="color-green">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="8" data-option="option_1" value="1" data-score="1" name="optradio">Control has been implemented                                                                                    <input name="policy_id" type="hidden" value="8">
                                                                        </label>
                                                                        <div id="upload_doc_8" class="upload-doc hide">
                                                                            <p>Upload the policy document: <input name="doc" type="file" class="policy_doc"></p>
                                                                            <p>Expiry date of document: <input name="ex_date" type="date">
                                                                            </p></div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-red">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="8" data-option="option_2" value="2" data-score="0" name="optradio">Control is required but not completed                                                                                    <input name="policy_id" type="hidden" value="8">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-blue">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="8" data-option="option_3" value="3" data-score="1" name="optradio" checked="">Control not needed in our organization                                                                                    <input name="policy_id" type="hidden" value="8">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-orange">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="8" data-option="option_4" value="4" data-score="1" name="optradio">I don't know about this                                                                                    <input name="policy_id" type="hidden" value="8">
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <p class="text-center">
                                                                    <input type="submit" class="btn btn-success btn-outline-rounded green">
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="status_8">
                                                            <h4 class="head text-center">Status</h4>
                                                            <div class="row div-status" id="status_log_8">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 messagebox info">
                                                                    <div class="row">
                                                                        <div class="col-lg-2 col-md-2 col-sm-2 messagebox-icon">
                                                                            <i class="fa fa-2x fa-info-circle text-info" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="col-lg-10 col-md-10 col-sm-10">
                                                                            <div class="h5 messagebox-header">
                                                                                Control not needed in our organization                                                                                        </div>
                                                                            <i class="fa fa-circle text-info" aria-hidden="true"></i> 2019-01-16 07:10:33 <br>
                                                                            <i class="fa fa-circle text-info" aria-hidden="true"></i> Dinesh Rajendran                                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-links_8">
                                                            <h4 class="head text-center">Additional Links</h4>
                                                            <div class="narrow text-left">
                                                                <ul>                                                                            <li><a href="http://www.gfoa.org/accepting-payment-cards-and-selection-payment-card-service-providers" target="_blank">http://www.gfoa.org/accepting-payment-cards-and-selection-payment-card-service-providers</a></li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Limit employee access to data and information, limit authority to install software</h3>
                                                <div class="board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#description_9" data-toggle="tab" title="description">
                                                                    <span class="round-tabs one">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>
                                                            <!--
                                                                                                                        <li>
                                                                                                                            <a href="#question_9" data-toggle="tab" title="question">
                                                                                                                                <span class="round-tabs two">
                                                                                                                                    <i class="fa fa-question" aria-hidden="true"></i>
                                                                                                                                </span> 
                                                                                                                            </a>
                                                                                                                        </li>-->
                                                            <li>
                                                                <a href="#status_9" id="status_click_9" data-toggle="tab" title="status">
                                                                    <span class="round-tabs three">
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#additional-links_9" data-toggle="tab" title="additional-links">
                                                                    <span class="round-tabs four">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/cybersecurity_cloud/cso-templates/index?id=9" title="download">
                                                                    <span class="round-tabs five">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="description_9">
                                                            <h4 class="head text-center">About</h4>
                                                            <div class="policy_desc narrow text-left">
                                                                <p>Do all of your employees have the same access to your card data? If so, you could be making things much easier for attackers to steal it. Or, what if a disgruntled employee decides to take revenge and sells your data? If you don’t use role-based access, your card data could be in real danger.</p>
                                                                <b>What is role-based-access?</b>
                                                                <p> From a technical level, role-based access control or RBAC is an approach to restrict system access to authorized users. Put simply, it means each employee has a certain amount of data they can access, depending on their role in your business. By using role-based access, employees only have access to data and tasks deemed necessary by their job function and role.</p>
                                                                <p>The most common RBAC is Windows Active Directory. Lightweight Directory Access Protocol or LDAP is a popular Linux application protocol used to communicate with Active Directory, but we will focus on the basic configuration of Active Directory.</p>
                                                                <p>To configure Active Directory, you have to use a hierarchical, top-down approach. Take for example the domain name securitymetrics.com. In the world of Active Directory, the domain name securitymetrics.com would be a top-level domain. Under the top-level domain, Organization Units or OUs can be created such as Marketing, Operations, Finance, etc. Within the OUs, groups and users can be added.</p>
                                                                <p>Typically, system administrators apply group policies, which are the actual role-based permissions that control what a user is able to access on the OUs. Group policies can be applied to groups and individual users as well, but it’s easier for system administrators to manage role-based access controls at the OU level. Imagine a company with over 1000 users and the amount of time it would take to apply role-based access controls on each individual user. That’s a system administrator’s nightmare.</p>
                                                                <ul>
                                                                    <li>It’s a requirement in the PCI DSS</li>
                                                                    <li>It limits social engineering attacks</li> 
                                                                    <li>It keeps data safe from remote access attacks</li>
                                                                    <li>It reduces data attacks</li>
                                                                    <li>It prevents confusion and streamlines responsibilities</li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="question_9">
                                                            <h3 class="head text-center">Please choose one of the options below</h3>
                                                            <form enctype="multipart/form-data" method="POST" action="process-policy">
                                                                <input type="hidden" name="_csrf" value="66__4_OfMh5EJe5u7TeQyRWXzhSjNKWjAYnelJGky-mt_ou5kqhqfBdBjDaiXufkJda0ZMVh6cEsv5zb6Mi-qA==">
                                                                <div class="narrow text-left question">
                                                                    <div class="radio">
                                                                        <label class="color-green">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="9" data-option="option_1" value="1" data-score="1" name="optradio">Control has been implemented                                                                                    <input name="policy_id" type="hidden" value="9">
                                                                        </label>
                                                                        <div id="upload_doc_9" class="upload-doc hide">
                                                                            <p>Upload the policy document: <input name="doc" type="file" class="policy_doc"></p>
                                                                            <p>Expiry date of document: <input name="ex_date" type="date">
                                                                            </p></div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-red">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="9" data-option="option_2" value="2" data-score="0" name="optradio">Control is required but not completed                                                                                    <input name="policy_id" type="hidden" value="9">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-blue">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="9" data-option="option_3" value="3" data-score="1" name="optradio">Control not needed in our organization                                                                                    <input name="policy_id" type="hidden" value="9">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-orange">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="9" data-option="option_4" value="4" data-score="1" name="optradio">I don't know about this                                                                                    <input name="policy_id" type="hidden" value="9">
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <p class="text-center">
                                                                    <input type="submit" class="btn btn-success btn-outline-rounded green">
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="status_9">
                                                            <h4 class="head text-center">Status</h4>
                                                            <div class="row div-status" id="status_log_9">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 fail messagebox not-started" id="messagebox">
                                                                    <div class="row">
                                                                        <div class="col-md-2 messagebox-icon">
                                                                            <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <div class="h5 messagebox-header">Control action required by admin</div>
                                                                            <i class="fa fa-circle" aria-hidden="true"></i> System : Please select an option
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-links_9">
                                                            <h4 class="head text-center">Additional Links</h4>
                                                            <div class="narrow text-left">
                                                                <ul>                                                                            <li><a href="https://www.siue.edu/policies/2d2.shtml" target="_blank">https://www.siue.edu/policies/2d2.shtml</a></li>
                                                                    <li><a href="https://www.fcc.gov/general/cybersecurity-small-business" target="_blank">https://www.fcc.gov/general/cybersecurity-small-business</a></li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Make backup copies of important business data and information</h3>
                                                <div class="board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#description_5" data-toggle="tab" title="description">
                                                                    <span class="round-tabs one">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>
                                                            <!--
                                                                                                                        <li>
                                                                                                                            <a href="#question_5" data-toggle="tab" title="question">
                                                                                                                                <span class="round-tabs two">
                                                                                                                                    <i class="fa fa-question" aria-hidden="true"></i>
                                                                                                                                </span> 
                                                                                                                            </a>
                                                                                                                        </li>-->
                                                            <li>
                                                                <a href="#status_5" id="status_click_5" data-toggle="tab" title="status">
                                                                    <span class="round-tabs three">
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#additional-links_5" data-toggle="tab" title="additional-links">
                                                                    <span class="round-tabs four">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/cybersecurity_cloud/cso-templates/index?id=5" title="download">
                                                                    <span class="round-tabs five">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="description_5">
                                                            <h4 class="head text-center">About</h4>
                                                            <div class="policy_desc narrow text-left">
                                                                <p>It doesn’t matter how big your business is, regular backups are essential to securing your company’s network. In fact, regular backups may arguably be the single most important step you take for preventing a network disaster.</p>
                                                                <p>Backups help ensure that regardless of your current security strategy, you have secure and clean data to keep your business running in the case of data loss, a hack attack or even a natural disaster. Here are four reasons you need professional small-business IT support for backups and some tips for implementing a proper backup strategy.</p>
                                                                <b>Failure  to Regularly Back Up Information Could Cost You Serious Money</b>
                                                                <p>Regular backups are an insurance policy for your business. With so much of the modern business supported by computer networks, a loss of your network data can have a crippling financial effect on your business.
                                                                    A major survey of IT leaders from over 24 countries reported by Security Week found that incidents which led to data loss have increased by 400 percent in the last two years, for a combined loss of $1.7 trillion due to network downtime and data loss.
                                                                    Even small security breaches impacting a small number of files, which many small businesses suffer from, can have a major impact. A report from Verizon found that small breaches, which involve the loss of fewer than 100 files, can cost your business between $18,120 and $35,730. Unless you have that kind of money to throw at a preventable problem regularly, then it’s time to implement an effective backup strategy.</p><p>It doesn’t matter how big your business is, regular backups are essential to securing your company’s network. In fact, regular backups may arguably be the single most important step you take for preventing a network disaster.</p>
                                                                <p>Backups help ensure that regardless of your current security strategy, you have secure and clean data to keep your business running in the case of data loss, a hack attack or even a natural disaster. Here are four reasons you need professional small-business IT support for backups and some tips for implementing a proper backup strategy.</p>
                                                                <b>Failure  to Regularly Back Up Information Could Cost You Serious Money</b>
                                                                <p>Regular backups are an insurance policy for your business. With so much of the modern business supported by computer networks, a loss of your network data can have a crippling financial effect on your business.
                                                                    A major survey of IT leaders from over 24 countries reported by Security Week found that incidents which led to data loss have increased by 400 percent in the last two years, for a combined loss of $1.7 trillion due to network downtime and data loss.
                                                                    Even small security breaches impacting a small number of files, which many small businesses suffer from, can have a major impact. A report from Verizon found that small breaches, which involve the loss of fewer than 100 files, can cost your business between $18,120 and $35,730. Unless you have that kind of money to throw at a preventable problem regularly, then it’s time to implement an effective backup strategy.</p>

                                                                <b>Ransomware Can Strike at Any Time</b>
                                                                <p>Another trend that is growing across the world is the spread of ransomware. Once you’re hit with ransomware malware, your entire network is encrypted. At that point you’re locked out of your own network until you pay a ransom to hackers, usually with a crypto-currency like Bitcoin.
                                                                    Don’t assume that your small business might fall under the radar from this type of attack. In fact, Oklahoma has been targeted with a variety of ransomware attacks. A Time Magazine’s story on ransomware begins with a ransomware attack on a law firm in Tulsa, Oklahoma. Due to their lack of security, small businesses are often the prime targets for ransomware attackers. With a secure backup of your system, you can help avoid paying the ransom and simply restore your data before you were infected with ransomware.</p>

                                                                <b>Without Backups, Natural Disasters Could Put You Out of Business</b>
                                                                <p>Statistics from FEMA indicate that 40 percent of businesses fail to open after suffering a natural disaster and additional 25 percent fail within a year. The United States Small Business Administration also finds that a whopping 90 percent of businesses fail two years after suffering a disaster. Part of the problem has to do with failure to back up data, leaving businesses starting from scratch following a disaster.</p><p>
                                                                    Unfortunately, many businesses still don’t perform proper backups. For example, one study found that 60 percent of small businesses don’t back up daily and many don’t perform backups at all.</p>

                                                                <b>Regularly Back Up Information – Provide Peace of Mind</b>
                                                                <p>Backups help you rebuild your network regardless what happens. Otherwise, you can lose important data like customer financial records, product information, payroll data, mailing lists and business plans. If a virus starts destroying your network, failure to restore your system from a clean backup can leave you with network outages that can last days or longer, destroying customer confidence in the process.
                                                                    In some cases, it’s not a matter of hack attacks or malware, but simple data corruption. Backups help you go back in time before you experienced network issues and quickly restore your network.</p><p>
                                                                    It’s no exaggeration to say that even one incident of major data loss can mean game over for your business. Backups ultimately allow you to focus your business efforts on what delivers value instead of always looking over your shoulder for a network security disaster. With cost-effective backup strategies available from professional managed IT service providers like Dobson Technologies, there is simply no reason your business should go without a regular backup policy.</p>

                                                                <b>The Right Backup Strategy</b>
                                                                <p>Dobson Technologies is dedicated to ensuring secure backups as a part of managed IT support in Oklahoma City.</p>
                                                                <ul>
                                                                    <li>Cloud Backups: Cloud backups are an essential part of a smart backup strategy. Cloud backups help ensure that if your business suffers a natural disaster, you are able to restore your data off-site.</li>
                                                                    <li>Encryption of Data In-Transit: Backup data should be encrypted when in transit, otherwise hackers can snoop on data. A smart encryption plan is key to overall data protection across your network.</li>
                                                                    <li>The 3-2-1 Strategy: There are different backup strategies. However, the 3-2-1 strategy for backups is highly effective. It involves three backups located in two locations, such as on-premise and cloud storage locations. Finally, you should produce these backups at least once a day for maximum protection.</li>
                                                                    <li>24/7 Support: When your network goes down or you suffer data loss, you want a partner that can quickly restore your system from a backup no matter what day or time it is.</li>
                                                                    <li>Testing Backups: It’s important you work with a provider that tests the integrity of backups. The last thing you want is to restore your network with a backup that has data corruption problems or other issues. A backup report can let you know if any files failed to transfer or if any corruptions occurred.</li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="question_5">
                                                            <h3 class="head text-center">Please choose one of the options below</h3>
                                                            <form enctype="multipart/form-data" method="POST" action="process-policy">
                                                                <input type="hidden" name="_csrf" value="66__4_OfMh5EJe5u7TeQyRWXzhSjNKWjAYnelJGky-mt_ou5kqhqfBdBjDaiXufkJda0ZMVh6cEsv5zb6Mi-qA==">
                                                                <div class="narrow text-left question">
                                                                    <div class="radio">
                                                                        <label class="color-green">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="5" data-option="option_1" value="1" data-score="1" name="optradio">Control has been implemented                                                                                    <input name="policy_id" type="hidden" value="5">
                                                                        </label>
                                                                        <div id="upload_doc_5" class="upload-doc hide">
                                                                            <p>Upload the policy document: <input name="doc" type="file" class="policy_doc"></p>
                                                                            <p>Expiry date of document: <input name="ex_date" type="date">
                                                                            </p></div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-red">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="5" data-option="option_2" value="2" data-score="0" name="optradio">Control is required but not completed                                                                                    <input name="policy_id" type="hidden" value="5">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-blue">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="5" data-option="option_3" value="3" data-score="1" name="optradio">Control not needed in our organization                                                                                    <input name="policy_id" type="hidden" value="5">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-orange">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="5" data-option="option_4" value="4" data-score="1" name="optradio">I don't know about this                                                                                    <input name="policy_id" type="hidden" value="5">
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <p class="text-center">
                                                                    <input type="submit" class="btn btn-success btn-outline-rounded green">
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="status_5">
                                                            <h4 class="head text-center">Status</h4>
                                                            <div class="row div-status" id="status_log_5">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 fail messagebox not-started" id="messagebox">
                                                                    <div class="row">
                                                                        <div class="col-md-2 messagebox-icon">
                                                                            <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <div class="h5 messagebox-header">Control action required by admin</div>
                                                                            <i class="fa fa-circle" aria-hidden="true"></i> System : Please select an option
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-links_5">
                                                            <h4 class="head text-center">Additional Links</h4>
                                                            <div class="narrow text-left">
                                                                <ul>                                                                            <li><a href="http://www.boxerit.com.au/top-five-reasons-need-backup-data/" target="_blank">http://www.boxerit.com.au/top-five-reasons-need-backup-data/</a></li>
                                                                    <li><a href="http://www.hackworth.co/the-importance-of-data-backup/" target="_blank">http://www.hackworth.co/the-importance-of-data-backup/</a></li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Passwords and authentication</h3>
                                                <div class="board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#description_10" data-toggle="tab" title="description">
                                                                    <span class="round-tabs one">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <!--                                                            <li>
                                                                                                                            <a href="#question_10" data-toggle="tab" title="question">
                                                                                                                                <span class="round-tabs two">
                                                                                                                                    <i class="fa fa-question" aria-hidden="true"></i>
                                                                                                                                </span> 
                                                                                                                            </a>
                                                                                                                        </li>-->
                                                            <li>
                                                                <a href="#status_10" id="status_click_10" data-toggle="tab" title="status">
                                                                    <span class="round-tabs three">
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#additional-links_10" data-toggle="tab" title="additional-links">
                                                                    <span class="round-tabs four">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/cybersecurity_cloud/cso-templates/index?id=10" title="download">
                                                                    <span class="round-tabs five">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="description_10">
                                                            <h4 class="head text-center">About</h4>
                                                            <div class="policy_desc narrow text-left">
                                                                <p>In this article we’re going to explore different authentication mechanisms. An authentication mechanism (or method) is a way for you to prove that you’re allowed to access something. Passwords have been the default method of authentication for as long as most of us have needed to prove to a computer that we’re allowed to access it. However, passwords are not the only authentication mechanism.</p><p>
                                                                    In the early days of computers and mainframes, passwords were stored in a database as plain text. When you wanted to sign-in, a gatekeeper application would ask you for your password. It would take whatever you typed in and check if it was equal to whatever it had stored in the database and if true, you were granted access.</p><p>
                                                                    As the Internet evolved and grew, malicious hackers started gaining unauthorized access to systems. Once they were in, they would immediately download the plain-text password database and have instant access to all users passwords. Developers and systems administrators needed to come up with a solution to this problem and the solution they came up with was ‘password hashing’.</p>
                                                                <b>Authentication Methods</b>
                                                                <p>Something you know: Examples of this are your good-old password, bank card PIN or a safe-word when the alarm company calls your home; these are all examples of using something you know to authenticate yourself.</p><p>Something you have: Examples are a swipe card to access a secure area, a code sent to your cell phone as part of a login process (to prove you have your cell phone) or a Secured token that provides a constantly changing code you need to enter to gain access – all are something you have that can be used to authenticate yourself.</p><p>Something you are: This is where biometric security comes in. To access our data centre we have to put our index finger on a fingerprint scanner after swiping a card. Unless you steal someone’s index finger you won’t be able to access our data centre, even if you’ve stolen a valid swipe card. Other biometric systems include retinal scans (the blood vessels at the back of the eye) and iris scans (the coloured part of the eye).</p><p>
                                                                    Other attributes used for authentication: A few other attributes that you occasionally see used for authentication are:</p><p>Our focus in this article is passwords. Most of us see them as an inconvenience – something you have to tolerate to be able to use a service you need access to. In this article we’re going to explain how computer systems have evolved in the way they process your password, how modern online applications do authentication and why it’s important to choose a strong password. Once you finish reading this you should have a working knowledge of hashing algorithms, how password cracking works and what “strong password” really means.</p>                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="question_10">
                                                            <h3 class="head text-center">Please choose one of the options below</h3>
                                                            <form enctype="multipart/form-data" method="POST" action="process-policy">
                                                                <input type="hidden" name="_csrf" value="66__4_OfMh5EJe5u7TeQyRWXzhSjNKWjAYnelJGky-mt_ou5kqhqfBdBjDaiXufkJda0ZMVh6cEsv5zb6Mi-qA==">
                                                                <div class="narrow text-left question">
                                                                    <div class="radio">
                                                                        <label class="color-green">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="10" data-option="option_1" value="1" data-score="1" name="optradio">Control has been implemented                                                                                    <input name="policy_id" type="hidden" value="10">
                                                                        </label>
                                                                        <div id="upload_doc_10" class="upload-doc hide">
                                                                            <p>Upload the policy document: <input name="doc" type="file" class="policy_doc"></p>
                                                                            <p>Expiry date of document: <input name="ex_date" type="date">
                                                                            </p></div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-red">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="10" data-option="option_2" value="2" data-score="0" name="optradio">Control is required but not completed                                                                                    <input name="policy_id" type="hidden" value="10">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-blue">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="10" data-option="option_3" value="3" data-score="1" name="optradio">Control not needed in our organization                                                                                    <input name="policy_id" type="hidden" value="10">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-orange">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="10" data-option="option_4" value="4" data-score="1" name="optradio">I don't know about this                                                                                    <input name="policy_id" type="hidden" value="10">
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <p class="text-center">
                                                                    <input type="submit" class="btn btn-success btn-outline-rounded green">
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="status_10">
                                                            <h4 class="head text-center">Status</h4>
                                                            <div class="row div-status" id="status_log_10">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 fail messagebox not-started" id="messagebox">
                                                                    <div class="row">
                                                                        <div class="col-md-2 messagebox-icon">
                                                                            <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <div class="h5 messagebox-header">Control action required by admin</div>
                                                                            <i class="fa fa-circle" aria-hidden="true"></i> System : Please select an option
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-links_10">
                                                            <h4 class="head text-center">Additional Links</h4>
                                                            <div class="narrow text-left">
                                                                <ul>                                                                            <li><a href="https://www.bu.edu/tech/about/security-resources/bestpractice/auth/" target="_blank">https://www.bu.edu/tech/about/security-resources/bestpractice/auth/</a></li>
                                                                    <li><a href="https://www.owasp.org/index.php/Authentication_Cheat_Sheet" target="_blank">https://www.owasp.org/index.php/Authentication_Cheat_Sheet</a></li>
                                                                    <li><a href="https://www.connectsafely.org/tips-to-create-and-manage-strong-passwords/" target="_blank">https://www.connectsafely.org/tips-to-create-and-manage-strong-passwords/</a></li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Protect information, computers, and networks from cyber attacks</h3>
                                                <div class="board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#description_2" data-toggle="tab" title="description">
                                                                    <span class="round-tabs one">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>
                                                            <!--
                                                                                                                        <li>
                                                                                                                            <a href="#question_2" data-toggle="tab" title="question">
                                                                                                                                <span class="round-tabs two">
                                                                                                                                    <i class="fa fa-question" aria-hidden="true"></i>
                                                                                                                                </span> 
                                                                                                                            </a>
                                                                                                                        </li>-->
                                                            <li>
                                                                <a href="#status_2" id="status_click_2" data-toggle="tab" title="status">
                                                                    <span class="round-tabs three">
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#additional-links_2" data-toggle="tab" title="additional-links">
                                                                    <span class="round-tabs four">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/cybersecurity_cloud/cso-templates/index?id=2" title="download">
                                                                    <span class="round-tabs five">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="description_2">
                                                            <h4 class="head text-center">About</h4>
                                                            <div class="policy_desc narrow text-left">
                                                                <b>Ensure that the antivirus software is updated regularly</b>
                                                                <p>Having an antivirus program installed isn’t enough, it’s important that the antivirus is regularly updated. Otherwise, it won’t be effective. It’s the updated version of the antivirus that’s needed to protect a system/device against latest threats and vulnerabilities. Thus, it’s important that the antivirus- free antivirusor paid- is updated regularly.</p>

                                                                <b>Update OS and other software regularly</b>
                                                                <p>The operating system that you use and the many other software applications that you’d be using need to be updated regularly to prevent vulnerabilities and to protect data. It’s to be remembered that the WannaCry ransomware, which spread globally and caused much damage, had infected systems that hadn’t updated the Windows 7 OS. It’s also advisable to enable automatic updates so that it happens regularly without fail.</p>

                                                                <b>Do proper password management</b>
                                                                <p>Proper password management is key to securing systems/devices and protecting data. Ensure that everything is password protected and that all passwords are strong ones- ideally a mix of alphabets, numbers and special characters and not easy to guess. Similarly, it’s always good if the same or similar passwords are not used for different accounts or files. There should also be a practice of changing the password at regular intervals.</p>

                                                                <b>Use firewall and other security software</b>
                                                                <p>Using best firewall is vital to securing systems and data; firewalls work as protecting shields between a system and the internet and helps a lot in blocking hacks and data breaches. Similarly, all necessary internet security software need to be used, based on the specific requirements.</p>

                                                                <b>Avoid untrusted Wi-Fi connections</b>
                                                                <p>Avoiding public, untrusted Wi-Fi connections would be good as far as protecting data is concerned. Hackers can easily use a public, unsecured Wi-Fi network to gain entry into any system or device connected to the network and then get away with all the data in the system/device. This could include login credentials of social media profile, bank account logins, credit card data etc.</p>

                                                                <b>Avoid surfing untrusted websites</b>
                                                                <p>It’s always best to avoid visiting prohibited sites or websites without HTTPS. Such sites could expose a system/device to malware and cyber criminals, which could eventually lead to data breaches.</p>

                                                                <b>Have data backup, update it regularly</b>
                                                                <p>This is one of the most important things to be done. Keep a backup of all data, especially sensitive and critical data. This could help when there is a crash following a cyber attack and also when a device is lost or gets stolen. The backup can be done on an external hard drive, portable storage device or the cloud. It’s also important that the backup is regularly updated.</p>

                                                                <b>Use effective data recovery software</b>
                                                                <p>In the worst case scenario, if a data breach happens, it’s always good to have a data recovery software. There are many brands available, but ensure that the one chosen could help recover the data completely and safely.</p>                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="question_2">
                                                            <h3 class="head text-center">Please choose one of the options below</h3>
                                                            <form enctype="multipart/form-data" method="POST" action="process-policy">
                                                                <input type="hidden" name="_csrf" value="66__4_OfMh5EJe5u7TeQyRWXzhSjNKWjAYnelJGky-mt_ou5kqhqfBdBjDaiXufkJda0ZMVh6cEsv5zb6Mi-qA==">
                                                                <div class="narrow text-left question">
                                                                    <div class="radio">
                                                                        <label class="color-green">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="2" data-option="option_1" value="1" data-score="1" name="optradio">Control has been implemented                                                                                    <input name="policy_id" type="hidden" value="2">
                                                                        </label>
                                                                        <div id="upload_doc_2" class="upload-doc hide">
                                                                            <p>Upload the policy document: <input name="doc" type="file" class="policy_doc"></p>
                                                                            <p>Expiry date of document: <input name="ex_date" type="date">
                                                                            </p></div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-red">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="2" data-option="option_2" value="2" data-score="0" name="optradio">Control is required but not completed                                                                                    <input name="policy_id" type="hidden" value="2">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-blue">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="2" data-option="option_3" value="3" data-score="1" name="optradio">Control not needed in our organization                                                                                    <input name="policy_id" type="hidden" value="2">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-orange">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="2" data-option="option_4" value="4" data-score="1" name="optradio">I don't know about this                                                                                    <input name="policy_id" type="hidden" value="2">
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <p class="text-center">
                                                                    <input type="submit" class="btn btn-success btn-outline-rounded green">
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="status_2">
                                                            <h4 class="head text-center">Status</h4>
                                                            <div class="row div-status" id="status_log_2">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 fail messagebox not-started" id="messagebox">
                                                                    <div class="row">
                                                                        <div class="col-md-2 messagebox-icon">
                                                                            <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <div class="h5 messagebox-header">Control action required by admin</div>
                                                                            <i class="fa fa-circle" aria-hidden="true"></i> System : Please select an option
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-links_2">
                                                            <h4 class="head text-center">Additional Links</h4>
                                                            <div class="narrow text-left">
                                                                <ul>                                                                            <li><a href="https://securecommunitynetwork.org/cybersecurity" target="_blank">https://securecommunitynetwork.org/cybersecurity</a></li>
                                                                    <li><a href="http://www.protectmyid.com/cyber-security" target="_blank">http://www.protectmyid.com/cyber-security</a></li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Provide firewall security for your Internet connection</h3>
                                                <div class="board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#description_3" data-toggle="tab" title="description">
                                                                    <span class="round-tabs one">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <!--                                                            <li>
                                                                                                                            <a href="#question_3" data-toggle="tab" title="question">
                                                                                                                                <span class="round-tabs two">
                                                                                                                                    <i class="fa fa-question" aria-hidden="true"></i>
                                                                                                                                </span> 
                                                                                                                            </a>
                                                                                                                        </li>-->
                                                            <li>
                                                                <a href="#status_3" id="status_click_3" data-toggle="tab" title="status">
                                                                    <span class="round-tabs three">
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#additional-links_3" data-toggle="tab" title="additional-links">
                                                                    <span class="round-tabs four">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/cybersecurity_cloud/cso-templates/index?id=3" title="download">
                                                                    <span class="round-tabs five">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="description_3">
                                                            <h4 class="head text-center">About</h4>
                                                            <div class="policy_desc narrow text-left">
                                                                <p><b>Microsoft Windows Server 2003 provides Internet security in the form of a firewall, known as the Internet Connection Firewall (ICF).</b>This feature is designed for home and small business use and provides protection for computers directly connected to the Internet. This feature is available for local area network (LAN) or dial-up connections. It also prevents scanning of ports and resources (file and printer shares) from external sources. This article discusses how to turn on (enable) the ICF feature to provide Internet security for your computer.</p>
                                                                <p>A Firewall is a system that prevents unauthorized access to a private network. Firewalls are extensively used by businesses, corporations and the government to protect against potential hackers. They act as a barrier between a private network and the Internet. Anything that goes into or out of the network must pass through the firewall. The firewall examines each message to make sure it meets the specified security criteria before passing it through. Just like a literal firewall, a computer firewall prevents a fire (in this case a dangerous intrusion into a private network) from spreading.</p>
                                                                <p>You can choose between software and hardware firewalls or choose to install both for added security. Hardware firewalls are a physical gateway between your computer and the Internet. A common example of a hardware firewall is a Cable/DSL router. A router is connected to the modem that supplies your Internet connection and your computer is connected to the router either via Ethernet cable or wireless connection. A router can be configured using a web-based interface to filter out any information you want it to before it reaches our computer's browser.
                                                                    A software firewall works in the same way, but without the physical unit. You download the software and configure it to filter out information to and from your computer. Companies often use firewalls to prevent their employees from accessing certain websites or from sending inappropriate email communications. Some people, however, use a firewall to only filter in only one Direction from the Internet. This protects them from unauthorized intrusions from unscrupulous players.</p>
                                                                <p>There are many ways that devious people can interfere with unprotected networks and computers. For example, hackers can remotely log in to your computer and assume some level of control over it. This control can range from stealing files to running programs to sending spam from your email to trafficking in illegal files to spying on you using your microphone and web cam. Some hackers plant &gt;malware (malicious software) on your computer without your knowledge that runs in silently in the background and tracks your computer usage. This is a way to obtain your personal information and steal your identity. The only way to protect yourself is to put up the proper barrier between your computer and those who wish you harm.</p>                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="question_3">
                                                            <h3 class="head text-center">Please choose one of the options below</h3>
                                                            <form enctype="multipart/form-data" method="POST" action="process-policy">
                                                                <input type="hidden" name="_csrf" value="66__4_OfMh5EJe5u7TeQyRWXzhSjNKWjAYnelJGky-mt_ou5kqhqfBdBjDaiXufkJda0ZMVh6cEsv5zb6Mi-qA==">
                                                                <div class="narrow text-left question">
                                                                    <div class="radio">
                                                                        <label class="color-green">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="3" data-option="option_1" value="1" data-score="1" name="optradio">Control has been implemented                                                                                    <input name="policy_id" type="hidden" value="3">
                                                                        </label>
                                                                        <div id="upload_doc_3" class="upload-doc hide">
                                                                            <p>Upload the policy document: <input name="doc" type="file" class="policy_doc"></p>
                                                                            <p>Expiry date of document: <input name="ex_date" type="date">
                                                                            </p></div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-red">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="3" data-option="option_2" value="2" data-score="0" name="optradio">Control is required but not completed                                                                                    <input name="policy_id" type="hidden" value="3">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-blue">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="3" data-option="option_3" value="3" data-score="1" name="optradio">Control not needed in our organization                                                                                    <input name="policy_id" type="hidden" value="3">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-orange">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="3" data-option="option_4" value="4" data-score="1" name="optradio">I don't know about this                                                                                    <input name="policy_id" type="hidden" value="3">
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <p class="text-center">
                                                                    <input type="submit" class="btn btn-success btn-outline-rounded green">
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="status_3">
                                                            <h4 class="head text-center">report</h4>
                                                            <div class="row div-status" id="status_log_3">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 fail messagebox not-started" id="messagebox">
                                                                    <div class="row">
                                                                        <div class="col-md-2 messagebox-icon">
                                                                            <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <div class="h5 messagebox-header">Control action required by admin</div>
                                                                            <i class="fa fa-circle" aria-hidden="true"></i> System : Please select an option
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-links_3">
                                                            <h4 class="head text-center">Additional Links</h4>
                                                            <div class="narrow text-left">
                                                                <ul>                                                                            <li><a href="https://accc.uic.edu/answer/how-can-i-secure-my-internet-connection" target="_blank">https://accc.uic.edu/answer/how-can-i-secure-my-internet-connection</a></li>
                                                                    <li><a href="https://www.cisco.com/c/en/us/about/press/internet-protocol-journal/back-issues/table-contents-1/ipj-archive/article09186a00800c85ae.html" target="_blank">https://www.cisco.com/c/en/us/about/press/internet-protocol-journal/back-issues/table-contents-1/ipj-archive/article09186a00800c85ae.html</a></li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Secure your Wi-Fi networks</h3>
                                                <div class="board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#description_7" data-toggle="tab" title="description">
                                                                    <span class="round-tabs one">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <!--                                                            <li>
                                                                                                                            <a href="#question_7" data-toggle="tab" title="question">
                                                                                                                                <span class="round-tabs two">
                                                                                                                                    <i class="fa fa-question" aria-hidden="true"></i>
                                                                                                                                </span> 
                                                                                                                            </a>
                                                                                                                        </li>-->
                                                            <li>
                                                                <a href="#status_7" id="status_click_7" data-toggle="tab" title="status">
                                                                    <span class="round-tabs three">
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#additional-links_7" data-toggle="tab" title="additional-links">
                                                                    <span class="round-tabs four">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/cybersecurity_cloud/cso-templates/index?id=7" title="download">
                                                                    <span class="round-tabs five">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="description_7">
                                                            <h4 class="head text-center">About</h4>
                                                            <div class="policy_desc narrow text-left">
                                                                <p>Truth is, unless you’ve read an article like this before and took action, your wireless network likely has several vulnerabilities. And if exploited, these vulnerabilities could mean something as “harmless” as a neighbor stealing your bandwidth, or as dangerous as a hacker stealing your identity.</p>
                                                                <p>Here are seven easy steps that you can take to lock down your wireless network security — and it won’t take more than five minutes, I promise. Taking a breach from Facebook or Reddit for one moment could protect you from many headaches down the road!</p>
                                                                <ol>
                                                                    <li>Always Access Admin Panel With Ethernet</li> 
                                                                    <li>Change the Default Admin Login</li> 
                                                                    <li>Change the Default SSID</li> 
                                                                    <li>Encrypt Using WPA2 and AES</li> 
                                                                    <li>Enable the Router Firewall</li> 
                                                                    <li>Disable WPS and UPnP Features</li> 
                                                                    <li>Keep the Router Firmware Updated</li> 
                                                                    <li>Employ best practices on payment cards</li> 
                                                                </ol>                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="question_7">
                                                            <h3 class="head text-center">Please choose one of the options below</h3>
                                                            <form enctype="multipart/form-data" method="POST" action="process-policy">
                                                                <input type="hidden" name="_csrf" value="66__4_OfMh5EJe5u7TeQyRWXzhSjNKWjAYnelJGky-mt_ou5kqhqfBdBjDaiXufkJda0ZMVh6cEsv5zb6Mi-qA==">
                                                                <div class="narrow text-left question">
                                                                    <div class="radio">
                                                                        <label class="color-green">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="7" data-option="option_1" value="1" data-score="1" name="optradio">Control has been implemented                                                                                    <input name="policy_id" type="hidden" value="7">
                                                                        </label>
                                                                        <div id="upload_doc_7" class="upload-doc hide">
                                                                            <p>Upload the policy document: <input name="doc" type="file" class="policy_doc"></p>
                                                                            <p>Expiry date of document: <input name="ex_date" type="date">
                                                                            </p></div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-red">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="7" data-option="option_2" value="2" data-score="0" name="optradio">Control is required but not completed                                                                                    <input name="policy_id" type="hidden" value="7">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-blue">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="7" data-option="option_3" value="3" data-score="1" name="optradio">Control not needed in our organization                                                                                    <input name="policy_id" type="hidden" value="7">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-orange">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="7" data-option="option_4" value="4" data-score="1" name="optradio">I don't know about this                                                                                    <input name="policy_id" type="hidden" value="7">
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <p class="text-center">
                                                                    <input type="submit" class="btn btn-success btn-outline-rounded green">
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="status_7">
                                                            <h4 class="head text-center">report</h4>
                                                            <div class="row div-status" id="status_log_7">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 fail messagebox not-started" id="messagebox">
                                                                    <div class="row">
                                                                        <div class="col-md-2 messagebox-icon">
                                                                            <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <div class="h5 messagebox-header">Control action required by admin</div>
                                                                            <i class="fa fa-circle" aria-hidden="true"></i> System : Please select an option
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-links_7">
                                                            <h4 class="head text-center">Additional Links</h4>
                                                            <div class="narrow text-left">
                                                                <ul>                                                                            <li><a href="https://www.labnol.org/internet/secure-your-wireless-wifi-network/10549/" target="_blank">https://www.labnol.org/internet/secure-your-wireless-wifi-network/10549/</a></li>
                                                                    <li><a href="https://kb.iu.edu/d/avat" target="_blank">https://kb.iu.edu/d/avat</a></li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 vertical-tab">
                                    <div class="vertical-tab-content">
                                        <section>
                                            <div class="row">
                                                <h3 class="title">Train employees in security principles</h3>
                                                <div class="board">
                                                    <div class="board-inner">
                                                        <ul class="nav nav-tabs" id="myTab">
                                                            <div class="liner"></div>
                                                            <li class="active">
                                                                <a href="#description_1" data-toggle="tab" title="description">
                                                                    <span class="round-tabs one">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>
                                                            <!--
                                                                                                                        <li>
                                                                                                                            <a href="#question_1" data-toggle="tab" title="question">
                                                                                                                                <span class="round-tabs two">
                                                                                                                                    <i class="fa fa-question" aria-hidden="true"></i>
                                                                                                                                </span> 
                                                                                                                            </a>
                                                                                                                        </li>-->
                                                            <li>
                                                                <a href="#status_1" id="status_click_1" data-toggle="tab" title="status">
                                                                    <span class="round-tabs three">
                                                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#additional-links_1" data-toggle="tab" title="additional-links">
                                                                    <span class="round-tabs four">
                                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                                    </span> 
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/cybersecurity_cloud/cso-templates/index?id=1" title="download">
                                                                    <span class="round-tabs five">
                                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="description_1">
                                                            <h4 class="head text-center">About</h4>
                                                            <div class="policy_desc narrow text-left">
                                                                <p>Information security is concerned with the confidentiality, integrity, and availability of information. From these three 'pillars', the following principles must be applied when implementing and maintaining an information system:</p>
                                                                <ul>
                                                                    <li>Accountability</li>
                                                                    <li>Trust</li>
                                                                    <li>Data management</li>
                                                                    <li>Isolation</li>
                                                                    <li>Change</li>
                                                                    <li>Compliance</li>
                                                                </ul>
                                                                <p>
                                                                    These security principles must be applied and managed throughout the entire systems development lifecycle.</p>
                                                                <b>Accountability</b>
                                                                <p>Regardless of who is implementing an information system for the University of Waterloo, roles must be assigned to appropriate permanent university staff. Policy 46 defines the roles of information steward (e.g. the business owner) and information custodian (e.g. the technologist), along with their respective responsibilities.</p><p>
                                                                    Within the information system itself, controls must be implemented to maintain the appropriate level of information security. In most cases, the system must authenticate users, and record an appropriate level of system activity for audit purposes.</p>
                                                                <b>Trust</b>
                                                                <p>It must be assumed that any information system will be under attack via a number of vectors. A variety of safeguards are required for all system components to maintain system security and the security of the information being processed and stored.</p>
                                                                <p>Internal threats must also be considered. For example, implementing least privilege in a business process, and through authorization mechanisms, will lower the risk of a successful exploitation of trust by a trusted system user.</p>
                                                                <h3><b>Data management:</b></h3>
                                                                <b>Data classification</b>
                                                                <p>Information may be classified in a number of different ways, reflecting its importance to the university. Information must be classified in terms of confidentiality (see Policy 46), records management (see Policy 46), and importance to the institution for the purposes of Business Continuity Planning.</p>
                                                                <b>Data minimization</b>
                                                                <p>The collection and use of information must be restricted to that which is required to support the business processes implemented by the information system. Data minimization reduces the exposure in the event of a breach. For example, do not collect personal information such as Social Insurance Numbers or dates of birth unless absolutely required.</p>
                                                                <b>Data protection</b>
                                                                <p>The appropriate level of physical and logical security controls must be implemented to protect data when transmitted, processed, and stored. Some examples:</p>
                                                                <ul>
                                                                    <li>Use Transport Layer Security (TLS) to maintain the confidentiality and integrity of information in transit on the network.</li>
                                                                    <li>Use encryption to protect the confidentiality and integrity of information stored on mobile devices.</li>
                                                                    <li>Use locked doors, surveillance cameras, and motion detectors to maintain the physical security of data centers.</li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="question_1">
                                                            <h3 class="head text-center">Please choose one of the options below</h3>
                                                            <form enctype="multipart/form-data" method="POST" action="process-policy">
                                                                <input type="hidden" name="_csrf" value="66__4_OfMh5EJe5u7TeQyRWXzhSjNKWjAYnelJGky-mt_ou5kqhqfBdBjDaiXufkJda0ZMVh6cEsv5zb6Mi-qA==">
                                                                <div class="narrow text-left question">
                                                                    <div class="radio">
                                                                        <label class="color-green">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="1" data-option="option_1" value="1" data-score="1" name="optradio">Control has been implemented                                                                                    <input name="policy_id" type="hidden" value="1">
                                                                        </label>
                                                                        <div id="upload_doc_1" class="upload-doc hide">
                                                                            <p>Upload the policy document: <input name="doc" type="file" class="policy_doc"></p>
                                                                            <p>Expiry date of document: <input name="ex_date" type="date">
                                                                            </p></div>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-red">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="1" data-option="option_2" value="2" data-score="0" name="optradio">Control is required but not completed                                                                                    <input name="policy_id" type="hidden" value="1">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-blue">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="1" data-option="option_3" value="3" data-score="1" name="optradio">Control not needed in our organization                                                                                    <input name="policy_id" type="hidden" value="1">
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label class="color-orange">
                                                                            <i class="fa fa-square" aria-hidden="true"></i> &nbsp;
                                                                            <input type="radio" class="options_radio" data-id="1" data-option="option_4" value="4" data-score="1" name="optradio">I don't know about this                                                                                    <input name="policy_id" type="hidden" value="1">
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <p class="text-center">
                                                                    <input type="submit" class="btn btn-success btn-outline-rounded green">
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane fade" id="status_1">
                                                            <h4 class="head text-center">report</h4>
                                                            <div class="row div-status" id="status_log_1">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 fail messagebox not-started" id="messagebox">
                                                                    <div class="row">
                                                                        <div class="col-md-2 messagebox-icon">
                                                                            <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <div class="h5 messagebox-header">Control action required by admin</div>
                                                                            <i class="fa fa-circle" aria-hidden="true"></i> System : Please select an option
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="additional-links_1">
                                                            <h4 class="head text-center">Additional Links</h4>
                                                            <div class="narrow text-left">
                                                                <ul>                                                                            <li><a href="https://www.bitsighttech.com/blog/13-cybersecurity-training-tips-for-employees" target="_blank">https://www.bitsighttech.com/blog/13-cybersecurity-training-tips-for-employees</a></li>
                                                                    <li><a href="https://www.sans.org/security-awareness-training/products/end-user" target="_blank">https://www.sans.org/security-awareness-training/products/end-user</a></li>
                                                                    <li><a href="https://phoenixnap.com/blog/security-awareness-training-program" target="_blank">https://phoenixnap.com/blog/security-awareness-training-program</a></li>
                                                                </ul>                                                                </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("div.vertical-tab-menu>div.list-group>a").click(function (e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.vertical-tab>div.vertical-tab-content").removeClass("active");
            $("div.vertical-tab>div.vertical-tab-content").eq(index).addClass("active");
        });
    });

    $(document).ready(function () {
        $('input[type="radio"]').click(function () {
            var option = $(this).attr("data-option");
            var div = $('#policy_' + $(this).attr("data-id"));
            div.removeClass("color-blue");
            div.removeClass("color-green");
            div.removeClass("color-red");
            div.removeClass("color-orange");
            div.removeClass("color-grey");
            if (option == "option_1") {
                div.addClass("color-green");
                //Show document upload div if it is option 1
                $("#upload_doc_" + $(this).attr("data-id")).removeClass("hide");
            } else if (option == "option_2") {
                div.addClass("color-red");
                $("#upload_doc_" + $(this).attr("data-id")).addClass("hide");
            } else if (option == "option_3") {
                div.addClass("color-blue");
                $("#upload_doc_" + $(this).attr("data-id")).addClass("hide");
            } else if (option == "option_4") {
                div.addClass("color-orange");
                $("#upload_doc_" + $(this).attr("data-id")).addClass("hide");
            } else {
                div.addClass("color-grey");
                $("#upload_doc_" + $(this).attr("data-id")).addClass("hide");
            }
        });
        $("form").submit(function (e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = new FormData($(this)[0]);
            var url = 'tech-control-status';
            $.ajax({
                enctype: "multipart/form-data",
                type: "POST",
                url: url,
                data: form,
                async: false,
                cache: false,
                contentType: false,
                processData: false, // serializes the form's elements.
                success: function (data)
                {
                    console.log(data); // show response from the php script.
                    data = JSON.parse(data);
                    var class1 = '', class2 = '', class3 = '';
                    switch (data.option_id) {
                        case 1:
                            class1 = 'success';
                            class2 = 'text-success';
                            class3 = 'fa-check-circle text-success';
                            break;
                        case 2:
                            class1 = 'fail';
                            class2 = 'text-danger';
                            class3 = 'fa-times-circle text-danger';
                            break;
                        case 3:
                            class1 = 'info';
                            class2 = 'text-info';
                            class3 = 'fa-info-circle text-info';
                            break;
                        case 4:
                            class1 = 'warning';
                            class2 = 'text-warning';
                            class3 = 'fa-exclamation-circle text-warning';
                            break;
                        default:
                            class1 = class2 = 'color-grey';
                    }
                    //Check if the div has 'NA', if it has, clear it
                    if ($("#status_log_" + data.policy_id).html() == 'NA')
                        $("#status_log_" + data.policy_id).html("");
                    $("#status_log_" + data.policy_id).prepend('<div class="col-lg-4 col-md-6 col-sm-12 messagebox ' + class1 + '">'
                            + '<div class="row"><div class="col-lg-2 col-md-2 col-sm-2 messagebox-icon">'
                            + '<i class="fa fa-2x ' + class3 + '" aria-hidden="true"></i>'
                            + '</div><div class="col-lg-10 col-md-10 col-sm-10"><div class="h5 messagebox-header">'
                            + data.option + '</div><i class="fa fa-circle ' + class2 + '" aria-hidden="true"></i> '
                            + data.created_at + '<br/>'
                            + '<i class="fa fa-circle ' + class2 + '" aria-hidden="true"></i> ' + data.updated_by_name
                            + '</div></div></div>');

                    $("#status_click_" + data.policy_id).click();
                }
            });
        });
    });
</script>