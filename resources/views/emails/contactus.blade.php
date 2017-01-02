<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wefund 系統通知</title>
</head>
<body>

<div style="width:100%;" align="center">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" style="background-color:#53636e;" bgcolor="#53636e;">
    
    <br>
    <br>
    <table width="583" border="0" cellspacing="0" cellpadding="0">

      <tr>
        <td align="left" valign="top" bgcolor="#FFFFFF" style="background-color:#FFFFFF;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="35" align="left" valign="top">&nbsp;</td>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" valign="top">
                	<div style="color:#245da5; font-family:Times New Roman, Times, serif; font-size:40px;">Wefund 系統通知</div>
                  <div style="font-family: Verdana, Geneva, sans-serif; color:#898989; font-size:12px;">{{ $now }}</div></td>
              </tr>

              <tr>
                <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:22px; color:#525252;">
                
                
                <br>
                主題: {{ $title }} <br>

                內容: {!! nl2br(e($contents)) !!} <br>
                
                <div style="color:#3482ad; font-size:24px;">寄信者</div>
                姓名: {{ $name }}<br>
                Email: {{ $email }}


                <br>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">

</table></td>
              </tr>
              <tr>
                <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#525252;">&nbsp;</td>
              </tr>
            </table></td>
            <td width="35" align="left" valign="top">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top" bgcolor="#3d90bd" style="background-color:#3d90bd;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="35">&nbsp;</td>
            <td height="50" valign="middle" style="color:#FFFFFF; font-size:11px; font-family:Arial, Helvetica, sans-serif;"><b></b><br>
Copyright@WeFund</td>
            <td width="35">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
  </table>
    <br>
    <br></td>
  </tr>
</table>

</div>

</body>
</html>
