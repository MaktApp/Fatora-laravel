<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
    
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Maktapp Credit </title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link href="/css/reset.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8"><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        .in-details h1 {
            font-family: 'A Jannat LT' !important;
            font-style: normal;
            text-align: center;
            color: #5ac99d;
            margin: 40px 0px 45px 0px;
            font-size: 36px;
        }

        .detail-item {
            margin: 5% 0;
            border-radius: 10px;
            padding: 20px 15px;
            border: 1px solid #eee;
            position: relative;
            min-height: 240px;
            font-family: 'A Jannat LT' !important;
        }

            .detail-item .img-cont {
                width: 200px;
                height: 200px;
                vertical-align: top;
                display: inline-block;
                position: absolute;
                top: 20px;
                right: -100px;
                overflow: hidden;
                border-radius: 10px;
                box-shadow: 0px 2px 20px #eee;
                border: 1px solid #f9f9f9;
            }

                .detail-item .img-cont img {
                    width: 100%;
                    height: 100%;
                }

            .detail-item .content {
                margin-right: 105px;
                vertical-align: top;
            }

                .detail-item .content h3 {
                    margin: 10px 0 15px;
                    color: #555;
                    font-family: 'A Jannat LT' !important;
                }

                .detail-item .content p {
                    line-height: 24px;
                    color: #888;
                }

            .detail-item .pay-cont {
                direction: ltr;
            }

            .detail-item .btn-pay {
                direction: rtl;
                background-color: #3294d1;
                color: #fff;
                margin: 10px 0 0 !important;
                width: 180px;
                font-family: 'A Jannat LT' !important;
                font-size: 16px;
                box-shadow: 0px 3px 10px rgba(50, 148, 209, 0.3);
            }

            .detail-item .price {
                display: inline-block;
                width: auto;
                position: absolute;
                top: 0;
                left: 15px;
                background-color: transparent;
            }

                .detail-item .price .val {
                    color: #5ac99d;
                    font-size: 36px;
                }

                .detail-item .price .currency {
                    color: #999;
                }

        .detail-item {
            margin: 5% 0;
            border-radius: 10px;
            padding: 20px 15px;
            border: 1px solid #eee;
            position: relative;
            min-height: 240px;
            font-family: 'A Jannat LT' !important;
        }

            .detail-item .img-cont {
                width: 200px;
                height: 200px;
                vertical-align: top;
                display: inline-block;
                position: absolute;
                top: 20px;
                right: -100px;
                overflow: hidden;
                border-radius: 10px;
                box-shadow: 0px 2px 20px #eee;
                border: 1px solid #f9f9f9;
            }

                .detail-item .img-cont img {
                    width: 100%;
                    height: 100%;
                }

            .detail-item .content {
                margin-right: 105px;
                vertical-align: top;
                text-align: right;
            }

                .detail-item .content h3 {
                    margin: 10px 0 15px;
                    color: #555;
                    font-family: 'A Jannat LT' !important;
                }

                .detail-item .content p {
                    line-height: 24px;
                    color: #888;
                }

            .detail-item .pay-cont {
                direction: ltr;
            }

        @media(max-width:480px) {
            .detail-item {
                display: flex;
                flex-wrap: wrap;
                border-bottom: 1px solid #ccc;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }

                .detail-item .img-cont {
                    width: 100%;
                    position: static;
                    margin-bottom: 30px;
                }

                    .detail-item .img-cont img {
                        object-fit: contain;
                    }

                .detail-item .price {
                    position: static;
                    margin: 0 20px;
                }

                .detail-item .content {
                    margin: 0;
                    width: 100%;
                }

                .detail-item .btn-pay {
                    width: 160px;
                }
        }
    </style>



</head>
    
    <body >
<section class="in-details">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>Items</h1>
                    <div class="detail-item">
                        <div class="img-cont">
                            <img src="/images/images.jpg" alt="material">
                        </div>
                        <div class="content">
                            <h3>Adidas Shoe</h3>
                            <p>
                                Adidas shoe
                            </p>
                        </div>
                        <div class="pay-cont">
                            
                            

<?php echo e(Form::open(array('route' => 'orders.store'))); ?>


    <input type="hidden"  name="amount" value="150">
    <input type="hidden"  name="currencyCode" value="QAR"> 
    <input type="hidden"  name="customerEmail" value="testPament@testPayment.com">
    <input type="hidden"  name="customerName" value="gust">
    <input type="hidden"  name="customerPhone" value="+9639449871">
    <input type="hidden"  name="customerCountry" value="QATAR">
    <input type="hidden"  name="lang" value="en">
    <input type="hidden"  name="status" value="pending">
    <input type="hidden"  name="note" value="Demo of Payment">
    
    <button class="btn btn-pay" name="submit" type="submit"><i class="fa fa-money"></i> Pay </button>
<?php echo e(Form::close()); ?>





                        </div>
                        <div class="price">
                            <span class="val">150</span>
                            <span class="currency">QAR</span>
                        </div>
                    </div>
                    <div class="detail-item">
                        <div class="img-cont">
                            <img src="/images/lapholder.jpg" alt="material">
                        </div>
                        <div class="content">
                            <h3>Laptop Holder</h3>
                            <p>DO YOUR DAILY WORKS EVEN ON TOP OF YOUR BED! THIS EXPANSION SERVES AS A GREAT BASE FOR YOUR LAPTOPS, NOTEBOOKS AND OTHER WORK MATERIALS. ALSO THE ADJUSTABLE AND FOLDABLE LEGS ARE MADE FROM HIGH QUALITY LIGHT WEIGHT ALUMINUM. ALLOWS USE OF PORTABLE COMPUTERS, IPAD, READING BOOKS OR NEWSPAPERS IN BED WHILE LYING DOWN OR SITTING.</p>
                        </div>
                        <div class="pay-cont">
                            
                            

    <?php echo e(Form::open(array('route' => 'orders.store'))); ?>


    <input type="hidden"  name="amount" value="120">
    <input type="hidden"  name="currencyCode" value="QAR"> 
    <input type="hidden"  name="customerEmail" value="testPament@testPayment.com">
    <input type="hidden"  name="customerName" value="gust">
    <input type="hidden"  name="customerPhone" value="+9639449871">
    <input type="hidden"  name="customerCountry" value="QATAR">
    <input type="hidden"  name="lang" value="en">
    <input type="hidden"  name="note" value="Demo of Payment">
    
    <button class="btn btn-pay" name="submit" type="submit"><i class="fa fa-money"></i> Pay </button>
  
  <?php echo e(Form::close()); ?>


    
    </div>
                        <div class="price">
                            <span class="val">120</span>
                            <span class="currency">QAR</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>        
</html>
<?php /**PATH /storage/ssd5/443/12772443/resources/views/welcome.blade.php ENDPATH**/ ?>