
<?php

include('header.php');

?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Loan Eligibility Calculator</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                <h1 class="page-title">Loan Eligibility</h1>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="btn-action"> <a href="#!" class="btn btn-secondary">How To Apply</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub-nav" id="sub-nav">
                        <ul class="nav nav-justified">
                            <li class="nav-item">
                                <a href="contact-us.html" class="nav-link">Give me call back</a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">Emi Caculator</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="wrapper-content bg-white p-3 p-lg-5">
                    <div class="loan-eligibility-block">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <h2 class="mb20">Check Your eligibility for loans.</h2>
                                <div class="row">
                                    <form name="formval2" class="form-horizontal loan-eligibility-form">
                                        <div class="form-group">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <label for="loan" class="control-label">Home Loan Required:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">₹</span>
                                                    </div>
                                                    <input type="number" class="form-control input-sm" id="loan" name="pr_amt2" placeholder="Enter Loan Amount">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <label for="income" class="control-label">Net income per month</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">₹</span>
                                                    </div>
                                                    <input type="number" class="form-control" id="income" name="NetIncome" placeholder="Excluding LTA and Medical allowances">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <label for="commitments" class="control-label">Existing loan commitments</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">₹</span>
                                                    </div>
                                                    <input type="number" class="form-control" id="commitments" Name="ExLoan" placeholder="(per month)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <label for="tenure" class="control-label">Loan Tenure</label>
                                                <input type="number" class="form-control" id="tenure" name="period2" placeholder="(in years)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <label for="rateofinterest" class="control-label">Rate of Interest</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                    <input type="number" class="form-control" id="rateofinterest" value="9.5" name="int_rate2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <button type="button" class="btn btn-secondary" onclick="eligiable()">Check Eligibility</button>
                                                <button type="reset" class="btn btn-primary">Reset All</button>
                                            </div>
                                        </div>
                             
                                </form>
                            </div>
                            </div>
                            <div class="col-lg-6">
                                <h2 class="mb40">How much loan you are eligible for?</h2>
                                <div class="loan-eligibility-info">
                                    <form name="formval3" class="">
                                        <div class="form-group">
                                            <output class="col-lg-12 col-sm-12 col-md-12 col-12 eligibility-text" name="field13">
                                            </output>
                                            <output class="col-lg-12 col-sm-12 col-md-12 col-12 eligibility-amount" name="field11"></output>
                                        </div>
                                        <div class="form-group">
                                            <output class="col-lg-12 col-sm-12 col-md-12 col-12 eligibility-text" name="field12"></output>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php

  include('footer.php');


  ?>