const stripe = require('stripe')('sk_test_4eC39HqLyjWDarjtT1zdp7dc');
const express = require('express');
const app = express();
app.use(express.static('.'));

const YOUR_DOMAIN = 'http://localhost:4242';

//ajout d'un endpoint, création d'une session de paiement
app.post('/create-checkout-session', async (req, res) => {
  const session = await stripe.checkout.sessions.create({
   //moyen de paiment
    payment_method_types: ['card'],
    //élément que l'utilisateur va voir
    line_items: [
      {
        // infos du produit
        price_data: {
          currency: 'usd',
          product_data: {
            name: 'Stage FrenchSportsTryouts',
            //images: ['https://i.imgur.com/EHyR2nP.png'],
          },
          unit_amount: 2000,
        },
        quantity: 1,
      },
    ],
    // mode :paiement en une fois, abonnement ou setup
    mode: 'payment',
    success_url: `${YOUR_DOMAIN}/success.html`,
    cancel_url: `${YOUR_DOMAIN}/cancel.html`,
  });
// on retourne l'ID de la session de paiemnt d'un client
  res.json({ id: session.id });
});

app.listen(4242, () => console.log('Running on port 4242'));