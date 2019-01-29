<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


        <title>{{TITLE}}</title>
        {{HEAD}}
        <!-- Recaptcha theme -->
        <script type="text/javascript">
           var RecaptchaOptions = {
           theme : 'white'
        };
        </script>
    </head>
    <body>
        <div id="wrapper" class="container">
            <div class="row">
                <div class="col-12 text-center">
			{{AD-TOP}}
		    </div> 
            </div>
            <div class="row my-3">
                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                    {{AD-LEFT}}
                </div>
                <div class="col-12 col-md-4 col-lg-6 col-xl-8">                   
                    <div class="row">
                        <div class="col-12 text-center mb-2">
                            <img src="./img/werner.jpg" class="img-fluid rounded float-left" style="height: 75px; width: auto;">
                            <img src="./img/jumpcoin.png" class="img-fluid rounded float-right" style="height: 75px; width: auto;">
                            <h1>{{TITLE}}</h1>
                        </div>
                    </div>
                    <?php
                    if($this->status() == '300'){
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <p class="alert alert-danger">
                                <i class="fas fa-skull-crossbones"></i> This faucet is incomplete, it may be missing settings or the RPC client is not available.
                            </p>
                        </div>
                    </div>
                    <?php
                    }
                    elseif($this->status() == '206'){
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <p class="alert alert-danger">
                                <i class="fas fa-skull-crossbones"></i> This faucet is dry! Please donate.
                                <code>{{DONATION_ADDRESS}}</code>
                            </p>
                        </div>
                    </div>
                    <?php
                    }
                    elseif($this->status() == '200' OR $this->status() == '201'){
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <p class="alert alert-danger">
                                <i class="fas fa-skull-crossbones"></i> Cannot seem to connect at the moment, please come back later!
                            </p>
                        </div>
                    </div>
                    <?php                    
                    }
                    elseif($this->status() == '204'){
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <p class="alert alert-danger">
                                <i class="fas fa-skull-crossbones"></i> Something went wrong, could not send you {{COINNAME}}... Please try again later.
                            </p>
                        </div>
                    </div>
                    <?php
                    }
                    elseif($this->status() == '202'){
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <p class="alert alert-danger">
                                <i class="fas fa-skull-crossbones"></i> No more {{COINNAME}} for you at the moment! Try again later.
                            </p>
                        </div>
                    </div>
                    <?php
                    }                    
                    elseif($this->status() == '207'){
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <p class="alert alert-danger">
                                <i class="fas fa-skull-crossbones"></i> You are using a proxy! Proxies are not allowed
                            </p>
                        </div>
                    </div>
                    <?php
                    }
                    elseif($this->status() == '101'){
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <p class="alert alert-success">
                                <i class="fas fa-check"></i> Success! You have been awarded with <span class="font-weight-bolder">{{PAYOUT_AMOUNT}} {{COINNAME}}</span>!
                            </p>
                        </div>
                    </div>
                    <?php
                    }
                    elseif($this->status() == '102'){
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <p class="alert alert-success">
                                <i class="fas fa-check"></i> Success! You have been awarded with <span class="font-weight-bolder">{{PAYOUT_AMOUNT}} {{COINNAME}}</span>!<br/>
                                <i class="fas fa-check-double"></i> Additionally, you received a bonus of <span class="font-weight-bolder">{{PROMO_PAYOUT_AMOUNT}} {{COINNAME}}</span>!  
                            </p>
                        </div>
                    </div>
                    <?php
                    }            
                    ?>
                    <div class="row">
                        <div class="col-6">
                            <p class="alert alert-info"><span class="font-weight-bolder">Balance:</span> {{BALANCE}} {{COINNAME}}</p>                            
                        </div>
                        <div class="col-6">
                            <p class="alert alert-warning"><span class="font-weight-bolder">Already paid:</span> {{TOTAL_PAYOUT}} {{COINNAME}}</p>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="alert alert-secondary">
                                Already paid: <span class="font-weight-bolder">{{TOTAL_PAYOUT}}</span> with <span class="font-weight-bolder">{{NUMBER_OF_PAYOUTS}}</span> payouts<br/><br/>
                                How many payments are currently staged: <span class="font-weight-bolder">{{STAGED_PAYMENT_COUNT}}</span> payments.<br/>
                                How many payments are left before they are executed: <span class="font-weight-bolder">{{STAGED_PAYMENTS_LEFT}}</span> payments.<br/>
                                Payments will be done after <span class="font-weight-bolder">{{STAGED_PAYMENT_THRESHOLD}}</span> staged payments or automated hourly.<br/><br/>
                                You can get free {{COINNAME}} every hour.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="my-0">Please donate to keep this faucet running</h6>
                                </div>
                                <div class="card-body py-1">
                                    <code>{{DONATION_ADDRESS}}</code>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if($this->status() == '203' OR $this->status() == '205' OR $this->status() == '100'){
                    ?>
                    <div class="row my-3">
                        <div class="col-12">
                            {{AD-MIDDLE}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php
                            if ($this->status() == 203){
                            ?>
                            <p class="alert alert-danger">
                                <i class="fas fa-skull-crossbones"></i> You entered an invalid {{COINNAME}} address!
                            </p>
                            <?php
                            }
                            elseif ($this->status() == 205){
                            ?>
                            <p class="alert alert-danger">
                                <i class="fas fa-skull-crossbones"></i> The CAPTCHA code you entered was incorrect!
                            </p>
                            <?php
                            
                            }
                            ?>

                            <form method="POST" action="" class="alert alert-primary">
                                <div class="form-group">
                                    <label for="dogecoin_address">{{COINNAME}} address</label>
                                    <input  name="dogecoin_address" id="dogecoin_address" type="text" class="form-control" value="" placeholder="Enter your {{COINNAME}} address here" />
                                </div>
                                <div class="form-group">
                                    <label for="promo_code">Promo code</label>
                                    <input  name="promo_code" id="promo_code" type="text" class="form-control" value="" placeholder="Promo code (optional)" />
                                </div>
                                <div class="form-group">
                                    {{CAPTCHA}}
                                    <input id="send" name="dogecoin_submit" type="submit" class="btn btn-dark mt-2" value="Send {{COINNAME}}" />

                                </div>  
                            </form>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
			{{AD-RIGHT}}
		    </div>
            </div>           
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>


