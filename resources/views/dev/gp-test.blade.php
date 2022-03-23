<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Global Payment Tester</title>

    <!-- GLOBAL VARIABLES -->
    <script type="text/javascript">
        const realexURL = 'https://pay.sandbox.realexpayments.com/pay';
    </script>

    <script src="{{asset('dev/rxp-hpp.js')}}"></script>

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        label {
            display: block;
            margin: 10px 0;
            font-weight: bold;
        }

        .form-control {
            margin: 20px 0;
        }

        #charge {
            display: block;
            height: 200px;
            width: 100%;
        }

        #gpResponse {
            margin: 20px 0;
            max-width: calc(100vw);
            overflow: scroll;
        }

        #gpResponseWrapper {
            display: none;
        }
    </style>
</head>
<body>
<h1>Global Payment Runner</h1>
<h2>Instructions</h2>
<div class="info">
    <ol>
        <li>Use Postman to POST /createGlobalPaymentCharge (at Laravel API for proper string conversion)</li>
        <li>Paste entire response (including "data" wrapper) in to Charge field</li>
        <li>Hit Checkout button to launch GP modal (sandbox)</li>
        <li>Make payment and use GP Response to POST /processGlobalPaymentResponse</li>
        <li>Refresh page to start a new test</li>
    </ol>
</div>

<div id="chargeControl" class="form-control">
    <label for="charge">Charge</label>
    <textarea id="charge" name="chargeResponse"
              placeholder='{"data":{"url":"https:\/\/pay.sandbox.realexpayments.com\/pay","chargeResponse":"{\"MERCHANT_ID\":\"homecareservicecentre\ ..."'
    ></textarea>
</div>

<div id="gpResponseWrapper">
    <h2>Global Payment Response</h2>
    <div id="gpResponse">

    </div>
</div>

<div class="form-control">
    <button id="submit">Checkout</button>
</div>

<script type="text/javascript">

    document.getElementById("submit").addEventListener("click", () => {

        try {
            const charge = JSON.parse(document.getElementById("charge").value);

            let chargeResponse = charge.data.chargeResponse.replaceAll('\\', '');
            chargeResponse = JSON.parse(chargeResponse);

            console.log('Launching GP with charge', chargeResponse);

            RealexHpp.setHppUrl(realexURL);

            RealexHpp.lightbox.init(
                "autoload",
                function (answer, close) {
                    console.log('Received GP response', answer);
                    document.getElementById("chargeControl").style.display = 'none';
                    document.getElementById("submit").style.display = 'none';
                    document.getElementById("gpResponse").innerText = JSON.stringify(answer);
                    document.getElementById("gpResponseWrapper").style.display = 'block';
                    close();
                },
                chargeResponse
            );

        } catch (e) {
            alert("Failed to create GP modal. Check charge content.");
            console.error("Failed to create GP modal. Check charge content.", e);
        }
    });
</script>
</body>
</html>
