<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="ui inverted fixed menu">
        <div class="header item">Paiement</div>
    </div>
    <div class="ui main container">

    <form action="payment.php" class="ui form" id="payment_form">
        <div class="field">
            <input type="text" name="name" placeholder="Name" required >
        </div>
        <div class="field">
            <input type="email" name="email" placeholder="xxx@gmail.com" required  >
        </div>
        <div class="filed">
            <input type="text" placeholder="Votre code de carte bleu" data-stripe="number">
        </div>
        <div class="filed">
            <input type="text" placeholder="MM" data-stripe="exp_month">
        </div>
        <div class="filed">
            <input type="text" placeholder="YY" data-stripe="exp_year" >
        </div>
        <div class="filed">
            <input type="text" placeholder="CVC" data-stripe="cvc">
        </div>
        <p>
            <button class="ui button" type="submit"> Acheter </button>
        </p>
    </form>
    
    
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        //clé du compte Stripe de FST
        var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
        var $form = $('#payment_form')
        $form.submit(function (e) {
            e.preventDefault()
            //empêcher paiments plusieurs fois  si on clique plusieurs fois sur button
            $form.find('.button').attr('disabled',true)

            //demander token à API Stripe.
            stripe.card.createToken($form, function (status,response){

            })
        })
    </script>
    </div>

    
</body>
</html>