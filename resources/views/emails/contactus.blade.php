<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    >

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="../../assets/img/icons/foundation-favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation-emails/2.2.1/foundation-emails.min.css" rel="stylesheet">
    <title>My Basic Template Email Template Subject</title>
</head>
<body>
<span class="preheader"></span>
<!-- Info Banner For Announcements or Links -->
<!-- <a href="https://zurb.com/university/foundation-intro" class="docs-banner course-banner">
  <div class="info">
    <h5 class=""><strong>To master everything new in 6.4, along with the rest of Foundation register for our Aug 8th Webinar Class &rsaquo;</strong></h5>
  </div>
</a> -->

<!-- <a href="https://zurb.com/wired" id="notice">
  <div class="info hide-for-small">
    <div id="clockdiv" class="countdown">
        <span class="timer-day days"></span>
        <span class="timer-colon">:</span>
      <span class="timer-hour hours"></span>
      <span class="timer-colon">:</span>
      <span class="timer-hour minutes"></span>
      <span class="timer-colon">:</span>
      <span class="timer-seconds seconds"></span>
    </div>
  </div>
</a> -->

<style type="text/css">
    .header {
        background: #8a8a8a;
    }
    .header .columns {
        padding-bottom: 0;
    }
    .header p {
        color: #fff;
        margin-bottom: 0;
    }
    .header .wrapper-inner {
        padding: 20px; /*controls the height of the header*/
    }
    .header .container {
        background: #8a8a8a;
    }
    .wrapper.secondary {
        background: #f3f3f3;
    }
</style>

<table align="center" bgcolor="#8A8A8A" class="wrapper header float-center">
    <tr>
        <td class="wrapper-inner">
            <table align="center" class="container">
                <tbody>
                <tr>
                    <td>
                        <table class="row collapse">
                            <tbody>
                            <tr>
                                <th class="small-6 large-6 columns first" valign="middle">
                                    <table>
                                        <tr>
                                            <th><img src="https://placehold.it/200x50/663399"></th>
                                        </tr>
                                    </table>
                                </th>
                                <th class="small-6 large-6 columns last" valign="middle">
                                    <table>
                                        <tr>
                                            <th>
                                                <p class="text-right">BASIC</p>
                                            </th>
                                        </tr>
                                    </table>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>
<table align="center" class="container float-center">
    <tbody>
    <tr>
        <td>
            <table class="spacer">
                <tbody>
                <tr>
                    <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                </tr>
                </tbody>
            </table>
            <table class="row">
                <tbody>
                <tr>
                    <th class="small-12 large-12 columns first last">
                        <table>
                            <tr>
                                <th>
                                    <h1>Hi, {{ $name }}</h1>
                                    <p class="lead">
                                        We confirm we received your message. Thanks for your interest. We will answer as soon as possible.
                                    </p>
                                    <table class="callout">
                                        <tr>
                                            <th class="callout-inner primary">

                                                <p>{{ $userMessage }}</p>
                                            </th>
                                            <th class="expander"></th>
                                        </tr>
                                    </table>
                                </th>
                                <th class="expander"></th>
                            </tr>
                        </table>
                    </th>
                </tr>
                </tbody>
            </table>
            <table align="center" class="wrapper secondary">
                <tr>
                    <td class="wrapper-inner">
                        <table class="spacer">
                            <tbody>
                            <tr>
                                <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="row">
                            <tbody>
                            <tr>
                                <th class="small-12 large-6 columns first">
                                    <table>
                                        <tr>
                                            <th>
                                                <h5>Connect With Us:</h5>
                                                <table class="menu vertical">
                                                    <tr>
                                                        <td>
                                                            <table>
                                                                <tr>
                                                                    <th class="menu-item float-center" style="text-align: left;">
                                                                        <a href="#">Twitter</a>
                                                                    </th>
                                                                    <th class="menu-item float-center" style="text-align: left;">
                                                                        <a href="#">Facebook</a>
                                                                    </th>
                                                                    <th class="menu-item float-center" style="text-align: left;">
                                                                        <a href="#">Google +</a>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
                                    </table>
                                </th>
                                <th class="small-12 large-6 columns last">
                                    <table>
                                        <tr>
                                            <th>
                                                <h5>Contact Info:</h5>
                                                <p>Phone: 408-341-0600</p>
                                                <p>Email: <a href="mailto:contact@get.foundation">contact@get.foundation</a></p>
                                            </th>
                                        </tr>
                                    </table>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </tbody>
</table>

<!-- prevent Gmail on iOS font size manipulation -->
<div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
</body>
</html>
