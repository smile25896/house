<!DOCTYPE html>
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    	<title></title>
    </head>
    <body>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td valign="top" style="font-size: 15px; line-height: 150%; padding: 30px 20px; text-align: center; color: rgb(66, 79, 89);">
                        <h1><?=web_config('site_name') ?> 重設密碼</h1>
                        親愛的 <?=$name ?>，請點擊以下連結。
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="<?=$url ?>" style="background-color: rgb(0, 149, 221); padding: 15px ! important; width: 250px; text-decoration: none; font-size: 20px; display: block; color: rgb(255, 255, 255); border-radius: 4px;" target="_blank">重設密碼</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>