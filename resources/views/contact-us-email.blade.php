<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;margin-top:0 !important;margin-bottom:0 !important;margin-right:auto !important;margin-left:auto !important;padding-top:0 !important;padding-bottom:0 !important;padding-right:0 !important;padding-left:0 !important;height:100% !important;width:100% !important;background-color:#f1f1f1;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;">
<head style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
    <meta charset="utf-8" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
    <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
    <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"
          style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
    <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
    <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;"></title>
    <!-- The title tag shows in email notifications, like Android 4.4. -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">

    <style style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
        html, body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        table, td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        a {
            text-decoration: none;
        }

        img.g-img + div {
            display: none !important;
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }

        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }

        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }
    </style>
    <style style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Lato', sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }
        body {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0, 0, 0, .4);
        }
    </style>

</head>
<body width="100%" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;margin-top:0 !important;margin-bottom:0 !important;margin-right:auto !important;margin-left:auto !important;padding-top:0 !important;padding-bottom:0 !important;padding-right:0 !important;padding-left:0 !important;mso-line-height-rule:exactly;background-color:#222222;height:100% !important;width:100% !important;background-image:none;background-repeat:repeat;background-position:top left;background-attachment:scroll;font-family:'Lato', sans-serif;font-weight:400;font-size:15px;line-height:1.8;color:rgba(0,0,0,.4);">
<center style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;width:100%;background-color:#f1f1f1;">
    <div class="email-container" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;max-width:600px;padding-top:40px;padding-bottom:40px;margin-right:auto;margin-left:auto;">
        <!-- BEGIN BODY -->
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;margin-top:0 !important;margin-bottom:0 !important;margin-right:auto !important;margin-left:auto !important;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;border-spacing:0 !important;border-collapse:collapse !important;table-layout:fixed !important;">
            <tr>
                <td style="background-color: #fff;" width="100%">
                    <table width="570" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="padding: 20px 0px;color: #4e4e4e;">

                                <p style="margin: 0px">
                                    Dear Mohamed Elshahat,
                                </p>

                                <p style="margin: 0px;padding-bottom: 10px">
                                    New Request From {{$request['name']}}
                                </p>

                                <table style="text-align: center;border: 1px solid;" width="100%" cellpadding="0" cellspacing="0">
                                    <tr style="border: 1px solid;">
                                        <th style="border: 1px solid;width: 25%">Name</th>
                                        <td style="border: 1px solid;">{{$request['name']}}</td>
                                    </tr>
                                    <tr style="border: 1px solid;">
                                        <th style="border: 1px solid;">Email</th>
                                        <td style="border: 1px solid;">{{$request['email']}}</td>
                                    </tr>
                                    <tr style="border: 1px solid;">
                                        <th style="border: 1px solid;">Message</th>
                                        <td style="border: 1px solid;">{{$request['message']}}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</center>
</body>
</html>