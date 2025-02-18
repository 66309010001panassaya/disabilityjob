<html>
    <head>

    </head>
    <body>
        <form action="saveregister_c.php" method="post">
            <table border="1" width="40%" align="center">
                <tr>
                    <td colspan="2" align="center"><h3>ข้อมูลสมัครผู้บริษัท</h3></td>
                </tr>
                <tr>
                    <td>ชื่อตำแหน่งงาน</td>
                        <td><input type="text" name="name"></td>
                </tr>
                    <td>รายละเอียดงาน</td>
                        <td><input type="text" name="detail"></td>
                </tr>
                </tr>
                <tr>
                    <td>อีเมล</td>
                        <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>ชื่อผู้ใช้</td>
                        <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td>รหัสผ่าน</td>
                        <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="Submit" value="สมัคร"></td>
                    <td><input type="Reset" value="ลบข้อมูล"></td>
                </tr>
            </table>
        </form>
    </body>
</html>