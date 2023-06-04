{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">

        <title>Mail da YOeS</title>

        <style>
            
            @import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');
            
            @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');


            .logo{
                height: 150px;
                width: 170px;
                

            }

            .monoton-font{
                font-family: 'Monoton';
            }

            .montserrat-font{
                font-family: 'Montserrat', sans-serif;
            }

            .bg-blue{
            background-image: url('https://cdn.pixabay.com/photo/2023/04/30/23/49/abstract-7961924_1280.jpg');
            background-repeat: no-repeat;
            background-size: cover;

            }

            .bg-card{
                border: solid 1px cornflowerblue;
                color: white;
            }
        </style>

    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center mt-4">
                
                    <img src="https://i.ibb.co/xM3yvqC/logo-img.png" class="logo" alt="YOeS Logo">
            </div>
        </div>

        <div class="container rounded bg-blue my-5 p-5">

            <div class="row justify-content-center">
                <h3 class="display-3 monoton-font text-center text-white">Benvenuto Admin</h3>
                        <h5 class="montserrat-font mb-5 text-center text-white"> Hai una richiesta per diventare revisore da parte di un utente.</h5>

                <div class="col-12 d-flex justify-content-center ">
                
                            <div class="card shadow  bg-transparent bg-card">
                                <div class="card-body">
                                    <h3 class="card-title montserrat-font text-center fw-bold">{{$user->name}}</h3>
                            
                                        <p class="card-text montserrat-font fw-bold mt-4">DATI UTENTE: </p>
                                            <p class="card-text montserrat-font fw-bold">Username:</p>
                                            <p class="card-text montserrat-font">{{$user->username}} </p>
                                            <p class="card-text montserrat-font fw-bold"> Email: </p>
                                            <p class="card-text montserrat-font"> {{$user->email}} </p>

                                            <div class="d-flex justify-content-center">

                                                <a class="btn btn-outline-dark text-white" href="{{route('make.revisor',compact('user'))}}">Rendi l'utente un revisore</a> 
                                            </div>
                                </div>
                            </div>
                </div>
        
        
            </div>
        </div>



    </body>

    
    


</html> --}}


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta name="x-apple-disable-message-reformatting">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="telephone=no" name="format-detection">
<title>New Email</title><!--[if (mso 16)]>
<style type="text/css">
a {text-decoration: none;}
</style>
<![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if gte mso 9]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG></o:AllowPNG>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]--><!--[if !mso]><!-- -->
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet"><!--<![endif]-->
<style type="text/css">
.rollover:hover .rollover-first {
max-height:0px!important;
display:none!important;
}
.rollover:hover .rollover-second {
max-height:none!important;
display:inline-block!important;
}
.rollover div {
font-size:0px;
}
u ~ div img + div > div {
display:none;
}
#outlook a {
padding:0;
}
span.MsoHyperlink,
span.MsoHyperlinkFollowed {
color:inherit;
mso-style-priority:99;
}
a.es-button {
mso-style-priority:100!important;
text-decoration:none!important;
}
a[x-apple-data-detectors] {
color:inherit!important;
text-decoration:none!important;
font-size:inherit!important;
font-family:inherit!important;
font-weight:inherit!important;
line-height:inherit!important;
}
.es-desk-hidden {
display:none;
float:left;
overflow:hidden;
width:0;
max-height:0;
line-height:0;
mso-hide:all;
}
/*
.es-header-body a:hover {
color:#ffffff!important;
}
*/
/*
.es-content-body a:hover {
color:#ffffff!important;
}
*/
/*
.es-footer-body a:hover {
color:#cccccc!important;
}
*/
/*
.es-infoblock a:hover {
color:#cccccc!important;
}
*/
.es-button-border:hover a.es-button {
color:#ffffff!important;
}
@media only screen and (max-width:600px) {.es-m-p40t { padding-top:40px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } *[class="gmail-fix"] { display:none!important } p, a { line-height:150%!important } h1, h1 a { line-height:120%!important } h2, h2 a { line-height:120%!important } h3, h3 a { line-height:120%!important } h4, h4 a { line-height:120%!important } h5, h5 a { line-height:120%!important } h6, h6 a { line-height:120%!important } .es-header-body p { } .es-content-body p { } .es-footer-body p { } .es-infoblock p { } h1 { font-size:50px!important; text-align:center } h2 { font-size:26px!important; text-align:left } h3 { font-size:20px!important; text-align:left } h4 { font-size:24px!important; text-align:left } h5 { font-size:20px!important; text-align:left } h6 { font-size:16px!important; text-align:left } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:50px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-header-body h4 a, .es-content-body h4 a, .es-footer-body h4 a { font-size:24px!important } .es-header-body h5 a, .es-content-body h5 a, .es-footer-body h5 a { font-size:20px!important } .es-header-body h6 a, .es-content-body h6 a, .es-footer-body h6 a { font-size:16px!important } .es-menu td a { font-size:12px!important } .es-header-body p, .es-header-body a { font-size:14px!important } .es-content-body p, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body a { font-size:12px!important } .es-infoblock p, .es-infoblock a { font-size:12px!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3, .es-m-txt-c h4, .es-m-txt-c h5, .es-m-txt-c h6 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3, .es-m-txt-r h4, .es-m-txt-r h5, .es-m-txt-r h6 { text-align:right!important } .es-m-txt-j, .es-m-txt-j h1, .es-m-txt-j h2, .es-m-txt-j h3, .es-m-txt-j h4, .es-m-txt-j h5, .es-m-txt-j h6 { text-align:justify!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3, .es-m-txt-l h4, .es-m-txt-l h5, .es-m-txt-l h6 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img, .es-m-txt-r .rollover:hover .rollover-second, .es-m-txt-c .rollover:hover .rollover-second, .es-m-txt-l .rollover:hover .rollover-second { display:inline!important } .es-m-txt-r .rollover div, .es-m-txt-c .rollover div, .es-m-txt-l .rollover div { line-height:0!important; font-size:0!important } .es-spacer { display:inline-table } a.es-button, button.es-button { font-size:20px!important } .es-m-fw, .es-m-fw.es-fw, .es-m-fw .es-button { display:block!important } .es-m-il, .es-m-il .es-button, .es-social, .es-social td, .es-menu { display:inline-block!important } .es-adaptive table, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .adapt-img:not([src*="default-img"]) { width:100%!important; height:auto!important } .es-mobile-hidden, .es-hidden { display:none!important } .es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } .es-social td { padding-bottom:10px } a.es-button.es-button-1675432559559 { font-size:18px!important; padding:15px 0!important } a.es-button, button.es-button { display:inline-block!important } .es-button-border { display:inline-block!important } }
</style>
</head>
<body style="width:100%;height:100%;padding:0;Margin:0">
<div class="es-wrapper-color" style="background-color:#314B70"><!--[if gte mso 9]>
<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
<v:fill type="tile" color="#314B70"></v:fill>
</v:background>
<![endif]-->
<table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#314B70">
<tr>
<td valign="top" style="padding:0;Margin:0">
<table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important">
<tr>
<td align="center" style="padding:0;Margin:0">
<table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" background="https://xbkomh.stripocdn.email/content/guids/CABINET_dd9759b09de82ede623cff0b42f718ca19c0a4f85f6337f81c705fd693708d47/images/simonleezftw1kvehgunsplash_1_1.png" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#07021F;background-repeat:no-repeat;width:600px;background-image:url(https://xbkomh.stripocdn.email/content/guids/CABINET_dd9759b09de82ede623cff0b42f718ca19c0a4f85f6337f81c705fd693708d47/images/simonleezftw1kvehgunsplash_1_1.png);background-position:center bottom">
<tr>
<td align="left" style="padding:0;Margin:0;padding-top:20px;padding-right:20px;padding-left:20px">
<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
<tr>
<td align="center" valign="top" style="padding:0;Margin:0;width:560px">
<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
<tr>
<td align="center" style="padding:0;Margin:0;font-size:0px"><a target="_blank" href="http://127.0.0.1:8000/" style="mso-line-height-rule:exactly;text-decoration:underline;color:#FFFFFF;font-size:18px"><img src="https://i.ibb.co/xM3yvqC/logo-img.png" alt="Logo" style="display:block;font-size:18px;border:0;outline:none;text-decoration:none" height="120" title="Logo"></a></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
<tr>
<td class="es-m-p40t" align="left" style="Margin:0;padding-top:20px;padding-right:20px;padding-left:20px;padding-bottom:40px">
<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
<tr>
<td align="center" valign="top" style="padding:0;Margin:0;width:560px">
<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
<tr class="es-mobile-hidden">
<td align="center" style="padding:0;Margin:0">
<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" class="es-spacer" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
<tr>
<td style="padding:0;Margin:0;border-bottom:3px solid #ffffff;background:none;height:1px;width:100%;margin:0"></td>
</tr>
</table></td>
</tr>
<tr>
<td align="center" style="padding:0;Margin:0;padding-bottom:40px"><h1 style="Margin:0;font-family:Righteous, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:60px;font-style:normal;font-weight:bold;line-height:72px;color:#FFFFFF">Benvenuto Admin</h1></td>
</tr>
<tr>
<td align="center" class="es-m-p0r es-m-p0l" style="padding:0;Margin:0;padding-bottom:40px;padding-right:40px;padding-left:40px"><h5 style="Margin:0;font-family:Righteous, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:20px;font-style:normal;font-weight:normal;line-height:24px;color:#ffffff">Hai una richiesta per diventare revisore da parte di un utente:</h5></td>
</tr>
<tr>
<td align="center" class="es-m-p0r es-m-p0l" style="padding:0;Margin:0;padding-bottom:40px;padding-right:40px;padding-left:40px"><h5 style="Margin:0;font-family:Righteous, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:20px;font-style:normal;font-weight:normal;line-height:24px;color:#ffffff">{{$user->name}}</h5><h5 style="Margin:0;font-family:Righteous, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:20px;font-style:normal;font-weight:normal;line-height:24px;color:#ffffff">&nbsp;</h5><h5 style="Margin:0;font-family:Righteous, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:20px;font-style:normal;font-weight:normal;line-height:24px;color:#ffffff">&nbsp;
<table cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%" class="es-table" role="presentation">
<tr>
<td style="padding:0;Margin:0;background-color:#ffffff">Username:&nbsp;</td>
<td style="padding:0;Margin:0;background-color:#ffffff">{{$user->username}}&nbsp;</td>
</tr>
<tr>
<td style="padding:0;Margin:0;background-color:#ffffff">E-mail:&nbsp;</td>
<td style="padding:0;Margin:0;background-color:#ffffff">{{$user->email}}&nbsp;</td>
</tr>
</table></h5></td>
</tr>
<tr>
<td align="center" style="padding:0;Margin:0;padding-top:20px;padding-bottom:40px"><!--[if mso]><a href="https://viewstripo.email" target="_blank" hidden>
<v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" esdevVmlButton href="https://viewstripo.email"
style="height:58px; v-text-anchor:middle; width:428px" arcsize="50%" stroke="f" fillcolor="#f87575">
<w:anchorlock></w:anchorlock>
<center style='color:#ffffff; font-family:Righteous, sans-serif; font-size:23px; font-weight:400; line-height:23px; mso-text-raise:1px'>SHARE MY FEEDBACK</center>
</v:roundrect></a>
<![endif]--><!--[if !mso]><!-- --><span class="es-button-border es-m-fw msohide" style="border-style:solid;border-color:#2CB543;background:#359bc7;border-width:0px;display:inline-block;border-radius:30px;width:auto;mso-hide:all"><a href="{{route('make.revisor',compact('user'))}}" class="es-button es-button-1675432559559" target="_blank" style="mso-style-priority:100 !important;text-decoration:none !important;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;padding:15px 40px;display:inline-block;background:#359bc7;border-radius:30px;font-family:Righteous, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;letter-spacing:5px;mso-padding-alt:0;mso-border-alt:10px solid #359bc7">RENDI L'UTENTE UN REVISORE</a></span><!--<![endif]--></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table>
<table cellpadding="0" cellspacing="0" class="es-footer" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important;background-color:transparent;background-repeat:repeat;background-position:center top">
<tr>
<td align="center" style="padding:0;Margin:0">
<table bgcolor="#ffffff" class="es-footer-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#07021F;width:600px">
<tr>
<td align="left" style="Margin:0;padding-right:20px;padding-left:20px;padding-bottom:40px;padding-top:40px">
<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
<tr>
<td align="left" style="padding:0;Margin:0;width:560px">
<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
<tr>
<td align="center" style="padding:0;Margin:0;font-size:0">
<table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
<tr>
<td align="center" valign="top" style="padding:0;Margin:0;padding-right:33px"><a target="_blank" href="https://facebook.com" style="mso-line-height-rule:exactly;text-decoration:underline;color:#CCCCCC;font-size:12px"><img src="https://xbkomh.stripocdn.email/content/assets/img/social-icons/logo-colored/facebook-logo-colored.png" alt="Fb" title="Facebook" height="34" width="34" style="display:block;font-size:18px;border:0;outline:none;text-decoration:none"></a></td>
<td align="center" valign="top" style="padding:0;Margin:0;padding-right:33px"><a target="_blank" href="https://twitter.com/?lang=it" style="mso-line-height-rule:exactly;text-decoration:underline;color:#CCCCCC;font-size:12px"><img src="https://xbkomh.stripocdn.email/content/assets/img/social-icons/logo-colored/twitter-logo-colored.png" alt="Tw" title="Twitter" height="34" width="34" style="display:block;font-size:18px;border:0;outline:none;text-decoration:none"></a></td>
<td align="center" valign="top" style="padding:0;Margin:0;padding-right:33px"><a target="_blank" href="https://www.instagram.com/" style="mso-line-height-rule:exactly;text-decoration:underline;color:#CCCCCC;font-size:12px"><img src="https://xbkomh.stripocdn.email/content/assets/img/social-icons/logo-colored/instagram-logo-colored.png" alt="Ig" title="Instagram" height="34" width="34" style="display:block;font-size:18px;border:0;outline:none;text-decoration:none"></a></td>
<td align="center" valign="top" style="padding:0;Margin:0"><a target="_blank" href="https://www.linkedin.com/" style="mso-line-height-rule:exactly;text-decoration:underline;color:#CCCCCC;font-size:12px"><img src="https://xbkomh.stripocdn.email/content/assets/img/social-icons/logo-colored/linkedin-logo-colored.png" alt="In" title="Linkedin" height="34" width="34" style="display:block;font-size:18px;border:0;outline:none;text-decoration:none"></a></td>
</tr>
</table></td>
</tr>
<tr>
<td align="center" style="padding:20px;Margin:0;font-size:0">
<table border="0" width="65%" height="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
<tr>
<td style="padding:0;Margin:0;border-bottom:1px solid #cccccc;background:unset;height:1px;width:100%;margin:0px"></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table>
</div>
</body>
</html>